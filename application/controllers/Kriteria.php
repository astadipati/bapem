<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_kriteria');
    }

	public function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'/kriteria/index/';
        $config['total_rows'] = $this->M_kriteria->tampilkan_data()->num_rows(); //dari tampilkan data menghitung jumlah record
        $config['per_page'] = 100;
        $this->pagination->initialize($config);
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman ==''?0:$halaman;
        $data ['data']    = $this->M_kriteria->tampilkan_data_paging($halaman,  $config['per_page']);
		$this->load->view('template/header');
		$this->load->view('content/kriteria/list', $data);
		$this->load->view('template/footer');
    }
    

    function add(){
        if (isset($_POST['submit'])){
            $this->M_kriteria->save();
            redirect('kriteria');
        }else {
            $this->load->view('template/header');
            $this->load->view('content/kriteria/add');
            $this->load->view('template/footer');
        }
    }

    function edit(){
        if (isset($_POST['submit'])){
             $this->M_kriteria->update();
             redirect('kriteria');
        }else{
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_kriteria',array ('id_kriteria'=>$id))->row_array();
            $this->load->view('template/header');
            $this->load->view('content/kriteria/edit',$data);
            $this->load->view('template/footer');
            }
    }

    function delete(){
        $id           = $this->uri->segment(3);
        $this->M_kriteria->hapus($id);
        redirect('kriteria');
    }
}
