<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="\css\bootstrap.min.css">
    @yield('css')
</head>
<body>
    <head>
        <nav class="navbar navbar-dark text-white text-bold" style="background-color: #93C6E7">
            <div class="container-fluid">
              <a class="navbar-brand fw-bold" href="#">
                <img src="/image/icons8-book-64.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Perpustakaan
              </a>
            </div>
          </nav>
    </head>
    <div id="main" class="d-flex flex">
        <div id="sidebar">

            <div class="d-flex flex-column flex-shrink-0 p-3 bg-white text-dark" style="width: 280px;
          height:calc(100vh - 58px);" >
          <div class="container text-align-center text-center">
            <a href="#" >
              <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle ms-2">
            </a>
          </div>
            <div class="dropdown container text-center ">
              <span class="fs-4">Admin</span>
            </div>
            <div id="dropdown" class=" container text-center ">
                <span class="fs-3">Dwi Apriyani</span>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto text-white">
              <li class="dropdown-item-text">
                <a href="/master-data" class="nav-link active text-dark" style="background-color:#D9D9D9" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  Master Data
                </a>
              </li>
              <li class="dropdown-item-text">
                <a href="#" class="nav-link active text-dark" style="background-color:#D9D9D9" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                  Transaksi
                </a>
              </li>
              <li class="dropdown-item-text">
                <a href="#" class="nav-link active text-dark" style="background-color:#D9D9D9" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                  Laporan
                </a>
              </li>
            </ul>
            <hr>

          </div>
        </div>
        <div id="isi-konten" style="width:100%;max-width: calc(100% - 280px);" style="background-color: rgb(230, 230, 230);" class="container-fluid m-3">
            @yield('konten-utama')
          </div>
    </div>
    <footer>

    </footer>

    <Script src="\js\bootstrap.bundle.min.js"></Script>
</body>
</html>
