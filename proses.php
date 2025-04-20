<?php
include('koneksi.php');




$proses= $_POST['proses'];
$nis=$_POST['nis'];

if ($proses=='Edit'){
    header("Location: input.php?nis=$nis&edit=1");

    //echo $q ="select * from siswa where NIS='$nis'";
}

if ($proses=='Hapus'){
    $q = "delete from siswa where NIS='$nis'";
    $koneksi -> query ($q);
    header("Location: utama.php");
}


if ($proses=='Simpan'){
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $jk=$_POST['jk'];
    $kelas=$_POST['kelas'];

    $q = "insert into siswa values('$nis','$nama','$jk','$kelas')";
    
    $koneksi -> query ($q);
    header("Location: utama.php");
}

if ($proses=='Perbaharui'){
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $jk=$_POST['jk'];
    $kelas=$_POST['kelas'];   
    //echo "Saya disuruh memperbaharui";

    $q = "update siswa set nama='$nama', jk='$jk', kelas='$kelas' where nis='$nis'  ";
    $koneksi -> query ($q);

    header("Location: utama.php");


}















?>