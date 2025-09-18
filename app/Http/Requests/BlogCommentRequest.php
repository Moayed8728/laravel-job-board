<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
            'author' => 'required|max:255',
            'content' => 'required|max:1000',
            'post_id'=> "required|unique:comment,title,{$this->input('id')}",
        
        ];
    }

    public function messages(){
        return [
            'author.required'=> 'mandatory field',
            'content.required'=> 'mandatory field',
            'post_id.required'=> 'mandatory field'
          ];
    }   

}
