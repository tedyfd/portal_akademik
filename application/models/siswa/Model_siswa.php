<?php

class Model_siswa extends CI_Model
{
    function list_raport($nis)
    {
        $query = "select nis, kelas, semester from nilai
        where nis='$nis'
        union
        select nis, kelas,semester from nilai_s2
        where nis='$nis'";
        return $this->db->query($query)->result_array();
    }
    function list($nis, $kelas, $semester)
    {
        if ($semester == "Mid Genap" || $semester == "Mid Gasal") {
            $query = "SELECT kelas.*, nilai.*, kkm.* FROM nilai
            inner join users on nilai.nis = users.nis 
            INNER JOIN kelas on nilai.kelas = kelas.sub_kelas
            inner join kkm on kelas.main_kelas = kkm.kelas 
            where users.nis='$nis' and nilai.kelas='$kelas' and nilai.semester='$semester'
            ";
            return $this->db->query($query)->result_array();
        } else {
            $query = "SELECT * FROM nilai_s2 
            inner join users on nilai_s2.nis = users.nis 
            INNER JOIN kelas on nilai_s2.kelas = kelas.sub_kelas
            inner join kkm on kelas.main_kelas = kkm.kelas 
            where users.nis='$nis' and nilai_s2.kelas='$kelas' and nilai_s2.semester='$semester'";
            return $this->db->query($query)->result_array();
        }
    }

    function list_pengumuman()
    {
        return $this->db->query('select * from pengumuman order by id desc')->result_array();
    }
    function detail_pengumuman($id)
    {
        return $this->db->query("select * from pengumuman where id=$id")->row_array();
    }
}