<?php
/**
 * using mysqli_connect for database connection
 */
 
//$databaseHost = 'localhost';
//$databaseName = 'id4889644_id1213_pbwnya_users';
//$databaseUsername = 'id4889644_id1213_root';
//$databasePassword = '';
  
$databaseHost = 'localhost';
$databaseName = 'pbwnya';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 //echo var_dump($mysqli);
?>