<?php

Class M_kategori extends CI_Model{

    public $table = "tbl_kategori";
 
    function tampilkan_data(){
        $query = $this->db->query("SELECT * FROM `tbl_kategori` ORDER BY id_kategori ASC");
        return $query; 
    }

    function tampilkan_data_paging($halaman, $offset){
        return $this->db->query("SELECT * FROM `tbl_kategori` ORDER BY id_kategori ASC limit $halaman, $offset");
    }
    
    function laporan_sm( $tanggal1, $tanggal2){
        // $date = DateTime::createFromFormat('Y/m/d',);
        return $this->db->query("SELECT * FROM tabel_surat_masuk WHERE DATE(tgl_diterima) BETWEEN '$tanggal1' AND '$tanggal2'");
    }

    function v_cetak(){
        $query = $this->db->query('SELECT * FROM v_cetak');
        return $query;
    } 

    function tampilkan_dashboard(){
        $query = $this->db->query("SELECT id_surat, DATE_FORMAT(agenda, '%d %M %Y ')AS agenda, no_surat, asal_surat, isi, kode, indeks, 
                                    DATE_FORMAT(tgl_surat,'%d %M %Y ')AS tgl_surat, DATE_FORMAT(tgl_diterima,'%d %M %Y ')AS tgl_diterima,
                                    file,keterangan 
                                    FROM tabel_surat_masuk ORDER BY id_surat DESC limit 5");
        return $query; 
    }


    function save($file){
        $data = array(
            'agenda'=>$this->input->post('agenda', TRUE),
            'no_surat'=>$this->input->post('no_surat', TRUE),
            'asal_surat'=>$this->input->post('asal_surat', TRUE),
            'isi'=>$this->input->post('isi', TRUE),
            'kode'=>$this->input->post('kode', TRUE),
            'indeks'=>$this->input->post('indeks', TRUE),
            'tgl_surat'=>$this->input->post('tgl_surat', TRUE),
            'tgl_diterima'=>$this->input->post('tgl_diterima', TRUE),
            'keterangan'=>$this->input->post('keterangan', TRUE),
            'file'=>$file

        );
        // print_r($data);
        $this->db->insert($this->table, $data);

    }
 
    function update($foto){
        if (empty($foto)){
            $data = array(
                'agenda'=>$this->input->post('agenda', TRUE),
                'no_surat'=>$this->input->post('no_surat', TRUE),
                'asal_surat'=>$this->input->post('asal_surat', TRUE),
                'isi'=>$this->input->post('isi', TRUE),
                'kode'=>$this->input->post('kode', TRUE),
                'indeks'=>$this->input->post('indeks', TRUE),
                'tgl_surat'=>$this->input->post('tgl_surat', TRUE),
                'tgl_diterima'=>$this->input->post('tgl_diterima', TRUE),
                'keterangan'=>$this->input->post('keterangan', TRUE),
            );
        }else{
            $data = array(
                'agenda'=>$this->input->post('agenda', TRUE),
                'no_surat'=>$this->input->post('no_surat', TRUE),
                'asal_surat'=>$this->input->post('asal_surat', TRUE),
                'isi'=>$this->input->post('isi', TRUE),
                'kode'=>$this->input->post('kode', TRUE),
                'indeks'=>$this->input->post('indeks', TRUE),
                'tgl_surat'=>$this->input->post('tgl_surat', TRUE),
                'tgl_diterima'=>$this->input->post('tgl_diterima', TRUE),
                'keterangan'=>$this->input->post('keterangan', TRUE),
                'file' => $foto
            );
        }

        $id_surat = $this->input->post('id_surat');
        $this->db->where('id_surat', $id_surat);
        // print_r($data);
        $this->db->update($this->table, $data);

    }
}
