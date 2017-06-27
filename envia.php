<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$comentario = $_POST['comentario'];
$emaildestinatario = 'leonardo.173@hotmail.com';
$assunto = 'PHP formulario teste';

$emailCorpo = '
<p>Dados Prenchidos no site "https://phpformulario.000webhostapp.com"</p>
<p> <b>Nome:</b> '.$nome.' </p>
<p> <b>E-mail:</b> '.$email.' </p>
<p> <b>Telefone:</b> '.$telefone.' </p>
<p> <b>Comentário:</b> '.$comentario.' </p>
';


$headers = "MIME-Version: 1.1\r\n"; // \r\n significa enter e nova linha
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // email do remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path mesmo email do remetente
$envio = mail($emaildestinatario, $assunto, $emailCorpo, $headers);  //.funcao mail()

 if($envio){
 	echo"Enviado com sucesso";
 	header("location:https://phpformulario.000webhostapp.com/");
 }else{
 	echo"erro";
 }
