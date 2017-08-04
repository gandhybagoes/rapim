<?php

class Proses extends CI_Controller
{
    function data_pegawai()
    {
        $nik = $this->input->post('nik');
        $no = $this->input->post('telepon');

        $data = array(
            'nik' => $nik,
            'telepon' => $no,
        );
        $this->model_data->simpan('entry', $data);

        redirect("http://localhost/rapim/camera?t=$nik");
    }

    function thx()
    {
        $this->load->view('done');
        header('Refresh: 3; URL=http://localhost/rapim');
    }
}

?>