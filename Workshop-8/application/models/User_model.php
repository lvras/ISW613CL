<?php

class User_model extends CI_Model {

    /**
     * Check the user in the database
     */
    public function authenticate($username, $password) {
        $this->db->where('user', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        return $query->result();
    }

    /**
     * Get all users in the database
     */
    public function getUsers(){
        return $result = $this->db->get('user');
    }

}