<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Carrinho extends CI_Controller
{

    public function index()
    {
        $this->load->view('carrinho');
    }
}