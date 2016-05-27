<?php
  
  $id=$_GET['id'];

  include 'conectabanco.php';

  // pega os dados de acordo com o id mandado pela URL
  $dados=mysql_query("select * from poste where id=".$id.";");
  
  //transforma os dados vindo em um array
  $result=mysql_fetch_array($dados);

?>
	<!-- Armazena o valor dos dados vindos da consulta e armazena dentro dos campos de textoposte --> 
    <form method="POST" action="updateeditar.php">
           
             <br><br>
           editando posts
             <br><br>

           <input type="hidden" name="id" value=" <?php echo $result['id']; ?>"><br>

           Título<input type="text" name="titulo" value=" <?php echo $result['titulo'];?> "><br><br>
            
           Texto <textarea name="texto"> <?php echo $result['texto'];?> "</textarea><br><br>

           Autor <input type="text" name="autor" value=" <?php echo $result['autor'];?> "><br>

           <input type="submit" value="postar">

    </form>