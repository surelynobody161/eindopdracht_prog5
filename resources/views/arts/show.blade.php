<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $art->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold">{{ $art->title }}</h1>
    <img src="{{ asset('storage/' . $art->art) }}" alt="{{ $art->title }}" class="mt-4 w-full">
    <p class="mt-4">{{ $art->description }}</p>
    <a href="{{ route('arts.index') }}" class="mt-4 text-blue-500">Back to Gallery</a>
</div>
</body>
</html>
