// JavaScript Document
function validar() {
var nome = form1.nome.value;
var assunto = form1.assunto.value;
var email = form1.email.value;
var telefone = form1.telefone.value;
var mensagem = form1.mensagem.value;

if (nome == "") {
alert('Preencha o campo com seu nome');
form1.nome.focus();
return false;
}

if (assunto == "") {
alert('Preencha o campo com seu assunto');
form1.assunto.focus();
return false;
}

if (email == "") {
alert('Preencha o campo com seu email');
form1.email.focus();
return false;
}

if (telefone == "") {
alert('Preencha o campo com seu telefone');
form1.telefone.focus();
return false;
}

if (mensagem == "") {
alert('Preencha o campo com sua mensagem');
form1.mensagem.focus();
return false;
}
}