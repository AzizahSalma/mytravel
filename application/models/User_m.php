<?php
class User_m extends CI_Model{
	public function Getuser($where=""){
	$data = $this-> db -> query('select * from user'.$where);
	return $data-> result_array();
	}

	public function add($data){
	return $this->db->insert("User",$data);

	}
	public function edit(){
	return $this->db->update("User",$data);
	}
	public function delete_data($tabelName,$data){
		$res = $this->db->delete($tabelName,$data);
		return $res;
	}
}