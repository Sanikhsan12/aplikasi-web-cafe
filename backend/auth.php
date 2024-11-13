<?php

class auth
{
    // * Atribut Declaration
    private $host = "localhost";
    private $port = 3307;
    private $username = "root";
    private $password = "";
    private $database = "uts_pemweb";
    public $conn;

    // ! function construct
    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database, $this->port);
        $this->database;

        // error handling
        if($this->conn->connect_error){
            die("Connection Failed". $this->conn->connect_error);
        }
        return $this->conn;
    }

    // ? function register
    public function register($id_admin, $nama_admin, $password)
    {
        $hased_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO tbl_admin (id_admin, nama_admin, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        // error handling
        if($stmt === false){
            die("Error Prepare Statement". $this->conn->error);
        }

        // binding parameter
        $stmt->bind_param("sss", $id_admin, $nama_admin, $hased_password);

        // execute statement
        if($stmt->execute()){
            header("Location: ../frontend/login.php");
            exit();
        }else{
            die("Error". $this->conn->error);
        }
    }

    // ? function login
    public function login($id_admin, $password)
    {
        $sql = "SELECT * FROM tbl_admin WHERE id_admin = $id_admin";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        // ? cheking result
        if($result->num_rows > 0){
            $user = $result->fetch_assoc();

            // ? password verify
            if(password_verify($password,$user["password"])){
                session_start();
                $_SESSION["id_admin"] = $user["id_admin"];
                $_SESSION["nama_admin"] = $user["nama_admin"];

                header("Location: ../frontend/admin.php");
            }else{
                header("Location: ../frontend/login.php");
            }
        }else{
            echo "Data Tidak Ditemukan";
        }
    }

    // ? function logout
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../frontend/login.php");
    }
}

// * membuat objek koneksi baru
$auth = new auth();

// ? cek request method
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["login"])){
        $id_admin = $_POST["id_admin"];
        $password = $_POST["password"];
        $auth->login($id_admin, $password);
    }else if (isset($_POST["register"])){
        $id_admin = $_POST["id_admin"];
        $nama_admin = $_POST["nama_admin"];
        $password = $_POST["password"];
        $auth->register($id_admin, $nama_admin, $password);
    }else if (isset($_POST["logout"])){
        $auth->logout();
    }
}

?>