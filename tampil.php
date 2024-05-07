<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Donor Darah</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 2px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Donor Darah</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Golongan Darah</th>
            <th>Tanggal daftar</th>
            <th>Jenis Kelamin</th>
            <th>Riwayat Penyakit</th>
            <th>Obat-obatan</th>
            <th>Makan Sebelum Donor</th>
            <th>Riwayat Donor Sebelumnya</th>
            <th>Tanggal Donor </th>
            <th>Tempat Donor </th>
        </tr>
        <?php
        // Koneksi ke database
        $host = 'localhost'; // Ganti dengan host database Anda
        $username = 'root'; // Ganti dengan username database Anda
        $password = ''; // Ganti dengan password database Anda, jika tidak ada, biarkan kosong
        $database = 'donor_darah'; // Ganti dengan nama database Anda
        $conn = mysqli_connect($host, $username, $password, $database);

        // Memeriksa koneksi
        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Query untuk mengambil data dari database
        $sql = "SELECT * FROM donor_darah";
        $result = mysqli_query($conn, $sql);

        // Menampilkan data dalam tabel HTML
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['telepon'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['gol_darah'] . "</td>";
                echo "<td>" . $row['tanggal_daftar'] . "</td>";
                echo "<td>" . $row['jenis_kelamin'] . "</td>";
                echo "<td>" . $row['riwayat_penyakit'] . "</td>";
                echo "<td>" . $row['obat'] . "</td>";
                echo "<td>" . $row['makan'] . "</td>";
                echo "<td>" . $row['riwayat_donor'] . "</td>";
                echo "<td>" . $row['tanggal_donor'] . "</td>";
                echo "<td>" . $row['tempat_donor'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='11'>Tidak ada data</td></tr>";
        }

        // Menutup koneksi database
        mysqli_close($conn);
        ?>
    </table>

    <a href="index.php">kembali</a>
</body>
</html>
