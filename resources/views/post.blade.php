<x-layout>
    <article id="main-article-container">
        <h1>{!! $post->title !!}</h1>

        <div>
            {!! $post->body !!}
        </div>

        By <a href="#">{{ $post->user->name }}</a> in <a id="category-link" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </article>

    <a href="/">Go back</a>
</x-layout>