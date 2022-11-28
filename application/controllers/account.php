<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('logged_in')) {
      //set flash
      $this->session->set_flashdata('message', 'You Must Login First');
      redirect('Login/login');
    }
    $this->load->model('Manage_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Manage Account';
    $data['account'] = $this->Manage_model->getAllAccount();
    $this->load->view('template/header', $data);
    $this->load->view('profile', $data);
    $this->load->view('template/footer');
  }

  public function add()
  {
    $data['title'] = 'Add Account';
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('passwordval', 'Password Confirmation', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('role', 'Role', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('telepon', 'Telepon', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('template/header', $data);
      $this->load->view('add');
      $this->load->view('template/footer');
    } else {
      if ($this->Manage_model->addAccount()) {
        $this->session->set_flashdata('flashsucces', 'Created');
        redirect('account');
      } else {
        $this->session->set_flashdata('flashalert', ' to create');
        redirect('account');
      }

      redirect('account');
    }
  }

  public function edit()
  {
    $data['title'] = 'Edit Account';
    //get username

    $id = $this->uri->segment(3);
    $data['account'] = $this->Manage_model->getById($id);
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('role', 'Role', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('telepon', 'Telepon', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('template/header', $data);
      $this->load->view('account', $data);
      $this->load->view('template/footer');
    } else {
      $this->Manage_model->editAccount();
      $this->session->set_flashdata('flashupdate', 'Updated');
      redirect('account');
    }
  }

  public function delete()
  {
    //get username
    $id = $this->input->post('username');
    if (empty($id)) {
      show_404();
    } else {
      $this->Manage_model->deleteAccount($id);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect('account');
    }
  }
}
