<?php
class Cozinheiro {
	public int $id;

	public function __construct(
		public string $name,
		private string $email,
		private string $senha,
		public int $faixa_preco,
		public int $avaliacao,
		public string $endereco,
		public string $categoria,
	){}

    public function validarCozinheiro() {
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM cozinheiro WHERE email = "'.$this->email.'" and senha = "'.$this->senha.'";';
        $cozinheiro = $db->Consultar($sql)->fetch_assoc();

        $db->Desconectar();
        if ($db->total == 1) {
           $this->id = $cozinheiro['id'];
           return true;
        }
        return false;
    }

    public function inserirConta() {
       $db = new ConexaoMysql();
       $db->Conectar();

       $query = 'INSERT INTO cozinheiro(nome, email, senha, faixa_preco, avaliacao, endereco, categoria)
	       value("'.$this->email.'",
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