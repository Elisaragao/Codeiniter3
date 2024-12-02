<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "conexao_bd.php";

class Teste1_model extends CI_Model {
    private $nome;

	function __construct($nome)
	{
		parent:: __construct();
    
        $this->nome = $nome;
	}
	
    public function salvarNome()
	{
        $sql = "INSERT INTO pessoa(nome) ";
        $sql .= "VALUES('$this->nome')";

        return executarComando($sql);
    }
	}

