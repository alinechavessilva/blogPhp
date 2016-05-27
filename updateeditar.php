<?php
  
  $id=$_POST['id'];
  $titulo=$_POST['titulo'];
  $texto=$_POST['texto'];
  $autor=$_POST['autor'];

  include 'conectabanco.php';
   

  mysql_query(" update poste set titulo='".$titulo."', texto='".$texto."', autor='".$autor."' where id=".$id."; ");

 header("location:admin.php");

?>