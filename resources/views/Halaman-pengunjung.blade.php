<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="\css\bootstrap.min.css">
    @yield('css-pengunjung')
</head>
<body>
    <head>
        <nav class="navbar navbar-dark text-white text-bold" style="background-color: #93C6E7">
            <div class="container-fluid">
              <a class="navbar-brand fw-bold" href="#">
                <img src="public\image\streamline-emojis--open-book.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Perpustakaan
              </a>
            </div>
          </nav>
    </head>
    <div id="main" class="d-flex auto">
        <div id="sidebar">

            <div class="d-flex flex-column flex-shrink-0 p-3 bg-white text-dark" style="width: 280px;
          height:calc(100vh - 58px);" >
            <div id="dropdown" class="container  text-left">
                <span class="fs-3">Daftar Buku</span>
            </div>
            <ul class="nav nav-pills flex-column mb-auto text-white mt-2">
              <li class="dropdown-item-text mt-1">
                <a href="/fiksi" class="nav-link active text-dark" style="background-color:#D9D9D9" aria-current="page">
                  <svg class="bi me-4" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  Fiksi
                </a>
              </li>
              <li class="dropdown-item-text mt-2">
                <a href="/nonFiksi" class="nav-link active text-dark " style="background-color:#D9D9D9" aria-current="page">
                  <svg class="bi me-4" width="16" height="16"><use xlink:href="#table"/></svg>
                  NonFiksi
                </a>
              </li>
              <li class="dropdown-item-text mt-2">
                <a href="#" class="nav-link active text-dark" style="background-color:#D9D9D9" aria-current="page">
                  <svg class="bi me-4" width="16" height="16"><use xlink:href="#grid"/></svg>
                  Pendidikan
                </a>
              </li>
              <li class="dropdown-item-text mt-2">
                <a href="#" class="nav-link active text-dark" style="background-color:#D9D9D9" aria-current="page">
                  <svg class="bi me-4" width="16" height="16"><use xlink:href="#grid"/></svg>
                  Sejarah
                </a>
              </li>
              <li class="dropdown-item-text mt-2">
                <a href="#" class="nav-link active text-dark" style="background-color:#D9D9D9" aria-current="page">
                  <svg class="bi me-4" width="16" height="16"><use xlink:href="#grid"/></svg>
                  Biografi
                </a>
              </li>
            </ul>
            <hr>

          </div>
        </div>
        <div id="isi-konten" style="width:100%;max-width: calc(100% - 280px);" style="background-color: rgb(230, 230, 230);" class="container-fluid m-3">
            @yield('konten-pengunjung')
          </div>
    </div>
    <footer>

    </footer>

    <Script src="\js\bootstrap.bundle.min.js"></Script>
</body>
</html>
