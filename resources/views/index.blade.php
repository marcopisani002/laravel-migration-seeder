<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>FILM</title>

    {{-- Viene caricato il JS ed anche il file app.scss --}}
    @vite('resources/js/app.js')
</head>

<body class="bg-dark ">
    <div class="container mt-5 ms-5 ">

        <h5 class="text-white text-center">Clicca per vedere i treni che partono oggi <br>
        (24-01-2023)</h5>

        <div class="text-center mt-3">
            <a href="/home">VAI AI TRENI</a>
        </div>

        @yield('content')

    </div>
</body>

</html>
