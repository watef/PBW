
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

    <title >Teknologi Informasi-ITS</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>aset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this Stemplate -->
    <link href="<?php echo base_url()?>aset/css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>
      
    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <p style="margin-top: -50px; font-family:serif ; margin-bottom: -20px ; font-size: 75% ; color:#E69534">INSTITUT TEKNOLOGI SEPULUH NOPEMBER</p>
      <p style="margin-top: -20px ; font-family: monospace ; font-size: 70px; color : <?php echo $bg[$warna[0]];?>">TEKNOLOGI INFORMASI</p>
        <p style="margin-top: -35px ; font-size: 25px ; margin-bottom: -70px  " >Fakultas Teknologi Informasi dan Komunikasi</p>

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
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="Welcome/mengapa">Kenapa TI</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="Welcome/fasilitas">Fasilitas TI</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="Welcome/peluang">Peluang Kerja TI</a>
              </li>
             <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="Welcome/terakhir">Sistem Pendaftaran TI</a>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="Welcome/komentar">Komentar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="aset/img/intro.png" alt="intro">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded" style="margin-top: -5%; margin-left: -5%">
              
            <h2 class="section-heading mb-4">
              <p class="section-heading-upper" style="font-size: 30px ; margin-top: -12%" >VISI</p>
            </h2>
            <p class="mb-3" style="margin-top: -30px">
                Menjadi Program Studi Teknologi Informasi yang unggul dalam bidang keamanan siber dan Teknologi berbasis Internet (Internet of Things) untuk pembangunan Smart City secara berkelanjutan hingga tahun 2022
            </p>
               <h2 class="section-heading mb-4">
              <p class="section-heading-upper" style="font-size: 30px; margin-top: -10px">misi</p>
            </h2>
              <ol class="mb-3" style="margin-top: -30px; text-align: justify ; margin-left: -5px" >
                 
                <li>    Menyelenggaralak pendidikan dan pengajaran Teknologi Informasi dengan menggunakan kurikulum yang adaptif, berorientasi ke masa depan dan didukung SDM yang berkualitas serta fasilitas yang memadai.
                    </li>
                     <li>   Melaksanakan penelitian yang bermutu di bidang Keamanan Siber dan <i>Internet of Thing</i> untuk teknologi <i>Smart City</i>.
                    </li>
                    <li>    Menjalin kemitraan dengan instansi dalam maupun luar negeri.</li>
                    <li>    Menyelenggarakan pengabdian kepada masyarakat berupa pelatihan, penyuluhan, penerapan hasil penelitian untuk pengembangan potensi dan pemberdayaan masyarakat daerah</li>
              </ol>
               
              
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="#" style="margin-bottom: 3%">up</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-2">
                <p class="section-heading-upper">Contact</p>
              </h2>
              <p class="mb-2">teknologi.informasi@its.ac.id</p>
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
    <script src="aset/vendor/jquery/jquery.min.js"></script>
    <script src="aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      
     

  </body>

</html>
