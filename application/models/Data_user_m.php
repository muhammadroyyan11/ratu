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

    function tampil_manif_kargo()
    {
        return $this->db->get('manif_kargo');
    }

    function join_user_umum()
    {
        $this->db->select('*');
        $this->db->from('data_umum');
        $this->db->join('user', 'user.id_user = data_umum.id_user');
        $query = $this->db->get();
        return $query;
    }

    function join_user_manif()
    {
        $this->db->select('*');
        $this->db->from('manif_kargo');
        $this->db->join('user', 'user.id_user = manif_kargo.id_user');
        $query = $this->db->get();
        return $query;
    }
}
