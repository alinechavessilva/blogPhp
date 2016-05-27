 <!DOCTYPE html>
<html>
 <head>
	 
	 <meta charset="UTF-8">
	 <meta name="description" content="comunidade catolica missionaria elohim">
	 <meta name="keywords" content="elohim,comunidade,católica,missão"/>

	 <title> homepage </title>
	 <link rel= "stylesheet" href= "estilo.css" type= "text/css"/>	
	 <script type="text/javascript" src="comentarios/comentario.js"></script>
	 <script type="text/javascript" src="projetoblog/leiamais.js"></script>
	 
 </head>
	
  <body bgcolor="grey">
		
	<div id="cabecario">
		  
		<!--cabeçario do blog-->
		<header>
			
				<img id="logo" src="logo elohim.jpg" aling="center" width="200s" height="150" alt="logo">
				<h1 aling="center">Comunidade Cat&oacute;lica Mission&aacute;ria Elohim</h1>
				<a id="linkface" href="Comunidade Católica Missionária Elohim.html" target="_blank" title="Facebook"><img src="facebook.png" aling="Right" width="30" height="30" alt="facebook"></a>
		   
		</header>	
	</div>		
		<!--menu de navegação-->
		<nav>
		  <div id="menu">	
			<ul>
			 <li><a href="telaBlog.php" class="botaomenu">Home</a></li>
			 <li><a href="#" class="botaomenu">Miss&otilde;es e projetos</a></li>
		     <li><a href="#" class="botaomenu">unidades</a></li>
			 <li><a href="#" class="botaomenu">fale conosco</a></li>		
			</ul>
		   </div>	  
		</nav>
	
			<!-- Conexao com banco e consulta dos posts -->
		       <?php

                    include 'conectabanco.php';

                    $poste=mysql_query("select * from poste order by id desc limit 4") or die (mysql_error());


                ?> 
               
               <?php
	                function limitarTexto($texto, $limite){
	                $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
	                return $texto;
                    }
                ?>    

		<!--conteudo/postes-->
		    <section>
              

              <?php 
                while ($row = mysql_fetch_array($poste)) {
                    ?>
		               <div id="postes">


                       <div id="tituloposte">

                   	<?php
                   			echo  $row['titulo'];
                   	?>

                    </div>

 					<?php
                    $texto=$row['texto'];
                    echo limitarTexto($texto,$limite=500);

               		?>

                        <!-- leia mais -->
               		<a href="leiamais.php?id=<?php echo $row['id'];?>">leiamais</a>

               		<div id="datahora">
               		 <?php
                    //sera impresso a data e hora
                        echo ($row['hora']);
                      ?>
                    </div>

                                  <!-- adiciona comentario -->
                    <div id="linkcomentario">
                      		<a href="#" onclick="mostrar()">comente</a>
                    </div>
                          <br>

	                <div id="comentario" style="display: none">

	                      <form name="comentform" method="post" action="comentarios/insertcoment.php">

					      Nome: <input type="text" name="nome" />
					      E-mail: <input type="text" name="email" /><br>
					      Comentário: <input type="text" name="comentario"><br>	  
					   
						  <input type="submit" name="submit" value="Comentar" />
						  <input type="button" onclick="esconder()" value="Esconder" />
						  </form><hr />

                     </div>      

                     </div>
     
                   <?php  
	            }

	         ?> 

   	    </section>

        <!--conteudo lado esquerdo, postes anteriores-->
		<section>

		       <div class="postes2">
               <h2>Pôstes anteriores</h2> 

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

               </div>

		</section>
		
		<!--rodapé do blog-->
		<footer>
			<div class="rodape"> 

			</div>
		</footer>
		
   </body>
	
</html>	