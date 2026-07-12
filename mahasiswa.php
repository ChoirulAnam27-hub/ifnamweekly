<?php
    require "fungsi.php";
    $qmhs = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($qmhs);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | Informatika 2026</title>
</head>
    <link rel="stylesheet" href="asets/css/style.css">
<body>
    
    <h1>INFORMATIKA 2026</h1>

    <table border="1" cellspacing="" cellpadding="1"> 
        <tr>
            <td><a href="index.php">HOME</a></td>
            <td><a href="Profile.php">Profile</a></td>
            <td><a href="Contact.php">Contact</a></td>
            <td><a href="Mahasiswa.php">Mahasiswa</a></td>
            <td><a href="register.php">Register</a></td>
        </tr>
    </table>
    <br>
    <hr/>
    <h2>Data Mahasiswa</h2>
    <a href="tambahdata.php">
        <button>Tambah Data</button>
    </a>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jurusan</th>
            <th>Email</th>
            <Th>No. HP</Th>
            <th>foto</th>
            <th>Aksi</th>
        </tr>
        <?php
        $i = 1;
            foreach($mahasiswas as $mhs)
            {
        ?>
        <tr>
            <td align="center"><?php echo $i ?></td>
            <td><?php echo $mhs["nama"] ?></td>
            <td><?php echo $mhs["nim"] ?></td>
            <td><?php echo $mhs["jurusan"] ?></td>
            <td><?php echo $mhs["email"] ?></td>
            <td><?php echo $mhs["no_hp"] ?></td>
            <td><img src="asets/images/<?= $mhs['foto']?> "alt="foto" width="60px"></td>
            <td>
                <a href="ubahdata.php?id=<?= $mhs['id'] ?>"></button>Edit</button></a>
                <a href="hapusdata.php?id=<?= $mhs['id']; ?>"
                onclick ="return confirm('yakin?')";
                ><button>Hapus</button></a>
            </td>
        </tr>
        <?php
        $i++;
            }
        ?>

   
</body>
</html>