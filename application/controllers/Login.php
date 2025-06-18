<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Cadastro_model'); 
    }

    public function index()
    {
        $this->form_validation->set_rules('emailornickname', 'Email ou Nickname', 'required',
        array(
            'required' => 'Digite seu email ou nickname'
        ));
        $this->form_validation->set_rules('senha', 'Senha', 'required',
        array(
            'required' => 'Digite sua senha'
        ));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login'); 
        } else {
            $identificador = $this->input->post('identificador');
            $senha = $this->input->post('senha');

           
            $usuario = $this->Cadastro_model->buscar_por_email_ou_nickname($identificador);

            if ($usuario && $usuario->senha == $senha) {
               
                $this->session->set_userdata('usuario_logado', $usuario);
                $this->load->view('telainicial');
            } else {
               
                $data['erro_login'] = 'Email/Nickname ou senha incorretos';
                $this->load->view('login', $data);
            }
        }
    }
}