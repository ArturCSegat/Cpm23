<?php
class Cozinheiro extends Cliente {
	public function __construct(
		public string $email,
		public string $senha,
		public string $name = "",
		public string $endereco = "",
		public int $faixa_preco = 0,
		public int $avaliacao = 0,
		public string $categoria = "",
	){}

    public function validar() {
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM cozinheiro WHERE email = "'.$this->email.'" and senha = "'.$this->senha.'";';
        $cozinheiro = $db->Consultar($sql)->fetch_assoc();

        $db->Desconectar();
        if ($db->total == 1) {
           $this->id = $cozinheiro['id'];
           $this->name = $cozinheiro['name'];
           $this->endereco = $cozinheiro['endereco'];
		   $this->faixa_preco = $cozinheiro['faixa_preco'];
		   $this->avaliacao = $cozinheiro['avaliacao'];
		   $this->categoria = $cozinheiro['categoria'];
           return true;
        }
        return false;
    }

    public function inserir() {
       $db = new ConexaoMysql();
       $db->Conectar();

       $query = 'INSERT INTO cozinheiro(nome, email, senha, faixa_preco, avaliacao, endereco, categoria)
	       value(
			"'.$this->name.'",
			"'.$this->email.'",
		    "'.$this->senha.'",
			'.$this->faixa_preco.',
			'.$this->avaliacao.',
			"'.$this->endereco.'",
			"'.$this->categoria.'");';
       try {
          $db->Executar($query);
       } catch (Exception $e) {
          echo $e->getMessage();
          return;
       }
       $db->Desconectar();
       return $db->total;
    }
	public static function listarPorCategoria(string $categoria) {
		$db = new ConexaoMysql();

		$db->Conectar();

		$query = 'SELECT * FROM cozinheiro WHERE categoria = "'.$categoria.'"';

		$return = $db->Consultar($query);

		$db->Desconectar();
		return $return;
	}
	public function listarPratos() {
		$db = new ConexaoMysql();
		$db->Conectar();

		$query = 'SELECT * FROM pratos WHERE cozinheiro_id = '.$this->id.';';

		$return = $db->Consultar($query);
		$db->Desconectar();
		return $return;
	}
	public function inserirPrato(string $nome, int $preco, string $descricao) {
		$prato = new Prato($nome, $preco, $descricao, $this->id);
		$prato->insert();
	}
}
?>