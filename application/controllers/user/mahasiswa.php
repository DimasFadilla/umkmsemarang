<?php
class mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('user/user');
            redirect($url);
        };
		$this->load->model('m_mahasiswa');
		$this->load->library('upload');
	}


	function index(){
		$kode=$this->session->set_userdata('iduser');
		$x['user']=$this->m_mahasiswa->get_user_login($kode);
		$x['data']=$this->m_mahasiswa->get_all_mahasiswa();
		$this->load->view('user/v_datamhs',$x);
	
	}


	function update_mhs(){
		$kode=strip_tags($this->input->post('kode'));
		$nim=strip_tags($this->input->post('nim'));
		$nama_user=strip_tags($this->input->post('nama_user'));
		$email=strip_tags($this->input->post('email'));
		$pass=strip_tags($this->input->post('password'));
		$namalokasi=strip_tags($this->input->post('namalokasi'));
		$latitude=strip_tags($this->input->post('latitude'));
		$longtitude=strip_tags($this->input->post('longtitude'));
		$this->m_mahasiswa->update_mhs($kode,$nim,$nama_user,$email,$pass,$namalokasi,$latitude,$longtitude);
		echo $this->session->set_flashdata('msg','succes');
		redirect('user/mahasiswa');
		redirect('user/user');
	}
	function hapus_pengumuman(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_info->hapus_pengumuman($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/info');
	}

}