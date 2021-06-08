<?php
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$connect = mysqli_connect('localhost','username','senha.','databasename');
    $verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'") or die(mysqli_error($connect));
      if (mysqli_num_rows($verifica) == 1){
        setcookie("email",$email);
        header("Location:index.php");
        echo "Conectado Com Sucesso";
      }else{
        echo"<script language='javascript' type='text/javascript'>alert('email e/ou senha incorretos');window.location.href='login.html';</script>";
        die();
      }
?>