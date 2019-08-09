<?php

Class M_eviden extends CI_Model{

    public $table = "tbl_eviden";
 
    function tampilkan_data(){
        $query = $this->db->query("select a.id_kriteria,b.kategori ,a.kriteria, a.ceklist, c.nomor, c.nama_eviden, count(c.nomor)as total from tbl_kriteria a
        left join tbl_kategori b on a.id_kategori = b.id_kategori
        left join tbl_eviden c on a.id_kriteria = c.id_kriteria
        group by a.id_kriteria");
        return $query; 
    }
    
    function tampilkan_data_paging($halaman, $offset){
        return $this->db->query("select a.id_kriteria,b.kategori ,a.kriteria, a.ceklist, c.nomor, c.nama_eviden, count(c.nomor)as total from tbl_kriteria a
        left join tbl_kategori b on a.id_kategori = b.id_kategori
        left join tbl_eviden c on a.id_kriteria = c.id_kriteria
        group by a.id_kriteria limit $halaman, $offset");
    }
    
    // coba detil paging
    function detil_data(){
        $query = $this->db->query("select a.id_kriteria, b.kategori ,a.kriteria, a.ceklist from tbl_kriteria a
                                    left join tbl_kategori b on a.id_kategori = b.id_kategori");
        return $query; 
    }
    
    function detil_paging($halaman, $offset){
        // $uri = $this->uri->segment(3);
        return $this->db->query("select a.id_kriteria, b.kategori ,a.kriteria, a.ceklist from tbl_kriteria a
        left join tbl_kategori b on a.id_kategori = b.id_kategori where a.id_kriteria='$uri' limit $halaman, $offset");
    }
    // end coba
    function data_paging(){
        $query = $this->db->query("select a.id_kriteria,b.kategori ,a.kriteria, a.ceklist, c.nomor, c.nama_eviden from tbl_kriteria a
        left join tbl_kategori b on a.id_kategori = b.id_kategori
        left join tbl_eviden c on a.id_kriteria = c.id_kriteria
        where a.id_kriteria=1 
        order by nomor");
        return $query; 
    }

    function detil_mmpaging($halaman, $offset){
        $uri = $this->uri->segment(3);
        return $this->db->query("select a.id_kriteria,b.kategori ,a.kriteria, a.ceklist, c.nomor, c.nama_eviden from tbl_kriteria a
        left join tbl_kategori b on a.id_kategori = b.id_kategori
        left join tbl_eviden c on a.id_kriteria = c.id_kriteria
        where a.id_kriteria=1 
        order by nomor $halaman, $offset");
    }

    function detil(){
        $uri = $this->uri->segment(3);
        $query = $this->db->query ("select a.id_kriteria,b.kategori ,a.kriteria, a.ceklist, c.nomor, c.nama_eviden from tbl_kriteria a
                                    left join tbl_kategori b on a.id_kategori = b.id_kategori
                                    left join tbl_eviden c on a.id_kriteria = c.id_kriteria
                                    where a.id_kriteria='$uri'
                                    order by nomor");
       return $query; 
    } 

    
    function laporan_sm( $tanggal1, $tanggal2){
        // $date = DateTime::createFromFormat('Y/m/d',);
        return $this->db->query("SELECT * FROM tabel_surat_masuk WHERE DATE(tgl_diterima) BETWEEN '$tanggal1' AND '$tanggal2'");
    }

    function v_cetak(){
        $query = $this->db->query('SELECT * FROM v_cetak');
        return $query;
    } 


    function save($file){
        if(empty($file)){
            $data = array(
                'id_kriteria'=>$this->input->post('id_kriteria', TRUE),
                'nomor'=>$this->input->post('nomor', TRUE),
                'nama_eviden'=>$this->input->post('nama_eviden', TRUE)
            );
        }else{
            $data = array(
                'id_kriteria'=>$this->input->post('id_kriteria', TRUE),
                'nomor'=>$this->input->post('nomor', TRUE),
                'nama_eviden'=>$this->input->post('nama_eviden', TRUE),
                'file'=>$file
            );
        }
        // print_r($data);
        $this->db->insert($this->table, $data);

    }
 
    function update(){
            $data = array(
                'id_kategori'=>$this->input->post('id_kategori', TRUE),
                'kriteria'=>$this->input->post('kriteria', TRUE),
                'ceklist'=>$this->input->post('ceklist', TRUE),
                'keterangan'=>$this->input->post('keterangan', TRUE)
            );
        $id_kriteria = $this->input->post('id_kriteria');
        $this->db->where('id_kriteria', $id_kriteria);
        // print_r($data);
        $this->db->update($this->table, $data);
    }

    function hapus($id_kriteria){
        $hasil=$this->db->query("DELETE FROM tbl_kriteria WHERE id_kriteria='$id_kriteria'");
        return $hasil;
    }

    }
