// JavaScript Document
function validaa() {
var nome2 = formc.nome2.value;
var assunto2 = formc.assunto2.value;
var email2 = formc.email2.value;
var telefone2 = formc.telefone2.value;
var mensagem2 = formc.mensagem2.value;

if (nome2 == "") {
alert('Preencha o campo com seu nome');
formc.nome2.focus();
return false;
}

if (assunto2 == "") {
alert('Preencha o campo com seu assunto');
formc.assunto2.focus();
return false;
}

if (email2 == "") {
alert('Preencha o campo com seu email');
formc.email2.focus();
return false;
}

if (telefone2 == "") {
alert('Preencha o campo com seu telefone');
formc.telefone2.focus();
return false;
}

if (mensagem2 == "") {
alert('Preencha o campo com sua mensagem');
formc.mensagem2.focus();
return false;
}
}