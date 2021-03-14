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
    <div class="text-center container p-4">
        <h2 style="padding: 20px 0px 0px 0px">Setting</h2>
        <div class="btn-group btn-secondary" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
            <a href="{{ route('admin.setting') }}" class="btn btn-outline-danger" for="btnradio1">Profil</a>
            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" checked>
            <a href="{{ route('admin.help') }}" class="btn btn-outline-danger" for="btnradio1">Help</a>
        </div>
        <hr style="border-top: 0.5px solid #140202;">
        <div class="accordion text-start" id="accordionHelp">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        1.Bagaimana cara membuat akun baru?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionHelp">
                    <div class="accordion-body">
                        <p>
                            Akses menu SETTING, pilih menu POFIL. Klik tombol LOG OUT untuk keluar dari akun
                            anda. Anda akan diarahkan ke halaman utama. Klik menu Login yang terdapat di
                            navbar. Ketika form Login telah ditampilkan. Klik menu SIGN UP. Setelah muncul
                            form untuk mendaftar ,isikan data baru untuk membuat akun. Setelah selesai
                            mengisi data klik tombol SIGN UP dan anda akan diarahakan ke halaman LOGIN.
                            Silakan login dengan data yang telah anda daftarkan tadi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        2.Bagaimana mencari pertolongan pertama?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionHelp">
                    <div class="accordion-body">
                        <p>Akses menu Halaman Utama, lalu ketikan kata kunci pertolongan pertama yang ingin
                            dicari di kolom searchng. Klik ENTER atau tekan tombol SEARCH. Anda akan
                            diarahkan ke halaman hasil pencarian</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        3. Bagaimana cara menambahkan atau mengubah foto profil
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionHelp">
                    <div class="accordion-body">
                        <p>Akses menu SETTING yang terdapat di navbar. Setelah halaman SETTING muncul. Klik
                            pada menu PROFIL. Lalu klik menu CHANGE yang terletak di bawah foto profil.
                            Pilih foto pengganti. Klik SAVE , maka foto profil anda telah diperbarui.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        4. Bagaimana cara mengubah biodata?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionHelp">
                    <div class="accordion-body">
                        <p>Akses menu SETTING yang terdapat di navbar. Setelah halaman SETTING muncul. Klik
                            pada menu PROFIL.Lalu akan muncul form yang berisi biodata yang telah anda isi
                            pada saat Sign Up. Isikan data yang ingin diubah pada kolom di form. Setelah
                            selesai klik tombol SIMPAN maka data anda akan diperbarui.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        5. Bagaimana cara mengubah tema warna aplikasi?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionHelp">
                    <div class="accordion-body">
                        <p>Akses menu SETTING yang terdapat di navbar. Setelah halaman SETTING muncul. Klik
                            pada menu APPREANCE.Checklist pada pilihan tema warna yang dinginkan. terdapat
                            warna WHITE untuk tema terang dan warna GREY untuk tema gelap.</p>
                    </div>
                </div>
            </div>
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
