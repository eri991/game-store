<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TelaInicial extends CI_Controller
{

    public function index()
    {
        $this->load->view('telainicial');
    }

}
