<?php 
class Yonetimislem extends CI_Model {
	public function adminkontrol($data){
		$result=$this
		->db
		->select('*')
		->from('yonetim')
		->where($data)
		->get()
		->row();
		return $result;
	}


	public function ayarkaydet($where, $data){
		$result = $this
		->db
		->where($where)
		->update('ayarlar', $data);
		return $result;
	}

	public function mesajsil($where){
		$result = $this
		->db
		->where($where)
		->delete('iletisim');
		return $result;
	}
	
	public function mesajgetir($where){
		$result = $this
		->db
		->select('*')
		->from('iletisim')
		->where($where)
		->get();
		return $result->result();
	}
	public function mesajlistele(){
		$result = $this->db->get('iletisim');
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


	public function calismagetir($where){
		$result = $this
		->db
		->select('*')
		->from('calismalar')
		->where($where)
		->get();
		return $result->result();
	}
	
	public function calismaduzenle($where, $data){
		$result = $this
		->db
		->where($where)
		->update('calismalar', $data);
		return $result;
	}

	public function yeteneksil($data = array()){
		$result = $this
		->db
		->where($data)
		->delete("yetenekler");
		return $result;
	}
	public function yeteneklistele(){
		$result = $this->db->get('yetenekler');
		return $result->result();
	}

	public function yetenekekle($data){
		$result=$this
		->db
		->insert('yetenekler', $data);
		return $result;
	}
}