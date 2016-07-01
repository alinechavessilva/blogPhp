 <!DOCTYPE html>
<html>
 <head>
	 
	 <meta charset="UTF-8">
	 <meta name="description" content="comunidade catolica missionaria elohim">
	 <meta name="keywords" content="elohim,comunidade,católica,missão"/>

	 <title> homepage </title>
	 <link rel= "stylesheet" href= "leiamais.css" type= "text/css"/>	
	 <script type="text/javascript" src="comentarios/comentario.js"></script>
	 <script type="text/javascript" src="projetoblog/leiamais.js"></script>
	 
 </head>
	
  <body bgcolor="grey">
  <!-- //////////////////////////////////link face /////////////////////////////////////////////////-->
  <!-- <a id="linkface" href="Comunidade Católica Missionária Elohim.html" target="_blank" title="Facebook"><img src="facebook.png" aling="Right" width="30" height="30" alt="facebook"></a> -->
		
	<div id="cabecario">
		  
		<!--cabeçario do blog-->
		<header>
			
				<img id="logo" src="logo elohim.jpg" aling="center" width="200s" height="150" alt="logo">
				<h1 aling="center">Comunidade Cat&oacute;lica Mission&aacute;ria Elohim</h1>
		   
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
   
        <!-- abri conexao ccom o banco -->
        <?php  include 'conectabanco.php'; ?>
        <!-- abri todo conteudo do post -->     
		<section>
	     
	     <div id="leiamais">
			<?php
                 
                 $id=$_GET['id'];

                 //pega comentario do usuario
                 $dadosCom=mysql_query("select * from comentarios where poste_id=".$id."; ");

                 $dadosPost=mysql_query("select * from poste where id=".$id."; ");
                 $post=mysql_fetch_array($dadosPost);          ?>

            <div id="tituloposte">
            
             <?php echo $post['titulo']; ?>
            </div>
            <div id="textoposte">
              
             <?php
                 echo $post['texto'];
             ?>
            </div>  
             
            <div>
             Autor :  
             <?php 
                 echo $post['autor'];
             ?>
            </div>
             <?php         
                 echo $post['hora'];
                 echo "<br />";
             ?>

             <div id="palavraComentario">
              <br>
              Comentarios
              <br>
             </div>
             <!-- //////////////////////////carrega comentario//////////////////////////////////// -->
            <?php
	             while ($linha = mysql_fetch_array($dadosCom)){

	             echo "Autor : ".$linha['nome'];
	             echo "<br />";
	             echo "Email : ".$linha['email'];
	             echo "<br />";     
	             echo "Comentario : ".$linha['comentario'];
	             echo "<hr /><br />";
	             }

            ?>  
           <!-- //////////////////////////////////////////////////////////////////////////////////// -->
		

		 </div>

		</section>
		
		<!--rodapé do blog-->
		<footer>
			<div class="rodape"> 

		    </div>
		</footer>
		
   </body>
	
</html>	