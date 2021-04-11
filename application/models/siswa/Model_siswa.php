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

    function list_matpel($nis)
    {
        $query = "SELECT siswa.nis, siswa.nama,siswa.nisn, th_ajaran.th_ajaran,kelas.kelas, matpel.matpel, hari.hari  from siswa
        INNER JOIN th_kelas_siswa on th_kelas_siswa.nis = siswa.nis
        
        INNER JOIN th_kelas on th_kelas_siswa.id_th_kelas = th_kelas.id_th_kelas
        INNER JOIN th_ajaran on th_kelas.id_th = th_ajaran.id_th
        INNER JOIN kelas on th_kelas.id_kelas = kelas.id_kelas
        
        INNER JOIN th_matpel on th_kelas.id_th_kelas = th_matpel.id_th_kelas
        INNER JOIN matpel on th_matpel.id_matpel = matpel.id_matpel
				
		LEFT JOIN jadwal on th_matpel.id_th_matpel = jadwal.id_th_matpel
		INNER JOIN hari on jadwal.id_hari = hari.id_hari
       
        where siswa.nis ='$nis'";
        return $this->db->query($query)->result_array();
    }
    function list_nilai($nis)
    {
        $query = "SELECT nis, th_ajaran.th_ajaran, kelas.kelas,semester.semester,matpel.matpel, th_kelas. id_th_kelas, semester.id_semester  from nilai_mid
        INNER JOIN semester ON nilai_mid.id_semester = semester.id_semester
        INNER JOIN th_matpel ON nilai_mid.id_th_matpel = th_matpel.id_th_matpel
        INNER JOIN matpel ON th_matpel.id_matpel = matpel.id_matpel
        INNER JOIN th_kelas ON th_matpel.id_th_kelas = th_kelas.id_th_kelas
        INNER JOIN kelas ON th_kelas.id_th_kelas = kelas.id_kelas
        INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th
        WHERE nilai_mid.nis='$nis'
        GROUP by nilai_mid.nis, nilai_mid.id_semester, nilai_mid.id_th_matpel";

        return $this->db->query($query)->result_array();
    }

    function list_nilai_dtl($nis, $id_th_kelas, $id_semester)
    {
        if ($id_semester == 1 || $id_semester == 3) {

            $query = "SELECT nis, th_ajaran.th_ajaran, kelas.kelas,semester.semester,matpel.matpel,th_kelas. id_th_kelas, semester.id_semester, nilai_mid.nilai_p, nilai_mid.nilai_k, nilai_mid.nilai_mid from nilai_mid
        INNER JOIN semester ON nilai_mid.id_semester = semester.id_semester
        INNER JOIN th_matpel ON nilai_mid.id_th_matpel = th_matpel.id_th_matpel
        INNER JOIN matpel ON th_matpel.id_matpel = matpel.id_matpel
        INNER JOIN th_kelas ON th_matpel.id_th_kelas = th_kelas.id_th_kelas
        INNER JOIN kelas ON th_kelas.id_th_kelas = kelas.id_kelas
        INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th
        where nilai_mid.nis='$nis' and th_kelas.id_th_kelas = '$id_th_kelas' and semester.id_semester ='$id_semester'";
        }

        return $this->db->query($query)->result_array();
    }
}