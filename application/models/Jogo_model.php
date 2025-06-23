<?php
class Jogo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function buscar_jogo($id_jogo) {
        $this->db->select('j.*, c.nome_categoria');
        $this->db->from('jogo j');
        $this->db->join('categoria c', 'j.id_categoria = c.id_categoria');
        $this->db->where('j.id_jogo', $id_jogo);

        $query = $this->db->get();
        return $query->row_array(); // Retorna um array associativo
    }

    public function get_jogos_home($limit = 5)
    {
        return $this->db
                    ->limit($limit)
                    ->get('jogo')
                    ->result();
    }
    public function get_categorias()
    {
        return $this->db->get('categoria')->result();
    }
}