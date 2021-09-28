<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Create_Clients extends CI_Controller
{

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('create_clients');
        $this->load->view('layouts/footer');
    }

    public function insertClients()
    {
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $identification = $this->input->post('identification');

        $client = array(
            'name' => $name,
            'lastname' => $lastname,
            'email' => $email,
            'identification' => $identification
        );
        $this->ClientsModels->insertClients($client);
        // header('location: http://localhost/pruebaTecnica/');
        // redirect('pruebaTecnica/');
    }

    public function editClients(){
        $id = $this->input->get('id');
        $client = array('client' => $this->ClientsModels->listClient($id));
        $this->load->view('layouts/header');
        $this->load->view('edit_clients', $client);
        $this->load->view('layouts/footer');
    }

    public function updateClients(){
        $id = $this->input->get('id');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastnme');
        $email = $this->input->post('email');
        $identification = $this->input->post('identification');

        $client = array(
            'id' => $id,
            'name' => $name,
            'lastname' => $lastname,
            'email' => $email,
            'identification' => $identification
        );
        $this->ClientsModels->updateClients($client,$id);
        // header('location: http://localhost/pruebaTecnica/');
        redirect('pruebaTecnica/');
    }

    public function deleteClients(){
        $id = $this->input->get('id');
        $this->clients->deleteClients($id);
        // header('location: http://localhost/pruebaTecnica/');
        redirect('pruebaTecnica/');
    }
}
