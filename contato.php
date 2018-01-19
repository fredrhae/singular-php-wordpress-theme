<?php
require_once('header.php');
$home = get_template_directory_uri();

// Formulario contato
$nome = $_POST['form-nome'];
$email = $_POST['form-email'];
$telefone = $_POST['form-telefone'];
$assunto = $_POST['form-assunto'];
$mensagem = $_POST['form-mensagem'];

$formularioContatoPreenchido = isset($nome) && isset($email) && isset($telefone)
                               isset($telefone) && isset($mensagem);
