<html>
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
 <title> Editar</title>
 <link rel="stylesheet" type="text/css" href="EstiloCSS/edi.css">
        
        <?php
        $id = filter_input(INPUT_GET, "id");
        $nome= filter_input(INPUT_GET, "nome");
        $sobrenome= filter_input(INPUT_GET, "sobreNome");
        $email = filter_input(INPUT_GET, "Email");
        $senha = filter_input(INPUT_GET, "Senha");
        $sexo = filter_input(INPUT_GET, "sexo");
                
        ?>
    </head>
    <h1 style="color:black;">Informação de computação</h1>
    <br>
    <br>
    <body background="https://occ-0-990-987.1.nflxso.net/art/b9312/a13b4ee78ab997c838a799576420f140833b9312.jpg">
        <center>
        <table  align="center"> 
        <tr>
            <td>
        
        <div id="conteudo">
            <center><h2>Alterar contato</h2></center>
            <p>
            <form action="Editi.php">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                Nome: <input type="text" name="nome" value="<?php echo $nome ?>"/><br>
                <br>
                 Sobre Nome: <input type="text" name="sobreNome" value="<?php echo $nome ?>"/><br>
                <br>
                E-mail: <input type="text" name="email" value="<?php echo $email ?>"/><br>
                <br>
                Senha: <input type="text" name="senha" value="<?php echo $senha ?>"/><br>
                <br>
                Sexo: <input type="text" name="sexo" value="<?php echo $sexo ?>"/><br>
                
                <br>
                <center>  <input type="submit" value="Alterar" align="center"></center>
                
            </form>
        </p>
        </div>
        
            </td>
        </tr>
        </table> 
        </center>
    </body>
</html>