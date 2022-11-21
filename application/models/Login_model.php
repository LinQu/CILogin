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
}
