 <?php 
 include 'chama.php';
 
 $consulta="SELECT * FROM  anitakus";
 $con = $conn-> query($consulta) or die($conn->erro);
?>
