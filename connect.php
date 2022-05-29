<?php
  $servername ="localhost";
  $username ="root";
  $password ="";
  $dbname ="tailor";

$conn =mysqli_connect($servername,$username,$password,$dbname);
if($conn){
  echo "Connection Success";
}
else{
  die("connection failed".mysqli_connect_error());
}
?>