
<html lang="en" >

<head>
    
        <?php 
        
        session_start();


        if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'index.php';
                </script>";

        }
        $logado = $_SESSION['email'];
        ?>

  <meta charset="UTF-8">
  <title>Pagina inicial</title>
     <link rel="stylesheet" href="EstiloCSS/pagina.css">


</head>

<body>
  <form action="chama.php" method="POST">
  <h1>Anitakus</h1>
  

<ul class="menu">
    <li><a href="Ranking.php"S>Ranking</a></li>
    <li><a href="noticias.php">noticias</a></li>
    <li><a href="Assistir.php">Assitir animes</a></li>
    <li><a href="perfil.php">perfil</a></li>
  <li class="slider"></li>
</ul>
  
  <div style="overflow:scroll;height:80px;width:100%;overflow:auto">

    <table width="800" border="0"  class="my-table">
    <tr>      </tr>  
    </table>  

 </div>
</form>
</body>

</html>
              