<div class="container">

     <div class="row mt-5">
          <div class="col-md-6">
               <div class="card">
                    <div class="card-header">
                         Form Update Buku
                    </div>
                    <div class="card-body">
                         <form action="" method="POST">
                              <input type="hidden" name="id" value="<?= $book['id'] ?>">
                              <div class="mb-3">
                                   <label for="judul" class="form-label">Judul Buku :</label>
                                   <input type="text" class="form-control" id="judul" placeholder="Masukkan judul Anda" name="judul" value="<?= $book['judul_buku']  ?>">
                                   <div class="form-text text-danger"><?= form_error('judul');  ?></div>
                              </div>
                              <div class="mb-3">
                                   <label for="pengarang" class="form-label">Pengarang :</label>
                                   <input type="text" class="form-control" id="pengarang" placeholder="Masukkan pengarang Anda" name="pengarang" <?= $book['pengarang']  ?>>
                                   <div class="form-text text-danger"><?= form_error('pengarang');  ?></div>
                              </div>
                              <div class="mb-3">
                                   <label for="penerbit" class="form-label">Penerbit :</label>
                                   <input type="text" class="form-control" id="penerbit" placeholder="Masukkan penerbit Anda" name="penerbit" <?= $book['penerbit']  ?>>
                                   <div class="form-text text-danger"><?= form_error('penerbit');  ?></div>
                              </div>
                              <div class="mb-3">
                                   <label for="tahun" class="form-label">Tahun Terbit :</label>
                                   <input type="number" class="form-control" id="tahun" placeholder="Masukkan tahun Anda" name="tahun" <?= $book['tahun']  ?>>
                                   <div class="form-text text-danger"><?= form_error('tahun');  ?></div>
                              </div>
                              <div class="form-group">
                                   <label for="genre">Genre</label>
                                   <select name="genre" id="genre" class="form-control">
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                        <option value="Teknik Transmisi">Teknik Transmisi</option>
                                        <option value="Teknik Mesin">Teknik Mesin</option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="Infromatika">Informatika</option>
                                        <option value="Matematika">Matematika</option>
                                        <option value="Pertambangan">Pertambangan</option>
                                   </select>
                              </div>

                              <button type="submit" name="update" class="btn btn-primary float-right mt-4">update</button>

                         </form>
                    </div>
               </div>
          </div>
     </div>


</div>