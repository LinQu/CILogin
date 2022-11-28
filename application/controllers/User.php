<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class User extends RestController
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function index_get()
  {
    $id = $this->get('username');
    if ($id == '') {
      $user = $this->db->get('account')->result();
    } else {
      $this->db->where('username', $id);
      $user = $this->db->get('account')->result();
    }
    $this->response($user, 200);
  }

  public function index_post()
  {
    $data = array(
      'username' => $this->post('username'),
      'password' => $this->post('password'),
      'nama' => $this->post('nama'),
      'role' => $this->post('role'),
      'email' => $this->post('email'),
      'telepon' => $this->post('telepon'),
    );
    $insert = $this->db->insert('account', $data);
    if ($insert) {
      $this->response($data, 200);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }

  public function index_delete()
  {
    $id = $this->delete('username');
    $this->db->where('username', $id);
    $delete = $this->db->delete('account');
    if ($delete) {
      $this->response(array('status' => 'success'), 201);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }

  public function index_put()
  {
    $id = $this->put('username');
    $data = array(
      'username' => $this->put('username'),
      'password' => $this->put('password'),
      'nama' => $this->put('nama'),
      'role' => $this->put('role'),
      'email' => $this->put('email'),
      'telepon' => $this->put('telepon'),
    );
    $this->db->where('username', $id);
    $update = $this->db->update('account', $data);
    if ($update) {
      $this->response($data, 200);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }
}
