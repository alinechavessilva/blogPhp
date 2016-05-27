<?php
  
  $id=$_GET['id'];

  include 'conectabanco.php';

  // pega os dados de acordo com o id mandado pela URL
  $dados=mysql_query("select * from poste where id=".$id.";");
  
  //transforma os dados vindo em um array
  $result=mysql_fetch_array($dados);

?>
	<!-- Armazena o valor dos dados vindos da consulta e armazena dentro dos campos de textoposte -->  
  <form method="POST" action="postes.php">

          Editando posts<br><br>

          Titulo <input type="text" name="titulo" value="<?php echo $result['titulo']; ?>"><br>
          Texto <textarea name="textoposte" cols="60" rows="5">
          			<?php echo $result['texto']; ?>
          		</textarea><br>
          Autor <input type="text" name="autor" value="<?php echo $result['autor']; ?>"><br>

         <input id="botaopostar" type="submit" name="botaopostar" value="Edit"><br>
       
   </form>
