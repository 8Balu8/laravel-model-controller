<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Film</h1>

        <div class="row_card">
            @foreach ($movies as $movie )
                <div class="card">
                    <div class="title">
                        <h2>Titolo: {{$movie->title}}</h2>
                        <h3>Nazionalità: {{$movie->nationality}}</h3>
                        <h4>Data: {{$movie->date}}</h4>
                        <h4>Vote: {{$movie->vote}}</h4>
                    </div>
                </div>
            @endforeach
        </div>  
    
</body>
</html>