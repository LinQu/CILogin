<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Buku extends RestController
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function index_get()
  {
    $id = $this->get('id_buku');
    if ($id == '') {
      $buku = $this->db->get('buku')->result();
    } else {
      $this->db->where('id_buku', $id);
      $buku = $this->db->get('buku')->result();
    }
    $this->response($buku, 200);
  }

  public function index_post()
  {
    $data = array(
      'id_buku' => $this->post('id_buku'),
      'nama_buku' => $this->post('nama_buku'),
      'id_jenis_buku' => $this->post('id_jenis_buku'),
      'id_vendor' => $this->post('id_vendor'),
      'jml_stok' => $this->post('jml_stok'),
    );
    $insert = $this->db->insert('buku', $data);
    if ($insert) {
      $this->response($data, 200);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }

  public function index_delete()
  {
    $id = $this->delete('id_buku');
    $this->db->where('id_buku', $id);
    $delete = $this->db->delete('buku');
    if ($delete) {
      $this->response(array('status' => 'success'), 201);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }

  public function index_put()
  {
    $id = $this->put('id_buku');
    $data = array(
      'id_buku' => $this->put('id_buku'),
      'nama_buku' => $this->put('nama_buku'),
      'id_jenis_buku' => $this->put('id_jenis_buku'),
      'id_vendor' => $this->put('id_vendor'),
      'jml_stok' => $this->put('jml_stok'),
    );
    $this->db->where('id_buku', $id);
    $update = $this->db->update('buku', $data);
    if ($update) {
      $this->response($data, 200);
    } else {
      $this->response(array('status' => 'fail', 502));
    }
  }
}
