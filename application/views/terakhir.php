
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

    <title>Teknologi Informasi-ITS</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this Stemplate -->
    <link href="<?php echo base_url()?>assets/css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

   <h1 class="site-heading text-center text-white d-none d-lg-block">
      <p style="margin-top: -50px; font-family:serif ; margin-bottom: -20px ; font-size: 40px ; color:#E69534; text-transform: capitalize">Seleksi Masuk</p>
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
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Welcome/fasilitas">Fasilitas TI</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Welcome/peluang">Peluang Kerja TI</a>
              </li>
             <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Welcome/terakhir">Sistem Pendaftaran TI</a>
                  <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Welcome/komentar">Komentar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      
    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="<?php echo base_url()?>assets/img/terakhir.jpg" alt="intro">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded" style="margin-top: -5%; margin-left: -5%">
              
            <h2 class="section-heading mb-4">
              <p class="section-heading-upper" style="font-size: 30px ; margin-top: -5%" >SNMPTN</p>
            </h2>
            <a href="https://smits.its.ac.id/sarjana/#snmptn" class="mb-3" style="margin-top: -30px">
                Seleksi Nasional Masuk Perguruan Tinggi
            </a>
               <h2 class="section-heading mb-4">
              <p class="section-heading-upper" style="font-size: 30px ; margin-top: -1%" >SBMPTN</p>
            </h2>
            <a href="https://smits.its.ac.id/sarjana/#sbmptn" class="mb-3" style="margin-top: -10px">
               Seleksi Bersama Masuk Perguruan Tinggi 
            </a>
               <h2 class="section-heading mb-4">
              <p class="section-heading-upper" style="font-size: 30px; margin-top: -10px">PKM</p>
            </h2>
              <a href="https://smits.its.ac.id/sarjana/#pkm" class="mb-3" style="margin-top: -30px">
                  Program Kemitraan dan Mandiri
              </a>
           
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-2">
                <p class="section-heading-upper" style="margin-top : -20px">Contact</p>
              </h2>
              <p class="mb-2" style="margin-top : -20px">teknologi.informasi@its.ac.id</p>
                
                 <div class="container">
                     <hr>
            <div style="text-align : center">
           <p style="font-size : 20px; margin-top : -20px"> terimakasih atas kunjungannya, website ini telah dikunjungi</p>
            <?php 
            include ("counter.php");
            echo "<p style='color:brown; font-size:35px; text-align=center; font-weight:enchant_broker_list_dicts(broker)'> $kunjungan[0] kali </p>";
            ?> 
             </div>   
    </div>
                
            </div>
              
          </div>
            
        </div>
       
            </div>
          </section>
         
        <section class="page-section cta" style="margin-top : -80px">
      <div class="container">
            <div class="mail" style="text-align: center; margin-top: 5px;">
	<form action="send_mail.php" method="post" >
        
		<p style="font-size : 30px; margin-top: -150px;font-family: monospace "><b>Silahkan tinggalkan pertanyaan</b></p>
		<div>
			<label for="name"><b>Name</b></label>
			<input type="text" name="name">
		</div>

		<div>
			<label for="email"><b>Email</b></label>
			<input type="text" name="email">
		</div>

		<!--div>
			<label for="subject">Subject</label>
			<input type="text" name="subject">
		</div-->

		<div><p style="margin-top:-10px">
                <label for="message"><b>Message</b></label>
            </p>
			<textarea name="message" id="" cols="40" rows="3" style="margin-top:-25px"></textarea>
            
			
		</div>

		<div>
            <input type="submit" value="Send email" >
        </div>

	</form>
</div>
      </div>
    </section>
      
      
      <!--section class="page-section cta" style="margin-top : -80px">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 mx-auto">
            
          </div>
        </div>
      </div>
    </section-->
      
      

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
