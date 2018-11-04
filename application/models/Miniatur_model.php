<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Miniatur_model extends CI_Model {

	public function __construct(){
parent::__construct();
		$this->load->database();
	}

 public function list_user($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get_where('admin');
        return $query->row();


    }

    public function login($username,$password)
    {
     $p = $this->db->get_where("admin",array("username"=>$username,"password"=>$password));
        return $p;
    }

    public function insertPeserta($data, $data1, $data2, $data3)
    {
        $query = $this->db->insert('peserta',$data);
        $query1 = $this->db->insert('peserta',$data1);
        $query2 = $this->db->insert('peserta',$data2);
        $query3 = $this->db->insert('peserta',$data3);

        if($query==true && $query1==true && $query2 == true && $query3== true){
            return true;
        }else{
            return false;
        }


    }

    public function list_peserta(){
         return $this->db->get_where("peserta", array("jabatan"=>'ketua'));
    }
    public function list_pesertaseminar(){
         return $this->db->get_where("seminar");
    }
    public function getAnggota($no){
        $query = $this->db->select('*')
              ->from('peserta')
              ->where('nohp_ketua', $no)
              ->where('jabatan', 'ketua')
              ->get();
        return $query->row();
    }
    public function getAnggota1($no){
        $query = $this->db->select('*')
              ->from('peserta')
              ->where('nohp_ketua', $no)
              ->where('jabatan', 'anggota1')
              ->get();
        return $query->row();
    }
    public function getAnggota2($no){
        $query = $this->db->select('*')
              ->from('peserta')
              ->where('nohp_ketua', $no)
              ->where('jabatan', 'anggota2')
              ->get();
        return $query->row();
    }
    public function getAnggota3($no){
        $query = $this->db->select('*')
              ->from('peserta')
              ->where('nohp_ketua', $no)
              ->where('jabatan', 'anggota3')
              ->get();
        return $query->row();
    }




	
}