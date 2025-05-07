<?php
class Auth extends CI_Controller
{

    public function login()
    {
        $dataInput = $this->input->post();

        $this->form_validation->set_rules("username", "Username", "required");
        $this->form_validation->set_rules("password", "Password", "required");

        $this->form_validation->set_message("required", "%s wajib diisi");

        if ($this->form_validation->run()==TRUE) {
            $this->load->model('Madmin');
            $output = $this->Madmin->login($dataInput);

            if ($output=="exist") {
                $this->session->set_flashdata('pesan_sukses', 'Berhasil Login');
                redirect("dashboard", "refresh");
            } else {
                $this->session->set_flashdata('pesan_gagal', 'Gagal Login');
                redirect("auth/login", "refresh");
            }
        }
        $this->load->view('pages/auth/login');
    }

    function logout(){
        $this->session->unset_userdata("id_admin");
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("nama");

        $this->session->set_flashdata("pesan_sukses", "Anda telah logout");
        redirect('/', 'refresh');
    }
}
