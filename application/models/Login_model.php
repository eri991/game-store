<?php
Class Login_model extends CI_Model{
    function buscar_senha($nickname,$senha){
        $query = $this->db->get_where('usuarios',['nickname' => $nickname]);
        if($query->num_rows() > 0){
            if($query->row()->senha == $senha){
                return true;
            }
        }

    }
}