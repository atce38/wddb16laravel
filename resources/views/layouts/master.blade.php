<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larvel Welcome Page</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
    <nav class="navbar bg-light navbar-light navbar-expand-md">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img width="200" src="https://edu.abidingtech.com/assets/img/atcelogo.png" alt="">
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nvam">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="nvam" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="">Courses</a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="{{ route('public.courses') }}">Android</a></li>
                            <li><a class="dropdown-item" href="">Web</a></li>
                            <li><a class="dropdown-item" href="">Desktop</a></li>
                            <li><a class="dropdown-item" href="">Ardiuno</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">Acout US</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Contact US</a></li>
                </ul>
                <form class="d-flex">
                    <input type="text" class="form-control form-control-sm  me-2">
                    <input class="btn btn-outline-success btn-sm" type="button" value="Search">
                </form>
            </div>
        </div>
    </nav>

    @yield('kuchb')

    <h1>Hello I m Footer</h1>
</body>
</html>
