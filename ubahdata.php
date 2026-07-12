<?php

    require "fungsi.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM mahasiswa WHERE id=$id";

    $mhs=tampildata($query)[0];


    if(isset($_POST["kirim"]))

    {

        if(ubahdata($_POST,$id) > 0)
        {
            echo "<script>
                alert ('Data Berhasil Diubah!');
                window.location.href='mahasiswa.php';
                </script>
                ";
        }

        else
        {
            echo "<script>
            alert ('Data Gagal Diubah!');
            window.location.href='mahasiswa.php';
            </script>
            ";
        }





        if(mysqli_affected_rows($koneksi) > 0)
        {
            echo "<script>
                alert ('Data Berhasil Diubah!');
                window.location.href='mahasiswa.php';
                </script>
                ";
        }

        else
        {
            echo "<script>
            alert ('Data Gagal Diubah!');
            window.location.href='mahasiswa.php';
            </script>
            ";
        }



    }





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
    <link rel="stylesheet" href="asets/css/style.css">
</head>

<body>
    <h2>Ubah Data Mahasiswa</h2>
    <form action="" method="post"> 
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama" require
                value="<?= $mhs ["nama"]?>"></td>
            </tr>

            <tr>
                <td><label for="nim">Nim:</label></td>
                <td><input type="number" id="nim" name="nim" require
                value = "<?= $mhs ["nim"]?>"></td>
            </tr>

            <tr>
                <td><label for="jurusan">Jurusan:</label></td>
                <td><input type="text" id="jurusan" name="jurusan" require
                value = "<?= $mhs ["jurusan"]?>"></td>
            </tr>

            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="text" id="email" name="email" require
                value = "<?= $mhs ["email"]?>"></td>
            </tr>

            <tr>
                <td><label for="nohp">No. HP:</label></td>
                <td><input type="number" id="nohp" name="no_hp" require
                value = "<?= $mhs ["no_hp"]?>"></td>
            </tr>

            <tr>
                <td><label for="foto">Foto:</label></td>
                <td><input type="file" id="foto" name="foto" require
                value = "<?= $mhs ["foto"]?>"></td>
            </tr>
        </table>
        <br>
        <button type="submit" name="submit"> ubah data </button>
    </form>

</body>

</html>