<?php
class mu_login extends CI_Model{
    function cekadmin($nama_user,$password){
        $hasil=$this->db->query("SELECT * FROM tbl_user WHERE nama_user='$nama_user' AND password=md5('$password')");
        return $hasil;
    }
  
}
