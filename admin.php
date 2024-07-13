<?php
include "koneksi.php";

$koneksi->set_charset("utf8"); // Set karakter set koneksi

if (isset($_GET['article_id']) && $_GET['article_id'] == 'ubah') {
    $id = $_GET['id'];
    $sql1 = "SELECT * FROM artikel_anime WHERE id = '$id'";
    $qry1 = mysqli_query($koneksi, $sql1);

    if ($qry1) {
        $r2 = mysqli_fetch_array($qry1);
        $judul = $r2['judul'];
        $konten = $r2['konten'];
        $gambar = $r2['gambar'];
    } else {
        $error = "Data tidak ditemukan";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit_artikel"])) {
        // Ambil data dari formulir Artikel
        $judul = $_POST["judul"];
        $konten = $_POST["konten"];

        // Upload gambar Artikel
        $gambar = $_FILES["gambar"]["name"];
        $gambar_tmp = $_FILES["gambar"]["tmp_name"];
        $gambar_path = "uploads/" . $gambar;
        move_uploaded_file($gambar_tmp, $gambar_path);

        // Masukkan data ke database Artikel
        $stmt = $koneksi->prepare("INSERT INTO artikel_anime (judul, konten, gambar) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $judul, $konten, $gambar_path);

        if ($stmt->execute()) {
            header("location:artikel_admin.php?notif=sukses");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    if (isset($_POST["submit_galeri"])) {
        // Upload gambar Galeri
        $gambar = $_FILES["gambar"]["name"];
        $gambar_tmp = $_FILES["gambar"]["tmp_name"];
        $gambar_path = "uploads/" . $gambar;
        move_uploaded_file($gambar_tmp, $gambar_path);

        // Masukkan data ke database Galeri
        $stmt = $koneksi->prepare("INSERT INTO galeri_anime (gambar) VALUES (?)");
        $stmt->bind_param("s", $gambar_path);

        if ($stmt->execute()) {
            header("location:galary.php?notif=sukses");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}

$koneksi->close();
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
    if($_GET['notif'] == "admin"){
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
        <a href="admin.php">Home</a>
        <a href="artikel_admin.php">Articles</a>
        <a href="galary.php">Gallery</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
    <h2 style="position:relative; text-align:center; top:10px;">Tambah Artikel</h2>
    <br>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" required>
    
        <label for="konten">Konten:</label>
        <textarea name="konten" rows="4" value="<?php echo $konten ?>" required></textarea>
    
        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" accept="image/*" required>
    
        <button type="submit" name="submit_artikel">Tambah Artikel</button>
    </form>
    </div>
    <br>
    <br>
    <div class="container">
    <h2 style="position:relative; text-align:center; top:10px;">Tambah Galeri Artikel</h2>
    <br>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
    
        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" accept="image/*" required>
    
        <button type="submit" name="submit_galeri">Tambah Galeri</button>
    </form>
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
