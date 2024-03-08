<?php
include "koneksi.php";
$id_pegawai = $_GET['id_pegawai'];

$query = mysqli_query($konek,"delete from pegawai where id_pegawai='$id_pegawai'");

if($query)
{
	header("location:output_pegawai.php");
}
else
{
	echo "Data gagal dihapus!";
}
?>