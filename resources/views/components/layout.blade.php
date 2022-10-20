<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
</head>

<body>
    <nav>
        <a href="/">home</a>
        @auth
            <a href="/articles/create">write new article</a>
            <a href="/articles/manage">manage article</a>
            <form method="POST" action="/users/logout">
                @csrf
                <button>loggout</button>
            </form>
        @else
            <a href="/users/register">register</a>
            <a href="/users/login">signin</a>
        @endauth
    </nav>
    <main>{{ $slot }}</main>
    <x-flash-message />
</body>

</html>
