<?php
  $servername ="10.1.42.3";
  $username ="admin";
  $password ="admin";
  $dbname ="tailor";

$conn =mysqli_connect($servername,$username,$password,$dbname);
if($conn){
  echo "";
}
else{
  die("connection failed".mysqli_connect_error());
}
?>