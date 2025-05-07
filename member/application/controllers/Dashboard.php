<?php
class Dashboard extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata("id_admin")){
            redirect('/', 'refresh');
        }
    }
    public function index()
    {
        $this->load->model('Mmember');
        $data['jumlah_member_distrik'] = $this->Mmember->jumlah_member_distrik();

        $this->load->view('templates/header');
        $this->load->view('pages/index', $data);
        $this->load->view('templates/footer');
    }
}
