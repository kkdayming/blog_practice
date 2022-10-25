<x-layout>
    <div>
        <h3>Newest Blog Articles</h3>
        @unless(count($articles) === 0)
            @foreach ($articles as $article)
                <hr />
                <h3>{{ $article->title }}</h3>
                <img style="width:100px" src="{{ $article->photo ? asset('storage/' . $article->photo) : '' }}" alt="">
                <ul>
                    <li>{{ $article->tags }}</li>
                    <li>{{ $article->description }}</li>
                </ul>
            @endforeach
        @else
            <p>No Article Found</p>
        @endunless
    </div>
</x-layout>
