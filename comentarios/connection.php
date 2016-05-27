<?php
  $host = "localhost";
  $user = "root";
  $pass = "aline";
  $banco = "projetoBlog";

  echo "tentando conexão";
  mysql_connect($host, $user, $pass) or die (mysql_error());

  mysql_select_db($banco) or die(mysql_error());
  
?>