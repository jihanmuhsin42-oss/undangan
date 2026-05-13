<?php
$conn = mysqli_connect("localhost", "root", "", "pernikahan");

if (!$conn) {
    die("koneksi gagal!: " . mysqli_connect_error());
}
?>