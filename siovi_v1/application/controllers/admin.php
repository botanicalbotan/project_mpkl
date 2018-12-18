<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    function __construct(){
        parent ::__construct();
        $this->load->model('m_inventaris');
        $this->load->model('m_peminjaman');
        $this->load->helper('url');
    }

    #OPEN PAGE
    function home(){
        $this->load->view('home');
    }

    function sewa_inventaris(){
        $this->load->view('sewaInventaris');
    }

    function tambah_inventaris(){
        $this->load->view('tambahInventaris');
    }

   
    function logout(){
        $this->session->sess_destroy();
        redirect('index.php');
        #$this->load->view('index');
    }


    #PROCESS
    function proses_tambah_inventaris(){
        $kode_barang = $this->input->post('kode_barang');
        $jenis_barang = $this->input->post('jenis_barang');
        $tipe_barang = $this->input->post('tipe_barang');
        $nama_investor = $this->input->post('investor');
        $array_data = array(
            'id_inventaris' => '',
            'kode_barang' => $kode_barang,
            'jenis_barang' => $jenis_barang,
            'tipe_barang' => $tipe_barang,
            'nama_investor' => $nama_investor,
            'status_barang' => 'Tersedia'
        );
        
        $this->m_inventaris->tambah_data('inventaris',$array_data);
        $this->tambah_inventaris();
    }

    function tampil_datatables()
    {
        $this->m_inventaris->get_data();
    }

    function tampil_datatables_edit()
    {
        $this->m_inventaris->get_data_edit();
    }
}
?>