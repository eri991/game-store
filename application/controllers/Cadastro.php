<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    public $form_validation;  // propriedade pública da classe, fora de qualquer função

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules(
		'nomeCompleto',
		'Nome Completo', 
		'required',
		array(
			'required'=>'Preencha o campo com seu nome completo'
		)
		);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('cadastro');
        } else {
            $this->load->view('telainicial');
        }
    }
}