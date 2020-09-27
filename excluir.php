<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Motorista;

// VALIDAÇÃO O ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])) {
  header('location: index.php?status=error');
  exit;
}

// CONSULTA O MOTORISTA
$obMotorista = Motorista::getMotorista($_GET['id']);

// VALIDAÇÃO DO MOTORISTA
if(!$obMotorista instanceof Motorista) {
  header('location: index.php?status=error');
  exit;
}

// VALIDAÇÃO DO POST
if (isset($_POST['excluir'])) {

  $obMotorista->excluir();

  header('location: index.php?status=success');
  exit;

}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/confirmar-exclusao.php';
include __DIR__ . '/includes/footer.php';
