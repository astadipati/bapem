<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objek extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_objek');
    }

	public function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'/objek/index/';
        $config['total_rows'] = $this->M_objek->tampilkan_data()->num_rows(); //dari tampilkan data menghitung jumlah record
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman ==''?0:$halaman;
        $data ['data']    = $this->M_objek->tampilkan_data_paging($halaman,  $config['per_page']);
		$this->load->view('template/header');
		$this->load->view('content/objek/list', $data);
		$this->load->view('template/footer');
    }
    
    function add(){
        if (isset($_POST['submit'])){
            $this->M_objek->save();
            redirect('objek');
        }else {
            $this->load->view('template/header');
            $this->load->view('content/objek/add');
            $this->load->view('template/footer');
        }
    }

    function edit(){
        if (isset($_POST['submit'])){
             $this->M_objek->update();
             redirect('objek');
        }else{
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_objek',array ('id_objek'=>$id))->row_array();
            $this->load->view('template/header');
            $this->load->view('content/objek/edit',$data);
            $this->load->view('template/footer');
            }
    }

    function delete(){
        $id           = $this->uri->segment(3);
        $this->M_objek->hapus($id);
        redirect('objek');
    }
}
