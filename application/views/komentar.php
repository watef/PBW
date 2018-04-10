
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
             <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Welcome/terakhir">Sistem Pendaftaran TI</a>
                 <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Welcome/komentar">Komentar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      
      
     <h1 style="text-align:center ; color:white; margin-top:25px; margin-bottom:25px">Komentar Pengunjung</h1>
      
      <?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
 //include_once("config.php");
?>

<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <p style="font-size:20px;  text-align:center;">
<a href="<?php echo base_url()?>Welcome/add" style="color:yellow;">Silahkan Tambahkan Komentar Baru</a>
    </p>
 
    <table width='100%' border=1  style="background-color: white; margin-bottom: 30px" >
 
    <tr>
        <th>Name</th> <th>Komentar</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php foreach ($users as $u) { ?><tr>
      <td><?= $u ['name']?></td>
      <td><?= $u ['email']?></td>
      <td><?= $u ['komentar']?></td>
      <td> <a href="<?php echo base_url().'Welcome/delete/'.$u['id']?>">delete </a>
           | <a href="<?php echo base_url().'Welcome/edit/'.$u['id']?>">edit </a>
      </td></tr>
 <?php }?>
  
    </table>
    <center><form action="download"><input style="color: black; padding: 5px;" type="submit" value="Download Comments"></form></center>
    
    <center><a style='color:orange; font-weight: bold; font-size: 40px' href="<?php echo base_url()?>Chart">Report</a></center>
    <br>
</body>
</html>
      
      
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
