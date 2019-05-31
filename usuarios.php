 <?php 
 include 'chama.php';
 
 $consulta="SELECT * FROM  anitakus";
 $con = $conn-> query($consulta) or die($conn->erro);
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
 <table border='1' aling='center'>
      <tr>
          <td>id</td>
          <td>nome</td>
          <td>sobre nome</td>
          <td>email</td>
          <td>senha</td>
          <td>sexo</td>
      </tr> 
      <?php while($dado = $con-> fetch_array()){ ?>
      <tr>
          <td><?php echo $dado["id"]; ?></td>
          <td><?php echo $dado["nome"]; ?></td>
          <td><?php echo $dado["sobreNome"]; ?></td>
          <td><?php echo $dado["Email"]; ?></td>
          <td><?php echo $dado["Senha"]; ?></td>
          <td><?php echo $dado["sexo"]; ?></td>
          <td><a href='editar'>Editar</a> | 
              <a href='editar'>Exclui</a> </td>
      </tr>
      <?php }?>
  </table>
</body>

</html>