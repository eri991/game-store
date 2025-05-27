<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Carrinho extends CI_Controller
{
    public $Carrinho_model;
    public function __construct() {
        parent::__construct();
        $this->load->model('Carrinho_model');
    }

    public function index() {
        $id_carrinho = 1; // Carrinho fixo
        $dados['itens'] = $this->Carrinho_model->getItensCarrinho($id_carrinho);
        $this->load->view('carrinho', $dados);
    }

    public function mudarQuantidade($id_item, $delta) {
        $this->load->model('Carrinho_model');
        $this->Carrinho_model->mudarQnt($id_item, $delta);
        redirect('carrinho'); // ou para a página que mostrar o carrinho
    }
}