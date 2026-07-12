<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Informatika 2026</title>
    <link rel="stylesheet" href="asets/css/style.css">
</head>
<body>
    <h1>INFORMATIKA 2026</h1>

    <table border="1" cellspacing="1" cellpadding="1"> 
        <tr>
            <td><a href="index.php">HOME</a></td>
            <td><a href="Profile.php">Profile</a></td>
            <td><a href="Contact.php">Contact</a></td>
            <td><a href="Mahasiswa.php">Mahasiswa</a></td>
        </tr>
    </table>

    <hr/>

    <!-- Bagian Kontak -->
    <section class="contact">
        <h2>Hubungi Kami</h2>
        <p>Jika ada pertanyaan atau masukan terkait program studi Informatika 2026, silakan isi form berikut:</p>

        <form action="mahasiswa.php" method="post">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="subjek">Subjek:</label><br>
            <input type="text" id="subjek" name="subjek" required><br><br>

            <label for="pesan">Pesan:</label><br>
            <textarea id="pesan" name="pesan" rows="5" required></textarea><br><br>

            <button type="submit">Kirim Pesan</button>
        </form>
    </section>

    <section class="info">
        <h3>Informasi Kontak</h3>
        <p>Email: khoirunanam9@gmail.com</p>
        <p>Telepon: 085776616630</p>
    </section>
</body>

</html>