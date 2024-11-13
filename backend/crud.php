<?php

// ! Class Database
class DataBase 
{
    // * Atribut
    private $host = "localhost";
    private $port = 3307;
    private $user = "root";
    private $password = "";
    private $database = "uts_pemweb";

    public $conn;

    // ! Function getConnection
    public function getConnection()
    {
        $this->conn = new mysqli($this->host,$this->user,$this->password,$this->database, $this->port);
        // ? Error Handling
        if ($this->conn->connect_error){
            die("Connection Failed". $this->conn->connect_error);
        }
        return $this->conn;
    }
}

class crud 
{
    // * Atribut
    private $conn;

    // ! function construct
    public function __construct($db)
    {
        $this->conn = $db;
    }


    // ? function read 
    public function readAdmin()
    {
        $sql = 'SELECT * FROM tbl_admin';
        $result = $this->conn->query($sql);
        return $result;
    }
    public function readTransaksi()
    {
        $sql = 'SELECT * FROM tbl_transaksi';
        $result = $this->conn->query($sql);
        return $result;
    }


    // ? function create transaksi
    public function createTransaksi($date_transaksi, $no_meja, $nama_product, $harga_product)
    {
        $sql = "INSERT INTO tbl_transaksi (date_transaksi, no_meja, nama_product, harga_product) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $date_transaksi = date('Y-m-d H:i:s');
        $stmt->bind_param("ssss", $date_transaksi, $no_meja, $nama_product, $harga_product);

        if($stmt->execute()){
            $status = "Berhasil Menambahkan Data Transaksi";
        }else {
            $status = $stmt->error;
        }
        return $status;
        
    }


    // ? function delete 
    public function deleteTransaksi($no_meja)
    {
        $sql = "DELETE FROM tbl_transaksi WHERE no_meja = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $no_meja);

        if($stmt->execute()){
            $status = "Berhasil Menghapus Data Transaksi";
        }else {
            $status = $stmt->error;
        }
        return $status;
    }
    public function deleteAdmin($id_admin)
    {
        $sql = "DELETE FROM tbl_admin WHERE id_admin = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $id_admin);

        if($stmt->execute()){
            $status = "Berhasil Menghapus Data Admin";
        }else {
            $status = $stmt->error;
        }
        return $status;
    }

}

$database = new DataBase();
$db = $database->getConnection();
$crud = new crud($db);

// logic
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['delete_transaksi'])){
        $no_meja = $_POST['no_meja'];
        $status = $crud->deleteTransaksi($no_meja);
        header("Location: ../frontend/admin.php?status=$status");
    }
    else if(isset($_POST['delete_admin'])){
        $id_admin = $_POST['id_admin'];
        $status = $crud->deleteAdmin($id_admin);
        header("Location: ../frontend/admin.php?status=$status");
    }
    else if (isset($_POST["refresh"])){
        header("Location: ../frontend/admin.php");
    }
    else if (isset($_POST["post_matcha"])){
        $date_transaksi = date("Y-m-d H:i:s");
        $no_meja = $_POST['no_meja_matcha'];
        $nama_product = "Matcha";
        $harga_product = 35000;
        $status = $crud->createTransaksi($date_transaksi, $no_meja, $nama_product, $harga_product);
        header("Location: ../frontend/index.php?status=$status");
        echo json_encode(['status' => $status]);
        exit;
    }else if (isset($_POST["post_cappuccino"])){
        $date_transaksi = date("Y-m-d H:i:s");
        $no_meja = $_POST['no_meja_cappuccino'];
        $nama_product = "cappuccino";
        $harga_product = 35000;
        $status = $crud->createTransaksi($date_transaksi, $no_meja, $nama_product, $harga_product);
        header("Location: ../frontend/index.php?status=$status");
        echo json_encode(['status' => $status]);
        exit;
    }else if (isset($_POST["post_espresso"])){
        $date_transaksi = date("Y-m-d H:i:s");
        $no_meja = $_POST['no_meja_espresso'];
        $nama_product = "espresso";
        $harga_product = 45000;
        $status = $crud->createTransaksi($date_transaksi, $no_meja, $nama_product, $harga_product);
        header("Location: ../frontend/index.php?status=$status");
        echo json_encode(['status' => $status]);
        exit;
    }else if (isset($_POST["post_mocha"])){
        $date_transaksi = date("Y-m-d H:i:s");
        $no_meja = $_POST['no_meja_mocha'];
        $nama_product = "moca";
        $harga_product = 25000;
        $status = $crud->createTransaksi($date_transaksi, $no_meja, $nama_product, $harga_product);
        header("Location: ../frontend/index.php?status=$status");
        echo json_encode(['status' => $status]);
        exit;
    }else if (isset($_POST["post_thai"])){
        $date_transaksi = date("Y-m-d H:i:s");
        $no_meja = $_POST['no_meja_thai'];
        $nama_product = "thaitea";
        $harga_product = 25000;
        $status = $crud->createTransaksi($date_transaksi, $no_meja, $nama_product, $harga_product);
        header("Location: ../frontend/index.php?status=$status");
        echo json_encode(['status' => $status]);
        exit;
    }
}else if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['check_new_transactions'])) {
    $transactions = $crud->readTransaksi();
    $transactions_array = [];
    while ($row = $transactions->fetch_assoc()) {
        $transactions_array[] = $row;
    }
    echo json_encode($transactions_array);
    exit;
}

?>