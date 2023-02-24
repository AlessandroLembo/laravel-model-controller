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
    <div class="comtainer">
        <h1>Home</h1>
          @foreach ($movies as $movie )
            <h1>{{$movie->title}}</h1>         
          @endforeach
    </div>
    
</body>
</html>