<?php
include 'chama.php';

$id = filter_input(INPUT_GET, "id");
$nome = filter_input(INPUT_GET, "nome");
$sobrenome = filter_input(INPUT_GET, "sobreNome");
$email = filter_input(INPUT_GET, "email");
$senha = filter_input(INPUT_GET, "senha");
$sexo = filter_input(INPUT_GET, "sexo");


$link = mysqli_connect("localhost", "root", "", "Anitakusdb");

if($link){
   
   $query= mysqli_query($link, "UPDATE anitakus SET nome='$nome', sobreNome='$sobrenome', email='$email', senha='$senha',sexo='$sexo' where id='$id';" ); 
   if($query){
       
       header("Location:usuarios.php");
   }else{
       die("Erro:" .mysqli_error($link));
   }
   
}else{
    die("erro:".mysqli_error($link));

}
