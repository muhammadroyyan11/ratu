<?php

class User_m extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('user')->result();
    }

    function getDataById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    function setUpdateData($id)
    {
        $data = [
            'id' => $this->input->post('id', true),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'noHp' => $this->input->post('noHp'),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'pass' => password_hash($this->input->post('pass1'), PASSWORD_DEFAULT),
            'namaKapal' => $this->input->post('namaKapal'),
            'jabatan' => $this->input->post('jabatan'),
            'shipping' => $this->input->post('shipping')
        ];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}
