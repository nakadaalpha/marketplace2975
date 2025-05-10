<?php
class Produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id_member")) {
            redirect('/', 'refresh');
        }
    }
    public function index()
    {
        $this->load->model("MProduk");

        $data["produk"] = $this->MProduk->tampil();
        
        $this->load->view('templates/header');
        $this->load->view('pages/produk/index', $data);
        $this->load->view('templates/footer');
    }
}
