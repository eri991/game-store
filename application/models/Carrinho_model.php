<?php
class Carrinho_model extends CI_Model {

    public function getItensCarrinho($id_carrinho = 1) {
        $this->db->select('jogo.titulo, jogo.descricao, jogo.preco, jogo.url, itens_carrinho.quantidade');
        $this->db->from('itens_carrinho');
        $this->db->join('jogo', 'itens_carrinho.id_jogo = jogo.id_jogo');
        $this->db->where('itens_carrinho.id_carrinho', $id_carrinho);
        return $this->db->get()->result();
    }
}
