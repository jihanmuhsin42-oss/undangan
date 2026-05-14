<?php
include '../koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM table_user WHERE id='$id'");
$item = mysqli_fetch_array($data);
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
                    nama: <input type="text" name="username" value="<?= $item['nama']; ?>"><br><br>
                    email: <input type="text" name="email" value="<?= $item['email']; ?>"><br><br>
                    password: <input type="text" name="password" value="<?= $item['password']; ?>"><br><br>

                    <button type="submit" name="update">update</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE table_user SET
    nama='$_POST[nama]',
    email='$_POST[email]',
    password='$_POST[password]'
    WHERE id='$id'
    ");
    header("location: data_user.php");
}
?>