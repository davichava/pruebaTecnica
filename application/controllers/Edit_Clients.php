<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Edit_Clients extends CI_Controller
{

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('edit_clients');
        $this->load->view('layouts/footer');
    }
}