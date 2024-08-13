<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
      
  <main class="form-signin w-100 m-auto">

    <form class="centered" method="POST" action="websistema_controller.php?acao=login">

      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#028050" class="bi bi-amd" viewBox="0 0 16 16">
        <path d="m.334 0 4.358 4.359h7.15v7.15l4.358 4.358V0H.334ZM.2 9.72l4.487-4.488v6.281h6.28L6.48 16H.2V9.72Z"/>
      </svg>
      <h1 class="h3 mb-3 fw-normal">WEB Sistema</h1>
  
      <div class="form-floating">
        <input type="text" class="form-control rounded-bottom-0" id="usu_usuario" name="usu_usuario" placeholder="Usuário" required>
        <label for="usu_usuario">Usuário</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="usu_senha" name="usu_senha" placeholder="Senha" required>
        <label for="usu_senha">Senha</label>
      </div>

      <input class="btn btn-success w-100 py-2" type="submit" name="submit" value="Entrar">
      <!--<a href="sistema.php"><button class="btn btn-success w-100 py-2" type="submit">Entrar</button></a>-->
      
      <div class="mt-2 tcad_usu">Ainda não é cadastrado? <a class="lcad_usu" href="cadusuario.php">CLIQUE AQUI</a></div>

      <p class="mt-5 mb-3 tcad_usu">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
        <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
      </svg>  
      Suporte Técnico: (14) 12345-6789</p>
    </form>
  </main>
  
<!-- INÍCIO NOTIFICAÇÃO OK E ERRO -->
<div id="AlertaOK" class="alert alert-success alert-dismissible alertaOK">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Gravado com sucesso!</strong> 
</div>

<div id="AlertaERRO" class="alert alert-danger alert-dismissible alertaERRO">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Ops! Algo deu errado.</strong> 
</div>

<div id="AlertaLOGIN" class="alert alert-danger alert-dismissible alertaERRO">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Usuário e/ou Senha inválido(s)!</strong> 
</div>

<script>
  // Função para mostrar o alerta por 3 segundos
  function mostrarAlerta() {
    document.getElementById('AlertaOK').style.display = 'block';
    setTimeout(function() {
      document.getElementById('AlertaOK').style.display = 'none';
    }, 3000);
  }

  // Verificar se a página carregada chama a função "alertaOK"
  if (window.location.href.indexOf('alertaOK') !== -1) {
    mostrarAlerta();
  }
</script>

<script>
  // Função para mostrar o alerta por 3 segundos
  function mostrarAlerta() {
    document.getElementById('AlertaERRO').style.display = 'block';
    setTimeout(function() {
      document.getElementById('AlertaERRO').style.display = 'none';
    }, 3000);
  }

  // Verificar se a página carregada chama a função "alertaOK"
  if (window.location.href.indexOf('alertaERRO') !== -1) {
    mostrarAlerta();
  }
</script>

<script>
  // Função para mostrar o alerta por 3 segundos
  function mostrarAlerta() {
    document.getElementById('AlertaLOGIN').style.display = 'block';
    setTimeout(function() {
      document.getElementById('AlertaLOGIN').style.display = 'none';
    }, 3000);
  }

  // Verificar se a página carregada chama a função "alertaOK"
  if (window.location.href.indexOf('alertaLOGIN') !== -1) {
    mostrarAlerta();
  }
</script>
<!-- FINAL NOTIFICAÇÃO OK E ERRO -->

</body>
</html>