<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index(){
		$data = $this -> User_m -> Getuser();
		$this-> load-> view ('show',array('data'=> $data));
	}

	function __construct(){
		parent::__construct();	
		$this->load->model('User_m');
	}
	public function add_data(){
		$this-> load-> view('v_user');
	}
	public function add(){
		//get data
		$data = array(
			"id"=> $this-> input-> post ('id'),
			"username"=> $this-> input-> post('username'),
			"password"=> $this-> input-> post('password'),
			"fullname"=> $this-> input-> post('fullname'),
			"level"=> $this-> input-> post('level'));
		$insert=$this->db->insert('user',$data);
		if ($insert) {
			echo "<h1>SUKSES</h1>";
			redirect('User');
		}else{
			echo "gagalll";
		}
	}
	function update($id='' )
	{
		$this->db->where('id',$id);
		$data['isi'] = $this->db->get('user');
		$this->load->view('edit_data',$data);
	}
	function edit($id='')
	{
		$data = array('id'=> $this->input->post('id'),
					'username' => $this->input->post('username'),
					 'password' => $this->input->post('password'),
					 'fullname' => $this->input->post('fullname'),
					 'level' => $this->input->post('level'));
		$this->db->where('id',$id);
		$insert=$this->db->update('user' , $data );
		if ($insert) {
            echo "<h1>SUKSES</h1>";
            redirect('User');
        } else {
            echo "gagal";
        }
	}
	function delete_data($id='')
	{
		
		$this->db->where('id',$id);
		$this->db->delete('user');
		redirect('User');
	}
	function delete()
	{  
		if($this->input->post('submit'))
		{
			$id = $this->input->post('id');
			$this->db->where('id',$id);
			$this->db->delete('user');
			redirect('User');
		}
	}
}