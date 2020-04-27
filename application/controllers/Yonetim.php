<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yonetim extends CI_Controller {

	 function __construct()
     {
         parent::__construct();
         $this->load->model('Yonetimislem');
     }

     function giriskontrol(){
     	if ($this->session->userdata('admin') != true) {
     		redirect('yonetim');
     	}
     }

	public function index()
	{
		$this->load->view('back/login');
	}

	public function mesajlar(){
		$this->giriskontrol();
		$data['mesajlar'] = $this->Yonetimislem->mesajlistele();
		$this->load->view('back/mesajlar', $data);
	}
	public function mesajsil(){
		$this->giriskontrol();
		if ($this->input->post('id')) {
			$where = array(
				'id' => $this->input->post('id')
			);
			$sil = $this->Yonetimislem->mesajsil($where);
			if ($sil) {
				$this->session->set_flashdata('mesaj', '<div class="notification is-success">Mesaj başarıyla silindi.</div>');
				redirect('yonetim/mesajlar');
			}
		}else{
			redirect('yonetim/mesajlar');
		}
	}
	public function ayarlar(){
		$this->giriskontrol();
		$where = array(
			'id' => 0
		);
		$data['ayarlar'] = $this->Yonetimislem->ayargetir($where);
		$this->load->view('back/ayarlar', $data);
	}

	public function ayarguncelle(){
		$this->giriskontrol();
		$where = array(
			'id' => 0
		);
		$config['upload_path'] = 'assets/front/uploads';
		$config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$avatar = 'assets/front/uploads/'.$resimyolu;
			$data = array(
				'title' => $this->input->post('title'),
				'sitebaslik' => $this->input->post('sitebaslik'),
				'kim' => $this->input->post('kim'),
				'description' => $this->input->post('description'),
				'keywords'	=> $this->input->post('keywords'),
				'avatar' => $avatar,
				'kimalt' => $this->input->post('kimalt'),			
				'yazi1' => $this->input->post('yazi1'),
				'yazi2' => $this->input->post('yazi2'),
				'yetenekler' => $this->input->post('yetenekler'),
				'calismalar' => $this->input->post('calismalar'),
				'footer' => $this->input->post('footer')
	 		);
		}else{
			$data = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'keywords'	=> $this->input->post('keywords'),
				'sitebaslik' => $this->input->post('sitebaslik'),
				'kim' => $this->input->post('kim'),
				'kimalt' => $this->input->post('kimalt'),			
				'yazi1' => $this->input->post('yazi1'),
				'yazi2' => $this->input->post('yazi2'),
				'yetenekler' => $this->input->post('yetenekler'),
				'calismalar' => $this->input->post('calismalar'),
				'footer' => $this->input->post('footer')
	 		);
		}

 		$guncelle = $this->Yonetimislem->ayarkaydet($where,$data);
 		if ($guncelle) {
 			$this->session->set_flashdata('mesaj', '<div class="notification is-success">Ayarlar başarıyla güncellendi.</div>');
 			redirect('yonetim/ayarlar');
 		}else{
 			redirect('yonetim');
 		}
		
	}
	public function cikis(){
		$this->giriskontrol();
		$this->session->sess_destroy('admin');
		redirect('yonetim');
	}
	public function anasayfa(){
		$this->giriskontrol();
		$data['mesajlar'] = $this->Yonetimislem->mesajlistele();
		$this->load->view('back/index', $data);
	}

	public function mesajoku(){
		$this->giriskontrol();
		if ($this->input->post('id')) {
			$where = array(
				'id' => $this->input->post('id')
			);
			$data['mesaj'] = $this->Yonetimislem->mesajgetir($where);
			$this->load->view('back/mesajdetay', $data);
		}else{
			redirect('yonetim/mesajlar');
		}
	}

	public function yetenekler(){
		$this->giriskontrol();
		$data['yetenekler'] = $this->Yonetimislem->yeteneklistele();
		$this->load->view('back/yetenekler', $data);
	}

	public function yetenekekle(){
		$this->giriskontrol();
		$this->load->view('back/yetenekekle');
	}

	public function calismalar(){
		$this->giriskontrol();
		$data['calismalar'] = $this->Yonetimislem->calismalistele();
		$this->load->view('back/calismalar', $data);
	}

	public function calismaislem(){
		$this->giriskontrol();
		if ($this->input->post('id')) {
			$where = array(
				'id' => $this->input->post('id')
			);

			$config['upload_path'] = 'assets/front/uploads';
			$config['allowed_types'] = 'gif|jpg|png|svg';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('resim')) {
				$resim = $this->upload->data();
				$resimyolu = $resim['file_name'];
				$calismaresim = 'assets/front/uploads/'.$resimyolu;
				$data = array(
					'calismaad' => $this->input->post('baslik'),
					'resim' => $calismaresim
				);
			}else{
				$data = array(
				   'calismaad' => $this->input->post('baslik')
				);		
			}
			$sorgu = $this->Yonetimislem->calismaduzenle($where, $data);
			if ($sorgu) {
				$this->session->set_flashdata('mesaj', '<div class="notification is-success">Çalışma başarıyla düzenlendi.</div>');
				redirect('yonetim/calismalar');
			}
		}

	}

	public function calismaduzenle(){
		$this->giriskontrol();
		if ($this->input->post('id')) {
			$data['id'] = $this->input->post('id');
			$where = array(
				'id' => $this->input->post('id')
			);
			$data['calismalar'] = $this->Yonetimislem->calismagetir($where);
			$this->load->view('back/calismaduzenle', $data);
		}else{
			redirect('yonetim');
		}
	}

	public function yeteneksil(){
		$this->giriskontrol();
		$data = array(
			'id' => $this->input->post('id')
		);
		$sorgu = $this->Yonetimislem->yeteneksil($data);
		if ($sorgu) {
			$this->session->set_flashdata('mesaj', '<div class="notification is-success">Yetenek başarıyla silindi.</div>');
			redirect('yonetim/yetenekler');
		}else{
			redirect('yonetim/yetenekler');
		}
	}

	public function yetenekislem(){
		$this->giriskontrol();
		$data = array(
			'yetenekisim' => $this->input->post('baslik'),
			'deger' => $this->input->post('deger')
		);
		$sorgu = $this->Yonetimislem->yetenekekle($data);
		if ($sorgu) {
			$this->session->set_flashdata('mesaj', '<div class="notification is-success">Yetenek başarıyla eklendi.</div>');
			redirect('yonetim/yetenekler');
		}else{
			redirect('yonetim/yetenekler');
		}
	}


	public function girisislem(){
		$data = array(
			'mail' => $this->input->post('mail'),
			'sifre' => $this->input->post('sifre')
		);
		$sorgu = $this->Yonetimislem->adminkontrol($data);
		if ($sorgu) {
			$this->session->set_userdata('admin', true);
			$this->session->set_userdata('bilgi', $sorgu);
			redirect('yonetim/anasayfa');
		}else{
			$this->session->set_flashdata('mesaj', ' <div class="notification is-danger">Bilgileriniz yanlış.</div>');
			redirect('yonetim');
		  }
	}
}
