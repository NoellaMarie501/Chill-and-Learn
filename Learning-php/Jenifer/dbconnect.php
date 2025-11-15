<?php 
$conn=mysqli_connect('localhost', 'root', 'dimlagrace2','ninja_pizza');
if(!$conn){
   echo "connection failed".mysqli_connect_error();
}
?>