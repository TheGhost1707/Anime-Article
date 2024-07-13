<?php
include "koneksi.php";

if(isset($_GET['gallery_id'])){
    $gallery_id =  $_GET['gallery_id'];
} else {
    $gallery_id = "";
}

if($gallery_id == 'hapus'){ // proses hapus data perdana
    $id     = $_GET['id'];
    $sql1   = "DELETE FROM galeri_anime WHERE id = '$id' ";
    $qry1   = mysqli_query($koneksi, $sql1);
    header("location:galary.php?notif=berhasil");
    exit; // Penting untuk menghentikan eksekusi skrip setelah header
}
?>

<!DOCTYPE html>
<html lang="en">
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
    if($_GET['notif'] == "sukses"){
      echo "<script>alert('Galeri baru berhasil ditambahkan')</script>";
    }
}
?>

<?php 
if(isset($_GET['notif'])){
    if($_GET['notif'] == "berhasil"){
      echo "<script>alert('Galeri yang dipilih berhasil dihapus')</script>";
    }
}
?>

<?php 
if(isset($_GET['notif'])){
    if($_GET['notif'] == "edit"){
      echo "<script>alert('Galeri yang dipilih berhasil diubah')</script>";
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

                        echo "<a href='edit_galeri.php?gallery_id=edit&id=" . $row["id"] . "'><button style='position:relative; left:30px; background-color:orange;'>Edit</button></a>";
                        echo "<a href='galary.php?gallery_id=hapus&id=" . $row["id"] . "'><button style='position:relative; left:60px; background-color:red;'>Hapus</button></a>";

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
    <div class="foot">
        <img src="img/anime-46.png" alt="Ikon Anime">
        <p>&copy; 2023 AnimeBloggers</P>
        <p>Made by <br> Muhamad Akbar maulana</p>
    </div>
</footer>
    </body>
    </html>
