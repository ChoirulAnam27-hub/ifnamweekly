<?php

    require "fungsi.php";

    if(isset($_POST["submit"]))

    {

        if(tambahdata($_POST, $_FILES["foto"]) > 0)
        {
            echo "<script>
                alert ('Data Berhasil Ditambahkan!');
                window.location.href='mahasiswa.php';
                </script>
                ";
        }

        else
        {
            echo "<script>
            alert ('Data Gagal Ditambahkan!');
            window.location.href='mahasiswa.php';
            </script>
            ";
        }





        if(mysqli_affected_rows($koneksi) > 0)
        {
            echo "<script>
                alert ('Data Berhasil Ditambahkan!');
                window.location.href='mahasiswa.php';
                </script>
                ";
        }

        else
        {
            echo "<script>
            alert ('Data Gagal Ditambahkan!');
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
    <title>Tambah Data Mahasiswa</title>
</head>
    <link rel="stylesheet" href="asets/css/style.css">

<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="" method="post" enctype="multipart/form-data"> 
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>

            <tr>
                <td><label for="nim">Nim:</label></td>
                <td><input type="number" id="nim" name="nim"></td>
            </tr>

            <tr>
                <td><label for="jurusan">Jurusan:</label></td>
                <td><input type="text" id="jurusan" name="jurusan"></td>
            </tr>

            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="text" id="email" name="email"></td>
            </tr>

            <tr>
                <td><label for="nohp">No. HP:</label></td>
                <td><input type="number" id="nohp" name="no_hp"></td>
            </tr>

            <tr>
                <td><label for="foto">Foto:</label></td>
                <td><input type="file" id="foto" name="foto"></td>
            </tr>
        </table>
        <br>
        <button type="submit" name="submit"> tambah data </button>
    </form>

</body>

</html>