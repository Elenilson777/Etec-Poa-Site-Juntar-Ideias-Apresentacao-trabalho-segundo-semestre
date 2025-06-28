<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
	<style>
	body{
		font-family:Verdana, Geneva, sans-serif;
		font-size:1em;
		}
	p{ color:#F00;
		font-weight:bold;
	
	
	}
	a{text-decoration:none;}
	a p{
	
	background:#81bb03;	
	color: #000;
	text-align: center;
	width: 64px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius:12px;
	border-radius:12px;
	outline:none;
	
		}
	a p:hover{
	background:#f25022;
	color:#000;
			}
	</style>
</head>
<body>
<?php
	$email_destino="http://suporte@juntarideias.com.br";
	if( (empty($_POST['nome'])) || (empty($_POST['assunto'])) || (empty($_POST['email'])) || (empty($_POST['telefone'])) || (empty($_POST['mensagem'])) )
		{
		echo "todos os campos devem ser preenchidos !";
		echo "<br /><center><a href='contato.html'>Voltar</a></center>";}
	else
		{
		$nome=$_POST['nome'];
		$assunto=$_POST['assunto'];
		$email=$_POST['email'];
		$telefone=$_POST['telefone']; 
		$msg=$_POST['mensagem'];	
		$mensagem="Nome do usuario: $nome  \n";
		$mensagem.="Assunto: $assunto \n";
		$mensagem.="Email: $email \n";
		$mensagem.="Telefone: $telefone \n";
		$mensagem.="Mensagem: $msg";
		//mail($email_destino,$assunto,$mensagem);
	echo "$mensagem";
	echo "<br /><br /><center><p>Email enviado com sucesso</center></p>";
	echo "<br /><br /><center><a href='index.html'><p>Voltar<p></a></center>";
	
	}
?>
</body>
</html>