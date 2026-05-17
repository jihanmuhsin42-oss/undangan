<?php
session_start();
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tamu</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:flex-start;
            background:linear-gradient(135deg, #1d2671, #c33764);
            overflow-y:auto;
            overflow-x:hidden;
            position:relative;
            padding:20px;
        }

        /* BACKGROUND ANIMASI */

        body::before{
            content:'';
            position:absolute;
            width:400px;
            height:400px;
            background:rgba(255,255,255,0.08);
            border-radius:50%;
            top:-120px;
            left:-120px;
            animation:gerak 6s infinite alternate;
        }

        body::after{
            content:'';
            position:absolute;
            width:350px;
            height:350px;
            background:rgba(255,255,255,0.08);
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

        /* CONTAINER */

        .container{
            width:100%;
            max-width:1100px;
            background:rgba(255,255,255,0.12);
            backdrop-filter:blur(10px);
            padding:30px;
            border-radius:20px;
            box-shadow:0 8px 32px rgba(0,0,0,0.3);
            position:relative;
            z-index:1;
            margin:40px 0;
        }

        h1{
            text-align:center;
            color:white;
            margin-bottom:25px;
            font-size:35px;
        }

        /* BUTTON */

        .btn-tambah{
            display:inline-block;
            text-decoration:none;
            background:#00c6ff;
            color:white;
            padding:12px 18px;
            border-radius:10px;
            margin-bottom:20px;
            font-weight:bold;
            transition:0.3s;
        }

        .btn-tambah:hover{
            background:#0072ff;
            transform:scale(1.05);
        }

        /* TABLE */

        .table-responsive{
            overflow-x:auto;
        }

        table{
            width:100%;
            border-collapse:collapse;
            overflow:hidden;
            border-radius:15px;
            min-width:800px;
        }

        table th{
            background:rgba(255,255,255,0.2);
            color:white;
            padding:15px;
            text-transform:uppercase;
        }

        table td{
            background:rgba(255,255,255,0.08);
            color:white;
            padding:12px;
            text-align:center;
        }

        table tr:hover td{
            background:rgba(255,255,255,0.15);
            transition:0.3s;
        }

        /* BUTTON AKSI */

        .edit{
            text-decoration:none;
            background:#28a745;
            color:white;
            padding:8px 12px;
            border-radius:8px;
            margin-right:5px;
            transition:0.3s;
            display:inline-block;
        }

        .edit:hover{
            background:#1e7e34;
        }

        .delete{
            text-decoration:none;
            background:#dc3545;
            color:white;
            padding:8px 12px;
            border-radius:8px;
            transition:0.3s;
            display:inline-block;
        }

        .delete:hover{
            background:#b02a37;
        }

        /* RESPONSIVE */

        @media(max-width:768px){

            .container{
                padding:15px;
            }

            h1{
                font-size:25px;
            }

            .btn-tambah{
                padding:10px 15px;
                font-size:14px;
            }

            table{
                font-size:12px;
            }

            .edit,
            .delete{
                padding:6px 10px;
                font-size:12px;
                margin-bottom:5px;
            }

        }

    </style>
</head>
<body>

    <div class="container">

        <h1>Data Tamu</h1>

        <a href="create_tamu.php" class="btn-tambah">
            + Tambah Tamu
        </a>

        <div class="table-responsive">

            <table>

                <tr>

                    <th>ID</th>
                    <th>Nama Tamu</th>
                    <th>Jumlah Tamu</th>
                    <th>Kehadiran</th>
                    <th>Pesan</th>
                    <th>Aksi</th>

                </tr>

                <?php
                $data = mysqli_query($conn, "SELECT * FROM table_tamu");

                while($item = mysqli_fetch_array($data)){
                ?>

                <tr>

                    <td>
                        <?= $item['id']; ?>
                    </td>

                    <td>
                        <?= $item['nama_tamu']; ?>
                    </td>

                    <td>
                        <?= $item['jumblah_tamu']; ?>
                    </td>

                    <td>
                        <?= $item['kehadiran']; ?>
                    </td>

                    <td>
                        <?= $item['pesan']; ?>
                    </td>

                    <td>

                        <a class="edit"
                        href="edit_tamu.php?id=<?= $item['id']; ?>">

                            ✏️ Edit

                        </a>

                        <a class="delete"
                        href="delete_tamu.php?id=<?= $item['id']; ?>"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">

                            🗑️ Delete

                        </a>

                    </td>

                </tr>

                <?php
                }
                ?>

            </table>

        </div>
        <a href="../user/data_user.php" class="btn-tambah">kembali</a>

    </div>

</body>
</html>