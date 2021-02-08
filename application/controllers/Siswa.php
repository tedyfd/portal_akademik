<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status_login_siswa') != "sukses_siswa") {
            redirect('login');
        } else {
            $this->load->model('siswa/Model_siswa');
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

        //model
        $data['list_pengumuman'] = $this->Model_siswa->list_pengumuman();

        //name 
        $data['page'] = 'Pengumuman';

        $this->load->view('siswa/dashboard/index', $data);
    }

    public function pengumuman_detail($id)
    {
        $data['title'] = 'Pengumuman';

        //model
        $data['list_pengumuman'] = $this->Model_siswa->detail_pengumuman($id);

        //name 
        $data['page'] = 'Detail Pengumuman';

        $this->load->view('siswa/dashboard/index', $data);
    }
}