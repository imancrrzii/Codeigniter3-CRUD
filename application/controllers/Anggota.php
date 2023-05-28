<?php
class Anggota extends CI_Controller
{
    public function index()
    {
        $this->load->database();
        $data['judul'] = 'anggota';

        $this->load->library('pagination');
        $config['base_url'] = "http://localhost/CRUD/anggota/index/";
        
        $config['total_rows'] = $this->Anggota_model->count_all_anggota();
        $config['per_page'] = 6;

        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'first';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');





        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['anggota'] = $this->Anggota_model->get_anggota($config['per_page'], $data['start']);
        if($this->input->post('keyword')){
            $data['anggota'] = $this->Anggota_model->search_anggota();
        }
    
        $this->load->view('templates/header', $data);
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
        
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Anggota';
        $this->form_validation->set_rules('nim', 'nim', 'required');
        $this->form_validation->set_rules('nama_anggota', 'nama_anggota', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');
        $this->form_validation->set_rules('domisili', 'domisili', 'required');
        $this->form_validation->set_rules('angkatan', 'angkatan', 'required');
        $this->form_validation->set_rules('divisi', 'divisi', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('telepon', 'telepon', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('anggota/tambah');
            $this->load->view('templates/footer');
        } else {

            $this->Anggota_model->tambah_anggota();
            redirect(base_url() . 'anggota');
        }
    }
    public function edit($nim)
    {
        $data['judul'] = 'Edit Anggota';
        $data['anggota'] = $this->Anggota_model->getAnggotaById($nim);
        $this->form_validation->set_rules('nim', 'nim', 'required');
        $this->form_validation->set_rules('nama_anggota', 'nama_anggota', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');
        $this->form_validation->set_rules('domisili', 'domisili', 'required');
        $this->form_validation->set_rules('angkatan', 'angkatan', 'required');
        $this->form_validation->set_rules('divisi', 'divisi', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('telepon', 'telepon', 'required');
        
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('anggota/edit');
            $this->load->view('templates/footer');
        } else {

            $this->Anggota_model->edit_anggota($nim);
            redirect(base_url() . 'anggota');
        }
    }
    public function hapus($nim)
    {
        $this->Anggota_model->hapus_anggota($nim);
        redirect(base_url() . 'anggota');

    }
    public function detail($nim){

        $data['judul'] = "Detail Anggota";
    
        $data['anggota'] = $this->Anggota_model->getAnggotaById($nim);
    
        $this->load->view('templates/header', $data);
        $this->load->view('anggota/detail', $data);
        $this->load->view('templates/footer');
    }
}