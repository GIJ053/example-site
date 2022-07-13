<x-layout>
    <x-banner>
    </x-banner>

    <div id="article-container">
    @foreach ($posts as $post) 
        <article class="article-preview">
            <h1>
                <a id="article-link" href="/posts/{{ $post->slug }}">
                    {!! $post->title !!}
                </a> - 
                <a id="category-link" href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
            </h1>

            <h3>
                Written by {{ $post->user->name }}
            </h3>

            <div>
                {{ $post->excerpt}}
            </div>
        </article>
    @endforeach
    </div>
</x-layout>