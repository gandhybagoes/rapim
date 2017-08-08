<?php

class Proses extends CI_Controller
{
    function data_pegawai()
    {
        date_default_timezone_set('asia/jakarta');

        $waktu = date("F j, Y, g:i a");
        $nik = $this->input->post('nik');
        $no = $this->input->post('telepon');
        $alamat = "";//$this->input->post('alamat');

        $where = array(
            'nik' => $nik
        );
        $cek = $this->model_data->cek_data('data_undangan', $where);

        if ($cek != null) {
            if ($cek[0]['status'] != null) {
                redirect('proses/thx/4');
            } else {
                $data = array(
                'status' => "hadir",
                'telepon' => $no,
                'waktu_absen' => $waktu,
                    'alamat' => $alamat,
                );
                $this->model_data->simpan('data_undangan', $data, $where);

                redirect(base_url() . "camera?t=$nik");
            }
        } else {
            $data = array(
                'nik' => $nik,
                'status' => "pengganti",
                'telepon' => $no,
                'waktu_absen' => $waktu,
                'alamat' => $alamat,
            );
            $this->model_data->simpan_pengganti('data_undangan', $data);

            redirect(base_url() . "camera?t=$nik");
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
        $nik = $this->input->get('nik');
        $where = array(
            'nik' => $nik
        );

        $pesan['msg'] = "";
        $pesan['data'] = "";
        if ($msg == "1") {
            $pesan['msg'] = "Terimakasih Telah Melakukan Absensi";
            $pesan['data'] = $this->model_data->cek_data('data_undangan', $where);

            $pesan['ultah'] = $this->model_data->cek_data('data_karyawan', $where);
            if ($pesan['ultah'] != null || $pesan['ultah'] != "") {
                $tgl_ultah = $pesan['ultah'][0]['tanggal_lahir'];
                $tgl_ultah = explode("/", $tgl_ultah);
                if ($tgl_ultah[1] == "08") {
                    $pesan['msg2'] = "Selamat!!!, Anda Akan Berulang Tahun di Bulan Agustus ini";
                } else {
                    $pesan['msg2'] = " ";
                }
            } else {
                $pesan['msg2'] = " ";
            }
        } elseif ($msg == "0") {
            $pesan['msg'] = "Data Pegawai Tidak Ditemukan, Silahkan Menghubungi Admin";
            $pesan['data'] = "";
        } elseif ($msg == "4") {
            $pesan['msg'] = "Mohon Maaf, Anda Sudah Absen Sebelumnya, Silahkan Menghubungi Admin";
            $pesan['data'] = "";
        } else {
            $pesan['data'] = "";
            $pesan['msg'] = "UPLOAD GAGAL, Tidak ada file yang dipilih / extensi file salah, silahkan menghubungi admin";
        }
        $this->load->view('done', $pesan);
        header('Refresh: 5; URL=' . base_url());
    }

    function download()
    {
        $file = $this->input->get('f');
        force_download('assets/files/' . $file, null);
    }

    function simpan_kamar()
    {
        $id = $this->input->get('no');
        $nomor_kamar = $this->input->post('nomor_kamar');

        $where = array(
            'kamar' => $id,
        );
        $data = array(
            'nomor_kamar' => $nomor_kamar,
        );
        $this->model_data->simpan('data_kamar', $data, $where);
        redirect(base_url('index.php') . "/welcome/kamar");
    }
}

?>