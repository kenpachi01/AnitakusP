<?php 
 include 'chama.php';
 
 $consulta="SELECT * FROM  anitakus";
 $sql_query = $conn->query($consulta) or die($conn->erro);
 $dado = $sql_query-> fetch_assoc();
?>

<html lang="en" >

<head>
    

        <?php 
        
        include'chama.php';
        
        session_start();



        if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();
            session_destroy();
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
  
  <h1>Anitakus</h1>
  
<ul class="menu">
    <li><a href="Ranking.php">Ranking</a></li>
    <li><a href="noticias.php">noticias</a></li>
    <li><a href="Assistir.php">Assitir animes</a></li>
    <li><a href="usuarios.php">usuario</a></li>
  <li class="slider"></li>
</ul>
  


       <table style="width:40%" align="center"> 
        <tr>
          <td>
              <h4>Criar publicação</h4> 
        <center><div><textarea aria-label="Abra seu coração"  placeholder="Abra seu coração"  style="width:300px;height:100px;" ></textarea></div></center>
             <br>
        <center><input type="submit" value="Públucar" align="higth"></center>
             <br>
          </td>
        </tr>

    </table>  
         <table style="width:60%;height:100%;" align="center"> 
        <tr>
          <td>
              
          </td>
        </tr>

    </table>  

</body>

</html>
              