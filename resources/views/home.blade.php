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
        <div class="title">
           <h1 class="title">{{env('APP_NAME')}} List</h1> 
        </div>
        <div class="row">
            @forelse ($movies as $movie )
            <div class="col">
                <div class="card">
                   <h2 class="movie-title">{{$movie->title}}</h2>
                   <p><i><strong>Original title: </strong>{{$movie->original_title}}</i></p>
                   <p><strong>Production: </strong>{{$movie->nationality}}</p>          
                   <p><i><strong>Release date: </strong>{{$movie->date}}</i></p>          
                   <p><strong>Vote: </strong>{{$movie->vote}}</p>          
                </div>
            </div>
            @empty
                <h2 class="no-data">Nessun elemento da visualizzare</h2>
            @endforelse
        </div>
         
    </div>
    
</body>
</html>