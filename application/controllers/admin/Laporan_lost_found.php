<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_lost_found extends CI_Controller {
	public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $token = $this->session->userdata('token');
        $data = array();
        $data['page_title'] = 'Verifikasi Laporan Lost & Found';
        $json=execute_curl_get("admin/getLaporanLostFoundVerify",$token);
        $data['laporan_lost_found']=$json;
        $data['main_content'] = $this->load->view('admin/laporan_lost_found/verifikasi_laporan_lost_found', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function detail($id){
        $token = $this->session->userdata('token');
        $data = array();
        $data['page_title'] = 'Detail Laporan Lost Found';
        $json=execute_curl_get("admin/getDetailLaporanLostFound/".$id,$token);
        $data['laporan']=$json;
        $data['main_content'] = $this->load->view('admin/laporan_lost_found/detail_laporan_lost_found', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function verifikasiLaporan($id){
        $token = $this->session->userdata('token');
        $json=execute_curl_put("admin/verifikasiLaporanLostFound/".$id,$token); 
        $this->session->set_flashdata('msg', "Laporan ".$id." berhasil diverifikasi");
        redirect(base_url('admin/laporan_lost_found'));
    }

    public function declineLaporan($id){
        $token = $this->session->userdata('token');
        $json=execute_curl_put("admin/declineLaporanLostFound/".$id,$token);
        $this->session->set_flashdata('msg', "Laporan ".$id." berhasil ditolak");
        redirect(base_url('admin/laporan_lost_found'));
    }
}