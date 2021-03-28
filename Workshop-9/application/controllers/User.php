<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function login(){
		$this->load->view('users/login');
	}

	/**
	 * /user/edit/id
	 */
	public function edit($id){
		$data['user'] = $this->User_model->getById($id);
		$this->load->view('users/edit', $data);
	}

	public function delete($id){
		$result = $this->User_model->delete($id);

		if($result) {
			$this->session->set_flashdata('msg', 'User deleted');
			redirect(site_url(['user','dashboard']));
		} else {
		  // send errors
			$this->session->set_flashdata('msg', 'There was an error');
			redirect(site_url(['user','dashboard']));
		}
	}

	public function add(){
		$this->load->view('users/insert');
	}

	/**
	 * Show the user dashboard
	 *
	 */
	public function dashboard(){
		$users = $this->User_model->getAll();
		$data['users'] = $users;
		$this->load->view('users/dashboard', $data);
	}


	/**
	 *
	 */
	public function authenticate(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->User_model->authenticate($username, $password);

		if($user){
			redirect('user/dashboard');
		} else {
			redirect('user/login');
		}

	}

	/**
   * Creates a new user
   */
	public function insert(){
    // input validations (password lenght, etc)
		$result = $this->User_model->insert($this->input->post());

    if($result) {
		$this->session->set_flashdata('msg', 'User created, please login');
		redirect(site_url(['user','dashboard']));
    } else {
      // send errors
		$this->session->set_flashdata('msg', 'There was an error');
		redirect(site_url(['user','dashboard']));
    }

	}

	public function save($id){
		// input validations (password lenght, etc)
			$result = $this->User_model->update($this->input->post(),$id);

		if($result) {
			$this->session->set_flashdata('msg', 'User edited');
			redirect(site_url(['user','dashboard']));
		} else {
		  // send errors
			$this->session->set_flashdata('msg', 'There was an error');
			redirect(site_url(['user','dashboard']));
		}

		}
}