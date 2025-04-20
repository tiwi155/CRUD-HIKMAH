<?php
include('koneksi.php');

$edit=0;

if(isset($_GET['edit'])){
    $nis=$_GET['nis'];
    $q="select * from siswa where nis='$nis'";
    $hasil= $koneksi -> query ($q);
    $row=$hasil -> fetch_row();
    // $nis= $row[0]; 
    $nama = $row[1];
    $jk= $row[2];
    $kelas =$row[3];

    $edit=1;  
}  else {
    $nis="";
    $nama="";
    $jk="";
    $kelas="";
}

?>


<?php
if ($edit){
    echo "<h2>Edit Data</h2>";
} else {
    echo "<h2>Input Data Baru</h2>";
}
?>


<hr>

<form action="proses.php" method="POST">
    <table>
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" <?php echo "value='$nis'"; ?> ></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" <?php echo "value='$nama'"; ?>></td>
        </tr>
        <tr>
            <td>JK</td>
            <td><input type="text" name="jk" <?php echo "value='$jk'"; ?>></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas" <?php echo "value='$kelas'"; ?> ></td>
        </tr>
    </table>


<?php

if ($edit){
  echo '<input type="submit" name="proses" id="proses" value="Perbaharui">';
} else {
  echo '<input type="submit" name="proses" id="proses" value="Simpan">'; 
}

?>



 
    
</form>
<hr>
<a href="utama.php">
    <button>Batal</button>
</a>