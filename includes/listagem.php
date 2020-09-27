<?php

$mensagem = '';
if (isset($_GET['status'])) {
  switch ($_GET['status']) {
    case 'success':
      $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
      break;
    case 'error':
      $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
  }
}


$resultados = '';
foreach ($motoristas as $motorista) {
  $resultados .= '<tr>
                      <td>' . $motorista->nome . '</td>
                      <td>' . $motorista->cpf . '</td>
                      <td>' . $motorista->email . '</td>
                      <td>' . situ($motorista->situacao_id) . '</td>
                      <td>' . ($motorista->status == 0 ? 'Inativo' : 'Ativo') . '</td>
                      <td>
                        <a href="editar.php?id=' . $motorista->id . '"><button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id=' . $motorista->id . '"><button type="button" class="btn btn-danger">Excluir</button>
                        </a>

                      </td>
                    </tr>';
}
function situ($situ_id)
{
  switch ($situ_id) {
    case '1':
      return 'Livre';
      break;
    case '2':
      return 'Em curso';
      break;
    case '3':
      return 'Retornando';
      break;
  }
}

$resultados = strlen($resultados) ? $resultados : '<tr>
                                                      <td colspan="6" class="text-center">
                                                        Nenhuma vaga encontrada
                                                      </td>
                                                    </tr>';

?>

<?= $mensagem ?>

<main>
  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Novo cadastro</button>
    </a>
  </section>

  <section>

    <table class="table bg-light mt-3">
      <thead>
        <tr>
          <th>Nome</th>
          <th>CPF</th>
          <th>E-Mail</th>
          <th>Situação</th>
          <th>Status</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?= $resultados ?>
      </tbody>

    </table>
  </section>
</main>
