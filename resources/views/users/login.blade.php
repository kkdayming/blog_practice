<x-layout>
    <form method="POST" action="/users/authenticate">
        @csrf
        <div>
            <label for="email">email</label>
            <input type="text" name="email" value="{{ old('email') }}" />
            @error('email')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password">password</label>
            <input type="text" name="password" value="{{ old('password') }}" />
            @error('password')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <button>
            login
        </button>
    </form>
</x-layout>
