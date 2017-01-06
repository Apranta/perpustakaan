<?php  

class Peminjaman_model extends CI_Model{
	protected $table;
	protected $key;

	function __construct(){
		parent::__construct();
		$this->table 			= 'peminjaman';
		$this->key 				= 'no_peminjaman';
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}

	function count_all(){
		return $this->db->count_all($this->table);
	}
	
	
	function get_data_byId_peminjaman($id_peminjaman){
		$this->db->where($this->key, $id_peminjaman); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	public function get($cond = '')
	{
		if (is_array($cond))
			$this->db->where($cond);

		$query = $this->db->get($this->table);

		return $query->result();
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
		return $query->row();
	}

	function get_id($id_peminjaman){
		$this->db->where($this->key, $id_peminjaman); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_peminjaman = $row->id_peminjaman;
		}
		return $id_peminjaman;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM peminjaman ORDER BY id_peminjaman ASC LIMIT 1');
		foreach($data->result() as $row){
			$id_peminjaman = $row->id_peminjaman;
		}
		return $id_peminjaman;
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id_peminjaman, $data){
		$this->db->where($this->key, $id_peminjaman); 
		return $this->db->update($this->table, $data);
	}

	function delete($id_peminjaman){
		return $this->db->delete($this->table, array($this->key => $id_peminjaman)); 
	}

}

 ?>