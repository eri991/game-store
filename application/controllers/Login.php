<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model'); 
        $this->load->library('session');
    }
    public function index()
    {
        $this->form_validation->set_rules('nickname', 'Nickname', 'required',
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
            $nickname = $this->input->post('nickname');
            $senha = $this->input->post('senha');
            if($this->Login_model->buscar_senha($nickname,$senha)){
                redirect('telainicial');
            }else{
                $this->session->set_flashdata('erro-login', 'Usuário e/ou senha incorretos');
                redirect('login');
            }
        } // autenticar o usuário 
    }
}