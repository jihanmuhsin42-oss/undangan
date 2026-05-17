<?php
include '../koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM table_user WHERE id='$id'");
$item = mysqli_fetch_array($data);

if(isset($_POST['update'])) {

    mysqli_query($conn, "UPDATE table_user SET

    nama='$_POST[nama]',
    email='$_POST[email]',
    password='$_POST[password]'

    WHERE id='$id'

    ");

    header("location:data_user.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

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
            background:linear-gradient(135deg, #141e30, #243b55);
            overflow:hidden;
            position:relative;
            padding:20px;
        }

        /* BACKGROUND */

        body::before{
            content:'';
            position:absolute;
            width:350px;
            height:350px;
            background:rgba(255,255,255,0.08);
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

        /* CARD */

        .container{
            width:100%;
            max-width:500px;
            background:rgba(255,255,255,0.1);
            backdrop-filter:blur(12px);
            padding:35px;
            border-radius:25px;
            box-shadow:0 8px 30px rgba(0,0,0,0.3);
            position:relative;
            z-index:1;
        }

        h1{
            text-align:center;
            color:white;
            margin-bottom:30px;
            font-size:32px;
        }

        form{
            display:flex;
            flex-direction:column;
            gap:18px;
        }

        input{
            width:100%;
            padding:15px;
            border:none;
            border-radius:12px;
            outline:none;
            font-size:15px;
            background:rgba(255,255,255,0.2);
            color:white;
        }

        input::placeholder{
            color:#ddd;
        }

        .btn{
            padding:15px;
            border:none;
            border-radius:50px;
            background:#ffd700;
            color:black;
            font-size:17px;
            font-weight:bold;
            cursor:pointer;
            transition:0.3s;
        }

        .btn:hover{
            background:white;
            transform:scale(1.03);
        }

        .back{
            display:block;
            text-align:center;
            margin-top:20px;
            text-decoration:none;
            color:white;
            font-weight:bold;
        }

        .back:hover{
            color:#ffd700;
        }

        @media(max-width:500px){

            .container{
                padding:25px;
            }

            h1{
                font-size:25px;
            }

        }

    </style>

</head>
<body>

    <div class="container">

        <h1>Edit User</h1>

        <form method="post">

            <input type="text"
            name="nama"
            value="<?= $item['nama']; ?>"
            placeholder="Nama"
            required>

            <input type="email"
            name="email"
            value="<?= $item['email']; ?>"
            placeholder="Email"
            required>

            <input type="text"
            name="password"
            value="<?= $item['password']; ?>"
            placeholder="Password"
            required>

            <button type="submit" name="update" class="btn">

                Update User

            </button>

        </form>

        <a href="data_user.php" class="back">

            ← Kembali

        </a>

    </div>

</body>
</html>