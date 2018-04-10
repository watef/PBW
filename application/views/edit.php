


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
      
      
      <!--?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
//if(isset($_POST['update']))
//{	
	//$id = $_POST['id'];
	
	//$name=$_POST['name'];
	//$email=$_POST['email'];
    //$komentar=$_POST['komentar'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',komentar='$komentar' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	//header("Location: komentar.php");
//}
?-->
<!--?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$komentar = $user_data['komentar'];
}
?-->
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
        
     <p style="font-size:20px;  text-align:center; color=yellow;  margin-top:25px">
	<a href="<?php echo base_url()?>Welcome/komentar" style="color:yellow;">Back to Komentar</a>
    </p>
	<br/><br/>
	
	<form name="update_user" method="post" action="Welcome/edited">
		<table border="0">
			<tr> 
				<td style="color:white; font-size:20px">Name
        </td>
				<td>
          <input type="text" name="name" style="width:400px" value="<?php echo $id ?>">
        </td>
			</tr>
			<tr> 
				<td style="color:white; font-size:20px">Email</td>
				<td>
          <input type="text" name="email" style="width:400px" value="<?php echo $email ?>"></td>
			</tr>
			<tr> 
				<td style="color:white; font-size:20px">Komentar</td>
				<td>
          <input type="text" name="komentar" style="width:400px; height:150px" value="<?php echo $komentar ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update" style="margin-top:10px"></td>
			</tr>
		</table>
	</form>
</body>
</html>


      
      
      
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
