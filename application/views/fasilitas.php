 <?php  
$bg[0] = "white";  
$bg[1] = "yellow";  
$bg[2] = "red"; 
$bg[3] = "aqua";
$bg[4] = "orange";  
$bg[5] = "black"; 
$bg[6] = "pink";  
$warna=array_rand($bg,2);  
?> 

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fasilitas TI</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

     <h1 class="site-heading text-center text-white d-none d-lg-block">
      <p style="margin-top: -50px; font-family:serif ; margin-bottom: -20px ; font-size: 40px ; color:#E69534; text-transform: capitalize">Fasilitas</p>
      <p style="margin-top: -10px ; font-family: monospace ; font-size: 70px; margin-bottom: -100px; color : <?php echo $bg[$warna[0]];?>">TEKNOLOGI INFORMASI</p>
       
      </h1>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Teknologi Informasi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Welcome">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Welcome/mengapa">Kenapa TI</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Welcome/fasilitas">Fasilitas TI</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Welcome/peluang">Peluang Kerja TI</a>
              </li>
             <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Welcome/terakhir">Sistem Pendaftaran TI</a>
             <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Welcome/komentar">Komentar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-3 d-flex ml-auto rounded">
              <h2 class="section-heading mb-0">
                <p class="section-heading-upper st" style="color:black;font-size: 40px" >Laboratorium</p>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php echo base_url()?>assets/img/lab.jpg" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0" style="color: black; font-size: 17px; text-transform: lowercase">Terdapat 2 laboratorium komputer (Lab Keamanan Siber dan Lab Teknologi <i>Smart City</i>). Seluruh Komputer dilengkapi oleh perangkat lunak yang dapat digunakan untuk mendukung kegiatan praktikum maupun kegiatan akademis lainny.a</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-3 d-flex mr-auto rounded">
              <h2 class="section-heading mb-0">
                <p class="section-heading-upper" style="color:black;font-size: 40px">Ruang Baca</p>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php echo base_url()?>assets/img/ruang.jpg" alt="">
          <div class="product-item-description d-flex ml-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0" style="color: black; font-size: 17px; text-transform:lowercase">Memiliki berbagai macam koleksi mulai dari fiksi hingga materi perkuliahan, dari bahan cetak hingga koleksi digital seperti CD-ROM, CD, VCD, dan DVD. Selain itu juga menyediakan publikasi serial harian dan bulanan seperti surat kabar dan majalah.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-3 d-flex ml-auto rounded">
              <h2 class="section-heading mb-0">
                <p class="section-heading-upper" style="color:black;font-size: 40px">Ruang Kelas</p>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php echo base_url()?>assets/img/kelas.jpg" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0" style="color: black; font-size: 17px; text-transform:lowercase">Setiap ruang kelas dilengkapi dengan ruangan dan LCD serta akses internet gratis yang dapat mendukung kegiatan akademis mahasiswa.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

   
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      
  </body>

</html>
