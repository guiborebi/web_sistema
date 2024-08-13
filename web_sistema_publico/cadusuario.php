<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | Cadastro de Usuário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
        <form class="centered" method="POST" action="websistema_controller.php?acao=inserir">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#028050" class="bi bi-amd" viewBox="0 0 16 16">
                <path d="m.334 0 4.358 4.359h7.15v7.15l4.358 4.358V0H.334ZM.2 9.72l4.487-4.488v6.281h6.28L6.48 16H.2V9.72Z" />
            </svg>
            <h1 class="h3 mb-3 fw-normal">WEB Sistema</h1>

            <div class="form-floating">
                <input type="text" class="form-control rounded-bottom-0" id="usu_nome" name="usu_nome" placeholder="Nome" maxlength="50" required>
                <label for="nome">Nome Completo</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control rounded-0" id="usu_usuario" name="usu_usuario" placeholder="Usuário" maxlength="30" required>
                <label for="usuario">Usuário</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control rounded-0" id="usu_senha" name="usu_senha" placeholder="Senha" maxlength="30" required>
                <label for="senha">Senha</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control rounded-bottom-2 ajuste-form" id="usu_csenha" name="CSenha" placeholder="Senha" maxlength="30" required>
                <label for="CSenha">Confirmar Senha</label>
            </div>
            <input id="liveToastBtnCadUsu" type="submit" value="Cadastrar" class="btn btn-success w-100 py-2"></input>

            <p class="mt-2 mb-3 tcad_usu"> 
                Já é cadastrado? <a href="login.php" class="lcad_usu">ENTRAR</a>
            </p>

            <!-- INICIO MENSAGEM SUCESSO -->
            <div id="msg-cad-sucesso">
                
            </div>
            <!-- FINAL MENSAGEM SUCESSO -->

            <!-- INICIO MENSAGEM ERRO -->
            <div class="msg-cad-erro">
                As senhas não são iguais!
            </div>
            <!-- FINAL MENSAGEM ERRO -->
            
        </form>
    </main>

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

<!-- INICIO VALIDA CAMPOS SENHA -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Seleciona o formulário
        const form = document.querySelector("form");

        // Seleciona a mensagem de erro
        const msgErro = document.querySelector(".msg-cad-erro");

        // Inicialmente, esconde a mensagem de erro
        msgErro.style.display = "none";

        // Adiciona um evento ao formulário quando ele for enviado
        form.addEventListener("submit", function(event) {
            // Obtém os valores dos campos de senha
            const senha = document.getElementById("usu_senha").value;
            const cSenha = document.getElementById("usu_csenha").value;

            // Verifica se as senhas não são iguais
            if (senha !== cSenha) {
                // Impede o envio do formulário
                event.preventDefault();
                // Exibe a mensagem de erro
                msgErro.style.display = "block";
            }
        });
    });
</script>
<!-- FINAL VALIDA CAMPO SENHA -->

</body>
</html>