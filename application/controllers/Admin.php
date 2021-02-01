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

        // //model
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
                'kelas' => $row["kelas"],
                'semester'    =>    $row["semester"],
                'ta' => $row["ta"],
                'level'    =>    $row["level"],
                'agama_p' => $row["agama_p"],
                'agama_k' => $row["agama_k"],
                'agama_mid' => $row["agama_mid"],
                'pkn_p' => $row["pkn_p"],
                'pkn_k' => $row["pkn_k"],
                'pkn_mid' => $row["pkn_mid"],
                'bindo_p' => $row["bindo_p"],
                'bindo_k' => $row["bindo_k"],
                'bindo_mid' => $row["bindo_mid"],
                'mtk_p' => $row["mtk_p"],
                'mtk_k' => $row["mtk_k"],
                'mtk_mid' => $row["mtk_mid"],
                'ipa_p' => $row["ipa_p"],
                'ipa_k' => $row["ipa_k"],
                'ipa_mid' => $row["ipa_mid"],
                'ips_p' => $row["ips_p"],
                'ips_k' => $row["ips_k"],
                'ips_mid' => $row["ips_mid"],
                'bing_p' => $row["bing_p"],
                'bing_k' => $row["bing_k"],
                'bing_mid' => $row["bing_mid"],
                'seni_p' => $row["seni_p"],
                'seni_k' => $row["seni_k"],
                'seni_mid' => $row["seni_mid"],
                'penjas_p' => $row["penjas_p"],
                'penjas_k' => $row["penjas_k"],
                'penjas_mid' => $row["penjas_mid"],
                'prakarya_p' => $row["prakarya_p"],
                'prakarya_k' => $row["prakarya_k"],
                'prakarya_mid' => $row["prakarya_mid"],
                'tik_p' => $row["tik_p"],
                'tik_k' => $row["tik_k"],
                'tik_mid' => $row["tik_mid"],
                'speaking_p' => $row["speaking_p"],
                'speaking_k' => $row["speaking_k"],
                'speaking_mid' => $row["speaking_mid"],
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

    public function import_siswa()
    {
        // $this->db->empty_table('siswa');
        $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
        foreach ($file_data as $row) {
            $data[] = array(
                'nis' => $row['nis'],
                'password' => $row['tanggal_lahir'],
                'nama' => $row['nama'],
                'nisn' => $row['nisn'],
            );
        }
        $this->Model_import_csv->insert_siswa($data);
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

    public function matpel()
    {
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

        $data = array(
            'title' => $title,
            'pengumuman' => $content,
            'link' => $link,
            'created' => '',
        );
        $this->db->insert('pengumuman', $data);
        $this->session->set_flashdata('message', 'telah ditambahkan');
        redirect('admin/pengumuman');
    }
}