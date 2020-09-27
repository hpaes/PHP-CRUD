<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Motorista');

use \App\Entity\Motorista;

// Validação de cadastro do motorista
if (isset($_POST['nome'], $_POST['email'], $_POST['cpf'], $_POST['situacao'], $_POST['status'])) {

  $obMotorista = new Motorista;
  $obMotorista->nome = $_POST['nome'];
  $obMotorista->email = $_POST['email'];
  $obMotorista->cpf = $_POST['cpf'];
  $obMotorista->situacao = $_POST['situacao'];
  $obMotorista->status = $_POST['status'];
  $obMotorista->cadastrar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/cadastro.php';
include __DIR__ . '/includes/footer.php';
