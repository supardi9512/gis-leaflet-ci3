<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
}
