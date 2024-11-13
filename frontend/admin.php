<?php
include '../backend/crud.php';
$database = new Database();
$db = $database->getConnection();
$crud = new Crud($db);
$transaction = $crud->readTransaksi();
$admin = $crud->readAdmin();

$status = isset($_POST['status']) ? $_POST['status'] :'';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Admin</title>

    <!-- link cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- lick css -->
    <link rel="stylesheet" href="./css/style_admin.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fs-3" href="index.php"><span class="dot">.</span>Café Senja</a>
        </div>
        <div class="pengguna">
            <a class="nama-pengguna custom-link">Halo, <?php echo $_SESSION['nama_admin']?></a>
        </div>
        <form action="../backend/crud.php" class="d-flex" method="POST">
            <button class="btn" name="refresh" type="submit" id="btn-refresh">Refresh</button>
        </form>
        <form action="../backend/auth.php" class="d-flex" method="POST">
            <button class="btn" name="logout" type="submit" id="btn-logout">logout</button>
        </form>
    </nav>

    <!-- tabel transaksi -->
    <section class="tabel-transaksi">
        <div class="container mt-5">
            <h2>Tabel transaksi</h2>
            <?php if($status){ ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $status; ?>
                </div>
            <?php } ?>

            <!-- tabel -->
            <table class="tbl-transaksi">
                <thead>
                    <tr>
                        <th class="tbl-item">NO</th>
                        <th class="tbl-item">Transaction Date</th>
                        <th class="tbl-item">No Meja</th>
                        <th class="tbl-item">Nama Product</th>
                        <th class="tbl-item">Harga</th>
                        <th class="tbl-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    while($row = $transaction->fetch_assoc()){ ?>
                        <tr>
                            <td class="tbl-item"><?php echo $no++; ?></td>
                            <td class="tbl-item"><?php echo $row['date_transaksi']; ?></td>
                            <td class="tbl-item"><?php echo $row['no_meja']; ?></td>
                            <td class="tbl-item"><?php echo $row['nama_product']; ?></td>
                            <td class="tbl-item"><?php echo $row['harga_product']; ?></td>
                            <td class="tbl-item">
                                <form action="../backend/crud.php" method="POST">
                                    <input type="hidden" name="no_meja" value="<?php echo $row['no_meja']; ?>">
                                    <button class="btn btn-danger" name="delete_transaksi" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- tabel admin -->
    <section class="tabel-admin">
        <div class="container">
            <h2>Tabel Admin</h2>
            <?php if($status){ ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $status; ?>
                </div>
            <?php } ?>
            
            <!-- tabel -->
            <table class="tbl-admin">
                <thead>
                    <tr>
                        <th class="tbl-item">NO</th>
                        <th class="tbl-item">ID Admin</th>
                        <th class="tbl-item">Nama Admin</th>
                        <th class="tbl-item">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    while($row = $admin->fetch_assoc()){ ?>
                        <tr>
                            <td class="tbl-item"><?php echo $no++; ?></td>
                            <td class="tbl-item"><?php echo $row['id_admin']; ?></td>
                            <td class="tbl-item"><?php echo $row['nama_admin']; ?></td>
                            <td class="tbl-item">
                                <form action="../backend/crud.php" method="POST">
                                    <input type="hidden" name="id_admin" value="<?php echo $row['id_admin']; ?>">
                                    <button class="btn btn-danger" name="delete_admin" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- link script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- js -->
    <script src="./js/admin.js"></script>
</body>
</html>