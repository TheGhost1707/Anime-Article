-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2024 at 02:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animeartikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(3) NOT NULL,
  `judul` char(20) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul`, `isi`) VALUES
(1, 'Tentang Artikel', 'Saya Muhamad Akbar Maulana dari Mahasiswa Universitas Pakuan Bogor. Jurusan Manajemen Informatika Semester 5. Dalam hal ini Saya membuat sebuah artikel yang bertema tentang Anime. Saya mengambil konsep ini karena banyak wibukers yang ingin mengetahui sejumlah informasi terkait anime - anime yang ada. Semoga artikel ini dapat membuat para pembaca senang dan bahagia. Terimakasih Banyak bagi yang sudah mengunjungi Artikel ini.');

-- --------------------------------------------------------

--
-- Table structure for table `artikel_anime`
--

CREATE TABLE `artikel_anime` (
  `id` int(3) NOT NULL,
  `judul` text NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel_anime`
--

INSERT INTO `artikel_anime` (`id`, `judul`, `konten`, `gambar`) VALUES
(32, 'Kapan anime baru rilis 2023?', 'Kapanlagi.com - Ditulis oleh Nurulia Januaristy Putri\r\n\r\nMusim panas menjadi salah satu musim yang ditunggu-tunggu bagi para penggemar anime. Berbagai judul anime baru yang penuh kejutan terkenal rilis di musim panas dengan ragam genre mulai dari aksi hingga romansa remaja.\r\n\r\nDari sekian banyaknya anime yang tayang di musim panas, beberapa judul akan tayang pada Juli 2023. Anime-anime tersebut tentunya menawarkan cerita menarik yang beda dari yang lain. Salah satu yang paling ditunggu kehadirannya adalah serial JUJUTSU KAISEN yang kembali di musim keduanya.\r\n\r\nSelain JUJUTSU KAISEN SEASON 2, ada beberapa anime yang tak kalah seru untuk ditunggu penayangannya. Berikut adalah 10 anime yang akan rilis Juli 2023, apakah ada yang paling KLovers nantikan? Simak selengkapnya di bawah ini!', 'uploads/noname2.jpg'),
(33, 'Keseruan Anime One Piece Episode 1084, Berikut Sinopsis & Link Nonton di Vidio', '   Anime One Piece menjadi salah satu anime yang populer di dunia termasuk di Indonesia. Salah satu anime yang memiliki episode lebih dari 1000 dan membuktikan jalan cerita anime ini sungguh menarik. \r\n\r\nDi Indonesia sendiri ada beberapa platform yang bisa menjadi tempat Anda menonton anime One Piece yaitu platform streaming Vidio. Tersedia season 1 - 5 dan season 20 yang dilengkapi dengan subtitle Indonesia.\r\n\r\n\r\nHomeShowBizJ-Pop\r\nKeseruan Anime One Piece Episode 1084, Berikut Sinopsis & Link Nonton di Vidio\r\nLayli MaghfirahLayli Maghfirah\r\nDiperbarui 21 Des 2023, 13:20 WIB\r\nCopy Link\r\n19\r\n[Bintang] 3 Sifat Luffy yang Bikin Kamu Betah Nonton One Piece\r\nPerbesar\r\n3 sifat Luffy ini bikin kamu makin suka nonton One Piece! (Via: forum.wakfu.com)\r\nLiputan6.com, Jakarta Anime One Piece menjadi salah satu anime yang populer di dunia termasuk di Indonesia. Salah satu anime yang memiliki episode lebih dari 1000 dan membuktikan jalan cerita anime ini sungguh menarik. \r\n\r\nDi Indonesia sendiri ada beberapa platform yang bisa menjadi tempat Anda menonton anime One Piece yaitu platform streaming Vidio. Tersedia season 1 - 5 dan season 20 yang dilengkapi dengan subtitle Indonesia. \r\n\r\nPetualangan Luffy sebagai karakter utama yang ingin menjadi bajak laut dan bertemu teman dan musuh sekaligus dalam misinya. Berikut ini kita akan mengulas salah satu episode seru yaitu One Piece episode 1084. Bagaimana ceritanya? sebelum nonton simak sinopsis dan link nonton di Vidio berikut ini. ', 'uploads/84631.jpg'),
(34, '8 Karakter Anime yang Bisa Melakukan Time Travel Berkali-kali', 'Time travel adalah konsep yang mengacu pada kemampuan untuk berpindah dari satu titik waktu ke titik waktu lainnya. Hal ini menjadi subjek yang menarik dalam dunia fiksi ilmiah dan literatur. Ide ini muncul dalam berbagai cerita dan film, yang mengeksplorasi konsekuensi dan tantangan yang mungkin terjadi jika manusia benar-benar dapat melakukan perjalanan melintasi waktu. Dalam dunia anime, terdapat juga konsep penjelajah waktu. Oleh karena itu kali ini, kita akan membahas karakter anime yang bisa time travel.\r\n\r\nAnime adalah sebuah bentuk animasi yang berasal dari Jepang. Anime memiliki ciri khas yang membedakannya dari animasi lainnya, seperti karakter dengan mata yang besar, ekspresi wajah yang beragam, dan cerita yang seringkali kompleks.\r\n\r\nBerikut karakter anime yang bisa time travel\r\n1.Rintarou Okabe - Steins;Gate\r\n2.Homura Akemi - Puella Magi Madoka Magica\r\n3.Subaru Natsuki - Re:Zero Kara Hajimeru Isekai Seikatsu\r\n4.Takemichi Hanagaki - Tokyo Revengers\r\n5.Shinpei Ajiro - Summertime Render\r\n6.Doraemon - Doraemon\r\n7.Satoru Fujinuma - Boku Dake Ga Inai Machi\r\n8.Makoto Konno - Toki Wo Kakeru Shoujo', 'uploads/Best-Time-Travel-Anime-768x427.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `judul` char(20) NOT NULL,
  `nama` char(80) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `judul`, `nama`, `alamat`, `no_telp`, `email`, `status`) VALUES
(1, 'Kontak Admin', 'Muhamad Akbar Maulana', 'Kp. Dukuh RT 005/001 Pasirmukti Citeureup', '082124945821', 'Soutakun170702@gmail.com', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_anime`
--

CREATE TABLE `galeri_anime` (
  `id` int(3) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri_anime`
--

INSERT INTO `galeri_anime` (`id`, `gambar`) VALUES
(6, 'uploads/login.png'),
(7, 'uploads/noname.jpg'),
(9, 'uploads/header.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hot_topics`
--

CREATE TABLE `hot_topics` (
  `id` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hot_topics`
--

INSERT INTO `hot_topics` (`id`, `judul`, `desc`) VALUES
(1, 'Kisah Sedih di Balik Mata Byakugan dalam Anime Naruto, Singgung Radiasi Bom Atom', 'KOMPAS.com – Anime Naruto menjadi salah satu tontonan yang sangat populer di berbagai negara, termasuk Indonesia. Anime yang mengisahkan kehidupan para ninja ini menarik perhatian dengan berbagai karakter dan klan dengan kemampuan uniknya. Salah satunya adalah kemampuan yang dimiliki klan Hyuga dan klan Otsutsuki, salah satu dari empat klan bangsawan dari Konohagakure. Baca juga: 4 Episode Baru Anime Naruto Tayang September 2023 Klan Hyuga memiliki kemampuan melalui mata Byakugan yang tangguh. Byakugan sendiri berarti mata putih. Byakugan memungkinkan pemiliknya untuk melihat titik chakra dan aliran chakra seseorang, dan juga dapat melihat hampir 360 derajat di sekitar mereka, sedikit titik buta. Mereka juga bisa melihat benda-benda yang jauh. Beberapa karakter yang terkenal di anime Naruto yang memiliki mata Byakugan adalah Hinata dan Neji dari klan Hyuga dan Hamura, Kagura, Toneri dari klan Otsutsuki.\r\n\r\nNamun, di balik kemampuan mata Byakugan ternyata menyimpan kisah sedih. Masashi Kishimoto selaku penulis manga Naruto ternyata terinspirasi membuat mata Byakugan dari korban bom atom yang pernah dijatuhkan di kota Hiroshima dan Nagasaki, Jepang pada 6 dan 9 Agustus 1945. Diketahui, korban bom atom yang selamat juga mengalami penderitaan yang berat, berupa dampak radiasi dan gempa susulan setelah pengeboman terjadi.'),
(2, '25 Kutipan Terkenal Madara Uchiha', 'KOMPAS.com - Madara Uchiha merupakan salah satu karakter terkenal dalam manga Jepang, Naruto. Dikutip dari Fandom, Madara adalah pemimpin legendaris dari klan Uchiha yang mendirikan Konohagakure bersama Hashirama Senju. Namun, ketika keduanya tidak sepakat tentang bagaimana menjaga perdamaian, mereka berjuang untuk mendapatkan kepemimpinan. Pertempuran ini menjadi akhir dari riwayat Madara.\r\n\r\nDalam manga Naruto, Madara diceritakan sebagai karakter perfeksionis yang selalu ingin melakukan sesuatu sampai menguasainya. Ia pun disebut sebagai karakter percaya diri dengan kemampuan dan bakatnya. Setiap kali salah satu ciri kepribadian ini ditantang, sifat kompetitif Madara akan muncul. Karakter Madara ditampilkan sebagai seorang pria berkulit putih dengan rambut hitam runcing dengan sedikit warna biru. Saat dewasa, Madara membiarkan rambutnya tumbuh panjang hingga pinggang, dengan poni sebahu membingkai sisi wajahnya, dan menutupi sebagian besar mata kanannya.\r\n\r\nBerikut 20 kutipan terkenal Madara, dikutip dari Everyday Power: \r\n1. The concept of hope is nothing more than giving up. A word that holds no true meaning (Konsep harapan tidak lebih dari menyerah. Sebuah kata yang tidak memiliki makna yang sebenarnya) \r\n\r\n2. The longer you live, the more you realize that reality is just made of pain, suffering and emptiness (Semakin lama Anda hidup, semakin Anda menyadari bahwa kenyataan hanya terbuat dari rasa sakit, penderitaan, dan kehampaan)\r\n\r\n3. When a man learns to love, he must bear the risk of hatred (Ketika seorang pria belajar untuk mencintai, dia harus menanggung risiko kebencian)\r\n\r\n4. Balance is what keeps the world going (Keseimbangan adalah apa yang membuat dunia terus berjalan)\r\n\r\n5. Thinking of peace whilst spilling blood is something that only humans could do (Memikirkan perdamaian sambil menumpahkan darah adalah sesuatu yang hanya bisa dilakukan oleh manusia)\r\n\r\n6. Life is a happening puzzle in our early days, but as we grow more and more old, we start to realize the meaning of life and the pattern with which it goes on (Hidup adalah teka-teki yang terjadi di masa-masa awal kita, tetapi seiring bertambahnya usia, kita mulai menyadari makna hidup dan pola yang terjadi)\r\n\r\n7. We are born to this world as merely children without a clear path or the intellect to know right from wrong (Kita terlahir ke dunia ini hanya sebagai anak-anak tanpa jalan yang jelas atau kecerdasan untuk mengetahui mana yang benar dan mana yang salah)\r\n\r\n8. The world is nothing but a game of balance. There’s always going to be bad in order to balance out the good (Dunia ini tidak lain adalah permainan keseimbangan. Akan selalu ada yang buruk untuk menyeimbangkan yang baik)\r\n\r\n9. Love is an essential element, but not everyone gets it (Cinta adalah elemen penting, tetapi tidak semua orang mendapatkannya) \r\n\r\n10. It’s okay not to have love, but to survive in this world, you need to make yourself capable and achieve success (Tidak apa-apa untuk tidak memiliki cinta, tetapi untuk bertahan hidup di dunia ini, Anda harus membuat diri Anda mampu dan mencapai kesuksesan)\r\n\r\n11. People cannot show each other their true feelings. Fear, suspicion, and resentment never subside (Orang tidak dapat menunjukkan perasaan mereka yang sebenarnya kepada satu sama lain. Ketakutan, kecurigaan, dan kebencian tidak pernah mereda) \r\n\r\n12. This world is filled with hatred, agony, and sufferings. All of these are the result of dishonesty and lies (Dunia ini dipenuhi dengan kebencian, penderitaan, dan penderitaan. Semua ini adalah hasil dari ketidakjujuran dan kebohongan)\r\n\r\n13. Life will always throw new challenges at you just when you will feel like you’ve succeeded (Hidup akan selalu memberikan tantangan baru kepada Anda tepat ketika Anda merasa telah berhasil)\r\n\r\n14. Things never go according to our comfort but run according to their schedule (Segala sesuatunya tidak pernah berjalan sesuai dengan kenyamanan kita, tetapi berjalan sesuai dengan jadwalnya)\r\n\r\n15. We need guidance to help us find a purpose in life (Kita membutuhkan bimbingan untuk membantu kita menemukan tujuan hidup)\r\n\r\n16. Be strong enough to be someone who even the demons would fear (Jadilah cukup kuat untuk menjadi seseorang yang bahkan setan pun akan takut)\r\n\r\n17. Only with strength and unyielding power can one stand up to even the mightiest of foes (Hanya dengan kekuatan dan pantang menyerah seseorang dapat menghadapi musuh yang paling kuat sekali pun)\r\n\r\n18. No matter how powerful your opponent is, if you foresee their moves, you’ll be able to defeat them (Tidak peduli seberapa kuat lawan Anda, jika Anda meramalkan gerakan mereka, Anda akan dapat mengalahkan mereka)\r\n\r\n19. Even the strongest of opponents always has a weakness (Bahkan lawan terkuat sekalipun selalu memiliki kelemahan)\r\n\r\n20. Faith has an abstract concept (Keyakinan memiliki konsep yang abstrak)\r\n\r\n21.The road to be the champions is the road of freedom (Jalan untuk menjadi pemenang adalah jalan kebebasan)\r\n\r\n22. You have the best gift you can have, life (Anda memiliki hadiah terbaik yang dapat Anda miliki, kehidupan)\r\n\r\n23. It’s not possible to see what a person really thinks and feels deep inside (Tidak mungkin untuk melihat apa yang sebenarnya dipikirkan dan dirasakan seseorang jauh di dalam)\r\n\r\n24. All you had to do was fall once, all that would become a deep hatred for the world (Yang harus Anda lakukan adalah jatuh sekali, semua itu akan menjadi kebencian yang mendalam terhadap dunia)\r\n\r\n25. Always analyze the situation before taking action for or against it (Selalu analisis situasi sebelum mengambil tindakan atau melawannya).\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(3, 'Akbar', 'admin123', 'admin'),
(4, 'Qilla', 'user123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel_anime`
--
ALTER TABLE `artikel_anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_anime`
--
ALTER TABLE `galeri_anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_topics`
--
ALTER TABLE `hot_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel_anime`
--
ALTER TABLE `artikel_anime`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri_anime`
--
ALTER TABLE `galeri_anime`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hot_topics`
--
ALTER TABLE `hot_topics`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
