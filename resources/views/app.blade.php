<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <main class="bg-warning-subtle">
        <div class="container">
            <div class="row">
                <h1 class="p-2 text-center">MOVIES</h1>
                <div class=" d-flex gap-3 flex-wrap p-5 justify-content-center">
                    @foreach ($movies as $movie)
                        <div class="card col-3 bg-danger-subtle">
                            <div class="card-title p-2"><strong>TITOLO: </strong>{{$movie->title}}</div>
                            <div class="card-body">
                                <div><strong>TITOLO ORIGINALE: </strong>{{$movie->original_title}}</div>
                                <div><strong>NAZIONE: </strong>{{$movie->nationality}}</div>
                                <div><strong>DATA DI USCITA: </strong>{{$movie->date}}</div>
                                <div><strong>VOTO: </strong>{{$movie->vote}}</div>
                            </div>
                        </div>
                        

                    @endforeach
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>