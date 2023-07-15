<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "banksampah";

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Mengecek data login
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mendapatkan baris data pengguna
        $row = $result->fetch_assoc();
        $user_id = $row['id'];

        // Menyimpan ID pengguna ke dalam session
        session_start();
        $_SESSION['user_id'] = $user_id;
        header("location: dashboard.php");
    } else {
        echo "Login gagal. Periksa kembali email dan password Anda.";
    }

    // Menutup koneksi
    $conn->close();
}
?>