<?php
class Member extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata("id_admin")){
            redirect('/', 'refresh');
        }
    }
    
    public function index()
    {
        $this->load->model("MMember");

        $data["member"] = $this->MMember->tampil();
        
        $this->load->view('templates/header');
        $this->load->view('pages/member/index', $data);
        $this->load->view('templates/footer');
    }

    function detail($id_member){

        $this->load->model('Mmember');
        $data['member'] = $this->Mmember->detail($id_member);

        $this->load->model('Mtransaksi');
        $data['jual'] = $this->Mtransaksi->transaksi_member_jual($id_member);
        $data['beli'] = $this->Mtransaksi->transaksi_member_beli($id_member);

        $this->load->view('templates/header');
        $this->load->view('pages/member/detail', $data);
        $this->load->view('templates/footer');
    }
}
