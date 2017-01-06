<?php  

class Pemesanan_model extends CI_Model{
	protected $table;
	protected $key;

	function __construct(){
		parent::__construct();
		$this->table 			= 'pemesanan';
		$this->key 				= 'id_pemesanan';
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}
	function get(){
		$this->db->where('pesan', '1');
		$query = $this->db->get($this->table); 
		return $query->result();
	}

	function count_all(){
		$this->db->where('pesan', '1');
		return $this->db->count_all_results($this->table);
	}

	function get_data_byId_pemesanan($id_pemesanan){
		$this->db->where($this->key, $id_pemesanan); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	public function get_row($cond)
	{
		$this->db->where($cond);
		$query = $this->db->get($this->table);

		return $query->result();
	}
	
	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	function get_id($id_pemesanan){
		$this->db->where($this->key, $id_pemesanan); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_pemesanan = $row->id_pemesanan;
		}
		return $id_pemesanan;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM pemesanan ORDER BY id_pemesanan ASC LIMIT 1');
		foreach($data->result() as $row){
			$id_pemesanan = $row->id_pemesanan;
		}
		return $id_pemesanan;
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id_pemesanan, $data){
		$this->db->where($this->key, $id_pemesanan); 
		return $this->db->update($this->table, $data);
	}

	function delete($id_pemesanan){
		return $this->db->delete($this->table, array($this->key => $id_pemesanan)); 
	}

}

 ?>