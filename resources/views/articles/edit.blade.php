<x-layout>
    <h3>Edit Article</h3>
    <form method="POST" action="/articles/{{ $article->id }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="title">title</label>
        <br />
        <input type="text" name="title" value="{{ $article->title }}" />
        <br />
        <label for="tags">tags</label>
        <br />
        <input type="text" name="tags" value="{{ $article->tags }}" />
        <br />
        <label for="photo">photo</label>
        <br />
        <input type="file" name="photo" />
        <img href="{{ $article->photo ? '/storage/' . $article->photo : '' }}" />
        <br />
        <label for="description">description</label>
        <br />
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10">{{ $article->description }}</textarea>
        <br />
        <button>Edit</button>
    </form>
</x-layout>
