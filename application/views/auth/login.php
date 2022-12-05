<div class="container">
     <div class="row mt-5">
          <div class="col-md-6 mx-auto">
               <div class="card">
                    <div class="card-header text-center">
                         Login
                    </div>
                    <div class="card-body o-hidden border-0 shadow-lg">
                         <?= $this->session->flashdata('message');  ?>
                         <form action="<?= base_url('auth')  ?>" method="POST">
                              <label for="email" class="p-2">Email :</label>
                              <div class="form-group">
                                   <input type="text" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                                   <div class="form-text text-danger"><?= form_error('email') ?></div>
                              </div>
                              <label for="password" class="p-2">Password :</label>
                              <div class="form-group">
                                   <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                   <div class="form-text text-danger"><?= form_error('password') ?></div>
                              </div>
                              <button class="btn btn-primary btn-user btn-block mt-3 ms-2" type="submit" name="login">
                                   Login
                              </button>
                              <div class="text-center">
                                   <a class="small" href="<?= base_url() ?>auth/registration">Create an Account!</a>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>