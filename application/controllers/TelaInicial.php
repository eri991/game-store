<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TelaInicial extends CI_Controller
{

    public function index()
    {   
        $this->load->model('Jogo_model');
        $data['jogos'] = $this->Jogo_model->get_jogos_home();
        $this->load->view('telainicial', $data);
        
    }

}
