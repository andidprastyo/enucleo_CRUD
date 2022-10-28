<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
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
    <form method="post" action="simpan.php">
        <table>
            <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name="nim"></td></tr>
            <tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
            <tr><td>Jenis Kelamin</td><td>
                <select name="jenis_kelamin">
                    <option value="">- Pilih -</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td></tr>
            <tr><td>Jurusan</td><td>
                <select name="jurusan">
                    <option value="">- Pilih -</option>
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    <option value="Teknik Kimia">Teknik Kimia</option>
                </select>
                </td></tr>
            <tr><td>Alamat</td><td><input type="text" name="alamat"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">Simpan</td></tr>
        </table>
    </form>
</body>
</html>