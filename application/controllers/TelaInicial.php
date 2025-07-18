<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TelaInicial extends CI_Controller
{

    public function index()
    {   
        $this->load->model('Jogo_model');
        $data['jogos'] = $this->Jogo_model->get_jogos_home();
        $data['jogos_descubra']   = $this->Jogo_model->get_jogos_home(5, 'descubra');
        $data['jogos_ofertas']    = $this->Jogo_model->get_jogos_home(5, 'ofertas');
        $data['jogos_lancamentos']= $this->Jogo_model->get_jogos_home(5, 'lancamentos');
        $data['categorias']       = $this->Jogo_model->get_categorias(); // para seção categorias
        $data['jogos_footer']     = $this->Jogo_model->get_jogos_home(5, 'footer');
        $this->load->view('telainicial', $data);
        
    }

}
