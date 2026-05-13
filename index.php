<?php
include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>undangan</title>
</head>
<body>
    <audio id="musik" loop>
        <source src="" type="audio/mpeg">
    </audio>

    <button onclick="toggleMusic()" class="music-btn">🎵</button>

    <nav>muhsin & fulana</nav>

    <section>
        <h2>nama <span>muhsin</span></h2>
        <h2>nama <span>fulana</span></h2>

        <p>hai perkenal kan nama saya
             jihan muhsin sya beteemu
              dia di suatu wilayah
        </p>

        <div class="btn">
            <img src="tamu/uu.jpg" alt="uu">
            <img src="tamu/uu.jpg" alt="uu">
            <img src="">
            <img src="">
        </div>

        <h1>lokasi</h1>

        <div class="lokasi">
            <img src="">
        </div>

        <h1>pesan & doa Tamu</h1>
        <form method="post">
            <div class="pesan-box">
                <table border="1" cellpadding="10"> 
                    <tr>
                        <th>jumblah</th>
                        <th>nama</th>
                        <th>kehadiran</th>
                        <th>pesan</th>
                        <th>aksi</th>
                    </tr>
                    <tr>
                        <td>jumblah_tamu: <input type="text" name="jumblah_tamu"></td><br><br>
                        <td>nama_tamu: <input type="text" name="nama_tamu"></td><br><br>
                        <td>kehadiran: <input type="text" name="kehadiran"></td><br><br>
                        <td>pesan: <input type="text" name="pesan"></td><br><br>
                        <td>
                            <a href="tamu/edit.php?id=<?= $item['id'];?>">edit</a>
                            <a href="tamu/hapus.php?id=<?= $item['id'];?>">hapus</a>
                        </td>

                            <button type="submit" name="simpan">simpan</button>
                            
                        </td>
                    </tr>
                </table>

            </div>
        </form>
    </section>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($conn, "INSERT INTO table_tamu (jumblah_tamu, nama_tamu, kehadiran, pesan) VALUES (
    '$_POST[jumblah_tamu]',
    '$_POST[nama_tamu]',
    '$_POST[kehadiran]',
    '$_POST[pesan]'

    )");
}
?>