<x-layout :title="$pageTitle">
    
<h2>{{ $comment->author  }}</h2>
<p>{{ $comment->content  }}</p>

@if ($comment->post)
<h3>Related post</h3>
<ul>
    <li>

    <strong>{{ $comment -> post ->title }}</strong>
    <p>{{ $comment->post->body }}</p>
    <p>Author: {{ $comment->post->body }}</p>
    <a href="{{  route('blog.show', $comment->post->id) }}">View full Post</a>


</li>
</ul>

@else

<p>No Related post found for this comment.</p>

@endif

</x-layout>