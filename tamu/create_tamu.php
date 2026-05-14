<?php
include '../koneksi.php';

if(isset($_POST['simpan'])){

    $nama_tamu = $_POST['nama_tamu'];
    $jumblah_tamu = $_POST['jumblah_tamu'];
    $kehadiran = $_POST['kehadiran'];
    $pesan = $_POST['pesan'];

    mysqli_query($conn, "INSERT INTO table_tamu 
    (nama_tamu, jumblah_tamu, kehadiran, pesan) VALUES 
    ('$nama_tamu', '$jumblah_tamu', '$kehadiran', '$pesan')");

    header("location: data_tamu.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>✨ Create Tamu</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg, #1d2671, #c33764);
            overflow:hidden;
            position:relative;
        }

        /* Background animasi */
        body::before{
            content:'';
            position:absolute;
            width:350px;
            height:350px;
            background:rgba(255,255,255,0.1);
            border-radius:50%;
            top:-100px;
            left:-100px;
            animation:gerak 6s infinite alternate;
        }

        body::after{
            content:'';
            position:absolute;
            width:300px;
            height:300px;
            background:rgba(255,255,255,0.1);
            border-radius:50%;
            bottom:-100px;
            right:-100px;
            animation:gerak2 8s infinite alternate;
        }

        @keyframes gerak{
            0%{
                transform:translateY(0);
            }
            100%{
                transform:translateY(40px);
            }
        }

        @keyframes gerak2{
            0%{
                transform:translateX(0);
            }
            100%{
                transform:translateX(-40px);
            }
        }

        .container{
            width:400px;
            background:rgba(255,255,255,0.12);
            backdrop-filter:blur(10px);
            padding:35px;
            border-radius:20px;
            box-shadow:0 8px 32px rgba(0,0,0,0.3);
            z-index:1;
        }

        h1{
            text-align:center;
            color:white;
            margin-bottom:25px;
            font-size:32px;
        }

        .input-box{
            margin-bottom:20px;
        }

        .input-box label{
            color:white;
            display:block;
            margin-bottom:8px;
            font-weight:bold;
        }

        .input-box input{
            width:100%;
            padding:12px;
            border:none;
            outline:none;
            border-radius:10px;
            background:rgba(255,255,255,0.2);
            color:white;
            font-size:15px;
        }

        .input-box input::placeholder{
            color:#eee;
        }

        .btn{
            width:100%;
            padding:12px;
            border:none;
            border-radius:10px;
            background:#00c6ff;
            color:white;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
            transition:0.3s;
        }

        .btn:hover{
            background:#0072ff;
            transform:scale(1.03);
        }

    </style>

</head>
<body>

    <div class="container">

        <h1>✨ Create Tamu</h1>

        <form method="post">

            <div class="input-box">
                <label>👤 Nama Tamu</label>
                <input type="text" name="nama_tamu" placeholder="Masukkan nama tamu" required>
            </div>

            <div class="input-box">
                <label>👥 Jumlah Tamu</label>
                <input type="text" name="jumblah_tamu" placeholder="Masukkan jumlah tamu" required>
            </div>

            <div class="input-box">
                <label>✅ Kehadiran</label>
                <input type="text" name="kehadiran" placeholder="Masukkan kehadiran" required>
            </div>

            <div class="input-box">
                <label>💌 Pesan</label>
                <input type="text" name="pesan" placeholder="Masukkan pesan" required>
            </div>

            <button type="submit" name="simpan" class="btn">
                💾 Simpan
            </button>

        </form>

    </div>

</body>
</html>