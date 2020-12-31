<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tps');
    }

	public function index()
	{
        $data = [
            'title' => 'View Map',
            'isi'   => 'v_home'
        ];

		$this->load->view('template/v_wrapper', $data);
    }
    
    public function marker()
	{
        $data = [
            'title' => 'Marker (Penanda Lokasi Pada Peta)',
            'isi'   => 'v_marker'
        ];

		$this->load->view('template/v_wrapper', $data);
    }
    
    public function polyline()
	{
        $data = [
            'title' => 'Polyline',
            'isi'   => 'v_polyline'
        ];

		$this->load->view('template/v_wrapper', $data);
    }
    
    public function rute()
	{
        $data = [
            'title' => 'Rute',
            'isi'   => 'v_rute'
        ];

		$this->load->view('template/v_wrapper', $data);
    }
    
    public function get_coordinat()
	{
        $data = [
            'title' => 'Get Coordinat',
            'isi'   => 'v_get_coordinat'
        ];

		$this->load->view('template/v_wrapper', $data);
    }
    
    public function tps()
	{
        $data = [
            'title' => 'Pemetaan Lokasi TPS Kota Bandung',
            'tps'   => $this->m_tps->get_all_data(),
            'isi'   => 'tps/v_pemetaan_tps'
        ];

		$this->load->view('template/v_wrapper', $data);
    }
    
    public function tps4()
	{
        $data = [
            'title' => 'Pemetaan Lokasi TPS Kota Bandung Control Search',
            'tps'   => $this->m_tps->get_all_data(),
            'isi'   => 'tps/v_pemetaan_tps4'
        ];

		$this->load->view('template/v_wrapper', $data);
	}
}
