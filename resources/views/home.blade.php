<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cinema's</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>

    <h1 class="title">Welcome to Cinema's</h1>

    <main class="main_page">
        <div class="container">
            @foreach ($movies as $movie)
                <div class="card">
                    <h2>{{ $movie['title'] }}</h2>
                    <h3>{{ $movie['original_title'] }}</h3>
                    <h4>{{ $movie['nationality'] }}</h4>
                    <h5>{{ $movie['vote'] }}</h5>
                </div>
            @endforeach
        </div>
    </main>

</body>

</html>
