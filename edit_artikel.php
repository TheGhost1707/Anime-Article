<?php
include "koneksi.php";


if(isset($_GET['article_id']) && $_GET['article_id'] === 'edit' && isset($_GET['id'])){
    $article_id = $_GET['id'];
    
    // Eksekusi kueri SQL untuk mendapatkan data artikel yang akan diedit
    $sql = "SELECT * FROM artikel_anime WHERE id = '$article_id'";
    $result = $koneksi->query($sql);
    
    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "Artikel tidak ditemukan.";
            exit;
        }
    } else {
        echo "Error: " . $koneksi->error;
        exit;
    }
}

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];

    // Handle file gambar yang diunggah
    if (isset($_FILES['gambar']['name']) && $_FILES['gambar']['name'] != "") {
        $gambar = "uploads/" . $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], $gambar);
    } else {
        // Jika tidak ada gambar yang diunggah, gunakan gambar yang sudah ada
        $gambar = $row['gambar'];
    }

    // Lakukan validasi data jika diperlukan

    // Update data artikel ke database
    $sql = "UPDATE artikel_anime SET judul = '$judul', konten = '$konten', gambar = '$gambar' WHERE id = '$id'";
    $qry = mysqli_query($koneksi, $sql);

    if ($qry) {
        header("location: artikel_admin.php?notif=edit");
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.jpg">
    <title>Edit Artikel - AnimeBloggers</title>
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
        <h1>AnimeBlogger</h1>
    </header>
    <div class = "navbar">
        <a href="admin.php">Home</a>
        <a href="artikel_admin.php">Articles</a>
        <a href="galary.php">Gallery</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
        <h1 style="text-align:center;">Form Edit Artikel</h1>
        <br>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="judul">Judul Artikel:</label>
            <input type="text" id="judul" name="judul" value="<?php echo $row['judul']; ?>">
            <br>

            <label for="konten">Konten Artikel:</label>
            <textarea id="konten" name="konten"><?php echo $row['konten']; ?></textarea>
            <br>

            <label for="gambar">Gambar:</label>
            <input type="file" id="gambar" name="gambar">
            <br>

            <!-- Tampilkan gambar saat mengedit -->
            <img src="<?php echo $row['gambar']; ?>" alt="Gambar Artikel">
            <br>
            <button type="submit" style="position:relative; top:10px;">Simpan Perubahan</button>
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
