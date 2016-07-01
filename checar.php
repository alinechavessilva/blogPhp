<?php
	include 'conectabanco.php';
		
		$user = $_POST['usuario'];
		$senha = $_POST['senha'];
		
		


// Verifica se houve POST e se o usuário ou a senha é/são vazio              
if (!empty($_POST) AND (empty($user) OR empty($senha))) {     
  header("Location: login.html"); exit;                                           
}

// Validar usuário/senha
$a=mysql_query("SELECT * FROM usuarios;");

while($b = mysql_fetch_array($a)){

	if (($user == $b['usuario']) && ($senha == $b['senha'])){
		include ('admin.php');
	}else{
		echo "usuario e/ou senha invalidos";
}}
	?>