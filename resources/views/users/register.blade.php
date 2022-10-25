<x-layout>
    <form method="POST" action="/users">
        @csrf
        <div>
            <label for="name">name</label>
            <input type="text" name="name" value="{{ old('name') }}" />
            @error('name')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
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
        <div>
            <label for="password_confirmation">password_confirmation</label>
            <input type="text" name="password_confirmation" value="{{ old('password_confirmation') }}" />
            @error('password_confirmation')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <button>
            submit
        </button>
    </form>
</x-layout>
