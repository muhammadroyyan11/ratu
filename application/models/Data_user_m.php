<?php

class Data_user_m extends CI_Model
{
    function tampil_data_user()
    {
        return $this->db->get('user');
    }

    function tampil_data_umum()
    {
        return $this->db->get('data_umum');
    }

    function user_kapal()
    {
        $this->db->select('*');
        $this->db->from('data_umum');
        $this->db->join('user', 'user.id_user = data_umum.id_user');
        $query = $this->db->get();
        return $query;
    }
}
