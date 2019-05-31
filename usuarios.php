<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Usuarios cadastrados</title>
  <link rel="stylesheet" href="EstiloCSS/perfil.css">


  
</head>

<body>
  <form action="usacon.php" method="POST">
  <h1>Anitakus</h1>
  

<ul class="menu">
    <li><a href="Ranking.php"S>Ranking</a></li>
    <li><a href="noticias.php">noticias</a></li>
    <li><a href="Assistir.php">Assitir animes</a></li>
    <li><a href="perfil.php">perfil</a></li>
  <li class="slider"></li>
</ul>
  
 <table>
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
      </tr> 
      <?php }?>
  </table>
</body>

</html>