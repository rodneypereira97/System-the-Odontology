<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Clientes_model");
	}


	public function index()
	{
		$data = array(
			'clientes' =>$this->Clientes_model->getClientes(),
		);	
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Clientes/list',$data);
		$this->load->view('layouts/footer');

	}
	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/CLientes/add");
		$this->load->view("layouts/footer");
	}
	public function store(){
        $nombre_cliente = $this->input->post("nombre_cliente");
        $apellido_cliente = $this->input->post("apellido_cliente");
		$direccion_cliente = $this->input->post("direccion_cliente");
		$telefono_cliente = $this->input->post("telefono_cliente");
		$ci_cliente = $this->input->post("ci_cliente");
		$email_cliente = $this->input->post("email_cliente");
		echo $nombre_cliente."".$apellido_cliente;
	
		$data  = array(
			'nombre_cliente' => $nombre_cliente, 
			'apellido_cliente' => $apellido_cliente,
            'direccion_cliente' => $direccion_cliente,
            'telefono_cliente' => $telefono_cliente,
            'ci_cliente' => $ci_cliente,
            'email_cliente' => $email_cliente,
			'estado_cliente' => "1",
		);

		if ($this->Clientes_model->save($data)) {
			redirect(base_url()."Mantenimiento/CLientes");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."Mantenimiento/CLientes/add");
		}
		
	}
	public function edit($id_cliente){
		$data  = array(
			'cliente' => $this->Clientes_model->getCliente($id_cliente), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/Clientes/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function update(){
		$idCliente = $this->input->post("idCliente");
        $nombre_cliente = $this->input->post("nombre_cliente");
        $apellido_cliente = $this->input->post("apellido_cliente");
		$direccion_cliente = $this->input->post("direccion_cliente");
		$telefono_cliente = $this->input->post("telefono_cliente");
		$ci_cliente = $this->input->post("ci_cliente");
		$email_cliente = $this->input->post("email_cliente");
		

		$data = array(
			'nombre_cliente' => $nombre_cliente, 
			'apellido_cliente' => $apellido_cliente,
            'direccion_cliente' => $direccion_cliente,
            'telefono_cliente' => $telefono_cliente,
            'ci_cliente' => $ci_cliente,
            'email_cliente' => $email_cliente,
		);

		if ($this->Clientes_model->update($idCliente,$data)) {
			redirect(base_url()."mantenimiento/clientes");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/clientes/edit/".$idCliente);
		}
	}
	public function view($id_cliente){
		$data  = array(
			'cliente' => $this->Clientes_model->getCLiente($id_cliente), 
		);
		$this->load->view("admin/Clientes/view",$data);
	}
	public function delete($id_cliente){
		$data  = array(
			'estado_cliente' => "0", 
		);
		$this->Clientes_model->update($id_cliente,$data);
		echo "mantenimiento/clientes";
	}
}
