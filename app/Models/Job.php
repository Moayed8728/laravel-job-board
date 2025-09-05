<?php

namespace App\Models;



class Job 
{
    public static function all() {
        return[
            ['title' => 'SOFTWARE ENGINEER', 'salary' => '$10000'],
            
             ['title' => 'GRAPHICS DESIGNER', 'salary' => '$8043']
        
        ];
    }
}
