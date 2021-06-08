<?php
$connect = mysqli_connect('localhost','username','senha.','databasename');
$ipezinho = $_SERVER['REMOTE_ADDR'];
$datinha = date('d/m/Y H:i');
$query = "INSERT INTO ipezinho (`ip`,`data`) VALUES ('$ipezinho','$datinha')";
$insert = mysqli_query($connect,$query) or die(mysqli_error($connect));
?>