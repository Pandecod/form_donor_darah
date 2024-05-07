<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Donor Darah</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .container{
            display: block;
            margin: auto;
            width: 40%;
            padding: 10px;
            border: 1px solid black;
        }
        .input{
            width: 100%;
        }
        h2{
            padding-top: 10px;
            padding-bottom: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulir Pendaftaran Donor Darah</h2>
        <form action="proses_pendaftaran.php" method="post">
            <label for="nama" >Nama Lengkap:</label><br>
            <input type="text" class="input" id="nama" name="nama" required><br>
            
            <label for="alamat"  >Alamat:</label><br>
            <input type="text" class="input" id="alamat" name="alamat" required><br>
            
            <label for="telepon"  >Nomor Telepon:</label><br>
            <input type="tel" id="telepon" class="input" name="telepon" required><br>
            
            <label for="email" >Email:</label><br>
            <input type="email"  class="input" id="email" name="email" required><br>
            
            <label for="gol_darah">Golongan Darah:</label><br>
            <select id="gol_darah" name="gol_darah" required>
                <option value="">Pilih Golongan Darah</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select><br>
            
            <label for="Tanggal_daftar">Tanggal Daftar:</label><br>
            <input type="date" id="Tanggal_daftar" name="Tanggal_daftar" required><br>
            
            <label for="jenis_kelamin">Jenis Kelamin:</label><br>
            <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required>
            <label for="laki_laki">Laki-laki</label>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
            <label for="perempuan">Perempuan</label><br>
            
            <label for="riwayat_penyakit">Apakah Anda memiliki riwayat penyakit menular?</label><br>
            <input type="radio" id="ya_riwayat" name="riwayat_penyakit" value="Ya" required>
            <label for="ya_riwayat">Ya</label>
            <input type="radio" id="tidak_riwayat" name="riwayat_penyakit" value="Tidak" required>
            <label for="tidak_riwayat">Tidak</label><br>
            
            <label for="obat">Apakah Anda sedang mengonsumsi obat-obatan tertentu?</label><br>
            <input type="radio" id="ya_obat" name="obat" value="Ya" required>
            <label for="ya_obat">Ya</label>
            <input type="radio" id="tidak_obat" name="obat" value="Tidak" required>
            <label for="tidak_obat">Tidak</label><br>
            
            <label for="makan">Apakah Anda telah makan sebelum donor darah?</label><br>
            <input type="radio" id="ya_makan" name="makan" value="Ya" required>
            <label for="ya_makan">Ya</label>
            <input type="radio" id="tidak_makan" name="makan" value="Tidak" required>
            <label for="tidak_makan">Tidak</label><br>
            
            <label for="riwayat_donor">Apakah Anda pernah mendonorkan darah sebelumnya?</label><br>
            <input type="radio" id="ya_donor" name="riwayat_donor" value="Ya" required>
            <label for="ya_donor">Ya</label>
            <input type="radio" id="tidak_donor" name="riwayat_donor" value="Tidak" required>
            <label for="tidak_donor">Tidak</label><br><br>
            <label for="tanggal_donor">Tanggal Donor:</label><br>
            <input type="date" id="tanggal_donor"  class="input" name="tanggal_donor" required><br>
            <label for="tempat_donor">Tempat Donor:</label><br>
            <input type="text" id="tempat_donor"  class="input" name="tempat_donor" required><br>
            
            <input type="submit" value="Daftar">
        </form>
    </div>
</body>
</html>
