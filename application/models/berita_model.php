<?php  

class Berita_model extends CI_Model{
	protected $table;
	protected $key;

	function __construct(){
		parent::__construct();
		$this->table 			= 'berita';
		$this->key 				= 'id_berita';
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}
	function get_data_descending() {
        $query = $this->db->query("SELECT * FROM " . $this->table . " ORDER BY " . $this->key . " DESC LIMIT 5");
        return $query->result();
    }
	function get_data_byId_berita($id_berita){
		$this->db->where($this->key, $id_berita); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	function get_id($id_berita){
		$this->db->where($this->key, $id_berita); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_berita = $row->id_berita;
		}
		return $id_berita;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM berita ORDER BY id_berita ASC LIMIT 1');
		foreach($data->result() as $row){
			$id_berita = $row->id_berita;
		}
		return $id_berita;
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id_berita, $data){
		$this->db->where($this->key, $id_berita); 
		return $this->db->update($this->table, $data);
	}

	function delete($id_berita){
		return $this->db->delete($this->table, array($this->key => $id_berita)); 
	}

}

 ?>