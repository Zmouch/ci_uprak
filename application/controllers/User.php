<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('form_validation');
          $this->load->model('Book_model');
     }
     public function index()
     {
          $data['title'] = 'USER PAGE';
          $data['books'] = $this->Book_model->getAllBook();
          $this->load->view('templated/auth_header', $data);
          $this->load->view('user/index', $data);
          $this->load->view('templated/auth_footer');
     }

     public function add()
     {
          $data['title'] = 'Form Tambah Data Student';

          $this->form_validation->set_rules('judul', 'Judul', 'required');
          $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
          $this->form_validation->set_rules('penerbit', 'penerbit', 'required');
          $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric');

          if ($this->form_validation->run() == FALSE) {

               $this->load->view('templated/auth_header', $data);
               $this->load->view('user/addBook');
               $this->load->view('templated/auth_footer');
          } else {
               $this->Book_model->addBook();
               $this->session->set_flashdata('flash', 'Ditambahkan');
               redirect('user');
          }
     }

     public function delete($id)
     {
          $this->Book_model->deleteBook($id);
          $this->session->set_flashdata('flash', 'Dihapus');
          redirect('user');
     }

     public function update($id)
     {
          $data['title']      = 'Form Update Data Student';
          $data['book']    = $this->Book_model->getBookById($id);
          $data['jurusan']    = [
               'Rekayasa Perangkat Lunak', 'Tekknik Transimi', 'Teknik Mesin', 'Computer Science', 'Informatika',
               'Matematika', 'Pertambangan', 'Kedokteran'
          ];

          $this->form_validation->set_rules('judul', 'Judul', 'required');
          $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
          $this->form_validation->set_rules('penerbit', 'penerbit', 'required');
          $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric');


          if ($this->form_validation->run() == FALSE) {

               $this->load->view('templated/auth_header', $data);
               $this->load->view('user/updateBook', $data);
               $this->load->view('templated/auth_footer');

          } else {
               $this->Book_model->updateBook();
               $this->session->set_flashdata('flash', 'Diubah');
               redirect('user');
          }
     }
}
