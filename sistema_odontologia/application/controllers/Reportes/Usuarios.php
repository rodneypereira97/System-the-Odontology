<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
    }
    public function index(){
        $data = array(
            "usuarios" => $this->Usuarios_model->getUsuarios()
        );
        $this->load->view("layouts/header");
        $this->load->view("admin/Reportes/Usuarios",$data);
        $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");
    }
}
    