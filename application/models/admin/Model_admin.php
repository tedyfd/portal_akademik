<?php

class Model_admin extends CI_Model
{
    function list_siswa($id = null)
    {
        if ($id) {
            return $this->db->get_where('siswa', ['id' => $id])->row_array();
        } else {
            return $this->db->get('siswa')->result_array();
        }
    }
    function list_pengumuman($id = null)
    {
        if ($id) {
            return $this->db->get_where('pengumuman', ['id' => $id])->row_array();
        } else {
            return $this->db->query('SELECT * FROM pengumuman ORDER BY id DESC')->result_array();
        }
    }

    function list_ta()
    {
        return $this->db->get('th_ajaran')->result_array();
    }

    function list_kelas($id = null)
    {
        if ($id) {
            return $this->db->get_where('kelas', ['id_kelas' => $id])->row_array();
        } else {
            return $this->db->get('kelas')->result_array();
        }
    }

    function list_matpel()
    {
        return $this->db->get('matpel')->result_array();
    }

    function list_semester($id = null)
    {
        if ($id) {
            return $this->db->get_where('semester', ['id_semester' => $id])->row_array();
        } else {
            return $this->db->get('semester')->result_array();
        }
    }

    function list_kelas_ta($id = null)
    {
        if ($id) {
            $query = "SELECT th_kelas.id_th_kelas, th_ajaran.id_th, th_ajaran.th_ajaran, kelas.id_kelas, kelas.kelas FROM th_kelas
        INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th
        INNER JOIN kelas ON th_kelas.id_kelas = kelas.id_kelas
        WHERE th_kelas.id_th_kelas = '$id'
        ";
            return $this->db->query($query)->row_array();
        } else {
            $query = "SELECT th_kelas.id_th_kelas, th_ajaran.th_ajaran, kelas.kelas FROM th_kelas
        INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th
        INNER JOIN kelas ON th_kelas.id_kelas = kelas.id_kelas";
            return $this->db->query($query)->result_array();
        }
    }

    function list_matpel_ta($id = null)
    {
        if ($id) {
            $query = "SELECT th_matpel.id_th_matpel, th_matpel.id_th_kelas, th_ajaran.th_ajaran, kelas.kelas, matpel.id_matpel, matpel.matpel FROM th_matpel
            INNER JOIN th_kelas on th_matpel.id_th_kelas = th_kelas.id_th_kelas
            INNER JOIN matpel on th_matpel.id_matpel = matpel.id_matpel
            INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th
            INNER JOIN kelas ON th_kelas.id_kelas = kelas.id_kelas
            WHERE th_matpel.id_th_matpel = '$id'
            ";
            return $this->db->query($query)->row_array();
        } else {
            $query = "SELECT th_matpel.id_th_matpel, th_ajaran.th_ajaran, kelas.kelas, matpel.matpel FROM th_matpel
            INNER JOIN th_kelas on th_matpel.id_th_kelas = th_kelas.id_th_kelas
            INNER JOIN matpel on th_matpel.id_matpel = matpel.id_matpel
            INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th
            INNER JOIN kelas ON th_kelas.id_kelas = kelas.id_kelas";
            return $this->db->query($query)->result_array();
        }
    }

    function list_jadwal($id = null)
    {
        if ($id) {
            $query = "SELECT jadwal.id_jadwal,th_matpel.id_th_matpel, th_ajaran.th_ajaran, kelas.kelas, matpel.matpel, hari.id_hari, hari.hari FROM jadwal
            INNER JOIN hari on jadwal.id_hari= hari.id_hari
            INNER JOIN th_matpel on jadwal.id_th_matpel = th_matpel.id_th_matpel
            INNER JOIN th_kelas on th_matpel.id_th_kelas = th_kelas.id_th_kelas
            INNER JOIN matpel on th_matpel.id_matpel = matpel.id_matpel
            INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th
            INNER JOIN kelas ON th_kelas.id_kelas = kelas.id_kelas
            WHERE jadwal.id_jadwal='$id'
            ";
            return $this->db->query($query)->row_array();
        } else {
            $query = "SELECT jadwal.id_jadwal, th_ajaran.th_ajaran, kelas.kelas, matpel.matpel, hari.hari FROM jadwal
            INNER JOIN hari on jadwal.id_hari= hari.id_hari
            INNER JOIN th_matpel on jadwal.id_th_matpel = th_matpel.id_th_matpel
            INNER JOIN th_kelas on th_matpel.id_th_kelas = th_kelas.id_th_kelas
            INNER JOIN matpel on th_matpel.id_matpel = matpel.id_matpel
            INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th
            INNER JOIN kelas ON th_kelas.id_kelas = kelas.id_kelas
            ";
            return $this->db->query($query)->result_array();
        }
    }

    function list_hari()
    {
        return $this->db->get('hari')->result_array();
    }

    function mid($id = null)
    {
        if ($id) {
            $query = "SELECT nilai_mid.*, semester.semester, matpel.matpel, kelas.kelas, th_ajaran.th_ajaran FROM nilai_mid
            INNER JOIN semester ON nilai_mid.id_semester = semester.id_semester
            INNER JOIN th_matpel ON nilai_mid.id_th_matpel = th_matpel.id_th_matpel
            INNER JOIN matpel ON th_matpel.id_matpel = matpel.id_matpel
            INNER JOIN th_kelas ON th_matpel.id_th_kelas = th_kelas.id_th_kelas
            INNER JOIN kelas ON th_kelas.id_kelas = kelas.id_kelas
            INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th
            WHERE nilai_mid.id = '$id'
            ";
            return $this->db->query($query)->row_array();
        } else {
            $query = "SELECT nilai_mid.*, semester.semester, matpel.matpel, kelas.kelas, th_ajaran.th_ajaran FROM nilai_mid
            INNER JOIN semester ON nilai_mid.id_semester = semester.id_semester
            INNER JOIN th_matpel ON nilai_mid.id_th_matpel = th_matpel.id_th_matpel
            INNER JOIN matpel ON th_matpel.id_matpel = matpel.id_matpel
            INNER JOIN th_kelas ON th_matpel.id_th_kelas = th_kelas.id_th_kelas
            INNER JOIN kelas ON th_kelas.id_kelas = kelas.id_kelas
            INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th";
            return $this->db->query($query)->result_array();
        }
    }

    function semester($id = null)
    {
        if ($id) {
            return $this->db->get_where('nilai_semester', ['id' => $id])->row_array();
        } else {
            $query = "SELECT nilai_semester.*, semester.semester, matpel.matpel, kelas.kelas, th_ajaran.th_ajaran FROM nilai_semester
            INNER JOIN semester ON nilai_semester.id_semester = semester.id_semester
            INNER JOIN th_matpel ON nilai_semester.id_th_matpel = th_matpel.id_th_matpel
            INNER JOIN matpel ON th_matpel.id_matpel = matpel.id_matpel
            INNER JOIN th_kelas ON th_matpel.id_th_kelas = th_kelas.id_th_kelas
            INNER JOIN kelas ON th_kelas.id_kelas = kelas.id_kelas
            INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th";
            return $this->db->query($query)->result_array();
        }
    }
}