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

        <div class="pesan-box">
            <table border="1" cellpadding="10"> 
                <tr>
                    <td>id</td>
                    <th>nama</th>
                    <th>jumblah</th>
                    <th>kehadiran</th>
                    <th>pesan</th>
                </tr>
                <?php
                $data = mysqli_query($conn, "SELECT * from table_tamu");
                while($item = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?= $item['id']; ?></td>
                        <td><?= $item['nama_tamu']; ?></td>
                        <td><?= $item['jumblah_tamu']; ?></td>
                        <td><?= $item['kehadiran']; ?></td>
                        <td><?= $item['pesan']; ?></td>
                        <td>
                            <a href="edit_tamu.php?id=<?= $item['id'];?>">edit</a>
                            <a href="delete_tamu.php?id=<?= $item['id'];?>">delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>

        </div>

    </section>
</body>
</html>