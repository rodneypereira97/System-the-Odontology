<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}


	public function index()
	{
		$data = array(
			'usuarios' =>$this->Usuarios_model->getUsuarios(),
		);	
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Usuarios/list',$data);
		$this->load->view('layouts/footer');

	}
	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/Usuarios/add");
		$this->load->view("layouts/footer");
	}
	public function store(){
		$id_usuario = $this->input->post("id_usuario");
		$nombre = $this->input->post("nombre");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		echo $nombre;
	
		$data  = array(
			'id_usuario' => $id_usuario,
			'nombre' => $nombre, 
			'username' => $username,
			'password' => $password,
			'estado' => "1",
			'rol_id' => "1"
		);

		if ($this->Usuarios_model->save($data)) {
			redirect(base_url()."Mantenimiento/Usuarios");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."Mantenimiento/Usuarios/add");
		}
		
	}
	public function edit($id){
		$data  = array(
			'usuario' => $this->Usuarios_model->getUsuario($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function update(){
		$idUsuario = $this->input->post("idUsuario");
		$nombre = $this->input->post("nombre");
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$data = array(
			'nombre' => $nombre, 
			'username' => $username, 
			'password' => $password,
		);

		if ($this->Usuarios_model->update($idUsuario,$data)) {
			redirect(base_url()."mantenimiento/usuarios");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/usuarios/edit/".$idUsuario);
		}
	}
	public function view($id_usuario){
		$data  = array(
			'usuario' => $this->Usuarios_model->getUsuario($id_usuario), 
		);
		$this->load->view("admin/Usuarios/view",$data);
	}
	public function delete($id_usuario){
		$data  = array(
			'estado' => "0", 
		);
		$this->Usuarios_model->update($id_usuario,$data);
		echo "mantenimiento/usuarios";
	}
}
