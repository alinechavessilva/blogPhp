
<?php include "projetoblog/conecta.php"; ?>
    
<?php
    
    $sql = "SELECT * FROM comentarios_tb ORDER BY id desc";
    $row = mysql_num_rows($sql);

          while ($linha = mysql_fetch_array($query)){
          $nome = $linha['nome'];
          $email = $linha['email'];
          $website = $linha['website'];
          $comentario = $linha['comentario'];
             echo $nome;
             echo "<br />";
             echo $email;
             echo "<br />";
             echo $website;
             echo "<br />";     
             echo $comentario;
             echo "<hr /><br /><br />";
      }
 
    
?>    