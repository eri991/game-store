<?php

class Login_model extends CI_Model {

    // Verifica se existe um usuário com aquele nickname ou email, e retorna o registro se encontrar
    public function buscar_usuario($identificador) {
        $this->db->where('email', $identificador);
        $this->db->or_where('nickname', $identificador);
        $query = $this->db->get('usuarios');

        if ($query->num_rows() == 1) {
            return $query->row(); // retorna o objeto do usuário
        }
        return null;
    }

    // Verifica se a senha confere com a do usuário encontrado
    public function verificar_login($identificador, $senha) {
        $usuario = $this->buscar_usuario($identificador);
        
        if ($usuario && $usuario->senha === $senha) {  // Se quiser usar hash futuramente, troque por password_verify
            return $usuario;
        }

        return null;
    }
}