<?php  

class Login_model extends CI_Model{
	public $rows = 0;

	function __construct(){
		parent::__construct();
	}

	function cek_login_anggota($data){
		$this->load->model('anggota_model');
		$data_anggota = $this->anggota_model->get_data_byConditional($data);
		if($data_anggota->num_rows() == 1){
			 $this->rows = $data_anggota->num_rows();
		}
		return $data_anggota->row();
	}

	function cek_login_admin($data){
		$this->load->model('admin_model');
		$data_admin = $this->admin_model->get_data_byConditional($data);
		if($data_admin->num_rows() == 1){
			 $this->rows = $data_admin->num_rows();
		}
		return $data_admin->row();
	}
}

?>