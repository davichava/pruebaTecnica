<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{        
        // $result = array('client' => $this->ClientsModels->listClients());
        $this->load->view('templates/header.php');
        $this->load->view('index.php');
        $this->load->view('templates/footer.php');
    }  
} 