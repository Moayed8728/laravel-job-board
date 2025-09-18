<x-layout :title="$pageTitle">

<h2>{{ $post->title }}</h2>
<p class="mb-2">{{ $post->body }}</p>
<p class="text-gray-500 mb-6">{{ $post->author }}</p>


<ul class="mt-6 list-disc pl-5 space-y-3">
  @foreach ($post->comments as $comment)
        <li>{{ $comment->content }}, {{ $comment->author }}</li>
  @endforeach
</ul>

<div class="mt-10 border-t border-gray-200 pt-6">
    <form action="/comments" method="POST" class="mt-6 space-y-8">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}" />

        <div class="space-y-6">
            <div>
                <label for="author" class="block text-sm font-medium text-gray-900">Your Name</label>
                <div class="mt-2">
                    <input type="text" name="author" id="author" value="{{ old('author') }}"
                        class="block w-full rounded-md bg-white border {{ $errors->has('author') ? 'border-red-500' : 'border-gray-300' }} px-3 py-2" />
                </div>
                @error('author')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-gray-900">Your Comment</label>
                <div class="mt-2">
                    <textarea name="content" id="content" rows="4"
                        class="block w-full rounded-md bg-white border {{ $errors->has('content') ? 'border-red-500' : 'border-gray-300' }} px-3 py-2"></textarea>
                </div>
                @error('content')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-4">
            <button type="submit"
                class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                Add Comment
            </button>
        </div>
    </form>
</div>

</x-layout>
