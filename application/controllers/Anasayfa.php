<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	function __construct()
     {
         parent::__construct();
         $this->load->model('Anasayfaislem');
     }

	public function index()
	{
		$where = array(
			'id' => 0
		);
		$data = array(
			'yetenekler' => $this->Anasayfaislem->yeteneklistele(),
			'calismalar' => $this->Anasayfaislem->calismalistele(),
			'ayarlar' => $this->Anasayfaislem->ayargetir($where)
		);
		$this->load->view('front/index', $data);
	}

	public function iletisim(){
		$where = array(
			'id' => 0
		);
		$data = array(
			'yetenekler' => $this->Anasayfaislem->yeteneklistele(),
			'calismalar' => $this->Anasayfaislem->calismalistele(),
			'ayarlar' => $this->Anasayfaislem->ayargetir($where)
		);
		$this->load->view('front/iletisim', $data);
	}

	public function mesajgonder(){
		$data = array(
				'adsoyad' => $this->input->post('adsoyad'),
				'email' => $this->input->post('email'),
				'telno' => $this->input->post('telno'),
				'baslik' => $this->input->post('baslik'),
				'mesaj' => $this->input->post('mesaj')
		);
		$this->form_validation->set_rules('adsoyad','Ad Soyad', 'required');
		$this->form_validation->set_rules('email', 'E-Mail', 'required');
		$this->form_validation->set_rules('telno', 'Telefon Numarası','required');
		$this->form_validation->set_rules('mesaj', 'Mesaj' , 'required');
		$this->form_validation->set_rules('baslik', 'Başlık' , 'required');
		if ($this->form_validation->run() == TRUE) {
			$gonder = $this->Anasayfaislem->mesajgonder($data);
			if ($gonder) {
				$this->session->set_flashdata('mesaj', '<div class="notification is-success">Mesajınız başarıyla gönderildi.</div>');
				redirect('iletisim');
			}else{
				redirect('anasayfa');
			}
		}else{
			$this->session->set_flashdata('mesaj', '<div class="notification is-danger">Hiçbir alanı boş bırakmamalısınız.</div>');
			redirect('iletisim');
		}
	}

}
