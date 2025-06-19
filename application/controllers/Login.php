<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Cadastro_model'); 
    }
    public function validar_nickname($nickname){
        $this->load->model('Login_model');
        if(!$this->Login_model->buscar_nickname($nickname)){
            $this->form_validation->set_message('validar_nickname','Insira um usuário válido');
            return FALSE;
        }
        return TRUE;
    }
    public function validar_senha($nickname,$senha){
        $this->load->model('Login_model');
        if(!$this->Login_model->buscar_senha($nickname,$senha)){
            $this->form_validation->set_message('validar_senha','Senha incorreta');
            return FALSE;
        } else{
            return TRUE;
        }
    }
    public function index()
    {
        $this->form_validation->set_rules('nickname', 'Nickname', 'required|callback_validar_nickname',
        array(
            'required' => 'Digite seu email ou nickname'
        ));
        $this->form_validation->set_rules('senha', 'Senha', 'required',
        array(
            'required' => 'Digite sua senha'
        ));
        if ($this->form_validation->run() === FALSE) {
        $this->load->view('login'); // exibe o formulário novamente
        } else {
        // autenticar o usuário
        redirect('telainicial');
    }
    }
}