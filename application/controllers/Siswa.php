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

    public function matpel()
    {
        $data['title'] = 'Matapelajaran';

        //model
        $data['list_matpel'] = $this->Model_siswa->list_matpel($this->session->userdata('username'));

        //name 
        $data['page'] = 'Matpel';

        $this->load->view('siswa/dashboard/index', $data);
    }

    public function nilai()
    {
        $data['title'] = 'Hasil Penilaian';

        //model
        $nis = $this->session->userdata('username');
        $data['list_nilai'] = $this->Model_siswa->list_nilai($nis);

        //name 
        $data['page'] = 'Nilai';

        $this->load->view('siswa/dashboard/index', $data);
    }

    public function nilai_dtl($id_th_kelas, $id_semester)
    {
        $data['title'] = 'Detail Penilaian';

        //model
        $nis = $this->session->userdata('username');
        $data['list_nilai'] = $this->Model_siswa->list_nilai_dtl($nis, $id_th_kelas, $id_semester);

        //name 
        $data['page'] = 'Nilai Detail';

        $this->load->view('siswa/dashboard/index', $data);
    }
}