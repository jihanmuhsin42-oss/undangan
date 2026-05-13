<?php
session_start();
if (!isset($_SESSION['user'])) {
    header ("location: index.php");
    exit;
}
?>
<?php include '../koneksi.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah USER</title>
</head>
<body>
    <a href=""></a>
</body>
</html>