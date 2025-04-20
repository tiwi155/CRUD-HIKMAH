<h2>Daftar Siswa</h2>
<hr>


    

<?php
include('koneksi.php');

$q="select * from siswa";
//$lanang = mysqli_query($data,'SELECT * FROM applogin where status="L"');
//$lanang1 = mysqli_num_rows($lanang);

//$wadon = mysqli_query($data,'SELECT * FROM applogin where status="P"');
//$wadon1 = mysqli_num_rows($wadon);

$hasil = $koneksi -> query($q);
?>

<!--<p>Jumlah Lanang: <b><php echo $lanang2; ?></b></p>-->
<!--<p>Jumlah Wadon: <b><php echo $wadon1; ?></b></p> -->

<table border="1" width="100%">
    <tr bgcolor="violet">
        <td align="center">NIS</td>
        <td align="center">Nama</td>
        <td align="center">JK</td>
        <td align="center">Kelas</td>
        <td align="center"></td>
    </tr>
<bgcolor="pink">

<?php
while ($row=$hasil -> fetch_row()){
    echo "
    <form action='proses.php' method='POST'>
    <tr>
    <td align='center'>$row[0]</td>
    <td>$row[1]</td>
    <td align='center'>$row[2]</td>
    <td align='center'>$row[3]</td>
    <td>
    <input type='hidden' name='nis' id='nis' value='$row[0]'>
    <input type='submit' name='proses' id='proses' value='Hapus'>
    <input type='submit' name='proses' id='proses' value='Edit'>
    </td>
    </tr>
    </form>";

}
?>

 
</table>

<hr>
<a href="input.php">
    <button>Input Data Baru</button>
</a>

<hr>

<form action="index.php">
<input type="submit" value="Logout">
</form>












