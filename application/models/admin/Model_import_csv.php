<?php

class Model_import_csv extends CI_Model
{
    function insert_mid($data)
    {
        $this->db->insert_batch('nilai', $data);
    }
    function insert_semester($data)
    {
        $this->db->insert_batch('nilai_s2', $data);
    }
    function insert_siswa($data)
    {
        $this->db->insert_batch('siswa', $data);
    }
}