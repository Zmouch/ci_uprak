<div class="container-fluid">
     <?php if ($this->session->flashdata('flash')) : ?>
          <div class="row mt-3">
               <div class="col-md-6 mx-auto">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                         Data buku <strong>berhasil</strong> <?= $this->session->flashdata('flash');  ?>.
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
               </div>
          </div>
     <?php endif; ?>
     <div class="row">
          <div class="col-md-9 mx-auto">
               <h4 class="mt-4">BOOK LIST</h4>

               <div class="card mb-4 ">
                    <div class="card-header">
                         <!-- Button to Open the Modal -->
                         <a href="<?= base_url('user')  ?>/add" class="btn btn-success">Tambah Data Buku</a>
                         <a href="<?= base_url('auth')  ?>/logout" class="btn btn-danger float-end">logout</a>
                    </div>
                    <div class="card-body">
                         <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   <thead>
                                        <tr>
                                             <th>No</th>
                                             <th>Nama Buku</th>
                                             <th>Pengarang</th>
                                             <th>Penerbit</th>
                                             <th>Genre</th>
                                             <th>Tahun</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php $i = 1;  ?>
                                        <?php foreach ($books as $book) : ?>
                                             <tr>
                                                  <td><?= $i++;  ?></td>
                                                  <td><?= $book['judul_buku'];  ?></td>
                                                  <td><?= $book['pengarang'];   ?></td>
                                                  <td><?= $book['penerbit'];  ?></td>
                                                  <td><?= $book['genre'];  ?></td>
                                                  <td><?= $book['tahun'];  ?></td>
                                                  <td>
                                                       <a href="<?= base_url();  ?>user/update/<?= $book['id'];  ?>" class="btn btn-waning float-end me-2">ubah</a>
                                                       <a href="<?= base_url();  ?>user/delete/<?= $book['id'];  ?>" class="btn btn-info   float-end" onclick="return confirm ('yakin ?');">delete</a>
                                                  </td>
                                             </tr>
                                        <?php endforeach; ?>
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>