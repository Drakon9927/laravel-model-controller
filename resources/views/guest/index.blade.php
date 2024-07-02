<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
</head>
<body>
    <h1>Movies List</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie->title }} ({{ $movie->original_title }}) - {{ $movie->nationality }} - {{ $movie->date }} - {{ $movie->vote }}</li>
        @endforeach
    </ul>
</body>
</html>