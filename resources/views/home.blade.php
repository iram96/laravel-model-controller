<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-3">

            <a href="{{ route("movies.index") }}">vai</a>
        </div>
        <div class="col-5"></div>
    </div>
    
</body>
</html>