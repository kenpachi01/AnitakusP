<?php 
 include 'chama.php';
 
 $consulta="SELECT * FROM  anitakus";
 $sql_query = $conn->query($consulta) or die($conn->erro);
 $linha = $sql_query-> fetch_assoc();
?>



<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Usuarios cadastrados</title>
  <link rel="stylesheet" href="EstiloCSS/perfil.css">


  
</head>

<body>
  <h1>Anitakus</h1>
  

<ul class="menu">
    <li><a href="Pagina.php">inicio</a></li>
    <li><a href="Ranking.php">Ranking</a></li>
    <li><a href="noticias.php">noticias</a></li>
    <li><a href="Assistir.php">Assitir animes</a></li>

  <li class="slider"></li>
</ul>
  <br>
  <br>
 <table border='1' style="width:80%" align="center">
      <tr>
          <td>id</td>
          <td>nome</td>
          <td>sobre nome</td>
          <td>email</td>
          <td>senha</td>
          <td>sexo</td>
          <td>Editar|Exclui</td>
      </tr> 
      <?php
           do{
               
           ?>    
      <tr>
          <td><?php echo $linha["id"]; ?></td>
          <td><?php echo $linha["nome"]; ?></td>
          <td><?php echo $linha["sobreNome"]; ?></td>
          <td><?php echo $linha["Email"]; ?></td>
          <td><?php echo $linha["Senha"]; ?></td>
          <td><?php echo $linha["sexo"]; ?></td>
          <td> <a href=" <?php echo "editar.php?id=" . $linha['id'] . "&nome" . $linha['nome']. "&sobreNome" . $linha['sobreNome'] . "&Email" . $linha['Email'] . "&Senha" . $linha['Senha'] . "&sexo" . $linha['sexo'] ?>">editar</a> |
              <a href=" <?php echo "excluir.php?id=" . $linha['id'] . "&nome" . $linha['nome']. "&sobreNome" . $linha['sobreNome'] . "&Email" . $linha['Email'] . "&Senha" . $linha['Senha'] . "&sexo" . $linha['sexo'] ?>">excluir</a>
      </tr>
      <?php } while($linha = $sql_query-> fetch_assoc());?>
  </table>
</body>

</html>