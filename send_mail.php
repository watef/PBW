<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datapbw";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name=$_POST['name'];
$email=$_POST['email'];
//$subject=$_POST['subject'];
$message=$_POST['message'];


$sql = "INSERT INTO datapbw (nama, email, message)
VALUES ('".$name."', '".$email."','".$message."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
//$subject=$_POST['subject'];
$message=$_POST['message'];

$to="lulukwatef76@gmail.com";

$message="From:$name <br/>".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <lulukwatef76@gmail.com>' . "\r\n";
$headers .= 'Cc: lulukwatef76@gmail.com' . "\r\n";
@mail($to,$subject,$message,$headers);
if(@mail)
{
echo "Email sent successfully !!" ;
    
    
}
?>
