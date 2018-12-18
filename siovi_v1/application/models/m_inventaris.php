<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_inventaris extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function edit_data($data, $id){
        $this->db->where('id',$id);
        $this->db->update('inventaris', $data);
        return TRUE;
    }

    function tambah_data($table, $data){
        $this->db->insert($table,$data);
    }

    function get_data_all(){
        $query = $this->db->get('inventaris');
        return $query->result();
    }

    function get_data(){
        $table = 'tb_inventaris';
        $primary_key = 'id_inventaris';

        $columns = array(
            array('db'=>'jenis_barang','dt'=>0),
            array('db'=>'tipe_barang','dt'=>1),
            array('db'=>'kode_barang','dt'=>2),
            array('db'=>'status_barang','dt'=>3),
 #           array('db'=>'status_barang','dt'=>4),
        );

        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db'   => $this->db->database,
            'host' => $this->db->hostname,
            'charset' => 'utf8'
        );
         
        echo json_encode(
            SSP::complex( $_GET, $sql_details, $table, $primary_key, $columns )
        );
    }

    function get_data_edit(){
        $table = 'inventaris';
        $primary_key = 'id_inventaris';

        $columns = array(
            array('db'=>'jenis_barang','dt'=>0),
            array('db'=>'tipe_barang','dt'=>1),
            array('db'=>'kode_barang','dt'=>2),
        );

        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db'   => $this->db->database,
            'host' => $this->db->hostname,
            'charset' => 'utf8'
        );
         
        echo json_encode(
            SSP::complex( $_GET, $sql_details, $table, $primary_key, $columns )
        );
    }

  
}
?>