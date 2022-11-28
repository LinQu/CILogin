<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Login_model');
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_flashdata('message', 'You Must Login First');
      redirect('Login/login');
    }
  }

  public function index()
  {
    $user = $this->Login_model;
    $totaladmin = $user->getAdmin();
    $totaldosen = $user->getDosen();

    $data['totaladmin'] = $totaladmin;
    $data['totaldosen'] = $totaldosen;

    $this->load->view('dashboard', $data);
  }
}
