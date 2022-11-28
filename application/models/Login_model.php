<?php

defined('BASEPATH') or exit('No direct script access allowed');

//model
class Login_model extends CI_Model
{
  private $_table = "account";
  public function getByUsernamePassword($username, $password)
  {
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $data = $this->db->get_where($this->_table, array('username' => $username, 'password' => $password))->row();
    return $data;
  }

  //get total role admin and dosen
  public function getAdmin()
  {
    $this->db->select('*');
    $this->db->from('account');
    $this->db->where('role', 'admin');
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function getDosen()
  {
    $this->db->select('*');
    $this->db->from('account');
    $this->db->where('role', 'dosen');
    $query = $this->db->get();
    return $query->num_rows();
  }
}
