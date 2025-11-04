<?php 
//database
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbims';

// $con = mysqli_connect($hostname, $username, $password);
$con1 = mysqli_connect($hostname, $username, $password, $dbname);

if($con1){
    //echo "Connection established.";

}else{
    echo "Connection failed: " . mysqli_connect_error();
}
?>