<?php
class My404 extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $this->output->set_status_header('404');
    $data['content'] = 'my404'; // View name 
    $this->load->view('my404', $data); //loading in my template 
  }
}
