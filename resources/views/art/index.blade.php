<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<nav>
    <ul>

        @if (auth()->check())
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @else
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @endif
    </ul>
</nav>

<ul>
    @foreach($arts as $art)
        <div>
            <h2>{{ $art->title }}</h2>
            <p>{{ $art->description }}</p>
            <img src="{{ asset('storage/' . $art->art) }}" alt="{{ $art->title }}" style="max-width: 200px; height: auto;">
        </div>
    @endforeach
</ul>

</body>
</html>
