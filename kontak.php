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
            $sql = "SELECT * FROM contact";
            $result = $koneksi->query($sql);
            if ($result) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<h1>" . $row["judul"] . "</h1>";
                        echo "<tr>";
    
                        echo "<td> Nama Lengkap : <br>" . $row["nama"] . "</td>";
                        echo "<br>";
                        echo "<br>";
                        echo "<td> Alamat : <br>" . $row["alamat"] . "</td>";
                        echo "<br>";
                        echo "<br>";
                        echo "<td> No Handphone : <br>" . $row["no_telp"] . "</td>";
                        echo "<br>";
                        echo "<br>";
                        echo "<td> Email : <br>" . $row["email"] . "</td>";
                        echo "<br>";
                        echo "<br>";
                        echo "<td> Status : <br>" . $row["status"] . "</td>";
                        echo "<br>";
                        echo "<tr>";
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
        <div class="container-maps">
            <h1 style="text-align:center">Maps Lokasi</h1>
            <hr>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63424.095345903515!2d106.85478320934504!3d-6.52092727166927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c0963fe803bd%3A0xcfcdd5cce43c7f19!2sCiteureup%2C%20Bogor%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1698725321634!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="whatsapp-icon">
        <a href="https://api.whatsapp.com/send?phone=082124945821" target="_blank">
            <img id="icon" src="img/whatsapp.png" alt="WhatsApp">
        </a>
        </div>
        <audio id="audio" controls="false">
            <source src="file/dering.mp3" type="audio/mp3">
        </audio>
        
        <script>
        // Menambahkan event listener untuk ikon
        var icon = document.getElementById('icon');
        icon.addEventListener('click', mainkanSuara);

        // Fungsi untuk memainkan suara saat ikon diklik
        function mainkanSuara() {
            var audio = document.getElementById('audio');
            audio.play();
            }
        </script>

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
