<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <!-- link css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- link bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link css -->    
    <link rel="stylesheet" href="./css/style_register.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fs-3" href="#"> <span class="senja-txt">.</span>Café <span class="senja-txt">Senja</span></a>
        </div>
    </nav>

    <!-- form register -->
    <section class="form-register">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="card p-5 shadow">
                <h3 class="text-center mb-4">Daftar Dulu Ya.. <i class="bi bi-emoji-smile-fill"></i></h3>
                <form action="../backend/auth.php" method="POST">
                    <div class="mb-3">
                        <label for="id_admin" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id_admin" name="id_admin">
                    </div>
                    <div class="mb-3">
                        <label for="nama_admin" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_admin" name="nama_admin">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_pasword" class="form-label">confirm password</label>
                        <input type="password" class="form-control" id="confirm_pasword" name="confirm_password">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" name="register" class="btn btn-dark">SUBMIT</button>
                    </div>
                    <p class="text-center mt-3">Already have Account ? <a href="login.php" class="link-login custom-link">Login</a></p>
                </form>
            </div>
        </div>
    </section>
    
    
    <!--link js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>