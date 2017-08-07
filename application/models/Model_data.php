<?php

class Model_data extends CI_Model
{

    function cek_data($table, $where)
    {
        $query = $this->db->select('*')
            ->from($table)
            ->where($where)
            ->get();
        return $query->result_array();
    }

    function get_data($table)
    {
        $query = $this->db->select('*')
            ->from($table)
            ->get();
        return $query->result_array();
    }

    function simpan($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->set($data);
        $this->db->update($table);
    }

    function simpan_pengganti($table, $data)
    {
        $this->db->insert($table, $data);
    }

    function total_undangan()
    {
        $query = $this->db->select('*')
            ->from('data_undangan')
            ->where('posisi !=', '')
            ->get();
        return $query->result_array();
    }

    function hadir_undangan()
    {
        $query = $this->db->select('*')
            ->from('data_undangan')
            ->where('status =', 'hadir')
            ->get();
        return $query->result_array();
    }

    function pengganti_undangan()
    {
        $query = $this->db->select('*')
            ->from('data_undangan')
            ->where('status =', 'pengganti')
            ->get();
        return $query->result_array();
    }

    function get_last()
    {
        return $this->db->select('*')
            ->from('data_undangan')
            ->where('waktu_absen !=', "")
            ->order_by('waktu_absen', 'DESC')
            ->limit(3)
            ->get()
            ->result_array();
    }

}

?>