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
    <div class="b-example-divider b-example-vr"></div>
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
            <ul class="list-unstyled ps-0">
              <li class="nav-item">
                <a href="/dashboard" class="nav-link active text-dark" aria-current="page">
                    Dashboard
                </a>
            </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                  Master Data
                </button>
                <div class="collapse show" id="home-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="/master-data" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-dark">Data Buku</a></li>
                    <li><a href="/data-siswa" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-dark">Data Siswa</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                  Dashboard
                </button>
                <div class="collapse" id="dashboard-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-dark">Overview</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-dark">Weekly</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                  Orders
                </button>
                <div class="collapse" id="orders-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-dark">New</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-dark">Processed</a></li>
                  </ul>
                </div>
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
