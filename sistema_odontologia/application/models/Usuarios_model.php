<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function login($username, $password){
		$this->db->where("username", $username);
		$this->db->where("password", $password);

		$resultados = $this->db->get("usuarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
	 public function getUsuarios(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("usuarios");
		return $resultados->result();
	 }
	 public function save($data){
		return $this->db->insert("usuarios",$data);
	}
	/*Funcion para editar */
	public function getUsuario($id_usuario){
		$this->db->where("id_usuario",$id_usuario);
		$resultado = $this->db->get("usuarios");
		return $resultado->row();

	}
	/*Para actualizar*/
	public function update($id_usuario,$data){
		$this->db->where("id_usuario",$id_usuario);
		return $this->db->update("usuarios",$data);
	}
}
