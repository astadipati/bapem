<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_kategori');
        // $this->load->model('Model_laporan');
        // $this->load->model('Model_instansi');
    }

	public function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'/kategori/index/';
        $config['total_rows'] = $this->M_kategori->tampilkan_data()->num_rows(); //dari tampilkan data menghitung jumlah record
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman ==''?0:$halaman;
        $data ['data']    = $this->M_kategori->tampilkan_data_paging($halaman,  $config['per_page']);
        // $info['info'] = $this->db->get_where('tabel_instansi',array('id_instansi'=> 1))->row_array();
        // $this->load->view('admin/template/a_header', $info);
        // $this->load->view('admin/template/a_menu');
        // $this->load->view('admin/suratmasuk/list', $data);
        // $this->load->view('admin/template/a_footer', $info);

		$this->load->view('template/header');
		$this->load->view('content/kategori/list', $data);
		$this->load->view('template/footer');
	}
}
