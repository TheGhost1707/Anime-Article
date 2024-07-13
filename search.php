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
    <div class="container">
    <article>
        <?php
        include 'koneksi.php';

        if (isset($_GET['query'])) {
            $query = $_GET['query'];

            // Eksekusi kueri SQL untuk mencari artikel berdasarkan kata kunci
            $sql = "SELECT * FROM artikel_anime WHERE judul LIKE '%$query%'";
            $result = $koneksi->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<h2>" . $row["judul"] . "</h2>";
                    $konten = $row["konten"];
                    $kontenPendek = substr($konten, 0, 100);
                    echo "<p>" . $kontenPendek . "</p>";
                    $gambarPath = $row['gambar'];
                    echo "<img src='" . $gambarPath . "' alt='Gambar Anime'>";
                    echo "<br>";
                    echo "<a href='detail_user.php?article_id=" . $row["id"] . "'><button>Baca Detail</button></a>";
                    echo "<br>";
                    echo "<br>";
                }
            } else {
                echo "Tidak ada hasil pencarian yang ditemukan.";
            }
        } else {
            echo "Tidak ada kata kunci pencarian.";
        }

        // Tambahkan formulir pencarian
        ?>
    </article>
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
