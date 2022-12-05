<?php

class Book_model extends CI_Model
{

     public function getAllBook()
     {
          return $this->db->get('buku')->result_array();
     }

     public function addBook()
     {
          $data = [
               "judul_buku"   =>  $this->input->post('judul', true), // true == htmlspecialchars biar tidak ada gangguan dari luar pengisian
               "pengarang"   =>  $this->input->post('pengarang', true),
               "penerbit"   =>  $this->input->post('penerbit', true),
               "genre"   =>  $this->input->post('genre',  true),
               "tahun"   =>  $this->input->post('tahun',  true)
          ];

          $this->db->insert('buku', $data);
     }

     public function deleteBook($id)
     {
          $this->db->delete('buku', ['id' => $id]);
     }

     public function getBookById($id)
     {
          return $this->db->get_where('buku', ['id' => $id])->row_array();
     }

     public function updateBook()
     {
          $data = [
               "judul_buku"   =>  $this->input->post('judul', true), // true == htmlspecialchars biar tidak ada gangguan dari luar pengisian
               "pengarang"   =>  $this->input->post('pengarang', true),
               "penerbit"   =>  $this->input->post('penerbit', true),
               "genre"   =>  $this->input->post('genre',  true),
               "tahun"   =>  $this->input->post('tahun',  true)
          ];

          $this->db->where('id', $this->input->post('id'));
          $this->db->update('buku', $data);
     }
}
