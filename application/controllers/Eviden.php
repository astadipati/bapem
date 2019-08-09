<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eviden extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_eviden');
    }

	public function index(){

        $this->load->library('pagination');
        $config['base_url'] = base_url().'/eviden/index/';
        $config['total_rows'] = $this->M_eviden->tampilkan_data()->num_rows(); //dari tampilkan data menghitung jumlah record
        $config['per_page'] = 100;
        $this->pagination->initialize($config);
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman ==''?0:$halaman;
        $data ['data']    = $this->M_eviden->tampilkan_data_paging($halaman,  $config['per_page']);
        // $pesan ['msg']=>this->session->flashdata('msg') ;
        $data ['msg']= $this->session->set_flashdata('msg');
		$this->load->view('template/header');
		$this->load->view('content/eviden/list', $data);
		$this->load->view('template/footer');
    }
    

    function add(){
        if (isset($_POST['submit'])){
            $config['upload_path'] = './uploads/eviden';
            $config['allowed_types'] = 'pdf|gif|jpg|png';
            $config['max_size']     = 2048000;
            $this->load->library('upload',$config);
            $this->upload->do_upload('userfile');
            $upload = $this->upload->data();
            $this->M_eviden->save($upload['file_name']);
            
            redirect('eviden');
            
        }else {
            $this->load->view('template/header');
            $this->load->view('content/eviden/add');
            $this->load->view('template/footer');
        }
    }

    function detil(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'/eviden/detil/';
        $config['total_rows'] = $this->M_eviden->detil_data()->num_rows(); //dari tampilkan data menghitung jumlah record
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman ==''?0:$halaman;
        $data ['data']    = $this->M_eviden->detil_paging($halaman,  $config['per_page']);
        // $id           = $this->uri->segment(3);
        // $data['data'] = $this->db->get_where('tbl_kriteria',array ('id_kriteria'=>$id))->row_array();
        // $pesan ['msg']=>this->session->flashdata('msg') ;
        // $data ['msg']= $this->session->set_flashdata('msg');
		$this->load->view('template/header');
		$this->load->view('content/eviden/detil', $data);
		$this->load->view('template/footer');
        // $this->load->view('template/header');
        // $this->load->view('content/eviden/detil',$data);
        // $this->load->view('template/footer');
    }

    function edit(){
        if (isset($_POST['submit'])){
             $this->M_eviden->update();
             redirect('eviden');
        }else{
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('tbl_eviden',array ('id_eviden'=>$id))->row_array();
            $this->load->view('template/header');
            $this->load->view('content/eviden/edit',$data);
            $this->load->view('template/footer');
            }
    }

    function delete(){
        $id           = $this->uri->segment(3);
        $this->M_eviden->hapus($id);
        redirect('eviden');
    }
}
