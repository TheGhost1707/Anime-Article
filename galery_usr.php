<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.jpg">
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
        <br>
        <div class="search-container">
        <form action="search.php" method="get">
            <input type="text" name="query" placeholder="Cari artikel disini...">
            <input type="submit" value="Cari" class="btn-search">
        </form>
        </div>

    </header>
    <div class="navbar">
        <a href="pengguna.php">Article</a>
        <a href="tentang.php">About</a>
        <a href="kontak.php">Contact</a>
        <a href="galery_usr.php">Gallery</a>
        <a href="logout.php">Logout</a>
    </div>
        <br>
        <br>
        <div class="container2">
        <h1>Galeri Artikel</h1>
        <article>
            <?php
            // Eksekusi kueri SQL untuk mendapatkan data artikel
            $sql = "SELECT * FROM galeri_anime";
            $result = $koneksi->query($sql);
            
            if ($result) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $gambarPath = $row['gambar'];
                        echo "<img src='" . $gambarPath . "' alt='Gambar Galeri'>";

                        echo "<br>";
                        echo "<br>";
                    }
                } else {
                    echo "Tidak ada galeri artikel yang ditemukan.";
                }
            }
            ?>
        </article>
    </div>
    <br>
    <br>
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
