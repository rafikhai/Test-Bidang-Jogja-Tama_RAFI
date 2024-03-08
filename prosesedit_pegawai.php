
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Edit Success </title>
        <link rel="icon" type="img/png" href="assets/img/favicon.png" >
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="form_pegawai.php">Pegawai</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="form_jabatan.php">Jabatan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="form_kontrak.php">Kontrak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <br><br><br><br><br><br>
            <div class="container">
                <?php
            include "koneksi.php";

            $id_pegawai = $_POST['id_pegawai'];
			$nama =$_POST['nama'];
			$alamat =$_POST['alamat'];
			$tanggal_lahir =$_POST['tanggal_lahir'];
			$gaji =$_POST['gaji'];

            $query=mysqli_query($konek,"UPDATE pegawai SET id_pegawai='$id_pegawai', nama='$nama', alamat='$alamat', tanggal_lahir='$tanggal_lahir', gaji='$gaji' where id_pegawai='$id_pegawai'");
        ?>

        <div class="notif rounded">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <?php
                        if($query)
                        {
                            echo "<img src='assets/img/cek.png' class='responsive'>";
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
                            echo "Proses Edit berhasil, ingin lihat hasil <a href ='output_pegawai.php'><mark>di sini</mark></a>";
                        }
                        else
                        {
                            echo "Proses Edit gagal";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div> 
</header>
 
     
        
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Jogja Tama IT Team (RAFI) 2024</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>