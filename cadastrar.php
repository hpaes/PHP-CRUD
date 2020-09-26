<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Motorista;

// Validação de cadastro do motorista
if (isset($_POST['nome'], $_POST['email'], $_POST['cpf'], $_POST['situacao_id'], $_POST['status'])) {

  $obMotorista = new Motorista;
  $obMotorista->nome = $_POST['nome'];
  $obMotorista->email = $_POST['email'];
  $obMotorista->cpf = $_POST['cpf'];
  $obMotorista->situacao_id = $_POST['situacao_id'];
  $obMotorista->status = $_POST['status'];
  $obMotorista->cadastrar();

  header('location: index.php?status=success');
  exit;

}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
