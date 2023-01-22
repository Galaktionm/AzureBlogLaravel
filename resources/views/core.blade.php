<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Backend Blog')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @section('style') @show
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark py-4" style="background-color: rgb(98, 0, 255)">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold border border-3 border-white p-2">Backend Blog</a>
        <ul class="navbar-nav me-auto">
        <li class="nav-item"> <a class="nav-link active fw-bold">Articles</a> </li>
        <li class="nav-item"> <a class="nav-link active fw-bold">Contact</a> </li>
        </ul>
    </div>
    </nav>

    <h3>@yield('post-title')</h3>

    <div>
        @yield('content')
    </div> 

    <nav class="navbar fixed-bottom navbar-dark" style="background-color:rgb(98, 0, 255)">
        <div class="container-fluid text-center">
        <a class=" nav-link fw-semibold text-light">The blog is read-only. Thanks for visiting!</a>
        </div>
    </nav>
</body>
</html>