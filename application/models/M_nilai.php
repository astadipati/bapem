<?php

Class M_nilai extends CI_Model{

    public $table = "tbl_kriteria";
 
    function tampilkan_data(){
        $query = $this->db->query("select c.id_eviden, c.file, a.id_kriteria,b.kategori ,a.kriteria, a.ceklist, c.nomor, c.nama_eviden from tbl_kriteria a
        left join tbl_kategori b on a.id_kategori = b.id_kategori
        left join tbl_eviden c on a.id_kriteria = c.id_kriteria order by c.id_eviden desc");
        return $query; 
    }

    function tampilkan_data_paging($halaman, $offset){
        return $this->db->query("select c.id_eviden,c.file, a.id_kriteria,b.kategori ,a.kriteria, a.ceklist, c.nomor, c.nama_eviden from tbl_kriteria a
        left join tbl_kategori b on a.id_kategori = b.id_kategori
        left join tbl_eviden c on a.id_kriteria = c.id_kriteria order by c.id_eviden desc    
        limit $halaman, $offset");
    }

    function tampilkan_data_x(){
        $query = $this->db->query("select c.id_eviden, c.file, a.id_kriteria,b.kategori ,a.kriteria, a.ceklist, c.nomor, c.nama_eviden from tbl_kriteria a
        left join tbl_kategori b on a.id_kategori = b.id_kategori
        left join tbl_eviden c on a.id_kriteria = c.id_kriteria");
        return $query; 
    }

    function tampilkan_data_paging_x($halaman, $offset){
        return $this->db->query("select c.id_eviden, c.file, a.id_kriteria,b.kategori ,a.kriteria, a.ceklist, c.nomor, c.nama_eviden from tbl_kriteria a
        left join tbl_kategori b on a.id_kategori = b.id_kategori
        left join tbl_eviden c on a.id_kriteria = c.id_kriteria        
        limit $halaman, $offset");
    }
    
}
