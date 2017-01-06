<?php
class Admin extends MY_Controller{

    protected $username;
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata("role")!='admin') {
            redirect('home');
            exit();
        }

        $this->load->model('buku_model');
        $this->load->model('berita_model');
        $this->load->model('kategori_model');
        $this->load->model('peminjaman_model');
        $this->load->model('pemesanan_model');
        $this->load->model('anggota_model');
        $this->load->model('admin_model');
        $this->load->model('buku_tamu_model');
        date_default_timezone_set('Asia/Jakarta');
    }    

    public function index()
    {
        $this->data['jumlah_buku'] = $this->buku_model->count_all();
        $this->data['kategori_buku'] = $this->buku_model->get_jumlah();
        $this->data['pinjam_jumlah'] = $this->peminjaman_model->count_all();
        $this->data['pesan_jumlah'] = $this->pemesanan_model->count_all();
        $this->data['pemesanan'] = $this->pemesanan_model->get_all();
        $this->load->view('component/header');
        $this->load->view('profil_admin',$this->data);
        $this->load->view('component/footer');
    }

    public function buku_tamu()
    {
        $data = array('tamu_data' => $this->buku_tamu_model->get_all());
        $this->load->view('component/header');
        $this->load->view('data_tamu',$data);
        $this->load->view('component/footer');
    }
    public function update_pw()
    {
        if ($this->input->post('ganti')) {
            if ($this->input->post('password') == $this->input->post('repassword')) {
                $data = array(
                'password'           => md5($this->input->post('password'))
                );
                $result = $this->admin_model->update($this->id,$data);
                if ($result) $this->session->set_flashdata('berhasil', 'Update berhasil.');
                else $this->session->set_flashdata('gagal', 'Update gagal.');

                redirect('admin/update_pw');
                exit;
            }
            else{
                $this->session->set_flashdata('gagal', 'Password tidak cocok, Update gagal.');
                redirect('admin/update_pw');
                exit;            
            }
        }
        $this->load->view('component/header');
        $this->load->view('edit_pw');
        $this->load->view('component/footer');
    }

    public function tambah_buku()
    {
        $data = array('kategori' => $this->kategori_model->get_all());
        $this->load->view('component/header');
        $this->load->view('tambah_buku',$data);
        $this->load->view('component/footer');
    }

    public function input_buku()
    {
        $data = array(
            'id_kategori'    => $this->input->post('kategori'),
            'judul'          => $this->input->post('judul'),
            'penulis'        => $this->input->post('penulis'),
            'penerbit'       => $this->input->post('penerbit'),
            'tahun_terbit'   => $this->input->post('tahun'),
            'stok'           => $this->input->post('stok'),
            'ISBN'           => $this->input->post('isbn'),
            'jumlah_hal'     => $this->input->post('jumlah_hal'),
            'sinopsis'       => $this->input->post('sinopsis'),
            'foto'           => $this->input->post('judul')."_".date("d").".png",
            'tanggal_masuk'  => date("Y-m-d")
        );

            $result = $this->buku_model->insert($data);
            $config = array (
                'file_name'     => $data['foto'],
                'allowed_types' => 'jpg|jpeg|gif|png',
                'upload_path'   => realpath(APPPATH.'../gambar')
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            if ($result) $this->session->set_flashdata('berhasil', 'Penambahan berhasil.');
            else $this->session->set_flashdata('gagal', 'Tambah Buku gagal.');
            redirect('admin/tambah_buku');
    }

    public function tambah_user()
    {
        $this->load->view('component/header');
        $this->load->view('tambah_user');
        $this->load->view('component/footer');
    }

    public function tambah_kategori()
    {
        if ($this->input->post('tambah')) {
            $data = array('nama' => $this->input->post('nama') );

            $result = $this->kategori_model->insert($data);
            if ($result) $this->session->set_flashdata('berhasil', 'Penambahan berhasil.');
            else $this->session->set_flashdata('gagal', 'Tambah kategori gagal.');
            redirect('admin/tambah_kategori');
        }

        if ($this->input->post('edit')) {
            $data = array('nama' => $this->input->post('nama_baru') );

            $result = $this->kategori_model->update($this->input->POST('id_kat'),$data);
            if ($result) $this->session->set_flashdata('berhasil', 'Edit Data berhasil.');
            else $this->session->set_flashdata('gagal', 'Edit kategori gagal.');
            redirect('admin/tambah_kategori');
        }

        $data['kategori_data'] = $this->kategori_model->get_all();
        $this->load->view('component/header');
        $this->load->view('tambah_kategori',$data);
        $this->load->view('component/footer');
    }

    public function hapus_kat()
    {
        $id_kategori = $this->uri->segment(3);
        if (isset($id_kategori)) {
            $this->kategori_model->delete($id_kategori);
            $this->session->set_flashdata('berhasil', 'Hapus Kategori berhasil.');
            redirect('admin/tambah_kategori');
        }
    }

    public function kategori_buku()
    {
        $id = $this->uri->segment(3);
        if (isset($id))
        {
            echo json_encode($this->kategori_model->get_data_byId_kategori($id));
            exit;
        }
        $this->load->view('component/header');
        $this->load->view('user');
        $this->load->view('component/footer');
    }
    public function artikel()
    {
        $path = 'ckfinder';
        $width = '100%';
        $this->_editor($path, $width);
        $data['atas'] = 'Post Berita';
        $this->load->view('component/header');
        $this->load->view('artikel',$data);
        $this->load->view('component/footer');
    }

    public function kirim_artikel()
    {
        $data = array(
            'judul'          => $this->input->post('judul'),
            'head'         => 'artikel_'.$this->input->post('judul')."_".date('s').".png",
            'isi'            => $this->input->post('isi'),
            'tanggal'       => date("Y-m-d")
        );
        $result = $this->berita_model->insert($data);
            $config = array (
                'file_name'     => $data['head'],
                'allowed_types' => 'jpg|jpeg|gif|png',
                'upload_path'   => realpath(APPPATH.'../gambar')
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('head');
            if ($result) $this->session->set_flashdata('berhasil', 'Penambahan berhasil.');
            else $this->session->set_flashdata('gagal', 'POst Artikel gagal.');
            redirect('admin/artikel');
    }


    public function peminjaman()
    {
        $this->data['peminjaman_data'] = $this->peminjaman_model->get_all();
       $this->load->view('component/header');
        $this->load->view('data_peminjaman',$this->data);
        $this->load->view('component/footer');
    }
    public function buku()
    {
        $id = $this->uri->segment(3);
        if (isset($id))
        {
            echo json_encode($this->buku_model->get_data_byId_buku($id));
            exit;
        }

        if ($this->input->POST('edit'))
        {
            $data = array(
            'id_kategori'    => $this->input->post('kategori'),
            'judul'          => $this->input->post('judul'),
            'penulis'        => $this->input->post('penulis'),
            'penerbit'       => $this->input->post('penerbit'),
            'tahun_terbit'   => $this->input->post('tahun'),
            'stok'           => $this->input->post('stok'),
            'ISBN'           => $this->input->post('isbn'),
            'jumlah_hal'     => $this->input->post('jumlah_hal'),
            'sinopsis'       => $this->input->post('sinopsis'),
            'tanggal_masuk'  => date("Y-m-d")
            );
            $result = $this->buku_model->update($this->input->POST('id_buku'),$data);
            
            redirect('admin/buku');
            exit;
        }
        $this->data['kategori'] = $this->kategori_model->get_all();
        $this->data['buku_data'] = $this->buku_model->get();
        $this->load->view('component/header');
        $this->load->view('data_buku',$this->data);
        $this->load->view('component/footer');
    }

    public function delete_buku()
    {
        $id_buku = $this->uri->segment(3);
        if (isset($id_buku)) {
            $this->buku_model->delete($id_buku);
            redirect('admin/buku');
            exit;
        }
    }

    public function kembali()
    {
        $id_peminjaman = $this->uri->segment(3);
        $id_buku = $this->uri->segment(4);
        if (isset($id_peminjaman)) {
            $this->peminjaman_model->delete($id_peminjaman);
            $stok = $this->buku_model->get_data_byId_buku($id_buku)->stok;
            $data = array('stok' => $stok+1 );
            $this->buku_model->update($id_buku,$data);
            redirect('admin/peminjaman');
        }
    }
    public function pemesanan()
    {
        $id = $this->uri->segment(3);
        if (isset($id))
        {
            echo json_encode($this->pemesanan_model->get_data_byId_pemesanan($id));
            exit;
        }
        $this->data['kategori'] = $this->kategori_model->get_all();
        $this->data['pemesanan_data'] = $this->pemesanan_model->get();
        $this->load->view('component/header');
        $this->load->view('data_pemesanan',$this->data);
        $this->load->view('component/footer');
    }
    public function konfirm()//
    {
        $data = array(
            'id_kategori'    => $this->input->post('kategori'),
            'judul'          => $this->input->post('judul'),
            'penulis'        => $this->input->post('penulis'),
            'penerbit'       => $this->input->post('penerbit'),
            'tahun_terbit'   => $this->input->post('tahun'),
            'stok'           => $this->input->post('stok'),
            'ISBN'           => $this->input->post('isbn'),
            'jumlah_hal'     => $this->input->post('jumlah_hal'),
            'sinopsis'       => $this->input->post('sinopsis'),
            'foto'           => $this->input->post('judul')."_".date("d").".png",
            'tanggal_masuk'  => date("Y-m-d")
        );

            $result = $this->buku_model->insert($data);
            $config = array (
                'file_name'     => $data['foto'],
                'allowed_types' => 'jpg|jpeg|gif|png',
                'upload_path'   => realpath(APPPATH.'../gambar')
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            if ($result) {
                $data = array('pesan' => 2, );
                $this->pemesanan_model->update($this->input->POST('id_pem'),$data);
                $this->session->set_flashdata('berhasil', 'Buku Baru berhasil ditambahkan.');
            }
            else $this->session->set_flashdata('gagal', 'Tambah Buku gagal.');

            redirect('admin/pemesanan');

    }
    public function user()
    {
        $id = $this->uri->segment(3);
        if (isset($id))
        {
            echo json_encode($this->anggota_model->get_data_byId_anggota($id));
            exit;
        }

        if ($this->input->POST('edit'))
        {
            if ($this->input->post('password_baru') == $this->input->post('password_ulang')) {
                $data = array(
                'password' => md5($this->input->post('password_baru'))
                );
                $result = $this->anggota_model->update($this->input->POST('id_anggota'),$data);
                if ($result) $this->session->set_flashdata('berhasil', 'Edit berhasil.');
            }
            else $this->session->set_flashdata('gagal', 'Edit Password gagal, Password Tidak Sama');
            
            redirect('admin/user');
        }

        if ($this->input->POST('tambah'))
        {
                $data = array(
                    'nama'      => $this->input->POST('nama'),
                    'jenis_kelamin'  => $this->input->POST('jk'),
                    'username'  => $this->input->POST('uname'),
                    'password' => md5('123456')
                );
                $result = $this->anggota_model->insert($data);
                if ($result) $this->session->set_flashdata('berhasil', 'Penambahan berhasil, Password : 123456');
                else $this->session->set_flashdata('gagal', 'Penambahan gagal');
            
            redirect('admin/user');
        }

        $this->data['user_data'] = $this->anggota_model->get_all();
        $this->load->view('component/header');
        $this->load->view('data_user',$this->data);
        $this->load->view('component/footer');
    }

    public function delete_anggota()
    {
        $id_anggota = $this->uri->segment(3);
        if (isset($id_anggota)) {
            $this->anggota_model->delete($id_anggota);
            redirect('admin/user');
            exit;
        }
    }
    public function _editor($path,$width) {
        //Loading Library For Ckeditor
        $this->load->library('ckeditor');
        $this->load->library('ckfinder');
        //configure base path of ckeditor folder 
        $this->ckeditor->basePath = base_url() . 'ckeditor/';
        $this->ckeditor->config['toolbar'] = 'Full';
        $this->ckeditor->config['language'] = 'en';
        $this->ckeditor->config['width'] = $width;
        //configure ckfinder with ckeditor config 
        $this->ckfinder->SetupCKEditor($this->ckeditor,$path); 
    }

    public function list_artikel()
    {
        $path = 'ckfinder';
        $width = '100%';
        $this->_editor($path, $width);
        $id = $this->uri->segment(3);
        if (isset($id)) {
            $data['artikel'] = $this->berita_model->get_data_byId_berita($id);
            $this->load->view('component/header');
            $this->load->view('edit_artikel',$data);
            $this->load->view('component/footer');
            
        }
        else {
        $this->data['list_artikel'] = $this->berita_model->get_all();
        $this->load->view('component/header');
        $this->load->view('list_artikel',$this->data);
        $this->load->view('component/footer');
        }
    }

    public function edit_artikel()
    {
        $data = array(
            'judul'          => $this->input->post('judul'),
            'head'             => 'artikel_'.$this->input->post('judul')."_".date('s').".png",
            'isi'            => $this->input->post('isi'),
            'tanggal'       => date("Y-m-d")
        );
        $result = $this->berita_model->update($this->input->post('id'),$data);
            $config = array (
                'file_name'     => $data['head'],
                'allowed_types' => 'jpg|jpeg|gif|png',
                'upload_path'   => realpath(APPPATH.'../gambar')
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('head');
            if ($result) $this->session->set_flashdata('berhasil', 'Edit Data berhasil.');
            else $this->session->set_flashdata('gagal', 'POst Artikel gagal.');
            redirect('admin/list_artikel');
    }

    public function laporan_buku()
    {
        $html = $this->load->view('laporan', array(
                'kategori'   => $this->kategori_model->get_all(), 
                'buku_data' => $this->buku_model->get()
            ), true);
            $pdfFilePath = "laporan_buku.pdf";
            $this->load->library('m_pdf');
            $this->m_pdf->pdf->WriteHTML($html);
            $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }

    public function laporan_peminjaman()
    {
        $html = $this->load->view('laporan_pinjam', array(
                'peminjaman_data' => $this->peminjaman_model->get_all()
            ), true);
            $pdfFilePath = "laporan_peminjaman.pdf";
            $this->load->library('m_pdf');
            $this->m_pdf->pdf->WriteHTML($html);
            $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }

    public function laporan_pemesanan()
    {
        $html = $this->load->view('laporan_pesan', array(
                'pemesanan_data' => $this->pemesanan_model->get_all()
            ), true);
            $pdfFilePath = "laporan_pemesanan.pdf";
            $this->load->library('m_pdf');
            $this->m_pdf->pdf->WriteHTML($html);
            $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
}
?>