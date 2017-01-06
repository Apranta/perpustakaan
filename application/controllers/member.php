<?php
class Member extends MY_Controller{
    
    protected $username;
    protected $id;
    public function __construct()
    {
        parent::__construct();
        $this->username = $this->session->userdata('nama');
        $this->id = $this->session->userdata('id_anggota');
        if (!isset($this->username)) {
            redirect('home/login');
            exit();
        }
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('anggota_model');
        $this->load->model('kategori_model');

    }

    public function index()
    {
        $this->load->model('buku_model');
        $this->load->model('peminjaman_model');
        $this->load->model('pemesanan_model');
        $data = array(  'pinjam' => $this->peminjaman_model->get_row(['id_anggota' => $this->id]),
                        'anggota' => $this->anggota_model->get_row(['id_anggota' => $this->id]),
                        'buku' => $this->pemesanan_model->get_row(['id_anggota' => $this->id]));
        $this->load->view('Component/header');
        $this->load->view('profil',$data);
        $this->load->view('Component/footer');
    }

    public function profile()
    {
        if ($this->input->post('update')) {
            $data = array(
            'nama'           => $this->input->post('nama'),
            'jenis_kelamin'  => $this->input->post('jenis_kelamin'),
            'tempat_lahir'   => $this->input->post('tempat_lahir'),
            'tanggal_lahir'  => $this->input->post('tanggal_lahir'),
            'agama'          => $this->input->post('agama'),
            'alamat'         => $this->input->post('alamat'),
            'telepon'        => $this->input->post('telepon'),
            'pekerjaan'      => $this->input->post('pekerjaan')
            );
            $this->anggota_model->update($this->id,$data);
            redirect('member/profile');
            exit;
        }
        
        if ($this->input->post('update_foto')) {
            $data = array(
            'foto'           => "user_".$this->id."_".date('s').".png"
            );
            $result = $this->anggota_model->update($this->id,$data);
            $config = array (
                'file_name'     => $data['foto'],
                'allowed_types' => 'jpg|jpeg|gif|png',
                'upload_path'   => realpath(APPPATH.'../gambar')
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            if ($result) $this->session->set_flashdata('berhasil', 'Update berhasil.');
            else $this->session->set_flashdata('gagal', 'Update gagal.');

            redirect('member/profile');
            exit;
        }

        if ($this->input->post('update_pw')) {
            if ($this->input->post('password') == $this->input->post('repassword')) {
                $data = array(
                'password'           => md5($this->input->post('password'))
                );
                $result = $this->anggota_model->update($this->id,$data);
                if ($result) $this->session->set_flashdata('berhasil', 'Update berhasil.');
                else $this->session->set_flashdata('gagal', 'Update gagal.');

                redirect('member/profile');
                exit;
            }
            else{
                $this->session->set_flashdata('gagal', 'Password tidak cocok, Update gagal.');
                redirect('member/profile');
                exit;            
            }
        }

        $data = $this->anggota_model->get_data_byId_anggota($this->id);
    	$this->load->view('Component/header');
        $this->load->view('edit_profile',$data);
    	$this->load->view('Component/footer');
    }

    public function edit()
    {
        $this->load->view('Component/header');
        $this->load->view('edit_profile');
        $this->load->view('Component/footer');
    }

    public function pinjam()
    {
        $this->load->view('Component/header');
        $this->load->view('edit_profile');
        $this->load->view('Component/footer');
    }

    public function pesan()
    {
        $this->load->model('pemesanan_model');
        if ($this->input->post('pesan')) {
            $data = array(  'id_anggota'=> $this->id ,
                            'kategori'  => $this->input->post('kategori'),
                            'judul'     => $this->input->post('judul'),
                            'jumlah_buku'=> $this->input->post('jumlah'),
                            'tanggal'   => date("Y-m-d"),
                            'penulis'   => $this->input->post('penulis')
                            );
            $hasil = $this->pemesanan_model->insert($data);
            if ($hasil) $this->session->set_flashdata('berhasil', 'Pemesanan berhasil, Silahkan tunggu Kabar Selanjutnya');
            else $this->session->set_flashdata('gagal', 'Tambah Buku gagal.');
            redirect('member/pesan');
            exit;
        }
        $this->data['kategori'] = $this->kategori_model->get_all();
        $this->load->view('Component/header');
        $this->load->view('pesan_buku', $this->data);
        $this->load->view('Component/footer');
    }
}
?>