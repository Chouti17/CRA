<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRA & Fils @yield('page_titre')</title>

    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/dashbord.js"></script>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="app">
        <div class="layout">


            @include('PageStatic.header')



        </div>
    </div>


</body>
</html>
