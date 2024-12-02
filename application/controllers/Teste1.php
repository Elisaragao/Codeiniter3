<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste1 extends CI_Controller {

	function __construct()
	{
		//AS COISAS CARREGADAS AQUI PODEM SER ACESSADAS POR QUALQUER CLASSE
		parent:: __construct();
	
		$this->Teste1_model->salvar();

	}
	
	public function index()
	{
       $this->load->view('teste1');


	}
	
    public function login()
	{
        //echo "Executado o método login e passado o parâmetro ";
       	// echo $this->uri->segment(3);
	
	}
}
