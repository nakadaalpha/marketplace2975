<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id_admin")) {
            redirect('/', 'refresh');
        }
    }
    public function index()
    {
        $dataInput = $this->input->post();
        if ($dataInput) {
            $this->load->model("Madmin");
            $id_admin = $this->session->userdata("id_admin");
            $this->Madmin->ubah($dataInput, $id_admin);

            $this->session->set_flashdata("pesan_sukses", "Akun telah diubah");
            redirect('akun', 'refresh');
        }

        $this->load->view('templates/header');
        $this->load->view('pages/akun/index');
        $this->load->view('templates/footer');
    }
}
