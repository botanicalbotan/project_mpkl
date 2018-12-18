<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends Ci_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_authentication');
        $this->load->helper('url');
    }

    function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        ) ;
        $cek = $this->m_authentication->cekLogin('admin',$username, $password)->num_rows();
        if($cek > 0){
            $data_session = array(
                'nama' => $username,
                'status' => 'login'    
            );
            $this->session->set_userdata($data_session);
            $this->load->view('home');
            #redirect(base_url("home.php"));
        }else{
            echo "salah";
            redirect(base_url("index.php/index"));
        }

    }
}
?>