<x-layout>
    <h3>Edit Article</h3>
    @unless(count($articles) === 0)
        @foreach ($articles as $article)
            <hr />
            <h3>{{ $article->title }}</h3>
            <img style="width:100px" src="{{ $article->photo ? asset('storage/' . $article->photo) : '' }}" alt="">
            <p>Tags: {{ $article->tags }}</p>
            <p>Desc: {{ $article->description }}</p>
            <a href="/articles/{{ $article->id }}/edit"><button>edit</button></a>
            <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('delete')
                <button>delete</button>
            </form>
        @endforeach
    @else
        <p>No Article Found.</p>
    @endunless
    <x-flash-message />
</x-layout>
