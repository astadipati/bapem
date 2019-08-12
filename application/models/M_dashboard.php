<?php

Class M_dashboard extends CI_Model{

    public $table = "tbl_kriteria";
 
    function tampilkan_data(){
        $query = $this->db->query("SELECT *, COUNT( * ) AS total FROM tbl_kriteria GROUP BY id_kategori");
        return $query; 
    }

    function tampilkan_data_paging($halaman, $offset){
        return $this->db->query("SELECT *, COUNT( * ) AS total FROM tbl_kriteria GROUP BY id_kategori
        limit $halaman, $offset");
    }
    
}
