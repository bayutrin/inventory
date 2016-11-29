<?php
class Barang_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_barang(){
        	$query = $this->db->get('barang');
        	return $query->result_array();
        }

        public function set_barang(){
        	$this->load->helper('url');

        	$data = array(
        		'nm_brg' => $this->input->post('nm_brg'),
        		'no_seri' => $this->input->post('no_seri'),
        		'merk' => $this->input->post('merk'),
        		'lokasi' => $this->input->post('lokasi'),
        		'keterangan' => $this->input->post('keterangan')
        );

        return $this->db->insert('barang', $data);
    	}
}