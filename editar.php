<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar motorista');

use \App\Entity\Motorista;

// VALIDAÇÃO O ID
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
  header('location: index.php?status=error');
  exit;
}

// CONSULTA O MOTORISTA
$obMotorista = Motorista::getMotorista($_GET['id']);

// VALIDAÇÃO DO MOTORISTA
if (!$obMotorista instanceof Motorista) {
  header('location: index.php?status=error');
  exit;
}

// VALIDAÇÃO DO POST
if (isset($_POST['nome'], $_POST['email'], $_POST['cpf'], $_POST['situacao'], $_POST['status'])) {
  $obMotorista->nome = $_POST['nome'];
  $obMotorista->email = $_POST['email'];
  $obMotorista->cpf = $_POST['cpf'];
  $obMotorista->situacao = $_POST['situacao'];
  $obMotorista->status = $_POST['status'];
  $obMotorista->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
