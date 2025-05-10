<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
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
        $dataInput = $this->input->post();

        $this->form_validation->set_rules("email_member", "Email", "required");
        $this->form_validation->set_rules("nama_member", "Nama Lengkap", "required");
        $this->form_validation->set_rules("alamat_member", "Alamat Lengkap", "required");
        $this->form_validation->set_rules("nomor_member", "Nomor Seluler", "required");
        $this->form_validation->set_rules("nama_distrik_member", "Nama Distrik", "required");
        $this->form_validation->set_rules("kode_distrik_member", "Kode Distrik", "required");
        $this->form_validation->set_message("required", "%s wajib diisi");

        if ($this->form_validation->run() == TRUE) {
            $this->load->model("Mmember");
            $id_member = $this->session->userdata("id_member");
            $this->Mmember->ubah($dataInput, $id_member);

            $this->session->set_flashdata("pesan_sukses", "Akun telah diubah");
            redirect('akun', 'refresh');
        }

        $this->load->view('templates/header');
        $this->load->view('pages/akun/index');
        $this->load->view('templates/footer');
    }
}
