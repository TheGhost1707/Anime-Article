<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png">
    <title>AnimeBloggers</title>
</head>
<body>
<?php
session_start();
?>
<?php 
if(isset($_GET['notif'])){
    if($_GET['notif'] == "user"){
      echo "<script>alert('Anda berhasil login sebagai $_SESSION[username]')</script>";
    }
}
?>
    <header>
    <center>
        <img src="img/login.png" width="100" height="auto">
    </center>
        <br>
        <label for="user">Wellcome, <?php echo $_SESSION['username'] ?></label>
        <h1>AnimeBlogger</h1>
    </header>
    <div class="navbar">
        <a href="pengguna.php">Article</a>
        <a href="tentang.php">About</a>
        <a href="kontak.php">Contact</a>
        <a href="galery_usr.php">Gallery</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
        <article>
            <?php
            // Eksekusi kueri SQL untuk mendapatkan data artikel
            $sql = "SELECT * FROM about";
            $result = $koneksi->query($sql);
            if ($result) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<h1 style=font-size:28px>" . $row["judul"] . "</h1>";

                        echo "<h3 style=font-weight:normal>" . $row["isi"] . "</h3>";

                        echo "<br>";
                    }
                } else {
                    echo "Tidak ada data about yang ditemukan.";
                }
                // Setelah selesai menggunakan hasil kueri, tutup koneksi ke database
                $koneksi->close();
            } else {
                echo "Error: " . $koneksi->error;
            }
            ?>
            </article>
        </div>
        <br>
        <br>
        <div class="container-dokumen">
        <h1 style="text-align:center">Dokumentasi Artikel</h1>
        <hr>
        <iframe src="file/AnimeBlogger-PB.pdf" width="800px" height="500px"></iframe>
        </div>
        <footer>
            <br>
            <br>
    <div class="foot">
        <img src="img/anime-46.png" alt="Ikon Anime">
        <p>&copy; 2023 AnimeBloggers</P>
        <p>Made by <br> Muhamad Akbar maulana</p>
    </div>
</footer>
    </body>
    </html>
