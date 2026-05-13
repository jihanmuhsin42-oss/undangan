<?php
include '../koneksi.php';

$id = $_GET['id']

$data = mysqli_query($conn, "SELECT * from table_tamu WHERE id='$id'");
mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <h1>edit</h1>
    <form method="post">
        <table>
            <tr>
                <td>
                    jumblah_tamu: <input type="text" name="jumblah_tamu" value="<?= $item['nama_tamu']; ?>"><br><br>
                    nama_tamu: <input type="text" name="nama_tamu" value="<?= $item['jumblah_tamu']; ?>"><br><br>
                    kehadiran: <input type="text" name="kehadiran" value="<?= $item['kehadiran']; ?>"><br><br>
                    pesan: <input type="text" name="pesan" value="<?= $item['pesan']; ?>"><br><br>

                    <button type="submit" name="update">update</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE table_tamu SET
    jumblah_tamu='$_POST[nama_tamu]',
    nama_tamu='$_POST[jumblah_tamu]',
    kehadiran='$_POST[kehadiran]',
    pesan='$_POST[pesan]'
    WHERE id="$id"
    ");

    header("location: ../index.php")
}