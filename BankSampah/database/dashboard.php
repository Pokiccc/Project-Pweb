<?php
session_start();

// Memeriksa apakah ID pengguna ada dalam session
if (!isset($_SESSION['user_id'])) {
    // Redirect ke halaman login jika ID pengguna tidak ada
    header('Location: login.php');
    exit;
}

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banksampah";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil ID pengguna dari session
$user_id = $_SESSION['user_id'];

// Query untuk mendapatkan data nama pengguna
$sql = "SELECT nama FROM users WHERE id = $user_id";
$result = $conn->query($sql);

$nama = '';
if ($result->num_rows > 0) {
    // Mendapatkan baris data pengguna
    $row = $result->fetch_assoc();
    $nama = $row['nama'];
}

// Menutup koneksi
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/style-dashboard.css">
    <title>Admin</title>
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span><span>Bank Sampah</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php" class="active"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="../transaksi.html"><span class="las la-money-bill"></span>
                    <span>Penarikan</span></a>
                </li>
                <li>
                    <a href="../table.html"><span class="las la-clipboard-list"></span>
                    <span>Riwayat</span></a>
                </li>
                <li>
                    <a href="../login.html"><span class="las la-users"></span>
                    <span>Keluar</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>
            <div class="user-wrapper">
                <img src="../img/image4.jpeg" width="30px" height="30px" alt="">
                <div>
                    <h4><?php echo $nama; ?></h4>
                    <small>User</small>
                </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>100000</h1>
                        <span>Poin terkumpul</span>
                    </div>
                    <div>
                        <span class="la la-money-bill"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>1000</h1>
                        <span>Poin ditarik</span>
                    </div>
                    <div>
                        <span class="la la-money-bill"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>100 Kg</h1>
                        <span>Sampah <br>(bulan ini)</span>
                    </div>
                    <div>
                        <span class="la la-money-bill"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>200 Kg</h1>
                        <span>Sampah <br>(total)</span>
                    </div>
                    <div>
                        <span class="la la-money-bill"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>Aktif</h1>
                        <span>Status</span>
                    </div>
                    <div>
                        <span class="la la-users"></span>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="penjelasan">
                <div class="responsive">
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th>Jenis</th>
                                <th>Poin yang didapat/KG</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr>
                                <td>Plastik</td>
                                <td><img src="../img/plastik.jpeg" alt="plastik"  width="100px" height="100px"></td>
                                <td>Anorganik</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>Kaleng</td>
                                <td><img src="../img/kaleng.jpeg" alt="kaleng" width="100px" height="100px"></td>
                                <td>Anorganik</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>Kertas</td>
                                <td><img src="../img/kertas.jpeg" alt="kaleng" width="100px" height="100px"></td>
                                <td>Anorganik</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>Botol Kaca</td>
                                <td><img src="../img/botolkaca.jpeg" alt="kaleng" width="100px" height="100px"></td>
                                <td>Anorganik</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td colspan="4">Keterangan: 1 poin = Rp. 100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>