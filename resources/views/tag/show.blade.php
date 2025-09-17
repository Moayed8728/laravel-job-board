<x-layout :title="$pageTitle">
    
<h2>{{ $tag->title  }}</h2>

<h3>Related post</h3>
<ul>
    @forelse ($tag->posts as $post)
    <li>

    <strong>{{ $post ->title }}</strong>
    <p>Author: {{ $post->author }}</p>
    <a href="{{  route('blog.show', $post->id) }}">View full Post</a>

</li>
@empty
<p>No posts are associated with this tag</p>
@endforelse

</ul>
</x-layout>