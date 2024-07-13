<?php
include "koneksi.php";

if(isset($_GET['article_id'])){
    $article_id =  $_GET['article_id'];
  }else{
    $article_id = "";
  }

if($article_id == 'hapus'){ // proses hapus data
    $id     = $_GET['id'];
    $sql1   = "DELETE FROM artikel_anime WHERE id = '$id' ";
    $qry1   = mysqli_query($koneksi,$sql1);
    header("location:artikel_admin.php?notif=berhasil");
  }
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
    if($_GET['notif'] == "berhasil"){
      echo "<script>alert('Data artikel berhasil dihapus')</script>";
    }
}
?>

<?php 
if(isset($_GET['notif'])){
    if($_GET['notif'] == "sukses"){
      echo "<script>alert('Data artikel berhasil ditambahkan')</script>";
    }
}
?>

<?php 
if(isset($_GET['notif'])){
    if($_GET['notif'] == "edit"){
      echo "<script>alert('Data artikel berhasil diubah')</script>";
    }
}
?>

<?php 
if(isset($_GET['notif'])){
    if($_GET['notif'] == "sukses2"){
      echo "<script>alert('Data artikel berhasil diubah')</script>";
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
        <h1>Top Artikel !</h1>
        <article>
            <?php
            // Eksekusi kueri SQL untuk mendapatkan data artikel
            $sql = "SELECT * FROM hot_topics";
            $result = $koneksi->query($sql);
            if ($result) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<h2>" . $row["judul"] . "</h2>";

                        $desc = $row["desc"];
                        $kontenPendek = substr($desc, 0, 50);
                        echo "<p>" . $kontenPendek . "</p>";
                        echo "<a class=link-top href='detail-top.php?article_id=" . $row["id"] . "'>Baca Detail ></a>";
                        echo "<br>";
                        echo "<br>";
                    }
                } else {
                    echo "Tidak ada data artikel yang ditemukan.";
                }
            }
            ?>
            </article>
        </div>
        <br>
        <br>
    <div class="container">
    <h1>Update artikel hari ini !</h1>
    <?php
    $tanggal = date("d F Y");
    echo $tanggal;
    ?>
    <article>
        <?php
        // Eksekusi kueri SQL untuk mendapatkan data artikel
        $sql = "SELECT * FROM artikel_anime";
        $result = $koneksi->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<h2>" . $row["judul"] . "</h2>";

                    $konten = $row["konten"];
                    $kontenPendek = substr($konten, 0, 100);
                    echo "<p>" . $kontenPendek . "</p>";

                    $gambarPath = $row['gambar'];
                    echo "<img src='" . $gambarPath . "' alt='Gambar Anime' width='700' height='auto'>";

                    echo "<br>";

                    echo "<a href='detail.php?article_id=" . $row["id"] . "'><button>Baca Detail</button></a>";
                    echo "<a href='edit_artikel.php?article_id=edit&id=" . $row["id"] . "'><button style='position:relative; left:30px; background-color:orange;'>Edit</button></a>";
                    echo "<a href='artikel_admin.php?article_id=hapus&id=" . $row["id"] . "'><button style='position:relative; left:60px; background-color:red;'>Hapus</button></a>";

                    echo "<br>";
                    echo "<br>";
                }
            } else {
                echo "Tidak ada data artikel yang ditemukan.";
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
