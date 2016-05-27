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
	
			<?php
			include 'conectabanco.php';
                 echo "teste de impressão";
                 include 'postesanteriores.php';

			?>

		</section>
		
		<!--rodapé do blog-->
		<footer>
			<div class="rodape"> 

			</div>
		</footer>
		
   </body>
	
</html>	