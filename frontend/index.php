<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.Café-Senja</title>
    <!-- link cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- link bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="./css/style_index.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand fs-3 custom-link"><span class="kafe-txt">.Café</span> Senja</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-end">
                <li class="nav-items">
                    <a href="#home" class="custom-link">Home</a>
                </li>
                <li class="nav-items">
                    <a href="#about" class="custom-link">About</a>
                </li>
                <li class="nav-items">
                    <a href="#product" class="custom-link">Product</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- hero section -->
    <section class="hero" id="home">
        <main class="hero-content">
            <h1>Bingung Cari Tempat <span class="ngopi-txt">Ngopi</span> ?</h1>
            <p><span class="p-txt">Di Cafe senja aja !!</span> tempatnya nyaman , menunya enak, dan pastinya terjangkau</p>
            <a href="#product" class="cta">Beli Sekarang</a>
        </main>
    </section>

    <!-- about section -->
    <section class="about" id="about">
        <h2>Tentang Kami</h2>
        <div class="row">
            <div class="about-img">
                <img src="./src/about_img.jpg" alt="tetang-kami">
            </div>
            <p class="about-text">Selamat datang di Café Senja, tempat di mana momen berharga Anda menjadi lebih istimewa. Di Café Senja, 
            kami berkomitmen untuk menyediakan berbagai menu lezat dan terjangkau, yang diracik dari bahan-bahan berkualitas tinggi. 
            Kami percaya bahwa setiap hidangan yang kami sajikan harus menggugah selera dan menenangkan hati, 
            itulah mengapa kami selalu memastikan bahwa setiap cangkir kopi dan setiap gigitan makanan dibuat dengan penuh perhatian. 
            Nikmati suasana hangat dan ramah di Café Senja, tempat di mana Anda dapat bersantai dan menikmati waktu bersama teman atau keluarga. 
            Mari ciptakan kenangan indah di Café Senja.</p>
        </div>
    </section>

    <!-- product section -->
    <section class="product" id="product">
        <h3>Product Kami</h3>
        <form action="../backend/crud.php" method="POST">
            <div class="card-container d-flex flex-wrap justify-content-center">
                <div class="card-item m-3 p-3 text-center">
                    <img src="./src/produk/matcha.jpg" alt="matcha" class="img-fluid mb-3 rounded-circle">
                    <h4 class="mb-2">Matcha</h4>
                    <p class="mb-2">Rp. 35.000</p>
                    <input type="text" id="no_meja_matcha" name="no_meja_matcha" placeholder="Nomor Meja" class="mb-2 form-control">
                    <button type="submit" id="post_matcha" name="post_matcha" class="btn btn-dark">Add to Cart</button>
                </div>
                <div class="card-item m-3 p-3 text-center">
                    <img src="./src/produk/cappuccino.jpg" alt="cappuccino" class="img-fluid mb-3 rounded-circle">
                    <h4 class="mb-2">Cappuccino</h4>
                    <p class="mb-2">Rp. 35.000</p>
                    <input type="text" id="no_meja_cappuccino" name="no_meja_cappuccino" placeholder="Nomor Meja" class="mb-2 form-control">
                    <button type="submit" id="post_cappuccino" name="post_cappuccino" class="btn btn-dark">Add to Cart</button>
                </div>
                <div class="card-item m-3 p-3 text-center">
                    <img src="./src/produk/espresso.jpg" alt="espresso" class="img-fluid mb-3 rounded-circle">
                    <h4 class="mb-2">Espresso</h4>
                    <p class="mb-2">Rp. 45.000</p>
                    <input type="text" id="no_meja_espresso" name="no_meja_espresso" placeholder="Nomor Meja" class="mb-2 form-control">
                    <button type="submit" id="post_espresso" name="post_espresso" class="btn btn-dark">Add to Cart</button>
                </div>
                <div class="card-item m-3 p-3 text-center">
                    <img src="./src/produk/mocha.jpg" alt="mocha" class="img-fluid mb-3 rounded-circle">
                    <h4 class="mb-2">Mocha</h4>
                    <p class="mb-2">Rp. 25.000</p>
                    <input type="text" id="no_meja_mocha" name="no_meja_mocha" placeholder="Nomor Meja" class="mb-2 form-control">
                    <button type="submit" id="post_mocha" name="post_mocha" class="btn btn-dark">Add to Cart</button>
                </div>
                <div class="card-item m-3 p-3 text-center">
                    <img src="./src/produk/thai_tea.jpg" alt="thai tea" class="img-fluid mb-3 rounded-circle">
                    <h4 class="mb-2">Thai Tea</h4>
                    <p class="mb-2">Rp. 20.000</p>
                    <input type="text" id="no_meja_thai" name="no_meja_thai" placeholder="Nomor Meja" class="mb-2 form-control">
                    <button type="submit" id="post_thai" name="post_thai" class="btn btn-dark">Add to Cart</button>
                </div>
            </div>
        </form>
    </section>

    <!-- footer -->
    <footer>
        <div class="social">
            <a href="#" class="link-instagram custom-link"><i class="bi bi-instagram"></i></a>
            <a href="#" class="link-tiktok custom-link"><i class="bi bi-tiktok"></i></a>
            <a href="#" class="link-twitter custom-link"><i class="bi bi-twitter-x"></i></a>
        </div>
        <div class="shortcut">
            <a href="#home" class="custom-link">Home</a>
            <a href="#about" class="custom-link">About</a>
            <a href="#product" class="custom-link">Product</a>
        </div>
        <div class="cerdit">
            <p>Created by <a href="https://www.instagram.com/mikhsn._/" class="nama-txt custom-link">Muhammad Ikhsan.</a> | Cafe Senja &copy; 2024</p>
        </div>
    </footer>

    
    <!-- script cdn bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>