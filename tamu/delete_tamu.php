<?php
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM table_tamu WHERE id='$id'");

header("location: data_tamu.php");
?>