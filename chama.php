<?php

$nome_servidor="localhost";
$nome_usuario="root";
$senha="";
$nome_banco="Anitakusdb";

$conn=new mysqli($nome_servidor,$nome_usuario,$senha,$nome_banco);
if ($conn->conect_error===TRUE){
    die("asdf".$conn->conect_error);
}

$email = $_POST['email'];
$Senha = $_POST['senha'];



$achar = "SELECT * FROM anitakus WHERE email='$email' AND senha='$Senha'";
$resultado = $conn->query($achar);

if($resultado->num_rows>0){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('location:pagina.php');
}else{
    session_unset();
    session_destroy();
    echo "<script> 
        alert('Login ou senha incorreto');
        window.location.href = 'index.php';
        </script>";
    
}
?>