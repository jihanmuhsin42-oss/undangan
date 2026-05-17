<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

    $jumblah_tamu = $_POST['jumblah_tamu'];
    $nama_tamu = $_POST['nama_tamu'];
    $kehadiran = $_POST['kehadiran'];
    $pesan = $_POST['pesan'];

    mysqli_query($conn, "INSERT INTO table_tamu
    (jumblah_tamu, nama_tamu, kehadiran, pesan)

    VALUES
    ('$jumblah_tamu',
    '$nama_tamu',
    '$kehadiran',
    '$pesan')
    ");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- BACKGROUND -->
<div class="background"></div>

<!-- AUDIO -->
<audio id="musik" loop>
    <source src="DJ TIKTOK TERBARU 2024🎵DJ DOLA DOLA SALAH DOLA🎵DJ CIS CIS FAJA SEKALI🎵REMIX FULL BASS.mp3" type="audio/mpeg">
</audio>

<!-- MUSIC BUTTON -->
<button onclick="toggleMusic()" class="music-btn">
    🎵
</button>

<!-- NAVBAR -->
<nav>

    <div class="logo">
        💍 Fulan & Fulana
    </div>

    <div class="menu">

        <a href="#story">
            📖 Cerita
        </a>

        <a href="#lokasi">
            📍 Lokasi
        </a>

        <a href="#pesan">
            💌 Pesan
        </a>

    </div>

</nav>

<!-- HERO -->
<section class="hero">

    <div class="hero-content">

        <div class="love-icon">
            💖
        </div>

        <p class="welcome">
            THE WEDDING OF
        </p>

        <h1>
            Fulan <span>&</span> Fulana
        </h1>

        <p class="tanggal">
            📅 17 Mei 2026
        </p>

        <p class="hero-text">

            Dengan penuh rasa syukur kami mengundang
            Bapak/Ibu/Saudara/i untuk hadir dalam
            acara pernikahan kami.

        </p>

        <a href="#pesan" class="btn">
            💌 Pesan & Doa
        </a>

    </div>

</section>

<!-- STORY -->
<section id="story">

    <h2>
        📖 Cerita Kami
    </h2>

    <div class="story-container">

        <div class="story-image">

            <img src="foto/cowok.png" alt="foto">

        </div>

        <div class="story-image">

            <img src="foto/cewek.png" alt="foto">

        </div>

        <div class="story-text">

            Kami dipertemukan di Jogja dalam sebuah
            forum sederhana. Dari pertemuan itu kami
            saling mengenal, memahami, dan akhirnya
            memutuskan untuk menikah.

        </div>

    </div>

</section>

<!-- KELUARGA -->
<section>

    <h2>
        👨‍👩‍👧‍👦 Keluarga
    </h2>

    <div class="keluarga-container">

        <div class="card-keluarga">

            <h3>
                🤵 Pihak Laki-Laki
            </h3>

            <p>

                Koko - Ayah <br><br>
                Salidah - Ibu <br><br>
                Fafa - Kakek <br><br>
                Yuyu - Adik <br><br>
                Yaku - Abang

            </p>

        </div>

        <div class="card-keluarga">

            <h3>
                👰 Pihak Perempuan
            </h3>

            <p>

                Popo - Ayah <br><br>
                Pipi - Ibu <br><br>
                Pupu - Kakek <br><br>
                Pypy - Adik <br><br>
                Plpl - Abang

            </p>

        </div>

    </div>

</section>

<!-- LOKASI -->
<section id="lokasi">

    <h2>
        📍 Lokasi Acara
    </h2>

    <div class="map">

        <img src="foto/lokasi.jpg" alt="lokasi">

    </div>

</section>

<!-- FORM -->
<section id="pesan">

    <h2>
        💌 Pesan & Doa
    </h2>

    <form method="post">

        <div class="form-container">

            <input type="text"
            name="jumblah_tamu"
            placeholder="👥 Jumlah Tamu"
            required>

            <input type="text"
            name="nama_tamu"
            placeholder="🧑 Nama Tamu"
            required>

            <input type="text"
            name="kehadiran"
            placeholder="✅ Kehadiran"
            required>

            <textarea
            name="pesan"
            placeholder="💖 Tulis pesan & doa"
            required></textarea>

            <button type="submit" name="simpan">

                Kirim Pesan 💌

            </button>

        </div>

    </form>

    <a href="login.php" class="login-btn">

        🔐 Login Admin

    </a>

</section>

<script>

function toggleMusic(){

    const musik =
    document.getElementById("musik");

    if(musik.paused){

        musik.play();

    }else{

        musik.pause();

    }

}

</script>

</body>
</html>