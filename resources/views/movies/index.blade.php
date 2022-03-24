<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse ($movies as $movie)
        <div class="card">
            <h2>{{ $movie->title}}</h2>
            <p>{{ $movie['original_title']}}</p>
            <a href="{{ route("movies.show", ['id' => $movie['id']])}}">guarda qui</a>
        </div>
    @empty
        <h3>Non ci sono film!</h3>
    @endforelse

</body>
</html>