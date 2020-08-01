<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model("Usuarios_model");
	}
	public function index()
        
	{ 
         if ($this->session->userdata("login")) {
			redirect(base_url()."dashboard");
         }
         else{
               $this->load->view('admin/login');
       }
    }
    
	public function login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->Usuarios_model->login($username, sha1($password));

		if(!$res){
			redirect(base_url());
		}
		else{
			$data = array(
				'id' => $res->id,
				'nombre' => $res->nombres,
				'rol' => $res->rol_id,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url()."mantenimiento/usuarios/");
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}