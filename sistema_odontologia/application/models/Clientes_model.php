<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

	 public function getClientes(){
		$this->db->where("estado_cliente","1");
		$resultados = $this->db->get("clientes");
		return $resultados->result();
	 }
	 public function save($data){
		return $this->db->insert("clientes",$data);
	}
	/*Funcion para editar */
	public function getCliente($id_cliente){
		$this->db->where("id_cliente",$id_cliente);
		$resultado = $this->db->get("clientes");
		return $resultado->row();

	}
	/*Para actualizar*/
	public function update($id_cliente,$data){
		$this->db->where("id_cliente",$id_cliente);
		return $this->db->update("clientes",$data);
	}
}