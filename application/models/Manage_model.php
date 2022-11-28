<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_model extends CI_Model
{

  private $_table = "account";
  public function getAllAccount()
  {
    return $this->db->get($this->_table)->result_array();
  }





  public function getById($id)
  {
    $this->db->select('*');
    $this->db->from('account');
    $this->db->where('username', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function addAccount()
  {
    $this->db->db_debug = false;
    $data = [
      'username' => $this->input->post('username', true),
      'password' => $this->input->post('password', true),
      'nama' => $this->input->post('nama', true),
      'role' => $this->input->post('role', true),
      'email' => $this->input->post('email', true),
      'telepon' => $this->input->post('telepon', true),
    ];
    if ($this->db->insert($this->_table, $data)) {
      return true;
    } else {
      return false;
    }
  }


  public function editAccount()
  {
    $data = [
      'username' => $this->input->post('username', true),
      'password' => $this->input->post('password', true),
      'nama' => $this->input->post('nama', true),
      'role' => $this->input->post('role', true),
      'email' => $this->input->post('email', true),
      'telepon' => $this->input->post('telepon', true),

    ];
    $this->db->where('username', $this->input->post('username'));
    $this->db->update('account', $data);
  }



  public function deleteAccount($id)
  {
    $this->db->delete('account', array('username' => $id));
  }
}
