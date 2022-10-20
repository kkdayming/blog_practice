<x-layout>
    <h3>Create New Article</h3>
    <form method="POST" action="/articles/store" enctype="multipart/form-data">
        @csrf
        <label for="title">title</label>
        <br />
        <input type="text" name="title" value="{{ old('title') }}" />
        <br />
        <label for="tags">tags</label>
        <br />
        <input type="text" name="tags" value="{{ old('tags') }}" />
        <br />
        <label for="photo">photo</label>
        <br />
        <input type="file" name="photo" value="{{ old('photo') }}" />
        <br />
        <label for="description">description</label>
        <br />
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10">{{ old('description') }}</textarea>
        <br />
        <button>Create</button>
    </form>
</x-layout>
