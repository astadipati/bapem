<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_nilai');
    }

	public function internal()
	{
		$this->load->library('pagination');
        $config['base_url'] = base_url().'/nilai/internal/';
        $config['total_rows'] = $this->M_nilai->tampilkan_data()->num_rows(); //dari tampilkan data menghitung jumlah record
        $config['per_page'] = 100;
        $this->pagination->initialize($config);
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman ==''?0:$halaman;
        $data ['data']    = $this->M_nilai->tampilkan_data_paging($halaman,  $config['per_page']);
		$this->load->view('template/header');
		$this->load->view('content/intern/list',$data);
		$this->load->view('template/footer');
    }
    
	public function external()
	{
		$this->load->library('pagination');
        $config['base_url'] = base_url().'/nilai/external/';
        $config['total_rows'] = $this->M_nilai->tampilkan_data_x()->num_rows(); //dari tampilkan data menghitung jumlah record
        $config['per_page'] = 100;
        $this->pagination->initialize($config);
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman ==''?0:$halaman;
        $data ['data']    = $this->M_nilai->tampilkan_data_paging_x($halaman,  $config['per_page']);
		$this->load->view('template/header');
		$this->load->view('content/extern/list',$data);
		$this->load->view('template/footer');
	}
}
