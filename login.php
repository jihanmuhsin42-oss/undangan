<?php
session_start();
include "koneksi.php";

if ($_POST) {

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $query = mysqli_query($conn, "SELECT * FROM table_user WHERE email='$email'");
    $user = mysqli_fetch_assoc($query);

    if ($user) {

        if ($password == $user['password']) {

            $_SESSION['user'] = $user['username'];
            $_SESSION['id'] = $user['id'];

            header("location: user/data_user.php");
            exit;

        } else {
            $error = "Password salah!";
        }

    } else {
        $error = "Email tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>

       <style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial, sans-serif;
    }

    body{
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
        background:linear-gradient(135deg,#0f172a,#1e3a8a,#2563eb,#0ea5e9);
        overflow:hidden;
    }

    .background{
        position:absolute;
        width:100%;
        height:100%;
        overflow:hidden;
        z-index:-1;
    }

    .circle{
        position:absolute;
        border-radius:50%;
        background:rgba(255,255,255,0.1);
        animation:gerak 12s linear infinite;
    }

    .circle:nth-child(1){
        width:250px;
        height:250px;
        top:5%;
        left:5%;
    }

    .circle:nth-child(2){
        width:350px;
        height:350px;
        bottom:5%;
        right:5%;
        animation-duration:18s;
    }

    .circle:nth-child(3){
        width:180px;
        height:180px;
        top:50%;
        left:40%;
        animation-duration:14s;
    }

    @keyframes gerak{
        0%{
            transform:translateY(0px) rotate(0deg);
        }

        50%{
            transform:translateY(-40px) rotate(180deg);
        }

        100%{
            transform:translateY(0px) rotate(360deg);
        }
    }

    .login-box{
        width:370px;
        padding:40px;
        border-radius:25px;
        background:rgba(255,255,255,0.1);
        backdrop-filter:blur(12px);
        box-shadow:0 8px 35px rgba(0,0,0,0.4);
        text-align:center;
        color:white;
        border:1px solid rgba(255,255,255,0.2);
    }

    .login-box h1{
        margin-bottom:30px;
        font-size:38px;
        letter-spacing:2px;
    }

    .input-box{
        margin-bottom:20px;
        text-align:left;
    }

    .input-box label{
        display:block;
        margin-bottom:8px;
        font-size:14px;
        color:#dbeafe;
    }

    .input-box input{
        width:100%;
        padding:14px;
        border:none;
        outline:none;
        border-radius:12px;
        background:rgba(255,255,255,0.15);
        color:white;
        font-size:15px;
        border:1px solid rgba(255,255,255,0.2);
        transition:0.3s;
    }

    .input-box input::placeholder{
        color:#cbd5e1;
    }

    .input-box input:focus{
        background:rgba(255,255,255,0.2);
        border:1px solid #38bdf8;
        box-shadow:0 0 10px #38bdf8;
    }

    .btn{
        width:100%;
        padding:14px;
        border:none;
        border-radius:12px;
        background:linear-gradient(135deg,#06b6d4,#2563eb);
        color:white;
        font-size:16px;
        font-weight:bold;
        cursor:pointer;
        transition:0.3s;
    }

    .btn:hover{
        transform:scale(1.04);
        box-shadow:0 0 15px #38bdf8;
    }

    .error{
        background:rgba(255,0,0,0.2);
        border:1px solid rgba(255,255,255,0.2);
        padding:12px;
        border-radius:12px;
        margin-bottom:20px;
        color:#fff;
    }

</style>

    </style>

</head>
<body>

    <div class="background">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>

    <div class="login-box">

        <h1>Login</h1>

        <?php if(isset($error)) { ?>
            <div class="error">
                <?php echo $error; ?>
            </div>
        <?php } ?>

        <form method="POST">

            <div class="input-box">
                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan email" required>
            </div>

            <div class="input-box">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn">
                Login
            </button>

        </form>

    </div>

</body>
</html>