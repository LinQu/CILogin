<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class VendorB extends RestController
{
  function __construct()
  {
    // Construct the parent class
    parent::__construct();
    $this->load->database();
  }

  public function index_get()
  {
    $id = $this->get('id_vendor');
    if ($id == '') {
      $vendor = $this->db->get('vendor')->result();
    } else {
      $this->db->where('id_vendor', $id);
      $vendor = $this->db->get('vendor')->result();
    }
    $this->response($vendor, 200);
  }

  public function index_post()
  {
    $data = array(
      'id_vendor' => $this->post('id_vendor'),
      'nama_vendor' => $this->post('nama_vendor'),
      'alamat_vendor' => $this->post('alamat_vendor'),
      'telp_vendor' => $this->post('telp_vendor'),
      'email_vendor' => $this->post('email_vendor'),
      'status' => $this->post('status'),
    );
    $insert = $this->db->insert('vendor', $data);
    if ($insert) {
      $this->response($data, 200);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }

  public function index_delete()
  {
    $id = $this->delete('id_vendor');
    $this->db->where('id_vendor', $id);
    $delete = $this->db->delete('vendor');
    if ($delete) {
      $this->response(array('status' => 'success'), 201);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }

  public function index_put()
  {
    $id = $this->put('id_vendor');
    $data = array(
      'id_vendor' => $this->put('id_vendor'),
      'nama_vendor' => $this->put('nama_vendor'),
      'alamat_vendor' => $this->put('alamat_vendor'),
      'telp_vendor' => $this->put('telp_vendor'),
      'email_vendor' => $this->put('email_vendor'),
      'status' => $this->put('status'),
    );
    $this->db->where('id_vendor', $id);
    $update = $this->db->update('vendor', $data);
    if ($update) {
      $this->response($data, 200);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }
}
