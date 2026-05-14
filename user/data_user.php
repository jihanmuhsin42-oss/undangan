<?php
session_start();
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>

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
            align-items:center;
            background:linear-gradient(135deg, #1e3c72, #2a5298);
            overflow:hidden;
            position:relative;
        }

        /* Background Animasi */
        body::before{
            content:'';
            position:absolute;
            width:500px;
            height:500px;
            background:rgba(255,255,255,0.1);
            border-radius:50%;
            top:-150px;
            left:-150px;
            animation:gerak 8s infinite alternate;
        }

        body::after{
            content:'';
            position:absolute;
            width:400px;
            height:400px;
            background:rgba(255,255,255,0.1);
            border-radius:50%;
            bottom:-120px;
            right:-120px;
            animation:gerak2 10s infinite alternate;
        }

        @keyframes gerak{
            0%{
                transform:translateY(0px);
            }
            100%{
                transform:translateY(50px);
            }
        }

        @keyframes gerak2{
            0%{
                transform:translateX(0px);
            }
            100%{
                transform:translateX(-50px);
            }
        }

        .container{
            width:95%;
            max-width:1100px;
            background:rgba(255,255,255,0.12);
            backdrop-filter:blur(10px);
            padding:30px;
            border-radius:20px;
            box-shadow:0 8px 32px rgba(0,0,0,0.3);
            position:relative;
            z-index:1;
        }

        h1{
            text-align:center;
            color:white;
            margin-bottom:25px;
            font-size:35px;
            text-transform:capitalize;
        }

        .btn{
            display:inline-block;
            padding:12px 20px;
            background:#00c6ff;
            color:white;
            text-decoration:none;
            border-radius:10px;
            margin-bottom:20px;
            transition:0.3s;
            font-weight:bold;
        }

        .btn:hover{
            background:#0072ff;
            transform:scale(1.05);
        }

        table{
            width:100%;
            border-collapse:collapse;
            overflow:hidden;
            border-radius:15px;
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

        .edit{
            text-decoration:none;
            background:#28a745;
            color:white;
            padding:8px 12px;
            border-radius:8px;
            margin-right:5px;
            transition:0.3s;
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
        }

        .delete:hover{
            background:#b02a37;
        }

        @media(max-width:768px){
            .container{
                padding:15px;
            }

            table{
                font-size:12px;
            }

            h1{
                font-size:25px;
            }

            .btn{
                padding:10px 15px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Data User</h1>

        <a href="data_user.php" class="btn">+👤+ Tambah User</a>
        <a href="../tamu/data_tamu.php" class="btn">📝Data Tamu</a>


        <table>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>email</th>
                <th>password</th>
                <th>Aksi</th>
            </tr>

            <?php
            $data = mysqli_query($conn, "SELECT * FROM table_user");

            while($item = mysqli_fetch_array($data)){
            ?>

            <tr>
                <td><?= $item['id']; ?></td>
                <td><?= $item['nama']; ?></td>
                <td><?= $item['email']; ?></td>
                <td><?= $item['password']; ?></td>
                <td>
                    <a class="edit" href="edit_user.php?id=<?= $item['id']; ?>">✏️Edit</a>

                    <a class="delete" href="delete_user.php?id=<?= $item['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
                        🗑️Delete
                    </a>
                </td>
            </tr>

            <?php } ?>

        </table>
    </div>

</body>
</html>