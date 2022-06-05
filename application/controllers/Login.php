<?php
class Login extends CI_Controller{
    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('login/index');
        $this->load->view('layouts/footer');
    }
    public function auth(){
        // mengambil data yang telah di input di form login
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // cek user login apakah sudah benar, jika benar arahkan ke halaman tersebut, jika salah kembali ke login
        if($username == 'admin' && $password == 'admin'){
            $userdata = [
                "username" => $username,
                "logged_in" => TRUE,
            ];
            $this->session->set_userdata($userdata);
            redirect('/mahasiswa');
            redirect('/dosen');
            redirect('/matakuliah');
        } elseif ($username == 'mahasiswa' && $password == 'mahasiswa') {
            $userdata = [
                "username" => $username,
            ];
            $this->session->set_userdata($userdata);
            redirect('/matakuliah');
        }
        else{
            redirect('/login');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('/login');
    }
}
?>