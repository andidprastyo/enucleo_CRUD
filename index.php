<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="/Assets/css/index.css">
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
    <div class="home" id="home">
      <img src="/Assets/img/enucleo_2.png" alt="logo" width="100px" height="100px">
      <div class="sub_title">Student Database Management</div>
      <table border="1">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>JURUSAN</th>
            <th>ACTION</th>
        </tr>
        <?php
        include 'koneksi.php';
        $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        $no = 1;
        foreach ($mahasiswa as $row){
            $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan' : 'Laki-laki';
            echo "<tr>
                <td>$no</td>
                <td>".$row['nim']."</td>
                <td>".$row['nama']."</td>
                <td>".$jenis_kelamin."</td>
                <td>".$row['jurusan']."</td>
                <td><a href='form-edit.php?id_mhs=$row[id_mhs]'>Edit</a>
                    <a href='delete.php?id_mhs=$row[id_mhs]'>Hapus</a></td>
                </td>
                </tr>";
            $no++;
        }
        ?>
    </table>
    </div>   
</body>
</html>