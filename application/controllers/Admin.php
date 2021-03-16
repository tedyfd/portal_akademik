<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status_login_adm') != "sukses_adm") {
            redirect('login_adm');
        } else {
            $this->load->library('csvimport');
            $this->load->model('admin/Model_raport');
            $this->load->model('admin/Model_import_csv');
            $this->load->model('admin/Model_admin');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        //model
        $data['mid'] = $this->Model_raport->mid();

        //name 
        $data['page'] = 'Raport (semua jenis)';
        $data['profile'] = 'smp';

        $this->load->view('admin/dashboard/index', $data);
    }

    public function import_mid()
    {
        $this->db->empty_table('nilai');
        $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
        foreach ($file_data as $row) {
            $data[] = array(
                'nis'    =>    $row["nis"],
                'id_semester' => $row["id_semester"],
                'id_th_matpel' => $row["id_th_matpel"],
                'nilai_p' => $row["nilai_p"],
                'nilai_k' => $row["nilai_k"],
                'nilai_mid' => $row["nilai_mid"],
            );
        }
        $this->Model_import_csv->insert_mid($data);
    }

    public function import_semester()
    {
        $this->db->empty_table('nilai_s2');
        $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
        foreach ($file_data as $row) {
            $data[] = array(
                'nis'    =>    $row["nis"],
                'kelas' => $row["kelas"],
                'semester'    =>    $row["semester"],
                'ta' => $row["ta"],
                'level'    =>    $row["level"],
                'agama_p' => $row["agama_p"],
                'agama_k' => $row["agama_k"],
                'agama_s' => $row["agama_s"],
                'pkn_p' => $row["pkn_p"],
                'pkn_k' => $row["pkn_k"],
                'pkn_s' => $row["pkn_s"],
                'bindo_p' => $row["bindo_p"],
                'bindo_k' => $row["bindo_k"],

                'mtk_p' => $row["mtk_p"],
                'mtk_k' => $row["mtk_k"],

                'ipa_p' => $row["ipa_p"],
                'ipa_k' => $row["ipa_k"],

                'ips_p' => $row["ips_p"],
                'ips_k' => $row["ips_k"],

                'bing_p' => $row["bing_p"],
                'bing_k' => $row["bing_k"],

                'seni_p' => $row["seni_p"],
                'seni_k' => $row["seni_k"],

                'penjas_p' => $row["penjas_p"],
                'penjas_k' => $row["penjas_k"],

                'prakarya_p' => $row["prakarya_p"],
                'prakarya_k' => $row["prakarya_k"],

                'tik_p' => $row["tik_p"],
                'tik_k' => $row["tik_k"],

                'speaking_p' => $row["speaking_p"],
                'speaking_k' => $row["speaking_k"],

                'eks_1' => $row["eks_1"],
                'eks_1n' => $row["eks_1n"],
                'eks_2' => $row["eks_2"],
                'eks_2n' => $row["eks_2n"],
                'eks_3' => $row["eks_3"],
                'eks_3n' => $row["eks_3n"],
                'deskripsi' => $row["deskripsi"],
                'sakit' => $row["sakit"],
                'izin' => $row["izin"],
                'alpha' => $row["alpha"],
                'naik' => $row["naik"],
                'tinggal' => $row["tinggal"],
            );
        }
        $this->Model_import_csv->insert_semester($data);
    }

    public function raport_mid1()
    {
        $data['title'] = 'Mid Gasal';

        //model
        $semester = 'Mid Gasal';
        $data['mid'] = $this->Model_raport->mid($semester);

        //name 
        $data['page'] = 'Mid Gasal';
        $data['profile'] = 'smp';
        $data['modal'] = 'mid';

        $this->load->view('admin/dashboard/index', $data);
    }
    public function raport_mid2()
    {
        $data['title'] = 'Mid Genap';

        //model
        $semester = 'Mid Genap';
        $data['mid'] = $this->Model_raport->mid($semester);

        //name 
        $data['page'] = 'Mid Genap';
        $data['profile'] = 'smp';
        $data['modal'] = 'mid';

        $this->load->view('admin/dashboard/index', $data);
    }
    public function raport_s1()
    {
        $data['title'] = 'SEMESTER 1';

        //model
        $semester = 'SEMESTER 1';
        $data['mid'] = $this->Model_raport->mid($semester);

        //name 
        $data['page'] = 'SEMESTER 1';
        $data['profile'] = 'smp';
        $data['modal'] = 'semester';

        $this->load->view('admin/dashboard/index', $data);
    }
    public function raport_s2()
    {
        $data['title'] = 'SEMESTER 2';

        //model
        $semester = 'SEMESTER 2';
        $data['mid'] = $this->Model_raport->mid($semester);

        //name 
        $data['page'] = 'SEMESTER 2';
        $data['profile'] = 'smp';
        $data['modal'] = 'semester';

        $this->load->view('admin/dashboard/index', $data);
    }

    public function siswa()
    {
        $data['title'] = 'Data Siswa';

        //model
        $data['mid'] = $this->Model_raport->siswa();

        //name 
        $data['page'] = 'Data Siswa';
        $data['profile'] = 'smp';
        $data['modal'] = 'siswa';

        $this->load->view('admin/dashboard/index', $data);
    }

    public function siswa_add()
    {
        $nis = $this->input->post('nis');
        $nisn = $this->input->post('nisn');
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        $data = array(
            'nis' => $nis,
            'password' => $password,
            'nama' => $nama,
            'nisn' => $nisn,
        );
        $this->db->insert('siswa', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/siswa');
    }

    public function import_siswa()
    {
        // $this->db->empty_table('siswa');
        $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
        foreach ($file_data as $row) {
            $data[] = array(
                'nis' => $row['nis'],
                'password' => $row['password'],
                'nama' => $row['nama'],
                'nisn' => $row['nisn'],
            );
        }
        $this->Model_import_csv->insert_siswa($data);
    }

    public function delete_siswa($id)
    {
        $this->db->delete('siswa', array('id' => $id));
        $this->session->set_flashdata('message', 'telah dihapus!');
        redirect('admin/siswa');
    }

    public function kkm()
    {
        $data['title'] = 'Data KKM';

        //model
        $data['kkm'] = $this->Model_raport->kkm();

        //name 
        $data['page'] = 'Data KKM';
        $data['profile'] = 'smp';

        $this->load->view('admin/dashboard/kkm/index', $data);
    }

    public function update_kkm()
    {
        // $id = $this->input->post("id");
        // $kelas = $this->input->post("kelas");

        // $this->Siswa_model->updateTugas($id, $value, $modul, $guru, $nis, $matpel);
        echo "{}";
    }

    public function status()
    {
        echo 'untuk import Mid Genap, Semester 1 dan 2. belum diaktifkan.';
    }

    public function pengumuman()
    {
        $data['title'] = 'Pengumuman';

        //model
        $data['list_pengumuman'] = $this->Model_admin->list_pengumuman();

        //name 
        $data['page'] = 'Pengumuman';
        $data['profile'] = 'smp';

        $this->load->view('admin/dashboard/index', $data);
    }

    public function pengumuman_del($id)
    {
        $this->db->delete('pengumuman', array('id' => $id));
        $this->session->set_flashdata('message', 'telah dihapus!');
        redirect('admin/pengumuman');
    }

    public function pengumuman_add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('content', 'Content', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Pengumuman';

            // //model

            //name 
            $data['page'] = 'Pengumuman_add';
            $data['profile'] = 'smp';

            $this->load->view('admin/dashboard/index', $data);
        } else {
            $this->_pengumuman_add();
        }
    }

    private function _pengumuman_add()
    {
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $link = str_replace(' ', '', $this->input->post('title'));
        $created = date("d-m-Y");

        $data = array(
            'title' => $title,
            'pengumuman' => $content,
            'link' => $link,
            'created' => $created,
        );
        $this->db->insert('pengumuman', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/pengumuman');
    }

    public function ta()
    {
        $data['title'] = 'Tahun Ajaran';

        //model
        $data['list_ta'] = $this->Model_admin->list_ta();

        //name 
        $data['page'] = 'Tahun Ajaran';
        $data['profile'] = 'smp';

        $this->load->view('admin/dashboard/index', $data);
    }

    public function ta_add()
    {
        $ta1 = $this->input->post('ta1');
        $ta2 = $this->input->post('ta2');
        $ta = $ta1 . "/" . $ta2;

        $data = array(
            'th_ajaran' => $ta,
        );
        $this->db->insert('th_ajaran', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/ta');
    }

    public function matpel()
    {
        $data['title'] = 'Mata Pelajaran';

        //model
        $data['list_matpel'] = $this->Model_admin->list_matpel();

        //name 
        $data['page'] = 'Matpel';
        $data['profile'] = 'smp';

        $this->load->view('admin/dashboard/index', $data);
    }

    public function matpel_add()
    {
        $matpel = $this->input->post('matpel');

        $data = array(
            'matpel' => $matpel,
        );
        $this->db->insert('matpel', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/matpel');
    }

    public function kelas()
    {
        $data['title'] = 'Kelas';

        //model
        $data['list_kelas'] = $this->Model_admin->list_kelas();

        //name 
        $data['page'] = 'Kelas';
        $data['profile'] = 'smp';

        $this->load->view('admin/dashboard/index', $data);
    }

    public function kelas_add()
    {
        $kelas = $this->input->post('kelas');

        $data = array(
            'kelas' => $kelas,
        );
        $this->db->insert('kelas', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/kelas');
    }

    public function semester()
    {
        $data['title'] = 'Semester';

        //model
        $data['list_semester'] = $this->Model_admin->list_semester();

        //name 
        $data['page'] = 'Semester';
        $data['profile'] = 'smp';

        $this->load->view('admin/dashboard/index', $data);
    }

    public function kelas_ta()
    {
        $data['title'] = 'Kelas Berdasarkan Tahun Ajaran';

        //model
        $data['list_kelas_ta'] = $this->Model_admin->list_kelas_ta();

        //name 
        $data['page'] = 'Kelas Tahun Ajaran';
        $data['profile'] = 'smp';

        $this->load->view('admin/dashboard/index', $data);
    }

    public function kelas_ta_add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ta', 'Tahun Ajaran', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Kelas Tahun Ajaran';

            // //model

            //name 
            $data['page'] = 'Kelas Tahun Ajaran add';
            $data['profile'] = 'smp';

            $this->load->view('admin/dashboard/index', $data);
        } else {
            $this->_kelas_ta_add();
        }
    }

    private function _kelas_ta_add()
    {
        $th = $this->input->post('ta');
        $kelas = $this->input->post('kelas');

        $data = array(
            'id_th' => $th,
            'id_kelas' => $kelas,
        );
        $this->db->insert('th_kelas', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/kelas_ta');
    }

    public function kelas_ta_batch()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ta', 'Tahun Ajaran', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Batch Kelas Tahun Ajaran';

            // //model

            //name 
            $data['page'] = 'Batch Kelas Tahun Ajaran add';
            $data['profile'] = 'smp';

            $this->load->view('admin/dashboard/index', $data);
        } else {
            $this->_kelas_ta_batch();
        }
    }

    private function _kelas_ta_batch()
    {
        $ta = $this->input->post('ta');
        $kelas = $this->input->post('kelas');
        $kelas = $this->db->query("SELECT * FROM conf_kelas_th WHERE id = $kelas")->row_array();

        $myString = $kelas['kelas'];
        $myArray = explode(',', $myString);
        foreach ($myArray as $row) {
            $data[] = array(
                'id_th' => "$ta",
                'id_kelas' => $row[0],
            );
        }
        $this->db->insert_batch('th_kelas', $data);
        redirect('admin/kelas_ta');
    }

    public function matpel_ta()
    {
        $data['title'] = 'Matpel Berdasarkan Kelas TA';

        //model
        $data['list_matpel_ta'] = $this->Model_admin->list_matpel_ta();

        //name 
        $data['page'] = 'Matpel Tahun Ajaran';
        $data['profile'] = 'smp';

        $this->load->view('admin/dashboard/index', $data);
    }

    public function matpel_ta_add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ta_kelas', 'Kelas Tahun Ajaran', 'required|trim');
        $this->form_validation->set_rules('matpel', 'Kelas', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Matpel Tahun Ajaran';

            // //model

            //name 
            $data['page'] = 'Matpel Tahun Ajaran add';
            $data['profile'] = 'smp';

            $this->load->view('admin/dashboard/index', $data);
        } else {
            $this->_matpel_ta_add();
        }
    }

    private function _matpel_ta_add()
    {
        $th_kelas = $this->input->post('ta_kelas');
        $matpel = $this->input->post('matpel');

        $data = array(
            'id_th_kelas' => $th_kelas,
            'id_matpel' => $matpel,
        );
        $this->db->insert('th_matpel', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/matpel_ta');
    }

    public function matpel_ta_batch()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kelas', 'Tahun Ajaran', 'required|trim');
        $this->form_validation->set_rules('matpel', 'Kelas', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Batch Matpel Tahun Ajaran';

            // //model

            //name 
            $data['page'] = 'Batch Matpel Ta add';
            $data['profile'] = 'smp';

            $this->load->view('admin/dashboard/index', $data);
        } else {
            $this->_matpel_ta_batch();
        }
    }

    private function _matpel_ta_batch()
    {
        $kelas = $this->input->post('kelas');
        $matpel = $this->input->post('matpel');
        $matpel = $this->db->query("SELECT * FROM conf_matpel_th WHERE id = $matpel")->row_array();

        $myString = $matpel['matpel'];
        $myArray = explode(',', $myString);
        foreach ($myArray as $row) {
            $data[] = array(
                'id_th_kelas' => "$kelas",
                'id_matpel' => $row[0],
            );
        }
        $this->db->insert_batch('th_matpel', $data);
        redirect('admin/matpel_ta');
    }

    public function jadwal_matpel()
    {
        $data['title'] = 'Jadwal';

        //model
        $data['list_jadwal'] = $this->Model_admin->list_jadwal();

        //name 
        $data['page'] = 'Jadwal Matpel';
        $data['profile'] = 'smp';

        $this->load->view('admin/dashboard/index', $data);
    }

    public function jadwal_matpel_add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('matpel_ta', 'matapelajaran', 'required|trim');
        $this->form_validation->set_rules('hari[]', 'hari', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Jadwal';

            //model

            //name 
            $data['page'] = 'Jadwal Matpel add';
            $data['profile'] = 'smp';

            $this->load->view('admin/dashboard/index', $data);
        } else {
            $this->_jadwal_matpel_add();
        }
    }

    private function _jadwal_matpel_add()
    {
        $matpel_ta = $this->input->post('matpel_ta');

        $for_query = '';
        foreach ($this->input->post('hari') as $language) {
            $for_query .= $language . ',';
        }
        $hari = substr($for_query, 0, -1);

        $myArray = explode(',', $hari);
        foreach ($myArray as $row) {
            $data[] = array(
                'id_th_matpel' => "$matpel_ta",
                'id_hari' => $row[0],
            );
        }
        $this->db->insert_batch('jadwal', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/jadwal_matpel');
    }

    public function jadwal_del($id)
    {
        $this->db->delete('jadwal', array('id_jadwal' => $id));
        $this->session->set_flashdata('message', 'telah dihapus!');
        redirect('admin/jadwal_matpel');
    }
}