<?php

$nome_servidor="localhost";
$nome_usuario="root";
$senha="";
$nome_banco="Anitakusdb";

$conn=new mysqli($nome_servidor,$nome_usuario,$senha,$nome_banco);
if ($conn->connect_error===TRUE){
    die("asdf".$conn->connect_error);
}

?>