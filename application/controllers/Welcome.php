<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        /*$tamu['total'] = count($this->model_data->total_undangan());
        $tamu['hadir'] = count($this->model_data->hadir_undangan());
        $tamu['pengganti'] = count($this->model_data->pengganti_undangan());
        $this->load->view('header');
        $this->load->view('form_register', $tamu);
        $this->load->view('template');*/

        $this->load->view('banner');
    }

    function registrasi()
    {
        $tamu['total'] = count($this->model_data->total_undangan());
        $tamu['hadir'] = count($this->model_data->hadir_undangan());
        $tamu['pengganti'] = count($this->model_data->pengganti_undangan());
        $tamu['baru'] = $this->model_data->get_last();
        $this->load->view('header');
        $this->load->view('form_register', $tamu);
        $this->load->view('template');
    }

    public function file()
    {
        $data['berkas'] = $this->model_data->get_data('data_berkas');
        $this->load->view('header');
        $this->load->view('table_file', $data);
        $this->load->view('template');
    }

    public function rundown()
    {
        $this->load->view('header');
        $this->load->view('table_rundown');
        $this->load->view('template');
    }

    public function tatib()
    {
        $this->load->view('header');
        $this->load->view('tata_tertib');
        $this->load->view('template');
    }

    public function absensi()
    {
        $tamu['total'] = count($this->model_data->total_undangan());
        $tamu['hadir'] = count($this->model_data->hadir_undangan());
        $tamu['pengganti'] = count($this->model_data->pengganti_undangan());

        $request = $this->input->get('r');
        if ($request == "total") {
            $tamu['data'] = $this->model_data->total_undangan();
        } elseif ($request == "hadir") {
            $tamu['data'] = $this->model_data->hadir_undangan();
        } elseif ($request == "pengganti") {
            $tamu['data'] = $this->model_data->pengganti_undangan();
        }

        $this->load->view('header');
        $this->load->view('table', $tamu);
        $this->load->view('template');
    }

    public function kamar()
    {
        $data['kamar'] = $this->model_data->get_data('data_kamar');
        $this->load->view('header');
        $this->load->view('table_kamar', $data);
        $this->load->view('template');
    }

    public function unggah()
    {
        $data['berkas'] = $this->model_data->get_data('data_berkas');
        $this->load->view('header');
        $this->load->view('unggah', $data);
        $this->load->view('template');
    }
}
