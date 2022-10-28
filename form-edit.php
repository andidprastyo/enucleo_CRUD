<?php

include 'koneksi.php';

$id_mhs = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mhs='$id_mhs'");
$row = mysqli_fetch_array($mahasiswa);
$jurusan = array('Teknologi Informasi', 'Teknik Mesin', 'Teknik Elektro', 'Teknik Kimia');

function active_radio_button($value, $input){
    $result = $value == $input?'checked':'';
    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
    <link rel="stylesheet" href="/Assets/CSS/form-input.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
<img class="wave" src="/Assets/img/background.jpg">
    <header>
        <nav>
            <div class="menu">
                <div class="logo">   
                    <img src="/Assets/img/enucleo.png" id="logo" width="50px" height="50px">
                    <a href="#">E-Nucleo</a>
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Service</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <h1>Form Pendataan</h1>
    <h2>Isilah data berikut dengan benar!</h2>
    <form method="post" action="edit.php">
        <input type="hidden" value="<?php echo $row['id_mhs'];?>" name="id_mhs">
        <table>
            <tr><td>NIM</td><td><input type="text" value="<?php echo $row['nim'];?>" name="nim"></td></tr>
            <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
            <tr><td>JENIS KELAMIN</td><td>
                <select name="jenis_kelamin">
                    <option nama="jenis_kelamin" value="" <?php echo active_radio_button("", $row['jenis_kelamin'])?>> - Pilih - </option>
                    <option nama="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki-laki</option>
                    <option nama="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>Perempuan</option>
                </select>
                </td></tr>
            <tr><td>JURUSAN</td><td>
                <select name="jurusan">
                    <?php
                    foreach($jurusan as $jur) {
                        echo "<option value='$jur'";
                        echo $row['jurusan'] == $jur?'selected':'';
                        echo ">$jur</option>";
                    }

                    ?>
                </select>
            </td></tr>
            <tr><td>ALAMAT</td><td><input value="<?php echo $row['alamat']; ?>" type="text" name="alamat"></td></tr>
            <tr><td colspan="2"><button type="submit" name="submit" value="simpan">SIMPAN</button>   
            <a id="back" href="index.php">KEMBALI</a></td></tr>
        </table>
    </form>
</body>
</html>