<?php

class CadUsuario{
	private $usu_id;
	private $usu_nome;
	private $usu_usuario;
	private $usu_senha;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo,$valor){
		$this->$atributo = $valor;
		return $this;
	}
}

class LoginUsuario{
	private $usu_usuario;
	private $usu_senha;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo,$valor){
		$this->$atributo = $valor;
		return $this;
	}
}

class CadGeral{
	private $cad_tipo;
	private $cad_cpfcnpj;
	private $cad_nome;
	private $cad_nfantasia;
	private $cad_logradouro;
	private $cad_numero;
	private $cad_bairro;
	private $cad_cidade;
	private $cad_estado;
	private $cad_cep;
	private $cad_email;
	private $cad_fone1;
	private $cad_fone2;
	private $cad_icomplementares;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo,$valor){
		$this->$atributo = $valor;
		return $this;
	}
}

?>