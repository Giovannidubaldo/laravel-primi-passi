<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Laravel primi passi</title>
</head>

<body>
    {{-- header --}}
    <header class="p-3 bg-success text-white">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>{{ $title }}</h1>
                    <ul class="list-unstyled d-flex">
                        <li><a href="{{ route('homepage') }}" class="text-white">Torna all'Homepage</a></li>
                        <li><a href="{{ route('contatti') }}" class="text-white ms-2">Contatti</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    {{-- main --}}
    <main class="my-5">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </main>
</body>

</html>
