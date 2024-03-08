<?php
include "koneksi.php";
$id_jabatan = $_GET['id_jabatan'];

$query = mysqli_query($konek,"delete from jabatan_pegawai where id_jabatan='$id_jabatan'");

if($query)
{
	header("location:output_jabatan.php");
}
else
{
	echo "Data gagal dihapus!";
}
?>