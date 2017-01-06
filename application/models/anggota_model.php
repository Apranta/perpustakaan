<?php  

class Anggota_model extends CI_Model{
	protected $table;
	protected $key;

	function __construct(){
		parent::__construct();
		$this->table 			= 'anggota';
		$this->key 				= 'id_anggota';
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}
	
	function get_data_byId_anggota($id_anggota){
		$this->db->where($this->key, $id_anggota); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	public function get_row($cond)
	{
		$this->db->where($cond);
		$query = $this->db->get($this->table);

		return $query->row();
	}
	
	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	// function get_id($username){
	// 	$this->db->where($this->key, $username); 
	// 	$query = $this->db->get($this->table);
	// 	foreach ($query->result() as $row) {
	// 		$id_anggota = $row->id_anggota;
	// 	}
	// 	return $id_anggota;
	// }

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM anggota ORDER BY id_anggota ASC LIMIT 1');
		foreach($data->result() as $row){
			$id_anggota = $row->id_anggota;
		}
		return $id_anggota;
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id_anggota, $data){
		$this->db->where($this->key, $id_anggota); 
		return $this->db->update($this->table, $data);
	}

	function delete($id_anggota){
		return $this->db->delete($this->table, array($this->key => $id_anggota)); 
	}

}

 ?>