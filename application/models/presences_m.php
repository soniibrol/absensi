<?php

class Presences_m extends CI_Model{
	private $table_name = 't_kehadiran';
	private $table_pk = 'id_kehadiran';
	private $table_status = 't_kehadiran.active';

	public function __construct(){
		parent::__construct();
	}

	public function get_all($paging=true,$start=0,$limit=10){
		$this->db->select('id_kehadiran,id_karyawan,tanggal,jam_masuk,jam_keluar,hadir,id_alasan,keterangan');
		$this->db->from($this->table_name);
		$this->db->where($this->table_status,'1');
		if($paging==true){
			$this->db->limit($limit,$start);
		}
		return $this->db->get();
	}

	public function get_by_id($id_kehadiran){
		$this->db->select('id_kehadiran,t_kehadiran.id_karyawan,nama,tanggal,jam_masuk,jam_keluar,hadir,t_kehadiran.id_alasan,nama_alasan,keterangan');
		$this->db->from($this->table_name);
		$this->db->join('t_karyawan','t_karyawan.id_karyawan = '.$this->table_name.'.id_karyawan');
		$this->db->join('t_alasan','t_alasan.id_alasan = '.$this->table_name.'.id_alasan');
		$this->db->where($this->table_pk,$id_kehadiran);
		$this->db->where($this->table_status,'1');
		return $this->db->get();
	}

	public function get_by_date($tanggal,$id_karyawan){
		$this->db->select('id_kehadiran,t_kehadiran.id_karyawan,nama,tanggal,jam_masuk,jam_keluar,hadir,t_kehadiran.id_alasan,nama_alasan,keterangan');
		$this->db->from($this->table_name);
		$this->db->join('t_karyawan','t_karyawan.id_karyawan = '.$this->table_name.'.id_karyawan');
		$this->db->join('t_alasan','t_alasan.id_alasan = '.$this->table_name.'.id_alasan');
		$this->db->where($this->table_name.'.id_karyawan',$id_karyawan);
		$this->db->where('tanggal',$tanggal);
		$this->db->where($this->table_name.'.id_karyawan',$id_karyawan);
		$this->db->where($this->table_status,'1');
		return $this->db->get();
	}

	public function save($data_kehadiran){
		$this->db->insert($this->table_name,$data_kehadiran);
	}

	public function update($id_kehadiran,$data_kehadiran){
		$this->db->where($this->table_pk,$id_kehadiran);
		$this->db->update($this->table_name,$data_kehadiran);
	}

	public function delete($id_kehadiran){
		$this->db->where($this->table_pk,$id_kehadiran);
		$this->db->delete($this->table_name);
	}
}