<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Perpustakaan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/image/pengadaan-buku-perpustakaan.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 300px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark text-white" style="background-color: #93C6E7">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">
                <img src="/image/icons8-book-64.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Perpustakaan
            </a>
        </div>
    </nav>
    <div class="login-box">
        <h2 class="text-center">Login</h2>
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                    <input type="text" class="form-control" id="username" placeholder="Masukkan Username">
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                </div>
            </div>
            <a href="{{ route("Halaman.ashboard") }}"><button type="submit" class="btn btn-primary w-100">Masuk</button></a>
        </form>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
  