<?php
class Admin extends CI_Controller 
{
    function index()
    {
        $isAuth = $this->session->has_userdata('USERNAME');
        $user = $this->session->userdata('USER');
        $id_data = json_decode(json_encode($user),true);

        if($isAuth) {
            $this->load->model('admin_model','admin');
            $data['admin_data'] = $this->admin->findById($id_data['id']);

            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('admin/index',$data);
            $this->load->view('layouts/footer');
        } else {
            redirect(base_url()."auth/login");
        }
    }
    
    function update()
    {
        $isAuth = $this->session->has_userdata('USERNAME');
        $user = $this->session->userdata('USER');
        $user_data = json_decode(json_encode($user),true);


        if($isAuth) {
            $this->load->model('admin_model','admin');

            $idedit = $this->input->post('id');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            
            $data[] = $username;
            $data[] = ($password != NULL) ? $password : $user_data['password'];
            $data[] = $email;
            // $data[] = $role;
            $data[] = $user_data['id'];
    
            $this->admin->updateFromadmin($data);
            $this->session->set_flashdata('sukses','data berhasil diupdate!, data akan berefek pada login berikutnya');
            redirect(base_url()."index.php/admin");
        }
    }
}