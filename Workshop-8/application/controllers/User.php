<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Method for login
	 */
	public function login(){
		$this->load->view('login');
	}

	/**
	 * Load users to display on dashboard
	 */
    public function dashboard(){
		$this->load->model('User_model');
		$result = $this->User_model->getUsers();
		$data = array('consulta'=>$result);
        $this->load->view('dashboard', $data);
    }

    /**
    * Method for authenticating an user
    */
	public function authenticate(){
    $username = $this->input->post('user');
    $password = $this->input->post('password');

    // query the database to find a user with the username and password
    $this->load->model('User_model');
    $user = $this->User_model->authenticate($username, $password);

    if($user) {
      	// show homepage
		$this->dashboard();
    } else {
      	// redirect to login
		$this->login();
		// redirect('user/login');
    }

	}
}