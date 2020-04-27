<?php 
class Anasayfaislem extends CI_Model {

	public function yeteneklistele(){
		$result = $this->db->get('yetenekler');
		return $result->result();
	}

	public function calismalistele(){
		$result = $this->db->get('calismalar');
		return $result->result();
	}

	public function ayargetir($where){
		$result = $this
		->db
		->select('*')
		->from('ayarlar')
		->where($where)
		->get();
		return $result->result();
	}

	public function mesajgonder($data){
		$result = $this
		->db
		->insert('iletisim', $data);
		return $result;
	}

}