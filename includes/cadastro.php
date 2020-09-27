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
      <input type="text" name="nome" class="form-control">
    </div>
    <div class="col-md-2 mb-3">
      <label>CPF</label>
      <input type="text" name="cpf" class="form-control" placeholder="xxx.xxx.xxx-xx">
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>E-mail</label>
      <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com">
    </div>
    <div class="col-md-2 mb-3">
      <label>Situação</label>
      <select class="custom-select" name="situacao">
        <option selected disabled value="">Escolha...</option>
        <option value="1" >Livre</option>
        <option value="2" >Em curso</option>
        <option value="3" >Retornando</option>
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
          <input class="form-check-input" type="radio" name="status" value=0> Inativo
        </label>
      </div>
    </div>

  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>

</form>
