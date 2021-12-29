<?php

class Muster_m extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('muster');
    }
}
