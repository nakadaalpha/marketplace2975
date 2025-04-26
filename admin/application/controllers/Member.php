<?php
class Member extends CI_Controller
{
    public function index()
    {
        $this->load->model("MMember");

        $data["member"] = $this->MMember->tampil();
        
        $this->load->view('templates/header');
        $this->load->view('pages/member/index', $data);
        $this->load->view('templates/footer');
    }
}
