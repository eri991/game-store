<?php

class Usuarios_model extends CI_Model{
    function existe_email($email){
        $query = $this->db->get_where('usuarios',['email' => $email]);
        return $query->num_rows() > 0;
    }
    function existe_nickname($nickname){
        $query = $this->db->get_where('usuarios',['nickname' => $nickname]);
        return $query->num_rows() > 0;
    }
}