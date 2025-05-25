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
        $this->form_validation->set_rules('nomeCompleto', 'Nome Completo',  'required',
		array(
			'required'=>'Preencha o campo com seu nome completo'
		)
		);
        $this->form_validation->set_rules('nickname', 'Nickname', 'required|min_length[3]|max_length[16]',
        array(
            'required'=> 'Preencha o campo com um nickname entre 3 e 16 caracteres'
        )
        );
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email',
        array(
            'required'=> 'Preencha o campo com seu email',
            'valid_email'=> 'Email inválido'
        )
        );
        $this->form_validation->set_rules('dataNasc', 'Data de Nascimento', 'required',
        array(
            'required'=> 'Preencha o campo com sua data de nascimento'
        )
        );
        $this->form_validation->set_rules('pais','País','required',
        array(
            'required' => 'Preencha o campo com seu país'
        )
        );
        $this->form_validation->set_rules('senha','Senha','required|min_length[3]',
        array(
            'required'=> 'Preencha o campo com uma senha entre 3 e 16 caracteres',
            'min_length'=> 'A senha deve ter no mínimo 3 caracteres',
        )
        );
        $this->form_validation->set_rules('confSenha','Confirmar Senha','required|matches[senha]',
        array(
            'required'=> 'Confirme sua senha',
            'matches'=> 'As senha devem ser iguais'
        )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('cadastro');
        } else {
           
            $primeiro_nome = $this->input->post('nomeCompleto');
            $nickname = $this->input->post('nickname');
            $email = $this->input->post('email');
            $pais = $this->input->post('pais');
            $data_nasc = $this->input->post('dataNacs');
            $senha = $this->input->post('senha');
            $conf_senha = $this->input->post('confSenha');

            $dados = array(
                'nomeCompleto' => $primeiro_nome,
                'nickname' => $nickname,
                'email' => $email,
                'pais' => $pais,
                'dataNasc' => $data_nasc,
                'senha' => $senha,
                'confSenha' => $conf_senha,

            );
               $this->db->insert('usuarios', $dados);

             $this->load->view('telainicial');
        }
    }
}