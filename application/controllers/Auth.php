<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
     // function yang automatis di jalankan ketika class di panggil
     public function __construct()
     {
          parent::__construct();
          $this->load->library('form_validation');
     }

     public function index()
     {
          $data['title'] = "LOGIN PAGE";
          // Valiasi input form 
          $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
          $this->form_validation->set_rules('password', 'password', 'required|trim');
          // jika validasinya tiak berhasil
          if ($this->form_validation->run() == false) {
               $this->load->view('templated/auth_header',$data);
               $this->load->view('auth/login');
               $this->load->view('templated/auth_footer');
          // jika validasinya berhasil lanjut ke function _login
          } else {
               $this->_login();
          }
     }

     public function registration()
     {
          $this->form_validation->set_rules('name', 'Name', 'required');
          $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
          $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[c_password]', [
               'matches'    => 'password dont match!',
               'min_length' => 'password too short!'
          ]);
          $this->form_validation->set_rules('c_password', 'This', 'required|trim|matches[password]');

          if ($this->form_validation->run() == false) {
               $data['title'] = "REGISTRATION PAGE";
               $this->load->view('templated/auth_header', $data);
               $this->load->view('auth/registration');
               $this->load->view('templated/auth_footer');
          } else {
               // validasi sukses insert user baru
               $data = [

                    "name"          => htmlspecialchars($this->input->post('name', true)),
                    'email'         => htmlspecialchars($this->input->post('email', true)),
                    'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),

               ];

               $this->db->insert('user', $data);
               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                          Congratulitaion your account has been created. Please login
                                          </div>');
               redirect('auth');
          }
     }

     public function _login()
     {
          $email = $this->input->post('email');
          $password = $this->input->post('password');

          $user = $this->db->get_where('user', ['email' => $email])->row_array();

          // Jika usernya ada 
          if ($user) {
               // cek passwordnya sama atau tidak
               if (password_verify($password, $user['password'])) {
                    $data = [
                         'email' => $user['email'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
               } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                  the password you entered is incorrect
                  </div>');
                    redirect('auth');
               }
          } else {
               // usernya tidak ada 
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                          email is not register bruh!
                                          </div>');
               redirect('auth');
          }
     }

     public function logout()
     {
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
  
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                          You have been logged out, thankyouu!
                                          </div>');
  
          redirect('auth');  
     }
}
