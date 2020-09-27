<main>
  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>
</main>

<h2 class="mt-3"><?=TITLE?></h2>

<form method="post">

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Nome</label>
      <input type="text" name="nome" class="form-control" value="<?=$obMotorista->nome?>">
    </div>
    <div class="col-md-2 mb-3">
      <label>CPF</label>
      <input type="text" name="cpf" class="form-control" placeholder="xxx.xxx.xxx-xx" value="<?=$obMotorista->cpf?>">
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>E-mail</label>
      <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com" value="<?=$obMotorista->email?>">
    </div>
    <div class="col-md-2 mb-3">
      <label>Situação</label>
      <select class="custom-select" name="situacao">
        <option selected disabled value="">Escolha...</option>
        <option value=1 <?=$obMotorista->situacao == 1? 'selected' : ''?>>Livre</option>
        <option value=2 <?=$obMotorista->situacao == 2? 'selected' : ''?>>Em curso</option>
        <option value=3 <?=$obMotorista->situacao == 3? 'selected' : ''?>>Retornando</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label>Status</label>

    <div>
      <div class="form-check form-check-inline">
        <label class="form-control">
          <input class="form-check-input" type="radio" name="status" value=1 checked> Ativo
        </label>
      </div>

      <div class="form-check form-check-inline">
        <label class="form-control">
          <input class="form-check-input" type="radio" name="status" value=0 <?=$obMotorista->status == 0? 'checked' : ''?>> Inativo
        </label>
      </div>
    </div>

  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>

</form>
