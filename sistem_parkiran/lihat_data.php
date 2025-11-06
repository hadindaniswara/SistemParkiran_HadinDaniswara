<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_parkiran";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data kendaraan
$sql = "SELECT * FROM kendaraan ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kendaraan</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; padding: 40px; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #007bff; color: white; }
        tr:nth-child(even) { background: #f2f2f2; }
        a { display: inline-block; margin-bottom: 15px; text-decoration: none; color: #007bff; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<h2>📋 Data Kendaraan Terdaftar</h2>
<a href="registrasi.php">+ Tambah Kendaraan Baru</a> | 
<a href="index.php">🏠 Kembali ke Home</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nama Kendaraan</th>
        <th>Jenis</th>
        <th>Keterangan</th>
        <th>Tanggal Registrasi</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['jenis']}</td>
                    <td>{$row['keterangan']}</td>
                    <td>{$row['tanggal_registrasi']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Belum ada data kendaraan.</td></tr>";
    }
    ?>
</table>

</body>
</html>
