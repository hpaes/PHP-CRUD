<?php
  $resultados = ' ';
  foreach ($motoristas as $motorista) {
    $resultados .= '<tr>
                      <td>'.$motorista->id.'</td>
                      <td>'.$motorista->nome.'</td>
                      <td>'.$motorista->cpf.'</td>
                      <td>'.$motorista->email.'</td>
                      <td>'.$motorista->situacao_id.'</td>
                      <td>'.($motorista->status=== 0 ? 'Inativo' : 'Ativo').'</td>
                    </tr>';

  }
?>


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
          <th>ID</th>
          <th>Nome</th>
          <th>CPF</th>
          <th>E-Mail</th>
          <th>Situação</th>
          <th>Status</th>
          <th>Ações</th>
        </tr>
      </thead>
    <tbody>
      <?=$resultados?>
    </tbody>

    </table>
  </section>
</main>
