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
    <div class="background">
        <div class="ellipse">
            <svg class="background--ellipse-1" width="543" height="482" viewBox="0 0 543 482" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="271.036" cy="240.521" rx="225.088" ry="174.032" transform="rotate(-20 271.036 240.521)"
                    fill="#DC143C" />
            </svg>
            <svg class="background--ellipse-2" width="535" height="477" viewBox="0 0 535 477" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="267.81" cy="238.349" rx="221.421" ry="172.501" transform="rotate(-20 267.81 238.349)"
                    fill="#E5E5E5" />
            </svg>
        </div>
    </div>
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
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main -->
    <main class="d-flex flex-column align-items-center py-5 container">

        <div class="mt-n4 w-100 d-flex flex-column flex-lg-row align-items-center gap-5">
            <div class="d-flex justify-content-end logo">
                <img class="img-fluid mx-auto d-block logo-mini" src="{{ asset('/images/logo-negative.png') }}"
                    alt="AIDA">
            </div>
            <div class="d-flex justify-content-end logo-inverse">
                <img class="img-fluid mx-auto d-block logo-mini" src="{{ asset('/images/logo.png') }}" alt="AIDA">
            </div>
            <div class="mt-1 mt-lg-0 bg-light rounded rounded-3 shadow-sm w-100 border border-1">
                <form>
                    <div class="input-group">
                        <input type="search" name="search" placeholder="Search" aria-describedby="button-addon1"
                            class="form-control border-0 rounded-3 bg-transparent">
                        <div class="input-group-append">
                            <button id="button-addon1" type="submit" class="btn btn-link text-primary rounded-3"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mt-4 w-100 rounded rounded-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle">Card subtitle</h6>
                <img src="{{ asset('/images/img.png') }}" class="card-img" alt="...">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum commodi quia amet quo. Mollitia
                    aliquid aliquam debitis animi atque dolorem enim sit blanditiis, unde architecto, saepe quam tempora
                    illo dolor!</p>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and hiding
                                via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
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
</body>

</html>
