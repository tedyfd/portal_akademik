<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "SMPS Maitreyawira";
            $this->load->view('login/index', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['username' => $username, 'password' => $password])->row_array();

        if ($user) {
            $data = [
                'status_login' => 'sukses_adm',
                'username' => $user['username'],

            ];
            $this->session->set_userdata($data);

            redirect('admin');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Username atau Password anda salah</div>');
            redirect('Login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}