<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminjaman extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function simpan_peminjaman($jenis_barang, $data){
        $this->db->insert('peminjaman',$data);
        $this->db->query("UPDATE `inventaris` SET 
`status_barang`='Disewa' WHERE `jenis_barang`='$jenis_barang'");
    }

}
?>
