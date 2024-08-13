<?php
    $acao = 'recuperarcad';
	require 'websistema_controller.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | Consulta de Cadastros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="css/estilos.css" rel="stylesheet">
</head>
<div>

<!-- INICIO NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            CONSULTA DE CADASTROS
        </a>
    </div>
</nav>
<!-- FINAL NAVBAR -->

<!-- INICIO FORMULARIO -->
<div class="mx-auto" style="width: 95%; margin-top: 2%; margin-bottom: 2%;">
    <form id="formConsultaCad" class="row g-3">
        <div class="col-md-4">
            <label id="txtCpfCnpj" for="cpfcnpj" class="form-label">CPF/CNPJ</label>
            <input type="text" class="form-control" id="cpfcnpj" required>
        </div>
        <div class="col-md-8">
            <label id="txtNome" for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" required>
        </div>
        <div class="d-grid gap-2">
            <button id="pesquisarCad" class="btn btn-success" type="button">Pesquisar</button>
            <button id="novaPesquisarCad" class="btn btn-success" type="button">Nova Pesquisa</button>
            <button id="btnCancelar" class="btn btn-secondary" type="button">Cancelar e Sair</button>
        </div>
    </form>
</div>
<!-- FINAL FORMULARIO -->

<!---------------------------------------------------->

<table class="table mx-auto cadastro-table" style="width: 95%; margin-top: 2%; margin-bottom: 2%;">
    <thead>
        <tr>
            <th scope="col">CPF/CNPJ</th>
            <th scope="col">NOME/RAZÃO SOCIAL</th>
            <th scope="col">OPÇÕES</th>
        </tr>

    <?php

    $conexao = new Conexao();
    $recuperarService = new RecuperarCadGeralService($conexao, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

    $data = $recuperarService->recuperarcad();

    if (empty($data)) {
        echo "<tr><td colspan='3' class='text-center'>Nenhuma informação encontrada.</td><td></td></tr>";
    } else {

        foreach ($data as $index => $row) {
            echo "<tr class='cadastro-row'>";
            echo "<td>{$row->cad_cpfcnpj}</td>";
            echo "<td>{$row->cad_nome}</td>";
            echo "<td>";
            echo '<button type="button" class="btnAbrirEditar" data-bs-toggle="modal" data-bs-target="#myModal' . $index . '">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>';
            echo '<button type="button" class="btnAbrirEditar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </button>';
            echo '<button type="button" class="btnAbrirEditar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                    </svg>
                </button>';

// INICIO MODAL DE EXIBIÇÃO DE DETALHES DO CADASTRO
echo '<div class="modal" id="myModal' . $index . '">';
echo '<div class="modal-dialog modal-dialog-scrollable">';
echo '<div class="modal-content">';

    echo '<div class="modal-header">';
    echo '<h4 class="modal-title">CONSULTA DE CADASTRO</h4>';
    echo '<button type="button" class="btn-close" data-bs-dismiss="modal"></button>';
    echo '</div>';

    echo '<div class="modal-body">';
    echo "  <h6>CPF:</h6><p>{$row->cad_cpfcnpj}</p>";
    echo '  <br>';
    echo "  <h6>Nome:</h6><p>{$row->cad_nome}</p>";
    echo '  <br>';
    echo "  <h6>Nome Fantasia:</h6><p>{$row->cad_nfantasia}</p>";
    echo '  <br>';
    echo "  <h6>Logradouro:</h6><p>{$row->cad_logradouro}</p>";
    echo '  <br>';
    echo "  <h6>Número:</h6><p>{$row->cad_numero}</p>";
    echo '  <br>';
    echo "  <h6>Bairro:</h6><p>{$row->cad_bairro}</p>";
    echo '  <br>';
    echo "  <h6>Cidade:</h6><p>{$row->cad_cidade}</p>";
    echo '  <br>';
    echo "  <h6>Estado:</h6><p>{$row->cad_estado}</p>";
    echo '  <br>';
    echo "  <h6>CEP:</h6><p>{$row->cad_cep}</p>";
    echo '  <br>';
    echo "  <h6>E-mail:</h6><p>{$row->cad_email}</p>";
    echo '  <br>';
    echo "  <h6>Telefone 1:</h6><p>{$row->cad_fone1}</p>";
    echo '  <br>';
    echo "  <h6>Telefone 2:</h6><p>{$row->cad_fone2}</p>";
    echo '  <br>';
    echo "  <h6>Informações Adicionais:</h6><p>{$row->cad_icomplementares}</p>";
    echo '</div>';

    echo '<div class="modal-footer">';
    echo '<button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>';
    echo '</div>';

    echo '</div>';
    echo '</div>';
    echo '</div>';
// FINAL MODAL DE EXIBIÇÃO DE DETALHES DO CADASTRO

            echo "</td>";
            echo "</tr>";
        }
    }

    ?>

<!-- CONFIRMAÇÃO DE APAGAR -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Excluir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Você tem certeza que deseja apagar o cadastro selecionado?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button id="btnApagar" type="button" class="btn btn-danger" data-id="<?php echo $row->cad_id; ?>">Apagar</button>
      </div>
    </div>
  </div>
</div>
<!-- CONFIRMAÇÃO DE APAGAR -->

</table>

<!---------------------------------------------------->



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

<!-- INICIO CONFIGURAÇÃO DO FORMULÁRIO -->
<script>
    // FUNÇÃO PARA ALTERNAR ENTRE PESSOA FÍSICA E JURIFICA
    function alternarTipoPessoa() {
        var tipoFisica = document.getElementById("tipoFisica");
        var tipoJuridica = document.getElementById("tipoJuridica");
        var campoApelido = document.getElementById("campoApelido");
        var txtCpfCnpj = document.getElementById("txtCpfCnpj");
        var txtNome = document.getElementById("txtNome");

        if (tipoFisica.checked) {
            campoApelido.style.display = "none";
            txtCpfCnpj.textContent = "CPF";
            txtNome.textContent = "Nome";
        } else if (tipoJuridica.checked) {
            campoApelido.style.display = "block";
            txtCpfCnpj.textContent = "CNPJ";
            txtNome.textContent = "Razão Social";
        }

        // LIMPAR OS CAMPOS
        document.getElementById("cpfcnpj").value = "";
        document.getElementById("nome").value = "";
        document.getElementById("apelido").value = "";
        document.getElementById("logradouro").value = "";
        document.getElementById("numero").value = "";
        document.getElementById("bairro").value = "";
        document.getElementById("cidade").value = "";
        document.getElementById("estado").value = "";
        document.getElementById("cep").value = "";
        document.getElementById("email").value = "";
        document.getElementById("fone1").value = "";
        document.getElementById("fone2").value = "";
        document.getElementById("infoAdicional").value = "";
    }

    // CRIANDO VARIAVEL PARA O EVENTO "CHANGE" NAS OPÇÕES DE RADIO
    var tipoFisica = document.getElementById("tipoFisica");
    var tipoJuridica = document.getElementById("tipoJuridica");

    tipoFisica.addEventListener("change", alternarTipoPessoa);
    tipoJuridica.addEventListener("change", alternarTipoPessoa);

    // CHAMANDO A FUNÇÃO PARA DEFINIR OS ESTADO INICIAL DO FORMULÁRIO
    alternarTipoPessoa();
</script>
<!-- FINAL CONFIGURAÇÃO DO FORMULÁRIO -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var pesquisarButton = document.getElementById("pesquisarCad");

        pesquisarButton.addEventListener("click", function () {
            var cpfcnpjInput = document.getElementById("cpfcnpj").value.trim();
            var nomeInput = document.getElementById("nome").value.trim();

            var rows = document.querySelectorAll(".cadastro-row");

            rows.forEach(function (row) {
                var cpfcnpjCell = row.cells[0].textContent.trim();
                var nomeCell = row.cells[1].textContent.trim();

                // Verifica se a linha atende aos critérios de pesquisa
                var cpfcnpjMatch = cpfcnpjInput === "" || cpfcnpjCell.includes(cpfcnpjInput);
                var nomeMatch = nomeInput === "" || nomeCell.includes(nomeInput);

                // Oculta/mostra a linha com base nos critérios
                row.style.display = cpfcnpjMatch && nomeMatch ? "" : "none";
            });
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var cpfcnpjInput = document.getElementById("cpfcnpj");
        var nomeInput = document.getElementById("nome");

        cpfcnpjInput.addEventListener("input", function() {
            nomeInput.disabled = cpfcnpjInput.value.trim() !== "";
        });

        nomeInput.addEventListener("input", function() {
            cpfcnpjInput.disabled = nomeInput.value.trim() !== "";
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Obtém a referência do botão "novaPesquisarCad" pelo ID
        var novaPesquisarCadButton = document.getElementById("novaPesquisarCad");

        // Adiciona um ouvinte de evento de clique ao botão
        novaPesquisarCadButton.addEventListener("click", function() {
            // Limpa e desbloqueia os campos
            document.getElementById("cpfcnpj").value = "";
            document.getElementById("nome").value = "";
            document.getElementById("cpfcnpj").disabled = false;
            document.getElementById("nome").disabled = false;

            // Aciona o clique no botão "pesquisarCad"
            document.getElementById("pesquisarCad").click();
        });
    });
</script>


<script>
    // Função para redirecionar para a página sistema.php
    function redirectToMenuPage() {
        window.location.href = 'sistema.php'
    }

    // Obtém a referência do botão "btnCancelar" pelo ID
    var btnCancelar = document.getElementById("btnCancelar");

    // Adiciona um ouvinte de evento de clique ao botão
    btnCancelar.addEventListener("click", redirectToMenuPage);
</script>

<script>
    // Função para redirecionar para a página cadastro.php
    function redirectToMenuPage() {
        window.location.href = 'cadastro.php'
    }

    // Obtém a referência do botão "btnEditar" pelo ID
    var btnEditar = document.getElementById("btnEditar");

    // Adiciona um ouvinte de evento de clique ao botão
    btnEditar.addEventListener("click", redirectToMenuPage);
</script>

</body>
</html>