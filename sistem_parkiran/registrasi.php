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

// Jika tombol submit ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama       = $_POST['nama'];
    $jenis      = $_POST['jenis'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO kendaraan (nama, jenis, keterangan) VALUES ('$nama', '$jenis', '$keterangan')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data kendaraan berhasil disimpan!');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Kendaraan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f7f7f7; }
        form { background: white; padding: 20px; border-radius: 8px; width: 400px; box-shadow: 0 0 8px rgba(0,0,0,0.1); }
        input, select, textarea { width: 100%; margin: 8px 0; padding: 8px; }
        button { padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <h2>Form Registrasi Kendaraan</h2>
    <form method="POST" action="">
        <label>Nama Kendaraan:</label>
        <input type="text" name="nama" required>

        <label>Jenis Kendaraan:</label>
        <select name="jenis" required>
            <option value="Mobil">Mobil</option>
            <option value="Motor">Motor</option>
        </select>

        <label>Keterangan:</label>
        <textarea name="keterangan" rows="3"></textarea>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
