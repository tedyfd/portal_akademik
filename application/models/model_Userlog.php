<?php

class model_Userlog extends CI_Model
{

    function login($username, $password)
    {
        $periksa = $this->db->get_where('users', array('nis' => $username, 'password' => $password));
        if ($periksa->num_rows() > 0) {
            return 1;
            $_SESSION["kelas"] = $periksa["kelas"];
        } else {
            return 0;
        }
    }
}
