<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | Cadastro de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>

<!-- INICIO NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
            </svg>
            CADASTRO DE CLIENTE
        </a>
    </div>
</nav>
<!-- FINAL NAVBAR -->

<!-- INICIO FORMULARIO -->
<div class="mx-auto" style="width: 95%; margin-top: 2%; margin-bottom: 2%;">
    <form id="formCadastroCli" class="row g-3" method="POST" action="websistema_controller.php?acao=inserircad">
        <div id="cad_tipo" name="cad_tipo">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="cad_tipo" id="cad_tipof" value="pf" checked>
                <label class="form-check-label" for="cad_tipof" name="cad_tipof">Pessoa Física</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="cad_tipo" id="cad_tipoj" value="pj">
                <label class="form-check-label" for="cad_tipoj" name="cad_tipoj">Pessoa Jurídica</label>
            </div>
        </div>

        <div class="col-md-3">
            <label id="txtCpfCnpj" for="cpfcnpj" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cad_cpfcnpj" name="cad_cpfcnpj" required>
        </div>
        <div class="col-md-9">
            <label id="txtNome" for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="cad_nome" name="cad_nome" required>
        </div>
        <div id="campoApelido" class="col-md-12" style="display: none;">
            <label for="apelido" class="form-label">Nome Fantasia</label>
            <input type="text" class="form-control" id="cad_nfantasia" name="cad_nfantasia">
        </div>
        <div class="col-md-6">
            <label for="logradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="cad_logradouro" name="cad_logradouro" required>
        </div>
        <div class="col-md-1">
            <label for="numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="cad_numero" name="cad_numero" required>
        </div>
        <div class="col-md-5">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="cad_bairro" name="cad_bairro" required>
        </div>
        <div class="col-md-6">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cad_cidade" name="cad_cidade" required>
        </div>
        <div class="col-md-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" id="cad_estado" name="cad_estado" required>
                <option selected disabled value="">Selecionar...</option>
                <option>Acre</option>
                <option>Alagoas</option>
                <option>Amapá</option>
                <option>Amazonas</option>
                <option>Bahia</option>
                <option>Ceará</option>
                <option>Espírito Santo</option>
                <option>Goiás</option>
                <option>Maranhão</option>
                <option>Mato Grosso</option>
                <option>Mato Grosso do Sul</option>
                <option>Minas Gerais</option>
                <option>Pará</option>
                <option>Paraíba</option>
                <option>Paraná</option>
                <option>Pernambuco</option>
                <option>Piauí</option>
                <option>Rio de Janeiro</option>
                <option>Rio Grande do Norte</option>
                <option>Rio Grande do Sul</option>
                <option>Rondônia</option>
                <option>Roraima</option>
                <option>Santa Catarina</option>
                <option>São Paulo</option>
                <option>Sergipe</option>
                <option>Tocantins</option>
                <option>Distrito Federal</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cad_cep" name="cad_cep" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="cad_email" name="cad_email" required>
        </div>
        <div class="col-md-3">
            <label for="fone1" class="form-label">Telefone 1</label>
            <input type="text" class="form-control" id="cad_fone1" name="cad_fone1" required>
        </div>
        <div class="col-md-3">
            <label for="fone2" class="form-label">Telefone 2</label>
            <input type="text" class="form-control" id="cad_fone2" name="cad_fone2">
        </div>
        <div class="col-md-12">
            <label for="infoAdicional" class="form-label">Informações Adicionais</label>
            <textarea class="form-control" id="cad_icomplementares" name="cad_icomplementares" rows="3"></textarea>
        </div>
        
        <div class="col-md-12 justify-content-md-end">
            <input id="btnSalvarCad" type="submit" value="Salvar" class="btn btn-success">
            <button class="btn btn-secondary me-md-2" type="button" onclick="cancelarCadastro()">Cancelar e Sair</button>
        </div>

    </form>
    <br>
</div>
<!-- FINAL FORMULARIO -->

<!-- INICIO CONFIGURAÇÃO DO FORMULÁRIO -->
<script>
    // Adiciona eventos de mudança aos elementos de input radio
    document.getElementById("cad_tipof").addEventListener("change", limparCampos);
    document.getElementById("cad_tipoj").addEventListener("change", limparCampos);

    document.getElementById("cad_cpfcnpj").focus();

    function limparCampos() {

        // Limpa todos os campos do formulário
        document.getElementById("cad_cpfcnpj").value = "";
        document.getElementById("cad_nome").value = "";
        document.getElementById("cad_nfantasia").value = "";
        document.getElementById("cad_logradouro").value = "";
        document.getElementById("cad_numero").value = "";
        document.getElementById("cad_bairro").value = "";
        document.getElementById("cad_cidade").value = "";
        document.getElementById("cad_estado").value = "";
        document.getElementById("cad_cep").value = "";
        document.getElementById("cad_email").value = "";
        document.getElementById("cad_fone1").value = "";
        document.getElementById("cad_fone2").value = "";
        document.getElementById("cad_icomplementares").value = "";

        // Atualiza a exibição do campo "Nome Fantasia" conforme o tipo selecionado
        if (document.getElementById("cad_tipof").checked) {
            document.getElementById("campoApelido").style.display = "none";
            document.getElementById("txtCpfCnpj").innerText = "CPF";
            document.getElementById("txtNome").innerText = "Nome";
        } else if (document.getElementById("cad_tipoj").checked) {
            document.getElementById("campoApelido").style.display = "block";
            document.getElementById("txtCpfCnpj").innerText = "CNPJ";
            document.getElementById("txtNome").innerText = "Razão Social";
        }

        document.getElementById("cad_cpfcnpj").focus();
    }

    function cancelarCadastro() {
        window.location.href = 'sistema.php';
    }
</script>
<!-- FINAL CONFIGURAÇÃO DO FORMULÁRIO -->

<!-- INÍCIO NOTIFICAÇÃO OK E ERRO -->
<div id="AlertaOK" class="alert alert-success alert-dismissible alertaOK">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Gravado com sucesso!</strong> 
</div>

<div id="AlertaERRO" class="alert alert-danger alert-dismissible alertaERRO">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Ops! Algo deu errado.</strong> 
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
<!-- FINAL NOTIFICAÇÃO OK E ERRO -->

<!-- INICIO SCRIPT DOS TOASTS OK E ERRO -->

<!-- FINAL SCRIPT DOS TOASTS OK E ERRO -->

</body>
</html>