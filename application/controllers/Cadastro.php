<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    public $form_validation;  // propriedade pública da classe, fora de qualquer função
    public $db;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function checar_email($email){
        $this->load->model('Cadastro_model');
        if($this->Cadastro_model->existe_email($email)){
            $this->form_validation->set_message('checar_email','Já existe um usuário com esse email');
            return FALSE;
        }
        return TRUE;
    }
    public function checar_nickname($nickname){
        $this->load->model('Cadastro_model');
        if($this->Cadastro_model->existe_nickname($nickname)){
            $this->form_validation->set_message('checar_nickname','Já existe um usuário com esse nickname');
            return FALSE;
        }
        return TRUE;
    }
    public function index()
    {
        $this->form_validation->set_rules('nomeCompleto', 'Nome Completo',  'required',
		array(
			'required'=>'Preencha o campo com seu nome completo'
		)
		);
        $this->form_validation->set_rules('nickname', 'Nickname', 'required|min_length[3]|max_length[16]|callback_checar_nickname',
        array(
            'required'=> 'Preencha o campo com um nickname entre 3 e 16 caracteres',
            'min_length'=> 'Seu nickname deve ter 3 ou mais caracteres',
            'max_length'=> 'Seu nickname deve ter 16 ou menos caracteres'
        )
        );
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_checar_email',
        array(
            'required'=> 'Preencha o campo com seu email',
            'valid_email'=> 'Email inválido'
        )
        );
        $this->form_validation->set_rules('dataNasc', 'Data de Nascimento', 'required',
        array(
            'required'=> 'Preencha o campo com sua data de nascimento',
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
           
            $nome_completo = $this->input->post('nomeCompleto');
            $nickname = $this->input->post('nickname');
            $email = $this->input->post('email');
            $pais = $this->input->post('pais');
            $data_nasc = $this->input->post('dataNasc');
            $senha = $this->input->post('senha');

            $dados = array(
                'nome_completo' => $nome_completo,
                'nickname' => $nickname,
                'email' => $email,
                'pais' => $pais,
                'data_nasc' => $data_nasc,
                'senha' => $senha,
            );
               $this->db->insert('usuarios', $dados);

             $this->load->view('telainicial');
        }
    }
}