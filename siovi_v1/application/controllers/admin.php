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

    function edit_inventaris(){
        $data['data_inventaris'] = $this->m_inventaris->get_data_all();
        $this->load->view('editInventaris2', $data);
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

    function proses_sewa_inventaris(){
        $nama_penyewa = $this->input->post('nama_penyewa');
        $nomor_identitas = $this->input->post('nomor_identitas');
        $alamat_penyewa = $this->input->post('alamat_penyewa');
        $jenis_barang = $this->input->post('jenis_barang');
        $tanggal_sewa = $this->input->post('tanggal_sewa');
        $tanggal_kembali = $this->input->post('tanggal_kembali');
        $jenis_barang = $this->input->post('jenis_barang');
        $tarif_sewa = $this->input->post('tarif_sewa');
        $array_data = array(
            'id_penyewa' => '',
            'nama_penyewa' => $nama_penyewa,
            'nomor_identitas' => $nomor_identitas,
            'alamat_penyewa' => $alamat_penyewa,
            'jenis_barang' => $jenis_barang,
            'tanggal_sewa' => $tanggal_sewa,
            'tanggal_kembali' => $tanggal_kembali,
            'tarif_sewa' => $tarif_sewa,
        );
        $this->m_peminjaman->simpan_peminjaman($jenis_barang, $array_data);
        $this->sewa_inventaris();
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