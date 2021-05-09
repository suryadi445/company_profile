<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm p-3 bg-white rounded">
                    <div class="row">
                        <div class="col-md-8 offset-md-4 text-center text-center">
                            <h2>Login</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/image/login.jpg') ?>" width="100%" class=" gambar_login img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card shadow-sm p-3 bg-white rounded">
                                <form action="<?= base_url('auth/login') ?>" method="POST">
                                    <?php if ($this->session->flashdata()) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $this->session->flashdata('flash') ?>
                                        </div>
                                    <?php endif ?>
                                    <div class="form-group row">
                                        <label for="email_login" class="col-sm-3 col-form-label font-weight-bold">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control font-weight-bold" placeholder="Masukkan email Anda" name="email" id="email_login">
                                        </div>
                                        <div class="col-sm-9 offset-sm-3 mb-n4">
                                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password_login" class="col-sm-3 col-form-label font-weight-bold">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control font-weight-bold" placeholder="Masukkan Password Anda" name="password" id="password_login">
                                        </div>
                                        <div class="col-sm-9 offset-sm-3 mb-n4">
                                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                                        </div>
                                        <div class="col-sm-6 offset-sm-3 mb-n4">
                                            <p class="mt-1">
                                                <input type="checkbox" class="form-checkbox" id="checkbox">
                                                Show Password
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center mt-3">
                                            <button type="submit" class="btn btn-primary" id="masuk">Masuk</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>