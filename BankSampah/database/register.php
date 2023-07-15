<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari form
    $nama = $_POST['nama'];
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

    // Menyimpan data ke tabel
    $sql = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Berhasil membuat akun');</script>";
        header("location: ../login.html");
        
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
}
?>