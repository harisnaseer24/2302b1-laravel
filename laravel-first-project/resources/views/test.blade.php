@php
$name="haris naseer" ;
$age=23;
$person=[
   "haris"=> [
    "name"=>"Haris",
    "age"=>23,
    "occupation"=>"Teaching and Development"],

    "waleed"=>[
    "name"=>"Waleed waseem",
    "age"=>19,
    "occupation"=>"teaching"

    ]
]
@endphp
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

            <h1>{{ $name}} you are {{$age}} years old.</h1>

@if($age == 23)
<h2>You are {{ $age }} years old. Welcome to our elite commity.</h2>
@else 
<h2>You are Welcome to our leaders commity.</h2>
@endif

@foreach ($person as $key=> $value)
<h1>{{ ucwords($key) }}'s Data:</h1>
@foreach($value as $key2=>$value2)

<h1>{{$key2}} : {{$value2}}</h1>

@endforeach
<br>
@endforeach


        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
