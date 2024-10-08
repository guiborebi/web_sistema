<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/config.js"></script>
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>

<!-- INICIO NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#028050" class="bi bi-amd" viewBox="0 0 16 16">
            <path d="m.334 0 4.358 4.359h7.15v7.15l4.358 4.358V0H.334ZM.2 9.72l4.487-4.488v6.281h6.28L6.48 16H.2V9.72Z"/>
        </svg>
        WEB Sistema
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu">
            <li><a type="button" class="dropdown-item" href="cadastro.php">Pessoa</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a type="button" class="dropdown-item">Produto</a></li>
            <li><a type="button" class="dropdown-item">Serviço</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Consulta
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="consultacad.php">Pessoas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Vendas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Config
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Cadastrar Serviço</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Cadastrar Produto</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Sair</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="CPF/CNPJ" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Pesquisar</button>
      </form>
  </div>
</nav>
<!-- FINAL NAVBAR -->

<div>
  <img id="logoBackground" src="img/logo.png" class="img-fluid">
</div>

<!-- INÍCIO NOTIFICAÇÃO OK E ERRO -->
<div id="liveToastOK" class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
      Teste de notificação OK.
    </div>
    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>

<div id="liveToastERRO" class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
      Teste de notificação ERRO.
    </div>
    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>
<!-- FINAL NOTIFICAÇÃO OK E ERRO -->

</body>
</html>