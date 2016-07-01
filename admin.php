 <!DOCTYPE html>
<html>
 <head>
   
   <meta charset="UTF-8">

   <title> administrador </title>
   <link rel= "stylesheet" href= "admin.css" type= "text/css"/>  
   
 </head>
  
  <body bgcolor="grey">
    
    <div id="cabecario">
        
      <!--cabeçario do blog-->
      <header>
        
          <img id="logo" src="logo elohim.jpg" aling="center" width="200" height="150" alt="logo">
          <h1 aling="center">Comunidade Cat&oacute;lica Mission&aacute;ria Elohim </h1>
          
      </header> 
    </div>    
    
      <!--menu de navegação-->
      <nav>
          <div id="menu"> 
            <ul>
             <li><a href="telaBlog.php" class="botaomenu">Home</a></li>    
            </ul>
          </div> 
      </nav>
     
      <!-- abrindo conexão com o banco   -->
       <?php
         include 'conectabanco.php';
       ?>     

     <!-- mostrando postes -->
         <?php  

            $conteudo=mysql_query("select * from poste");
           
              while ($row = mysql_fetch_array($conteudo)) {
             ?>  
               <div id="postes">
                  <?php echo $row['titulo'];?><br>
                  <?php echo $row['texto']; ?><br>
                  <?php echo $row['autor'];?><br>

                <a href="editar.php?id=<?php echo $row['id'];?>"><button>editar</button></a>
                

                <a href="delete.php?id=<?php echo $row['id'];?>"><button>deletar</button></a>

              </div>
              <?php
                  //botaopostar
               } 
         ?>
  
     <!-- adicionar posts -->

      <div class="adicionar">
      <form method="POST" action="postes.php">

          Adicionar novo post<br><br>

          Titulo <input type="text" name="titulo"><br>
          Texto <textarea name="textoposte" cols="60" rows="12"> </textarea><br>
          Autor <input type="text" name="autor"><br>

         <input id="botaopostar" type="submit" name="botaopostar" value="postar"><br>
       
      </form>
      </div> 

<?php include('rodape.php'); ?>  


