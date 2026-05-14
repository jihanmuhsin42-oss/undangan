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
    <title>Undangan</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="background"></div>

<audio id="musik" loop>
    <source src="DJ TIKTOK TERBARU 2024🎵DJ DOLA DOLA SALAH DOLA🎵DJ CIS CIS FAJA SEKALI🎵REMIX FULL BASS.mp3" type="audio/mpeg">
</audio>

<button onclick="toggleMusic()" class="music-btn">
    🎵
</button>

<nav>
    <h1>Muhsin & Fulana</h1>
</nav>

<section class="hero">

    <div class="hero-box">

        <h2>The Wedding Of</h2>

        <h1>
            Muhsin <span>&</span> Fulana
        </h1>

        <a href="#pesan" class="btn-buka">
            Pesan Dan Do`a Tamu
        </a>

    </div>

</section>

<section class="story">

    <h1>Cerita Kami</h1>

    <div class="foto-box">

        <img src="foto/cowok.png" alt="foto">

        <img src="foto/cewek.png" alt="foto">
        <p>
            kami berdua adalah MT di jogja dan kami di perkenal kan di sebuah forum ya itu temu jodoh dan kami pun saling akrap dan kami pun menikah
        </p>

    </div>
    <div>
        <h3>pihak laki-laki</h3>
        <p>
            koko            ayah    <br>
            salidah         ibu     <br>
            fafa            kakek   <br>
            yuyu            adek    <br>
            yaku            abang   <br>
        </p>
        <br><br>
        <h3>pihak perempuan</h3>
        <p>
            popo            ayah <br>
            pipi         ibu <br>
            pupu            kakek   <br>
            pypy            adek    <br>
            plpl            abang   <br>
        </p>
    </div>

</section>

<section class="lokasi">

    <h1>Lokasi</h1>

    <div class="map-box">

        <img src="foto/lokasi.jpg" alt="lokasi">

    </div>

</section>

<section class="pesan" id="pesan">

    <h1>Pesan & Doa Tamu</h1>

    <form method="post">

        <div class="form-box">

            <input type="text"
            name="jumblah_tamu"
            placeholder="Jumlah Tamu">

            <input type="text"
            name="nama_tamu"
            placeholder="Nama Tamu">

            <input type="text"
            name="kehadiran"
            placeholder="Kehadiran">

            <textarea
            name="pesan"
            placeholder="Tulis pesan & doa"></textarea>

            <button type="submit" name="simpan">
                Simpan
            </button>

        </div>

    </form>

    <a href="login.php" class="admin-btn">
        Login Admin
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