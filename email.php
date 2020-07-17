<?php

$server = 'sql7.freesqldatabase.com';
$user = 'sql7355422';
$password = 'Gwjp7zNBXa';
$database = 'sql7355422';

$conn= mysqli_connect($server,$user,$password,$database);

$email = $_POST['email'];

$str = "INSERT INTO emails(email) 
    VALUES('$email')";

$query= mysqli_query($conn,$str);
// header("location:/your_folder_name/index.php");
    header("location:/mylife/index.php");

?>