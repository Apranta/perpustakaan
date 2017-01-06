<?php  

class Buku_tamu_model extends CI_Model{
	protected $table;
	protected $key;

	function __construct(){
		parent::__construct();
		$this->table 			= 'buku_tamu';
		$this->key 				= 'id';
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}
	
	function get_data_byId($id){
		$this->db->where($this->key, $id); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	function get_id($id){
		$this->db->where($this->key, $id); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id = $row->id;
		}
		return $id;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM buku_tamu ORDER BY id ASC LIMIT 1');
		foreach($data->result() as $row){
			$id = $row->id;
		}
		return $id;
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id, $data){
		$this->db->where($this->key, $id); 
		return $this->db->update($this->table, $data);
	}

	function delete($id){
		return $this->db->delete($this->table, array($this->key => $id)); 
	}

}

 ?>