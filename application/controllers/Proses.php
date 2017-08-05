<?php

class Proses extends CI_Controller
{
    function data_pegawai()
    {
        date_default_timezone_set('asia/jakarta');

        $waktu = date("F j, Y, g:i a");
        $nik = $this->input->post('nik');
        $no = $this->input->post('telepon');

        $where = array(
            'nik' => $nik
        );
        $cek = $this->model_data->cek_data('data_undangan', $where);

        if ($cek != null) {
            $data = array(
                'status' => "hadir",
                'telepon' => $no,
                'waktu_absen' => $waktu,
            );
            $this->model_data->simpan('data_undangan', $data, $where);

            redirect("http://localhost/rapim/camera?t=$nik");
        } else {
            $data = array(
                'nik' => $nik,
                'status' => "pengganti",
                'telepon' => $no,
                'waktu_absen' => $waktu,
            );
            $this->model_data->simpan_pengganti('data_undangan', $data);

            redirect("http://localhost/rapim/camera?t=$nik");
        }
    }

    function upload()
    {
        date_default_timezone_set('asia/jakarta');
        $berkas = $this->do_upload();
        $waktu = date("F j, Y, g:i a");

        if ($berkas == null) {
            $msg = "3";
            $this->thx($msg);
        } else {
            $data = array(
                'nama_file' => $berkas,
                'waktu_upload' => $waktu,
            );
            $this->model_data->simpan_pengganti('data_berkas', $data);

            echo "<script>
			window.alert('Berkas berhasil diupload');
    	    window.location.href='" . base_url('index.php/welcome/file') . "';
			</script>";
        }
    }

    function do_upload()
    {
        $type_asli = explode('.', $_FILES["berkas"]["name"]);
        $nama_file = str_replace(" ", "_", $type_asli[0]);
        $type = $type_asli[count($type_asli) - 1];
        $url = $nama_file . '.' . $type;
        if (in_array($type, array("jpg", "jpeg", "gif", "png", "pdf", "pptx", "csv", "xlsx", "docx")))
            if (is_uploaded_file($_FILES["berkas"]["tmp_name"]))
                if (move_uploaded_file($_FILES["berkas"]["tmp_name"], "./assets/files/" . $url))
                    return $url;
        return "";
    }

    function thx($msg)
    {
        $pesan['msg'] = "";
        if ($msg == "1") {
            $pesan['msg'] = "Terimakasih Telah Melakukan Absensi";
        } elseif ($msg == "0") {
            $pesan['msg'] = "Data Pegawai Tidak Ditemukan, Silahkan Menghubungi Admin";
        } else {
            $pesan['msg'] = "UPLOAD GAGAL, Tidak ada file yang dipilih / extensi file salah, silahkan menghubungi admin";
        }
        $this->load->view('done', $pesan);
        header('Refresh: 3; URL=http://localhost/rapim');
    }

    function download()
    {
        $file = $this->input->get('f');
        force_download('assets/files/' . $file, null);
    }
}

?>