<html>
    <title>Contato do Programador</title>
<body>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="C:\Laragon\www\projetoLaravel\Aulalaravel\resources\views\welcome.blade.php|">Pagina Inicial</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contato.blade.php">Contato Programador</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="sobre.blade.php">Sobre</a>
  </li>
</ul>
    <h1>Pagina para contatar o programador</h1>

    <form class="row g-3">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Primeiro Nome</label>
    <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
    <div class="valid-feedback">
      Aceito!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Segundo Nome</label>
    <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
    <div class="valid-feedback">
      Aceito!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">E-mail</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Aceito e-mail.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">Cidade</label>
    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      Cidade Validada.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer04" class="form-label">Estado</label>
    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Escolher...</option>
      <option>...</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Seleciona Estado.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">CEP</label>
    <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
      Obrigatorio CEP valido.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Aceitar os termos.
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
      Voc?? deve concordar antes de enviar.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar Formulario</button>
  </div>
</form>

</body>
</html>