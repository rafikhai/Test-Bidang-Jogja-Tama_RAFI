<!DOCTYPE html>
<head>
	
	<title>Data Baru Jabatan</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="container">
		<nav class="navbar navbar-light bg-transparent">
		  <div class="container">
		    <a class="navbar-brand" href="index.php">
		      <h2>Data Baru Jabatan</h2>
		    </a>
		  </div>
		</nav>

		<?php
			include "koneksi.php";

			$id_jabatan = $_POST['id_jabatan'];
			$nama_jabatan =$_POST['nama_jabatan'];
			

			$query=mysqli_query($konek, "insert into jabatan_pegawai values ('$id_jabatan','$nama_jabatan')") or die(mysqli_error($konek));
		?>

		<div class="notif rounded">
			<div class="row">
				<div class="col-lg-6 text-center">
					<?php
						if($query)
						{
							echo "<img src='img/cek.png' class='responsive'>";
						}
						else
						{
							echo "<img src='img/x.png' class='responsive'>";
						}
					?>
				</div>
				<div class="col-lg-6 text-center tulisan2">
					<?php
						if($query)
						{
							echo "Proses input berhasil, ingin lihat hasil <a href ='output_jabatan.php'><mark>di sini</mark></a>";
						}
						else
						{
							echo "Proses input gagal";
						}
					?>
				</div>
			</div>
		</div>
	</div> 
</body>
