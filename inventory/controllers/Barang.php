<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->helper('url_helper');
    }

	public function index()
	{
		$data['barang'] = $this->barang_model->get_barang();
		$this->load->view('barang/index', $data);
	}

	public function tabelbrg()
	{
		$data['barang'] = $this->barang_model->get_barang();
		$this->load->view('barang/tabelbrg', $data);
	}

	public function tabelPnjm()
	{
		$data['barang'] = $this->barang_model->get_barang();
		$this->load->view('barang/tabelPnjm', $data);
	}

	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nm_brg','nama barang','required');
		$this->form_validation->set_rules('no_seri','no seri','required');
		$this->form_validation->set_rules('merk','merk','required');
		$this->form_validation->set_rules('lokasi','lokasi','required');
		$this->form_validation->set_rules('keterangan','keterangan','required');

		if($this->form_validation->run() === false){
			$this->load->view('barang/create');	
		}else{
			$this->barang_model->set_barang();
			redirect('barang');
		}
	}

	public function update($id){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nm_brg','nama barang','required');
		$this->form_validation->set_rules('no_seri','no seri','required');
		$this->form_validation->set_rules('merk','merk','required');
		$this->form_validation->set_rules('lokasi','lokasi','required');
		$this->form_validation->set_rules('keterangan','keterangan','required');

		if($this->form_validation->run() === false){
			$data['barang_item'] = $this->barang_model->get_barang_id($id);
			$this->load->view('barang/update', $data);	
		}else{
			$this->barang_model->update_barang($id);
			redirect('barang/tabelBrg');
		}		
	}

	public function pinjam($id){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pinjam','Nama Peminjam','required');

		if($this->form_validation->run() === false){
			$data['barang_item'] = $this->barang_model->get_barang_id($id);
			$this->load->view('barang/pinjam', $data);	
		}else{
			$this->barang_model->update_barang_peminjam($id);
			redirect('barang/tabelPnjm');
		}		
	}

	public function delete($id){
		$this->barang_model->delete_barang($id);
		redirect('barang');
	}

	public function tabelpinjam($id){
		$this->barang_model->pinjam_barang($id);
		redirect('barang');
	}
}
