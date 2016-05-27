<?php
 $id=$_GET['id'];

 include 'conectabanco.php';

 mysql_query("delete from poste where id=".$id.";");

 header("location:admin.php"); 	


?>