<?php
include "koneksi.php";

// Periksa apakah parameter 'article_id' telah diberikan di URL
if (isset($_GET['article_id'])) {
    $article_id = $_GET['article_id'];

    // Eksekusi kueri SQL untuk mendapatkan artikel berdasarkan ID
    $sql = "SELECT * FROM artikel_anime WHERE id = $article_id";
    $result = $koneksi->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $judul = $row["judul"];
        $konten = $row["konten"];
        $gambar = $row["gambar"];
    } else {
        echo "Artikel tidak ditemukan.";
        exit;
    }
} else {
    echo "Parameter 'article_id' tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.jpg">
    <title>Detail Artikel</title>
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
    </header>
    <div class="navbar">
        <a href="admin.php">Home</a>
        <a href="artikel_admin.php">Articles</a>
        <a href="galary.php">Gallery</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
    <?php
    $gambarPath = $row['gambar'];
    echo "<img src='" . $gambarPath . "' alt='Gambar Anime' width='800' height='auto'>";
    ?>
    <br>
    <h2><?php echo $judul; ?></h2>
    <p><?php echo nl2br($konten); ?></p> <!-- Menggunakan nl2br() untuk mempertahankan spasi dan baris baru -->
</div>
    <br>
    <br>
    <footer>
    <div class="foot">
        <img src="img/anime-46.png" alt="Ikon Anime">
        <p>&copy; 2023 AnimeBloggers</P>
        <p>Made by <br> Muhamad Akbar maulana</p>
    </div>
</footer>
</body>
</html>
