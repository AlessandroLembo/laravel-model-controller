<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>

    {{-- Import from app.js --}}
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <h1 class="title">{{env('APP_NAME')}} List</h1>
        <div class="row">
            @foreach ($movies as $movie )
            <div class="col">
                <div class="card">
                   <h2 class="movie-title">{{$movie->title}}</h2>
                   <p>{{$movie->original_title}}</p>
                   <p><strong>Production: </strong>{{$movie->nationality}}</p>          
                   <p><i><strong>Release date: </strong>{{$movie->date}}</i></p>          
                   <p><strong>Vote: </strong>{{$movie->vote}}</p>          
                </div>
            </div>
            @endforeach
        </div>
         
    </div>
    
</body>
</html>