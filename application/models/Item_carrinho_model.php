<?php
class Item_carrinho_model extends CI_Model {

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
}
