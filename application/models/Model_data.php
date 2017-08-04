<?php

class Model_data extends CI_Model
{

    function simpan($table, $data)
    {
        $this->db->insert($table, $data);
    }

}

?>