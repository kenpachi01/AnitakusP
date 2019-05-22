<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="EstiloCSS/TelaCadastro.css">
    </head>
    <h1 style="color:black;">Anitakus</h1>
    <body background="https://occ-0-990-987.1.nflxso.net/art/b9312/a13b4ee78ab997c838a799576420f140833b9312.jpg">
        <form action="Validar_cadastro.php" method="POST">
            <br>
            <br>
    
        <table align="left" border="0">
       
            <tr>
                <br>
                <td>
                <center><h2>Cadastro</h2></center>
                    Nome: <input type="text" name="nome" size="20">
                </td>
            </tr>
                   <br>
            <tr>
                <td>
                  <br>  Sobre Nome: <input type="text" name="sobrenome" size="20"><br>
                </td>
            </tr>
                   <br>
            <tr>
                <td>
                  <br>  E-mail:<input type="text" name="email" placeholder="nome@provedor.com" size="20">       <br>
                </td>
            </tr>
                   <br>
            <tr>
                <td>
                  <br>  Senha: <input type="password" name="senha" placeholder="No minimo 8 caracteres"maxlength="8" >       <br>
                </td>
            </tr>
            <tr>
        <br><td><INPUT TYPE="RADIO" NAME="sexo" VALUE="Masc">Mas</td>
        <td><INPUT TYPE="RADIO" NAME="sexo" VALUE="Femin">Femin</td>
            <td><INPUT TYPE="RADIO" NAME="sexo" VALUE="outros">outros</td>
            </tr>   
            <tr>
                <br>
                <td align="center">
                    <input type="submit" name="enviar" value="Cadastrar">
                    <input type="reset" name="limpar" value="Apagar">
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>
