<?php

class User_model extends CI_Model {


    /**
    *
    */
    public function authenticate($username, $password) {
        $this->db->where('user', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        return $query->result();
    }


    public function getAll() {
        $query = $this->db->get('user');
        return $query->result_array();
    }


    public function getById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        return $query->row();
    }


    /**
    *  Inserts a new user in the database
    *
    * @param $user  An associative array with all user data
    */
    public function insert($user){
        $query = $this->db->insert('user', $user);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function update($user, $id){
        $this->db->set('user', $user['user']);
        $this->db->where('id', $id);
        $query = $this->db->update('user');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function delete($id){
        $this->db->where('id', $id);
        $query = $this->db->delete('user');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}