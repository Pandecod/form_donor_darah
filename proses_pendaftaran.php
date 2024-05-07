<?php
// Konfigurasi koneksi ke database
$host = 'localhost'; // Ganti dengan host database Anda
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda, jika tidak ada, biarkan kosong
$database = 'donor_darah'; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memproses data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $gol_darah = $_POST['gol_darah'];
    $tanggal_daftar = $_POST['tanggal_daftar'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $riwayat_penyakit = $_POST['riwayat_penyakit'];
    $obat = $_POST['obat'];
    $makan = $_POST['makan'];
    $riwayat_donor = $_POST['riwayat_donor'];
    $tanggal_donor = $_POST['tanggal_donor'];
    $tanggal_donor = $_POST['tempat_donor'];

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO donor_darah (nama, alamat, telepon, email, gol_darah, tanggal_daftar, jenis_kelamin, riwayat_penyakit, obat, makan, riwayat_donor, tanggal_donor, tempat_donor) 
            VALUES ('$nama', '$alamat', '$telepon', '$email', '$gol_darah', '$tanggal_daftar', '$jenis_kelamin', '$riwayat_penyakit', '$obat', '$makan', '$riwayat_donor','$tanggal_donor','$tempat_donor')";

if (mysqli_query($conn, $sql)) {
    // Pendaftaran berhasil, tampilkan pesan dan arahkan ke tampil.php
    echo "Pendaftaran berhasil. Terima kasih atas partisipasi Anda!";
    echo '<meta http-equiv="refresh" content="2;url=tampil.php">';
} else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Menutup koneksi database
mysqli_close($conn);
?>
