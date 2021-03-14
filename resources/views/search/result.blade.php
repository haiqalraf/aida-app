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
    @livewireStyles
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
                <!-- <a class="navbar-brand position-absolute w-100" href="#">Aida</a> -->
                <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto me-lg-0 ms-lg-auto mb-2 mb-lg-0">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('articles.index') }}">Article Editor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('admin.setting') }}">Setting</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main -->
    <main class="d-flex flex-column align-items-center py-5 container">
        <div class="mt-n4 w-100 d-flex flex-column flex-lg-row align-items-center gap-5">
            <div class="d-flex justify-content-end logo-inverse">
                <img class="img-fluid mx-auto d-block logo-mini" src="{{ asset('/images/logo.png') }}" alt="AIDA">
            </div>
            <div class="mt-1 mt-lg-0 bg-light rounded rounded-3 shadow-sm w-100 border border-1">
                <livewire:search-bar />
            </div>
        </div>
        @isset($search)
            <div class="card mt-4 w-100 rounded rounded-3 shadow-sm">
                <div class="card-body  overflow-hidden">
                    <h5 class="card-title">{{ $search->title }}</h5>
                    <p class="card-text">
                        {!! $search->body !!}
                    </p>
                </div>
                <div class="card-footer">
                    <p class="card-text text-muted">Updated at {{ $search->updated_at->diffForHumans() }}</p>
                </div>
                {{-- <div class="card-footer text-muted d-flex gap-3 justify-content-end">
                <div>
                    <i class="far fa-thumbs-up"></i>
                    <span class="mr-3">19</span>
                </div>
                <div>
                    <i class="far fa-thumbs-down"></i>
                    <span>19</span>
                </div>
            </div> --}}
            </div>
        @else
            @isset($articles)
                @forelse ($articles as $article)
                    <a href="{{ route('search.result.data', $article) }}" class="mt-4 w-100 rounded rounded-3 shadow-sm">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                            </div>
                            <div class="card-footer">
                                <p class="card-text text-muted">Updated at {{ $article->updated_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="card mt-4 w-100 rounded rounded-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Search Key: {{ $key }} Not Found</h5>
                        </div>
                    </div>
                @endforelse
            @else

            @endisset
        @endisset
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
    @livewireScripts
</body>

</html>
