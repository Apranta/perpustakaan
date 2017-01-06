<?php 
class Home extends MY_Controller{

    protected $username;
    public function __construct()
    {
        parent::__construct();
        $this->username = $this->session->userdata('nama');
        // if (!isset($this->username)) {
        //     redirect('home/login');
        //     exit();
        // }
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('buku_model');
        $this->load->model('kategori_model');
        $this->load->model('login_model');
        $this->load->model('anggota_model');
        $this->load->model('pemesanan_model');
        $this->load->model('berita_model');
    } 

    public function index()
    {
        $data = array('berita' => $this->berita_model->get_data_descending());
        $this->load->view('component/header');
        $this->load->view('home',$data);
        $this->load->view('component/footer');
    }

    public function berita()
    {
        $data = array('berita' => $this->berita_model->get_all());
        $this->load->view('component/header');
        $this->load->view('berita',$data);
        $this->load->view('component/footer');
    }
    public function tamu()
    {
        $this->load->view('component/header');
        $this->load->view('tamu');
        $this->load->view('component/footer');
    }
    public function about()
    {
        $this->load->view('component/header');
        $this->load->view('about');
        $this->load->view('component/footer');
    }
    public function artikel()
    {
        $id_artikel = $this->uri->segment(3);
        $data['berita'] = $this->berita_model->get_data_byId_berita($id_artikel);
        $data['news']   = $this->berita_model->get_data_descending();
        $this->load->view('component/header');
        $this->load->view('detail_artikel',$data);
        $this->load->view('component/footer');
    }

    public function daftar_buku()
    {
        $data = array('buku' => $this->buku_model->get());
    	$this->load->view('component/header');
        $this->load->view('buku',$data);
        $this->load->view('component/footer');
    }
    

    public function detail()
    {
        $id_buku = $this->uri->segment(3);
        $this->load->model("peminjaman_model");

        if (!isset($id_buku))
        {
            redirect('home/daftar_buku');
            exit;
        }

        if ($this->input->post('pinjam')) {
            $data = array(
            'no_buku'       => $this->input->post('no_buku'),
            'id_anggota'       => $this->input->post('no_buku'),
            'tanggal_pinjam'       => date("Y-m-d"),
            'tanggal_kembali'       => date("Y-m-d",strtotime("+3 days")),
            );
            print_r($data);
            // $this->peminjaman_model->insert($data);
            // redirect('home/detail/'.$this->input->post('no_buku'));
            exit;
        }
        $this->load->model('anggota_model');
        $data['id_buku'] = $id_buku;
        $data['buku'] = $this->buku_model->get_data_byId_buku($id_buku);
        $this->load->view('component/header');
        $this->load->view('detail',$data);
        $this->load->view('component/footer');
    }
    
    public function login()
    {
        if (!isset($this->username)) {
            $this->load->view('login');
        }else{
            redirect('home');
        }
        
    }

    public function cek_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
                'username'     => $username,
                'password'      => md5($password)
            );
        $dataa = $this->login_model->cek_login_anggota($data);
        $data1 = $this->login_model->cek_login_admin($data);
        if ($dataa) {
            if ($this->login_model->rows == 1) {
                $user_session = array(
                        'id_anggota'    => $dataa->id_anggota,
                        'nama'          => $dataa->nama,
                        'role'          => 'anggota'
                    );
                $this->session->set_userdata($user_session);
                    redirect('home');
                    exit;
            }else{
                $this->session->set_flashdata('gagal', 'Login gagal');
                    redirect('home/login');
                    exit;
            }
        }
        else{
            if ($this->login_model->rows == 1) {
                $user_session = array(
                        'id_admin'    => $data1->id_admin,
                        'nama'          => 'admin',
                        'role'          => 'admin'
                    );
                $this->session->set_userdata($user_session);
                    redirect('admin');
                    exit;
            }else{
                $this->session->set_flashdata('gagal', 'Login gagal');
                    redirect('home/login');
                    exit;
            }
        }
    }    

    public function pemesanan()
    {
        $data = array('buku' => $this->pemesanan_model->get());
        $this->load->view('component/header');
        $this->load->view('data_pesan',$data);
        $this->load->view('component/footer');
    }

    public function register()
    {
        $this->load->view('component/header');
        $this->load->view('tambah_user');
        $this->load->view('component/footer');
    }

    public function user()
    {
        $this->load->view('component/header');
        $this->load->view('user');
        $this->load->view('component/footer');
    }

    public function insert()
    {
        $data = array(
            'username'       => $this->input->post('username'),
            'nama'           => $this->input->post('nama'),
            'jenis_kelamin'  => $this->input->post('jenis_kelamin'),
            'tempat_lahir'   => $this->input->post('tempat_lahir'),
            'tanggal_lahir'  => $this->input->post('tanggal_lahir'),
            'agama'          => $this->input->post('agama'),
            'alamat'         => $this->input->post('alamat'),
            'telepon'        => $this->input->post('telepon'),
            'pekerjaan'      => $this->input->post('pekerjaan'),
            'password'       => md5($this->input->post('password')),
            'foto'           => $this->input->post('username').".png"
        );
            
            $result = $this->anggota_model->insert($data);
            $config = array (
                'file_name'     => $data['foto'],
                'allowed_types' => 'jpg|jpeg|gif|png',
                'upload_path'   => realpath(APPPATH.'../gambar')
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            if ($result) $this->session->set_flashdata('berhasil', 'Register berhasil.');
            else $this->session->set_flashdata('gagal', 'Register gagal.');

            redirect('home/register');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }

    public function peminjaman()
    {
        $this->load->model("peminjaman_model");
        $this->data['pinjam'] = $this->peminjaman_model->get_all();
        $this->load->view('component/header');
        $this->load->view('peminjaman',$this->data);
        $this->load->view('component/footer');
    }

    public function pinjam()
    {
        $this->load->model("peminjaman_model");
        if ($this->input->post('pinjam')) {
            $data = array(
            'no_buku'       => $this->input->post('no_buku'),
            'id_anggota'       => $this->input->post('id_anggota'),
            'tanggal_pinjam'       => date("Y-m-d"),
            'tanggal_kembali'       => date("Y-m-d",strtotime("+3 days")),
            );
            $this->peminjaman_model->insert($data);

            $stok = $this->buku_model->get_data_byId_buku($data['no_buku'])->stok;
            $a = array('stok' => $stok-1 );
            $result = $this->buku_model->update($data['no_buku'],$a);
            if ($result) $this->session->set_flashdata('berhasil', 'Anda Berhasil Meminjam Buku, Jika Ingin Melihat Daftar Peminjaman silahkan kunjungi daftar peminjaman');
            else $this->session->set_flashdata('gagal', 'Peminjaman gagal.');
            redirect('home/daftar_buku');
            exit;
        }
    }
}
?>