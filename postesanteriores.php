<?php
  $postesanteriores=mysql_query("select * from poste order by id desc limit 10 offset 4;");
      
  while( $tituloanteriores=mysql_fetch_array($postesanteriores)) {
?>

  <a href="">
    <?php echo $tituloanteriores['titulo']; ?>
  </a>

 <?php
   }

?>

