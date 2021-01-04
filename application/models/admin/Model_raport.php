<?php

class Model_raport extends CI_Model
{
    function mid($semester = null)
    {
        if ($semester) {
            if ($semester == "Mid Genap" || $semester == "Mid Gasal") {
                $query = "SELECT * FROM nilai WHERE semester='$semester' ORDER BY id DESC";
                return $this->db->query($query)->result_array();
            } else if ($semester == "SEMESTER 1" || $semester == "SEMESTER 2") {
                $query = "SELECT * FROM nilai_s2 WHERE semester='$semester' ORDER BY id DESC";
                return $this->db->query($query)->result_array();
            }
        } else {
            $query = "SELECT * FROM nilai ORDER BY id DESC";
            return $this->db->query($query)->result_array();
        }
    }

    function siswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    function kkm()
    {
        return $this->db->get('kkm')->result_array();
    }
}