<?php

defined('BASEPAHT') or exit('No direct script access allowed');

class clientsModels extends CI_Model{


    public function listClients(){
        $response = $this->db->query("SELECT * FROM client")->result();
        return $response;
    }

    public function insertClients($client){
        $this->db->insert('client', $client);
    }

    public function listClient($id){
        $response = $this->db->query("SELECT * FROM
        client WHERE id = $id")->result();
        return $response;
    }

    public function updateClients($clients, $id){
        $response = $this->db->query("UPDATE client SET
        name='{$clients['name']}', lastname='{$clients['lastname']}', email='{$clients['email']}', identification='{$clients['identification']}'WHERE id = $id");
    }

    public function deleteClients($id){
        $response = $this->db->query("DELETE * FROM client 
        WHERE id = $id");
    }
}