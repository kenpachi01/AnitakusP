<?php
include'chama.php';

$nome = $_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email = $_POST['email'];
$Senha = $_POST['Senha'];
$Sexo=$_POST['Sexo'];

$inserir = "INSERT INTO tabela1 (nome,sobrenome, email, Senha, Sexo) VALUES ('$nome','$sobrenome','$email', '$Senha','$Sexo')";
$resultado = mysqli_query($conn, $inserir);

if(mysqli_affected_rows($conn)!= 0){
    echo "<script type=\"text/javascript\">
             alert(\"usuario cadastrado com sucesso.\");
          </script>";
    header('location:index.php');
}else{
    echo "<script type=\"text/javascript\">
             alert(\"usuario nÃ£o foi cadastrado com sucesso.\");
          </script>";
     header('location:cadastro.php');
}
        ?>
