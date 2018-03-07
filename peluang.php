 <?php  
$bg[0] = "white";  
$bg[1] = "yellow";  
$bg[2] = "red"; 
$bg[3] = "green";  
$warna=array_rand($bg,2);  
?> 

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peluang Kerja IT</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>
 <h1 class="site-heading text-center text-white d-none d-lg-block">
      <p style="margin-top: -50px; font-family:serif ; margin-bottom: -20px ; font-size: 40px ; color:#E69534; text-transform: capitalize">Peluang Kerja</p>
      <p style="margin-top: -10px ; font-family: monospace ; font-size: 70px; margin-bottom: -100px; color : <?php echo $bg[$warna[0]];?>">TEKNOLOGI INFORMASI</p>
      </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
             <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="mengapa.php">Kenapa TI</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="fasilitas.php">Fasilitas TI</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="peluang.php">Peluang Kerja TI</a>
              </li>
             <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="terakhir.php">Sistem Pendaftaran TI</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section cta" style="margin-bottom: 100px">
      <div class="container" style="margin-top: -100px">
        <div class="row">
          <div class="col-xl-9 mx-auto" style="margin-top: -50px">
            <div class="cta-inner text-center rounded" style="width: 800px; height: 120px">
              <h2 class="section-heading " style="margin-top: -50px">
                <span class="section-heading-upper" style="font-size: 50px">PELUANG KERJA</span>
                <p class="section-heading-lower" style="font-family: sans-serif; font-size: 30px">LULUSAN TEKNOLOGI INFORMASI</p>
              </h2>
               
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/latar.png" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper"></span>
                  <span class="section-heading-lower"></span>
                </h2>
               
                  <p class="mb-0" style="text-align: center; font-size: 25px">
                     Komputasi Awan dan Komputasi Terdistribusi 
                <br>
            <i>Cloud and Distributed Computing</i>
                      <hr>
                   
                  <p class="mb-0" style="text-align: center; font-size: 25px">
                  Arsitektur Web dan Pengembangan Framework 
                <br>
            <i>Architecture and Development Framerok</i>
                  <hr>
                
                  <p class="mb-0" style="text-align: center;font-size: 25px">
                  Integrasi Perangkat Lunak dan Middleware 
                <br>
            <i>Middleware and Integration Software</i>
                  
                  <hr>
                  <p class="mb-0" style="text-align: center;font-size: 25px">
                  Keamanan Informasi dan Jaringan 
                <br>
            <i>Network and Information Security </i>
                  
                  <hr>
                  <p class="mb-0" style="text-align: center;font-size: 25px">
                  Manajemen Penyimpanan Data 
                <br>
            <i>Storage Systems and Management</i>
                  <hr>
                  
                  <p class="mb-0" style="text-align: center;font-size: 25px">
                  Rancangan Antarmuka Pengguna 
                <br>
            <i>User Interface Design</i>
                  
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
<!--style>
div.galery{
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
}
div.gallery img {
  
    }

div.desc {
    padding: 15px;
    font-size: 20px;
    color: #E69534;
                   }
                </style> 
        <div class="gallery">
            <img style=" margin-left: 125px; margin-top: -150px" src="img/lulus6.png" alt="colud and distributed computing" style="margin-top: -150px">
            <div class="desc">Komputasi Awan dan Komputasi Terdistribusi 
                <br>
            <i>Cloud and Distributed Computing</i></div>
            </div>
            
       
            <img src="img/lulus2.png" alt="Architecture and Development Framerok" style="margin-top: -408px; margin-left: 570px">
            <div class="desc" style="margin-top: -115px; margin-left: 435px">Arsitektur Web dan Pengembangan Framework 
                <br>
            <i>Architecture and Development Framerok</i></div>
      
           <img src="img/lulus1.png" alt="Integrasi Perangkat Lunak dan Middleware " style="margin-top: -400px ; margin-left: 1030px">
            <div class="desc" style="margin-top: -115px; margin-left: 900px">Integrasi Perangkat Lunak dan Middleware 
                <br>
            <i>Middleware and Integration Software</i></div>
      
            <img src="img/lulus4.png" alt="Keamanan Informasi dan Jaringan" style="margin-top: 30px; margin-left: 125px">
            <div class="desc" style="margin-left: 50px">Keamanan Informasi dan Jaringan 
                <br>
            <i>Network and Information Security </i></div>
            
            <div class="gallery">
            <img src="img/lulus3.png" alt="Manajemen Penyimpanan Data" style="margin-top: -410px; margin-left: 1030px">
            <div class="desc" style="margin-top: -125px; margin-left: 970px">Manajemen Penyimpanan Data 
                <br>
            <i>Storage Systems and Management</i></div>
                
             <div class="gallery">
            <img src="img/lulus5.png" alt="Rancangan Antarmuka Pengguna " style="margin-top: -390px; margin-left: 570px">
            <div class="desc" style="margin-top: -110px; margin-left: 500px">Rancangan Antarmuka Pengguna 
                <br>
            <i>User Interface Design</i></div>
                </div>
      </div-->
      
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
