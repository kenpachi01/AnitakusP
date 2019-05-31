<?php
include'chama.php';

$nomeD=$_POST['nome'];
$sobrenomeD=$_POST['sobrenome'];
$emailD =$_POST['email'];
$SenhaD =$_POST['senha'];
$SexoD=$_POST['sexo'];

$inserir = "INSERT INTO Anitakus (nome, sobrenome, email, senha, sexo) VALUES ('$nomeD','$sobrenomeD','$emailD', '$SenhaD','$SexoD')";
$resultado = mysqli_query($conn, $inserir);

if(mysqli_affected_rows($conn)!= 0){
    echo "<script>
             alert('usuario cadastrado com sucesso.');
          </script>";
    header('location:index.php');
}else{
    echo "<script>
             alert('usuario nÃ£o foi cadastrado com sucesso.');
          </script>";
     header('location:cadastro.php');
}
        ?>