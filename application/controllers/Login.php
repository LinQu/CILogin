<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Login_model');
  }


  public function login()
  {
    $post = $this->input->post();
    if (isset($post['username']) && isset($post['password'])) {
      //cek user
      $user = $this->Login_model;
      $data = $user->getByUsernamePassword($post['username'], $post['password']);
      if ($data != null) {
        $username = $data->username;
        $password = $data->password;
        $name = $data->nama;
        $role = $data->role;
        $totaladmin = $user->getAdmin();
        $totaldosen = $user->getDosen();

        //adding session
        $newdata = array(
          'username' => $username,
          'name' => $name,
          'role' => $role,
          'logged_in' => TRUE,
          'totaladmin' => $totaladmin,
          'totaldosen' => $totaldosen
        );

        $this->session->set_userdata($newdata);
        if ($role == 'admin') {
          '<script>alert("Login Berhasil ' . $username . '")</script>';
          redirect('Dashboard');
        } else {
          echo '<script>alert("Login Berhasil ' . $newdata . '")</script>';
          redirect('Dashboard');
        }
      } else {
        $this->session->set_flashdata('message', 'Username atau Password Salah');
        redirect('login/login');
      }
    } else {
      $this->load->view('login');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('logged_in');
    $this->session->sess_destroy();
    redirect('login/login');
  }
}
