<?php
class Cliente {
	public int $id;

	public function __construct(
		public string $name,
		private string $email,
		private string $senha,
		public string $endereco,
	){}

    public function validar() {
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM cliente WHERE email = "'.$this->email.'" and senha = "'.$this->senha.'";';
        $cozinheiro = $db->Consultar($sql)->fetch_assoc();

        $db->Desconectar();
        if ($db->total == 1) {
           $this->id = $cozinheiro['id'];
           return true;
        }
        return false;
    }

    public function inserir() {
       $db = new ConexaoMysql();
       $db->Conectar();

       $query = 'INSERT INTO cliente(nome, email, senha, endereco)
	       value(
            "'.$this->name.'",
            "'.$this->email.'",
		    "'.$this->senha.'",
			"'.$this->endereco.'");';
       try {
          $db->Executar($query);
       } catch (Exception $e) {
          echo $e->getMessage();
          return;
       }
       $db->Desconectar();
       return $db->total;
    }
}
?>