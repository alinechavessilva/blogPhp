<?php 

include '../../projetoblog/conectabanco.php'; 

$nome=$_POST['nome'];
$email=$_POST['email'];
$comentario=$_POST['comentario'];

$insert = "INSERT INTO comentarios(nome, email, comentario)
                    VALUES('$nome', '$email','$comentario')";

$query = mysql_query($insert);

header('location:../../projetoblog/telaBlog.php');

?>