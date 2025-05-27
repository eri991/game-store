<?php
class Carrinho_model extends CI_Model {

    public function getItensCarrinho($id_carrinho = 1) {
        $this->db->select('jogo.titulo, jogo.descricao, jogo.preco, jogo.url, itens_carrinho.quantidade, itens_carrinho.id_item');
        $this->db->from('itens_carrinho');
        $this->db->join('jogo', 'itens_carrinho.id_jogo = jogo.id_jogo');
        $this->db->where('itens_carrinho.id_carrinho', $id_carrinho);
        return $this->db->get()->result();
    }
    public function mudarQnt($id_item, $addQnt) {
        $this->db->select('quantidade');
        $this->db->from('itens_carrinho');
        $this->db->where('id_item', $id_item);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $novaQnt = $row->quantidade + $addQnt;

            if ($novaQnt > 0) {
                $this->db->where('id_item', $id_item);
                $this->db->update('itens_carrinho', array('quantidade' => $novaQnt));
            }
        }
    }

    public function adicionarItem($id_jogo, $quantidade=1, $id_carrinho = 1) {
        $dados = array(
            'id_jogo' => $id_jogo,
            'quantidade' => $quantidade,
            'id_carrinho' => $id_carrinho
        );
        $this->db->insert('itens_carrinho', $dados);
    }
}
