<?php  

class Kategori_model extends CI_Model{
	protected $table;
	protected $key;

	function __construct(){
		parent::__construct();
		$this->table 			= 'kategori';
		$this->key 				= 'id_kategori';
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}
	
	function get_data_byId_kategori($id_kategori){
		$this->db->where($this->key, $id_kategori); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	function get_id($id_kategori){
		$this->db->where($this->key, $id_kategori); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_kategori = $row->id_kategori;
		}
		return $id_kategori;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM kategori ORDER BY id_kategori ASC LIMIT 1');
		foreach($data->result() as $row){
			$id_kategori = $row->id_kategori;
		}
		return $id_kategori;
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id_kategori, $data){
		$this->db->where($this->key, $id_kategori); 
		return $this->db->update($this->table, $data);
	}

	function delete($id_kategori){
		return $this->db->delete($this->table, array($this->key => $id_kategori)); 
	}

}

 ?>