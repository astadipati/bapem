<?php

Class M_objek extends CI_Model{

    public $table = "tbl_objek";
 
    function tampilkan_data(){
        $query = $this->db->query("SELECT * FROM `tbl_objek` ORDER BY id_objek DESC");
        return $query; 
    }

    function tampilkan_data_paging($halaman, $offset){
        return $this->db->query("SELECT * FROM `tbl_objek` ORDER BY id_objek DESC limit $halaman, $offset");
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
            'objek'=>$this->input->post('objek', TRUE),
            'keterangan'=>$this->input->post('keterangan', TRUE)
        );
        // print_r($data);
        $this->db->insert($this->table, $data);

    }
 
    function update(){
            $data = array(
                'id_kategori'=>$this->input->post('id_kategori', TRUE),
                'objek'=>$this->input->post('objek', TRUE),
                'keterangan'=>$this->input->post('keterangan', TRUE)
            );
        $id_objek = $this->input->post('id_objek');
        $this->db->where('id_objek', $id_objek);
        // print_r($data);
        $this->db->update($this->table, $data);
    }

    function hapus($id_objek){
        $hasil=$this->db->query("DELETE FROM tbl_objek WHERE id_objek='$id_objek'");
        return $hasil;
    }

}
