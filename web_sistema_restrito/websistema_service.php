<?php

//CRUD
class CadUsuarioService {

	private $conexao;
	private $usu_id;
	private $usu_nome;
	private $usu_usuario;
	private $usu_senha;

	public function __construct(Conexao $conexao, CadUsuario $usu_nome, $usu_usuario, $usu_senha) {
		$this->conexao = $conexao->conectar();
		$this->usu_id = $usu_id;
		$this->usu_nome = $usu_nome;
		$this->usu_usuario = $usu_usuario;
		$this->usu_senha = $usu_senha;
	}

	public function inserir() { //create
		$query = 'insert into tb_usuarios(usu_nome, usu_usuario, usu_senha)values(:usu_nome, :usu_usuario, :usu_senha)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':usu_nome',$this->usu_nome->__get('usu_nome'));
		$stmt->bindValue(':usu_usuario',$this->usu_usuario->__get('usu_usuario'));
		$stmt->bindValue(':usu_senha',$this->usu_senha->__get('usu_senha'));
		$stmt->execute();
	}

	public function recuperar() { //read
		$query = '
			select 
				t.usu_id, s.status, t.usu_nome 
			from 	
				tb_usuarios as t left join tb_status as s on (t.id_status = s.usu_id)';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);  
	}

	public function atualizar() { //update
		
		$query = "update tb_usuarios set usu_nome = ? where usu_id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->usu_nome->__get('usu_nome'));
		$stmt->bindValue(2, $this->usu_nome->__get('usu_id'));
		return $stmt->execute();
	}

	public function remover() { //delete

		$query = 'delete from tb_usuarios where usu_id = :usu_id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':usu_id',$this->usu_nome->__get('usu_id'));
		$stmt->execute();
	}
}

class LoginUsuarioService {
    private $conexao;
    private $usu_usuario;
    private $usu_senha;

	public function __construct(Conexao $conexao, $usu_usuario, $usu_senha) {
		$this->conexao = $conexao->conectar();
		$this->usu_usuario = $usu_usuario;
		$this->usu_senha = $usu_senha;
	}
	
	public function login() {
        $sql = "SELECT * FROM tb_usuarios WHERE usu_usuario = :usu_usuario AND usu_senha = :usu_senha";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(":usu_usuario", $this->usu_usuario);
		$stmt->bindValue(":usu_senha", $this->usu_senha);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
			// Username and password are correct
			header('Location: ../web_sistema_publico/sistema.php');
			exit();
		} else {
			// Username or password is incorrect
			header('Location: ../web_sistema_publico/login.php?alertaLOGIN');
			exit();
		}
    }

}

class CadGeralService {

	private $conexao;
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

	public function __construct(Conexao $conexao, $cad_tipo, $cad_cpfcnpj, $cad_nome, $cad_nfantasia, $cad_logradouro, $cad_numero, $cad_bairro, $cad_cidade, $cad_estado, $cad_cep, $cad_email, $cad_fone1, $cad_fone2, $cad_icomplementares) {
		$this->conexao = $conexao->conectar();
		$this->cad_tipo = $cad_tipo;
		$this->cad_cpfcnpj = $cad_cpfcnpj;
		$this->cad_nome = $cad_nome;
		$this->cad_nfantasia = $cad_nfantasia;
		$this->cad_logradouro = $cad_logradouro;
		$this->cad_numero = $cad_numero;
		$this->cad_bairro = $cad_bairro;
		$this->cad_cidade = $cad_cidade;
		$this->cad_estado = $cad_estado;
		$this->cad_cep = $cad_cep;
		$this->cad_email = $cad_email;
		$this->cad_fone1 = $cad_fone1;
		$this->cad_fone2 = $cad_fone2;
		$this->cad_icomplementares = $cad_icomplementares;
	}

	public function inserircad() { //create
		$query = 'insert into tb_cadastros(cad_tipo, cad_cpfcnpj, cad_nome, cad_nfantasia, cad_logradouro, cad_numero, cad_bairro, cad_cidade, cad_estado, cad_cep, cad_email, cad_fone1, cad_fone2, cad_icomplementares)values(:cad_tipo, :cad_cpfcnpj, :cad_nome, :cad_nfantasia, :cad_logradouro, :cad_numero, :cad_bairro, :cad_cidade, :cad_estado, :cad_cep, :cad_email, :cad_fone1, :cad_fone2, :cad_icomplementares)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':cad_tipo',$this->cad_tipo->__get('cad_tipo'));
		$stmt->bindValue(':cad_cpfcnpj',$this->cad_cpfcnpj->__get('cad_cpfcnpj'));
		$stmt->bindValue(':cad_nome',$this->cad_nome->__get('cad_nome'));
		$stmt->bindValue(':cad_nfantasia',$this->cad_nfantasia->__get('cad_nfantasia'));
		$stmt->bindValue(':cad_logradouro',$this->cad_logradouro->__get('cad_logradouro'));
		$stmt->bindValue(':cad_numero',$this->cad_numero->__get('cad_numero'));
		$stmt->bindValue(':cad_bairro',$this->cad_bairro->__get('cad_bairro'));
		$stmt->bindValue(':cad_cidade',$this->cad_cidade->__get('cad_cidade'));
		$stmt->bindValue(':cad_estado',$this->cad_estado->__get('cad_estado'));
		$stmt->bindValue(':cad_cep',$this->cad_cep->__get('cad_cep'));
		$stmt->bindValue(':cad_email',$this->cad_email->__get('cad_email'));
		$stmt->bindValue(':cad_fone1',$this->cad_fone1->__get('cad_fone1'));
		$stmt->bindValue(':cad_fone2',$this->cad_fone2->__get('cad_fone2'));
		$stmt->bindValue(':cad_icomplementares',$this->cad_icomplementares->__get('cad_icomplementares'));
		$stmt->execute();
	}

	public function recuperar() { //read
		$query = '
			select 
				cad_id,
				cad_cpfcnpj,
				cad_nome 
			from 	
				tb_cadastros';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);  
	}

	public function atualizar() { //update
		
		$query = "update tb_usuarios set usu_nome = ? where usu_id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->usu_nome->__get('usu_nome'));
		$stmt->bindValue(2, $this->usu_nome->__get('usu_id'));
		return $stmt->execute();
	}

	public function remover() { //delete

		$query = 'delete from tb_usuarios where usu_id = :usu_id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':usu_id',$this->usu_nome->__get('usu_id'));
		$stmt->execute();
	}
	
}

class RecuperarCadGeralService {

	private $conexao;
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

	public function __construct(Conexao $conexao, $cad_tipo, $cad_cpfcnpj, $cad_nome, $cad_nfantasia, $cad_logradouro, $cad_numero, $cad_bairro, $cad_cidade, $cad_estado, $cad_cep, $cad_email, $cad_fone1, $cad_fone2, $cad_icomplementares) {
		$this->conexao = $conexao->conectar();
		$this->cad_tipo = $cad_tipo;
		$this->cad_cpfcnpj = $cad_cpfcnpj;
		$this->cad_nome = $cad_nome;
		$this->cad_nfantasia = $cad_nfantasia;
		$this->cad_logradouro = $cad_logradouro;
		$this->cad_numero = $cad_numero;
		$this->cad_bairro = $cad_bairro;
		$this->cad_cidade = $cad_cidade;
		$this->cad_estado = $cad_estado;
		$this->cad_cep = $cad_cep;
		$this->cad_email = $cad_email;
		$this->cad_fone1 = $cad_fone1;
		$this->cad_fone2 = $cad_fone2;
		$this->cad_icomplementares = $cad_icomplementares;
	}

	public function recuperarcad() { //read
		$query = '
			select 
				cad_id,
				cad_tipo,
				cad_cpfcnpj,
				cad_nome,
				cad_nfantasia,
				cad_logradouro,
				cad_numero,
				cad_bairro,
				cad_cidade,
				cad_estado,
				cad_cep,
				cad_email,
				cad_fone1,
				cad_fone2,
				cad_icomplementares
			from 	
				tb_cadastros';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);  
	}

	public function atualizar() { //update
		
		$query = "update tb_usuarios set usu_nome = ? where usu_id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->usu_nome->__get('usu_nome'));
		$stmt->bindValue(2, $this->usu_nome->__get('usu_id'));
		return $stmt->execute();
	}

	public function remover() { //delete

		$query = 'delete from tb_usuarios where usu_id = :usu_id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':usu_id',$this->usu_nome->__get('usu_id'));
		$stmt->execute();
	}
	
}

?>