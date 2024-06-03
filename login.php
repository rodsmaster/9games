<?php
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];

  $servername ="";
  $database = "";
  $username = "";
  $password = "";
  $connect = mysqli_connect($servername, $username, $password, $database);
  $query_select2 = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";


  if (isset($entrar)) {

    $verifica = mysqli_query($connect,$query_select2) or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:download.html");
      }
  }
?>