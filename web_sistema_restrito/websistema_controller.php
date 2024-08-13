<?php

	require "../../web_sistema_restrito/websistema_model.php";
	require "../../web_sistema_restrito/websistema_service.php";
	require "../../web_sistema_restrito/conexao.php";

	$cad_tipo = $cad_cpfcnpj = $cad_nome = $cad_nfantasia = $cad_logradouro = $cad_numero = $cad_bairro = $cad_cidade = $cad_estado = $cad_cep = $cad_email = $cad_fone1 = $cad_fone2 = $cad_icomplementares = null;

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if( $acao == 'inserir'){
		$usu_nome = new CadUsuario();
		$usu_nome->__set('usu_nome', $_POST['usu_nome']);

		$usu_usuario = new CadUsuario();
		$usu_usuario->__set('usu_usuario', $_POST['usu_usuario']);

		$usu_senha = new CadUsuario();
		$usu_senha->__set('usu_senha', $_POST['usu_senha']);

		$conexao = new Conexao();

		$cadusuarioService = new CadUsuarioService($conexao, $usu_nome, $usu_usuario, $usu_senha);
		$cadusuarioService->inserir();

		header('Location: login.php?inclusao=1&alertaOK');

	} 
	
	else if($acao == 'recuperar'){

		$usu_nome = new CadUsuario();
		$conexao = new Conexao();

		$cadusuarioService = new CadUsuarioService($conexao, $usu_nome, $usu_usuario, $usu_senha);
		$cadusuarios = $cadusuarioService->recuperar();

	} 
	
	else if($acao == 'atualizar'){

		$usu_nome = new CadUsuario();
		$usu_nome->__set('usu_id', $_POST['usu_id'])->__set('usu_nome', $_POST['usu_nome']);

		$conexao = new Conexao();

		$cadusuarioService = new cadusuarioService($conexao, $usu_nome);
		if($cadusuarioService->atualizar()){

			if(isset($_GET['pag']) && $_GET['pag'] == 'index'){
				header('Location: login.php');	
			} else {
				header('Location: login.php');
			}
		}
	
	} 
	
	else if($acao == 'remover'){
		$usu_nome = new CadUsuario();
		$usu_nome->__set('usu_id', $_GET['usu_id']);

		$conexao = new Conexao();

		$cadusuarioService = new CadUsuarioService($conexao, $usu_nome);
		$cadusuarios = $cadusuarioService->remover();

			if(isset($_GET['pag']) && $_GET['pag'] == 'index'){
				header('Location: login.php');	
			} else {
				header('Location: login.php');
			}

			
	} 
	
	else if($acao == 'login'){

		if(isset($_POST['usu_usuario']) && !empty($_POST['usu_usuario']) && isset($_POST['usu_senha']) && !empty($_POST['usu_senha'])){

			$conexao = new Conexao();

			$usu_usuario = addslashes($_POST['usu_usuario']);
			$usu_senha = addslashes($_POST['usu_senha']);

			$loginusuarioService = new LoginUsuarioService($conexao, $usu_usuario, $usu_senha);
        	$loginusuarioService->login();

		} else {
			print_r('Deu errado!');
		}

	} 
	
	else if($acao == 'inserircad'){

		$cad_tipo = new CadGeral();
		$cad_tipo->__set('cad_tipo', $_POST['cad_tipo']);

		$cad_cpfcnpj = new CadGeral();
		$cad_cpfcnpj->__set('cad_cpfcnpj', $_POST['cad_cpfcnpj']);

		$cad_nome = new CadGeral();
		$cad_nome->__set('cad_nome', $_POST['cad_nome']);

		$cad_nfantasia = new CadGeral();
		$cad_nfantasia->__set('cad_nfantasia', $_POST['cad_nfantasia']);

		$cad_logradouro = new CadGeral();
		$cad_logradouro->__set('cad_logradouro', $_POST['cad_logradouro']);

		$cad_numero = new CadGeral();
		$cad_numero->__set('cad_numero', $_POST['cad_numero']);

		$cad_bairro = new CadGeral();
		$cad_bairro->__set('cad_bairro', $_POST['cad_bairro']);

		$cad_cidade = new CadGeral();
		$cad_cidade->__set('cad_cidade', $_POST['cad_cidade']);

		$cad_estado = new CadGeral();
		$cad_estado->__set('cad_estado', $_POST['cad_estado']);

		$cad_cep = new CadGeral();
		$cad_cep->__set('cad_cep', $_POST['cad_cep']);

		$cad_email = new CadGeral();
		$cad_email->__set('cad_email', $_POST['cad_email']);

		$cad_fone1 = new CadGeral();
		$cad_fone1->__set('cad_fone1', $_POST['cad_fone1']);

		$cad_fone2 = new CadGeral();
		$cad_fone2->__set('cad_fone2', $_POST['cad_fone2']);

		$cad_icomplementares = new CadGeral();
		$cad_icomplementares->__set('cad_icomplementares', $_POST['cad_icomplementares']);

		$conexao = new Conexao();

		$cadgeralService = new CadGeralService($conexao, $cad_tipo, $cad_cpfcnpj, $cad_nome, $cad_nfantasia, $cad_logradouro, $cad_numero, $cad_bairro, $cad_cidade, $cad_estado, $cad_cep, $cad_email, $cad_fone1, $cad_fone2, $cad_icomplementares);
		$cadgeralService->inserircad();

		header('Location: cadastro.php?inclusao=1&alertaOK');

	} else if($acao == 'recuperarcad'){

		$conexao = new Conexao();

		$recuperarcadgeralService = new RecuperarCadGeralService($conexao, $cad_tipo, $cad_cpfcnpj, $cad_nome, $cad_nfantasia, $cad_logradouro, $cad_numero, $cad_bairro, $cad_cidade, $cad_estado, $cad_cep, $cad_email, $cad_fone1, $cad_fone2, $cad_icomplementares);
    	$recuperarcadgeral = $recuperarcadgeralService->recuperarcad();
	} 
	
?>