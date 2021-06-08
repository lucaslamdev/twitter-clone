<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect('localhost','username','senha.','databasename');
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];
$datinha = date('d/m/Y H:i');
$ipezinho = $_SERVER['REMOTE_ADDR'];
  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo email deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }else{
      if($logarray == $email){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse email já existe');window.location.href='
        cadastro.html';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (`nome`,`email`,`senha`,`ip`,`data`) VALUES ('$nome','$email','$senha','$ipezinho','$datinha')";
        $insert = mysqli_query($connect,$query) or die(mysqli_error($connect));

        if($insert){
          echo "Usuário cadastrado com sucesso!";
        }else{
          echo "Não foi possível cadastrar esse usuário";
        }
      }
    }
?>