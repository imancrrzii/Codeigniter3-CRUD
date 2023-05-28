<?php 
class Home extends CI_Controller{

    public function index(){
        $this->load->database();
        $data['judul'] = 'home';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');

    }
}