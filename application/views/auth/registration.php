<div class="container">
     <div class="row mt-5">
          <div class="col-md-6 mx-auto">
               <div class="card">
                    <div class="card-header text-center">
                         Register
                    </div>
                    <div class="card-body o-hidden border-0 shadow-lg">
                         <form action="<?= base_url('auth')  ?>/registration" method="POST">
                              <label for="name" class="p-2">Name :</label>
                              <div class="form-group">
                                   <input type="text" class="form-control form-control-user" id="name" aria-describedby="nameHelp" placeholder="Full Name" name="name">
                                   <div class="form-text text-danger"><?= form_error('name') ?></div>
                              </div>
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
                              <label for="c_password" class="p-2">Confirm Password :</label>
                              <div class="form-group">
                                   <input type="password" class="form-control form-control-user" id="c_password" placeholder="c_password" name="c_password">
                                   <div class="form-text text-danger"><?= form_error('c_password') ?></div>
                              </div>
                              <button class="btn btn-primary btn-user btn-block mt-3 ms-2" type="submit" name="Register">
                                   Register
                              </button>
                              <div class="text-center">
                                   <a class="small" href="<?= base_url() ?>auth">Already Have Account ?</a>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>