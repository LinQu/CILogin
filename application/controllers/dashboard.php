<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  // public function __construct()
  // {
  //     parent::__construct();
  //     if (!$this->session->userdata('user')) {
  //         redirect('login');
  //     }
  // }

  public function index()
  {
    $this->load->view('dashboard');
  }

  public function Dashboard()
  {
    $this->load->view('dashboard');
  }

  public function profile()
  {
    $this->load->view('profile');
  }
}
