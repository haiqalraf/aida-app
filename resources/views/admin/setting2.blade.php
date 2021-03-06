<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5726365bf0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    <title>Aida Search</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('search.main') }}">
                <img class="d-inline-block align-top img-fluid bg-transparent" src="{{ asset('/images/logo.png') }}"
                    alt="AIDA" width="64">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articles.index') }}">Article Editor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('admin.setting') }}">Setting</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container p-4">
        <div class="text-center">
            <h2 style="padding: 20px 0px 0px 0px">Setting</h2>
            <div class="btn-group btn-secondary" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <a href="{{ route('admin.setting') }}" class="btn btn-outline-danger" for="btnradio1">Profil</a>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <a href="{{ route('admin.help') }}" class="btn btn-outline-danger" for="btnradio1">Help</a>
            </div>
            <hr style="border-top: 0.5px solid #140202;">
            <th rowspan="3"><img src="{{ auth()->user()->getGambar() }}" class="circle-img rounded-circle" width="130"
                    height="130" alt="Gambar"></th>
            <br>
            <!-- <button type="button" class="btn btn-outline-secondary">Middle</button> -->
            <form action="{{ route('admin.avatar.delete') }}" method="POST">
                {{ csrf_field() }}
                @method('put')
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
                    <a href="{{ route('admin.avatar') }}" class="btn btn-outline-secondary">Change</a>
                    <button type="submit" class="btn btn-outline-secondary">Delete</button>
                </div>
            </form>
        </div>
        <br>
        <div class="d-flex align-items-center justify-content-center">
            <form action="{{ route('admin.update') }}" method="POST" class="row">
                {{ csrf_field() }}
                <div class="form-floating mb-3">
                    <input name="username" type="text" class="form-control id" id="floatingInput" placeholder="Username"
                        value="{{ auth()->user()->username }}">
                    <label class="ms-3" for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="full_name" type="text" class="form-control" id="floatingInput" placeholder="Full Name"
                        value="{{ auth()->user()->full_name }}">
                    <label class="ms-3" for="floatingInput">Full Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Email"
                        value="{{ auth()->user()->email }}">
                    <label class="ms-3" for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" id="floatingPassword"
                        placeholder="Password" value="{{ auth()->user()->password }}">
                    <label class="ms-3" for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="phone_number" type="text" class="form-control" id="floatingInput"
                        placeholder="Phone Number" value="{{ auth()->user()->phone_number }}">
                    <label class="ms-3" for="floatingInput">Phone Number</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="birth_date" type="date" class="form-control" id="floatingInput"
                        placeholder="Birth Date" value="{{ auth()->user()->birth_date->format('Y-m-d') }}">
                    <label class="ms-3" for="floatingInput">Birth Date</label>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-danger">Change Profile</button>
            </form>
            <form action="{{ route('logout') }}" method="post" class="w-100">
                @csrf
                @method("post")
                <button type="submit" class="btn btn-danger w-100">Log Out</button>
            </form>
        </div>
    </div>
    <!-- </div> -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>

</html>
