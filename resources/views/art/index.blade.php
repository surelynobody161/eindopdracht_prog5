<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

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
