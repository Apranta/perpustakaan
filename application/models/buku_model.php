<?php  

class Buku_model extends CI_Model{
	protected $table;
	protected $key;
	var $gambar;
	var $galerry_path_url;

	function __construct(){
		parent::__construct();
		$this->table 			= 'buku';
		$this->key 				= 'id_buku';
		$this->gambar 			= realpath(APPPATH.'../assets/gambar');
		$this->galerry_path_url = base_url().'assets/gambar/';
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}

	public function get()
	{
		$this->db->where('stok >', 0);
		$query = $this->db->get($this->table);

		return $query->result();
	}

	function count_all(){
		return $this->db->count_all($this->table);
	}
	
	function get_jumlah(){
		$query = $this->db->query('SELECT count(*) as jumlah, id_kategori FROM buku GROUP BY id_kategori');
		return $query->result();
	}

	public function get_row($cond)
	{
		$this->db->where($cond);
		$query = $this->db->get($this->table);

		return $query->row();
	}
	
	function get_data_byId_buku($id_buku){
		$this->db->where($this->key, $id_buku); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_id($username){
		$this->db->where($this->key, $username); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_buku = $row->id_buku;
		}
		return $id_buku;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM buku ORDER BY id_buku ASC LIMIT 1');
		foreach($data->result() as $row){
			$id_buku = $row->id_buku;
		}
		return $id_buku;
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id_buku, $data){
		$this->db->where($this->key, $id_buku); 
		return $this->db->update($this->table, $data);
	}

	function delete($id_buku){
		return $this->db->delete($this->table, array($this->key => $id_buku)); 
	}

	function upload($id_buku, $name='userfile'){

		$config = array (
			'file_name' 	=> $id_buku,
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' 	=> realpath(APPPATH.'../gambar')
		);

		$this->load->library('upload', $config);
		$this->upload->do_upload($name);	
	}
}

 ?>