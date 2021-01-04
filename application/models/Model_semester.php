<?php

class Model_semester extends CI_Model
{
    function list($nis)
    {
        // return $this->db->get('nilai', array('nis' => $nis))->result_array();
        return $this->db->query("SELECT * FROM nilai_s2 inner join users on nilai_s2.nis = users.nis inner join kkm on nilai_s2.kelas = kkm.kelas where users.nis='$nis'")->result_array();
    }
}