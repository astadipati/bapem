<?php

Class M_kriteria extends CI_Model{

    public $table = "tbl_kriteria";
 
    function tampilkan_data(){
        $query = $this->db->query("SELECT a.id_kriteria, b.kategori,a.kriteria,a.ceklist,a.keterangan FROM tbl_kriteria a 
                                    LEFT JOIN tbl_kategori b 
                                    ON a.id_kategori = b.id_kategori
                                    ORDER BY a.id_kriteria DESC");
        return $query; 
    }

    function tampilkan_data_paging($halaman, $offset){
        return $this->db->query("SELECT a.id_kriteria,b.kategori,a.kriteria,a.ceklist,a.keterangan FROM tbl_kriteria a 
                                    LEFT JOIN tbl_kategori b 
                                    ON a.id_kategori = b.id_kategori
                                    ORDER BY a.id_kriteria DESC limit $halaman, $offset");
    }
    
    function laporan_sm( $tanggal1, $tanggal2){
        // $date = DateTime::createFromFormat('Y/m/d',);
        return $this->db->query("SELECT * FROM tabel_surat_masuk WHERE DATE(tgl_diterima) BETWEEN '$tanggal1' AND '$tanggal2'");
    }

    function v_cetak(){
        $query = $this->db->query('SELECT * FROM v_cetak');
        return $query;
    } 


    function save(){
        $data = array(
            'id_kategori'=>$this->input->post('id_kategori', TRUE),
            'kriteria'=>$this->input->post('kriteria', TRUE),
            'ceklist'=>$this->input->post('ceklist', TRUE),
            'keterangan'=>$this->input->post('keterangan', TRUE)
        );
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
