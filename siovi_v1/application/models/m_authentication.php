<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_authentication extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function cekLogin($table, $username, $passwd){
        #return $this->db->get_where($table, $where);
        $query=$this->db->query("SELECT * FROM `admin` WHERE `username`='adi' AND `passwd`='adi'");
       return $query;
    }
}
?>