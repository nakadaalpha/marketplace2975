<?php
class Auth extends CI_Controller
{

    public function login()
    {
        $dataInput = $this->input->post();

        $this->form_validation->set_rules("email_member", "Email", "required");
        $this->form_validation->set_rules("password_member", "Password", "required");

        $this->form_validation->set_message("required", "%s wajib diisi");

        if ($this->form_validation->run()==TRUE) {
            $this->load->model('Mmember');
            $output = $this->Mmember->login($dataInput);

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
        $this->session->unset_userdata("id_member");
        $this->session->unset_userdata("email_member");
        $this->session->unset_userdata("nama_member");
        $this->session->unset_userdata("alamat_member");
        $this->session->unset_userdata("nomor_member");
        $this->session->unset_userdata("nama_distrik_member");
        $this->session->unset_userdata("kode_distrik_member");

        $this->session->set_flashdata("pesan_sukses", "Anda telah logout");
        redirect('/', 'refresh');
    }
}
