<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class JenBuku extends RestController
{

  function __construct()
  {
    // Construct the parent class
    parent::__construct();
    $this->load->database();
  }

  public function index_get()
  {
    $id = $this->get('id_jenis');
    if ($id == '') {
      $jenis = $this->db->get('jenis_buku')->result();
    } else {
      $this->db->where('id_jenis', $id);
      $jenis = $this->db->get('jenis_buku')->result();
    }
    $this->response($jenis, 200);
  }

  public function index_post()
  {
    $data = array(
      'id_jenis_buku' => $this->post('id_jenis_buku'),
      'nama_jenis_buku' => $this->post('nama_jenis_buku'),
      'status' => $this->post('status'),
    );
    $insert = $this->db->insert('jenis_buku', $data);
    if ($insert) {
      $this->response($data, 200);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }

  public function index_delete()
  {
    $id = $this->delete('id_jenis_buku');
    $this->db->where('id_jenis_buku', $id);
    $delete = $this->db->delete('jenis_buku');
    if ($delete) {
      $this->response(array('status' => 'success'), 201);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }

  public function index_put()
  {
    $id = $this->put('id_jenis');
    $data = array(
      'id_jenis_buku' => $this->put('id_jenis_buku'),
      'nama_jenis_buku' => $this->put('nama_jenis_buku'),
      'status' => $this->put('status'),
    );
    $this->db->where('id_jenis_buku', $id);
    $update = $this->db->update('jenis_buku', $data);
    if ($update) {
      $this->response($data, 200);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }
}
