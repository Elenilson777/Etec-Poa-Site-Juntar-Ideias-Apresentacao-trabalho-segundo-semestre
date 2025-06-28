<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
$email_destino="juntar_ideias@outlook.com" ;
if ((isset($_POST['nome']))&& (isset($_POST['empresa'])) && (isset($_POST['email']))&& (isset($_POST['telefone']))&& (isset($_POST['mensagem']))){
$assunto=$_POST['empresa'];
$nome=$_POST['nome'];
$empresa=$_POST['empresa'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$mensagem=$_POST['mensagem'];
}else{ echo "todos os campos devem ser preenchidos !";}
$mensagem="Nome do usuario: $nome \n";
$mensagem.="Empresa: $empresa \n";
$mensagem.="Email: $email \n";
$mensagem.="Telefone: $telefone";
$mensagem.="Mensagem: $mensagem";
mail($email_destino[$assunto],$assunto,$mensagem);
echo"sua mensagem foi enviada com sucesso";
?>
</BODY>
</HTML>
