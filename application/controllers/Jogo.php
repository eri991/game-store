<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jogo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Jogo_model');
    }

    // Agora o método padrão aceita um ID
    public function index($id_jogo = null) {
        if (!$id_jogo) show_404();

        $dados['jogo'] = $this->Jogo_model->buscar_jogo($id_jogo);
        if (!$dados['jogo']) show_404();

        $this->load->view('jogo', $dados);
    }
}
