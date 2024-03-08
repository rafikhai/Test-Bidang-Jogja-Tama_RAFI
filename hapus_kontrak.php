<?php
include "koneksi.php";
$id_kontrak = $_GET['id_kontrak'];

$query = mysqli_query($konek,"delete from kontrak where id_kontrak='$id_kontrak'");

if($query)
{
	header("location:output_kontrak.php");
}
else
{
	echo "Data gagal dihapus!";
}
?>