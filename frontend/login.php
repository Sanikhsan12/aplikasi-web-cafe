<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- link css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- link bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="./css/style_login.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fs-3" href="index.php"> <span class="senja-txt">.</span>Café <span class="senja-txt">Senja</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-end">
                    <li class="nav-items">
                        <a href="#" class="link-instagram custom-link"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li class="nav-items">
                        <a href="#" class="link-tiktok custom-link"><i class="bi bi-tiktok"></i></a>
                    </li>
                    <li class="nav-items">
                        <a href="#" class="link-tiktok custom-link"><i class="bi bi-twitter-x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- form Login -->
    <section class="form-login">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="card p-5 shadow">
                <h3 class="text-center mb-4">Login Dulu Cuy !</h3>
                <form action="../backend/auth.php" method="POST">
                    <div class="mb-3">
                        <label for="id_admin" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id_admin" name="id_admin">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" name="login" class="btn btn-dark">LOGIN</button>
                    </div>
                    <p class="text-center mt-3">Dont Have Account ? <a href="register.php" class="link-register custom-link">Create One </a></p>
                </form>
            </div>
        </div>
    </section>

    <!--link js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>