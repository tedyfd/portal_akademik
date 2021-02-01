<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status_login_siswa') != "sukses_siswa") {
            redirect('login_adm');
        } else {
            $this->load->model('admin/Model_admin');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        // //model

        //name 
        $data['page'] = 'Dashboard';

        $this->load->view('siswa/dashboard/index', $data);
    }

    public function pengumuman()
    {
        $data['title'] = 'Pengumuman';

        // //model
        $data['list_pengumuman'] = $this->Model_admin->list_pengumuman();

        //name 
        $data['page'] = 'Pengumuman';

        $this->load->view('siswa/dashboard/index', $data);
    }

    public function pengumuman_detail()
    {
    }
}