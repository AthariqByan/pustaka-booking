<div class="container">
     <!-- Outer Row -->
     <div class="row justify-content-center">
          <div class="col-lg-7">
               <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                         <!-- Nested Row within Card Body -->
                         <div class="row">
                              <div class="col-lg">
                                   <div class="p-5">
                                        <div class="text-center">
                                             <img src="assets/img/upload/profil.png" width="24%" alt="user" class="mb-3"> 
                                             <h1 class="h4 text-gray-900 mb-2">Login</h1>
                                        </div>
                                        <br>
                                        <?= $this->session->flashdata('pesan'); ?>
                                        <form class="user"method="post" action="<?= base_url('autentifikasi'); ?>">
                                             <div class="form-group">
                                                  <input type="text" class="form-control form-control-user" value="<?=set_value('email'); ?>" id="email" placeholder="Masukkan Alamat Email" name="email">
                                                  <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
                                             </div>
                                             <div class="form-group">
                                                  <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                                  <?= form_error('password','<small class="text-danger pl-3">', '</small>'); ?>
                                             </div>
                                             <div class="form-group">
                                                  <div class="custom-control custom-checkbox small">
                                                       <input type="checkbox" class="custom-control-input" id="customCheck">
                                                       <label class="custom-control-label" for="customCheck">Ingat saya</label>
                                                  </div>
                                             </div>
                                             <button type="submit" class="btn btn-primary btn-user btn-block">Masuk</button>
                                        <hr>
                                        <a href="<?=base_url('admin/index'); ?>" class="btn btn-google btn-user btn-block">
                                             <i class="fab fa-google fa-fw"></i> Masuk dengan Google
                                        </a>
                                        <a href="<?=base_url('admin/index'); ?>" class="btn btn-facebook btn-user btn-block">
                                             <i class="fab fa-facebook-f fa-fw"></i> Masuk dengan Facebook
                                        </a>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                             <a class="small" href="<?=base_url('autentifikasi/lupa-password'); ?>">Lupa Password?</a>
                                        </div>
                                        <div class="text-center">
                                             <a class="small" href="<?=base_url('autentifikasi/registrasi'); ?>">Daftar Akun !</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
