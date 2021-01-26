<?php

class Model_admin extends CI_Model
{
    function list_pengumuman()
    {
        return $this->db->query('select * from pengumuman order by id desc')->result_array();
    }
}