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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this Stemplate -->
    <link href="css/business-casual.min.css" rel="stylesheet">

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
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="peluang.php">Peluang Kerja TI</a>
              </li>
             <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="terakhir.php">Sistem Pendaftaran TI</a>
                 <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="komentar.php">Komentar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
      
<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
     <p style="font-size:20px;  text-align:center; color=yellow;  margin-top:25px">
	<a href="komentar.php" style="color:yellow;">Back to Komentar</a>
    </p>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1" style="text-align:center" >
		<table width="25%" border="0">
			<tr> 
				<td style="color:white; font-size:20px">Name</td>
				<td><input type="text" name="name" style="width:400px"></td>
			</tr>
			<tr> 
				<td style="color:white; font-size:20px">Email</td>
				<td><input type="text" name="email" style="width:400px"></td>
			</tr>
			<tr> 
				<td style="color:white; font-size:20px">Komentar</td>
				<td><input type="text" name="komentar" style="width:400px; height:150px"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add" style="margin-top:10px; margin-botton:-10px "></td>
			</tr>
		</table>
	</form>
    <p style='text-align:center; font-color:white; font-size:20px'>
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$komentar = $_POST['komentar'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,komentar) VALUES('$name','$email','$komentar')");
		
		// Show message when user added
        //echo
            //"<p align=\"center\"></p>";
        
        echo "<font color='white'>Terimakasi atas Komentarnya</font><br>";
        
	}
	?>
        <!--p style="font-size:20px;  text-align:center; color=yellow;  margin-top:25px">
	<a href="komentar.php" style="color:yellow;">Baca Komentar</a>
	<br/><br/-->
    </p>
</body>
</html>


      
      
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
