
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Form </title>
        <link rel="icon" type="img/jpeg" href="assets/img/favicon.jpeg" >
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">ADMIN HR DATA</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="form_pegawai.php">PEGAWAI</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="form_jabatan.php">JABATAN</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="form_kontrak.php">KONTRAK</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <br><br><br><br><br><br>
            <div class="container">
        <form method="POST" action="input_kontrak.php">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID Kontrak</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="id_kontrak" placeholder="Masukan ID Kontrak">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID Pegawai</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="id_pegawai" placeholder="Masukan ID Pegawai">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID Jabatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="id_jabatan" placeholder="Masukan ID Jabatan">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Mulai</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tanggal_mulai" placeholder="Masukan Tanggal Mulai">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Selesai</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tanggal_selesai" placeholder="Masukan Tanggal Selesai">
                </div>
            </div>

            

            <input type="submit" class="btn btn-dark" name="submit" value="kirim">
            <input type="reset" class="btn btn-light">
        </form>
    </div> 
        <!--Lihat Data-->
        <section class="project-section bg-black" id="output_kontrak">
            <br><br><br>
        <center>
        <a href="output_kontrak.php"><button type="button" class="btn btn-light rounded-pill btn-lg btn-outline-dark">Lihat Data Kontrak</button></a>
        </center>
        <br><br><br>
        </section>

        <!-- Contact-->
        <section class="contact-section bg-black" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">Jl Arimbi No 1, Yogyakarta</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="#!">jogjatama@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">+62 8190 9595</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>

            </div>

        </section>
       
        
     
        
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
