<!doctype html>
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
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light position-absolute w-100">
            <div class="container-fluid">
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto me-lg-0 ms-lg-auto mb-2 mb-lg-0">
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
    </header>

    <!-- Main -->
    <main class="h-100 pt-5 container">
        <div class="row g-4">
            @forelse ($articles as $article)
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <a href="{{ route('articles.edit', [$article]) }}" class="card-link">Edit</a>
                            <form class="d-inline-block ms-3" action="{{ route('articles.destroy', [$article]) }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="card-link p-0 text-danger bg-transparent border-0">Delete</button>
                            </form>
                        </div>
                        <div class="card-footer">
                            <p class="card-text text-muted">{{ $article->updated_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <h4>Create your first Article</h4>
            @endforelse
        </div>
        <div class="mt-3 w-100">
            <a href="{{ route('articles.create') }}" class="btn btn-primary w-100">Create New Article</a>
        </div>
    </main>


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

    <script src="https://cdn.tiny.cloud/1/juquc6k10cad63k4auyrcu896on35y74b6uv19gzkfvb3vh6/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
</body>

</html>
