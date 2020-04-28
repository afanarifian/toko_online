<?php 

/**
 * 
 */
class Dashboard extends CI_Controller{
	
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templetes/header');
		$this->load->view('templetes/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templetes/footer');
		# code...
	}
}