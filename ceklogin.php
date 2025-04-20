<?php
include('koneksi.php');

$user = $_POST['user'];
$pass = $_POST['pass'];



$q ="select * from user where user='$user' and pass='$pass'";

$hasil = $koneksi -> query($q);
if ($hasil -> num_rows) {
    header("Location: utama.php");
} else {
    echo"Login Anda Salah, Silahkan Coba Lagi!";
}






?>

<br><br>
<a href="index.php">
    <button>Coba Lagi</button>
</a>
<br>