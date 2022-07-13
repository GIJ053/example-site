<x-layout>
    <x-banner>
    </x-banner>

    <div id="article-container">
    @foreach ($posts as $post) 
        <article class="article-preview">
            <h1>
                <a href="/posts/{{ $post->id }}">
                    {!! $post->title !!}
                </a>
            </h1>

            <div>
                {{ $post->excerpt}}
            </div>
        </article>
    @endforeach
    </div>
</x-layout>