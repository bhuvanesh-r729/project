<?php
$server_name="localhost";
$username="rcas";
$password="rcas2022bit119";
$db="student";
$conn=mysqli_connect($server_name,$username,$password,$db);
if($conn){
    echo "connect success";
}
else{
    echo "connection error";
}
?>