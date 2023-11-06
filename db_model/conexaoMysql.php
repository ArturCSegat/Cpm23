<?php
class ConexaoMysql {
    protected $mysqli;
    protected $server = '127.0.0.1';
    protected $user = 'artur';
    protected $pass = '123123123';
    protected $dataBase = 'netflix';

    public $total = 0;

    public function Conectar(){
        $this->mysqli = new mysqli($this->server, $this->user, $this->pass, $this->dataBase);
        if ($this->mysqli->errno) {
           echo("Problema na conexao com banco de dados. Erro:" . $this->mysqli->connect_errno);
           exit();
        }
        
        $this->mysqli->set_charset('utf8');
    }

    // SELECT query
    public function Consultar($sql){
        try {
            if ($result = $this->mysqli->query($sql)){
                $this->total = $result->num_rows;
                return $result;
            }
            $this->total = 0;
            return null;
        } catch (Exception) {
            $this->Desconectar();
        }
    }

    // INSERT, UPDATE e DELETE
    public function Executar($sql){
        try {
            if ($this->mysqli->query($sql)){
                $lastId = $this->mysqli->insert_id;
                $this->total = $this->mysqli->affected_rows;
                $this->mysqli->commit();
                return $lastId;
            }
            //Nenhum registro foi afetado a partir da consulta enviada.
            $this->total = 0;
            throw new Exception('Erro');

         } catch (Exception) {
            //Em caso de erro volta ao estado anterior.
            $this->mysqli->rollback();
        }
    }

    public function Desconectar(){
        $this->mysqli->close();
    }

}
