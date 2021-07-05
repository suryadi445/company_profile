<section id="registrasi">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm p-3 bg-white rounded">
                    <div class="row">
                        <div class="col-md-8 offset-md-4 text-center text-center">
                            <h2>REGISTRASI</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/image/registrasi.jpg') ?>" width="100%" class=" gambar_daftar img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card shadow-sm p-3 bg-white rounded">
                                <form action="<?= base_url('auth/registrasi') ?>" method="POST">
                                    <div class="form-group row">
                                        <label for="nama_daftar" class="col-sm-3 col-form-label font-weight-bold">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control font-weight-bold" placeholder="Masukkan Nama Anda" name="nama" id="nama_daftar" value="<?= set_value('nama'); ?>">
                                        </div>
                                        <div class="col-sm-9 offset-sm-3 mb-n4">
                                            <span class="text-danger error_nama"><?php echo form_error('nama'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email_daftar" class="col-sm-3 col-form-label font-weight-bold">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control font-weight-bold" placeholder="Masukkan email Anda" name="email" id="email_daftar" value="<?= set_value('email'); ?>">
                                        </div>
                                        <div class="col-sm-9 offset-sm-3 mb-n4">
                                            <span class="text-danger error_email"><?php echo form_error('email'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone_daftar" class="col-sm-3 col-form-label font-weight-bold">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control font-weight-bold" placeholder="Masukkan No Handphone Anda" name="phone" id="phone_daftar" value="<?= set_value('phone'); ?>">
                                        </div>
                                        <div class="col-sm-9 offset-sm-3 mb-n4">
                                            <span class="text-danger error_phone"><?php echo form_error('phone'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password_daftar" class="col-sm-3 col-form-label font-weight-bold">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control font-weight-bold password" placeholder="Masukkan Password Anda" name="password" id="password_daftar">
                                        </div>
                                        <div class="col-sm-9 offset-sm-3 mb-n4">
                                            <span class="text-danger error_password"><?php echo form_error('password'); ?></span>
                                        </div>
                                        <div class="col-sm-6 offset-sm-3 mb-n4">
                                            <p class="mt-1">
                                                <input type="checkbox" class="form-checkbox show_password" id="checkbox">
                                                Show Password
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password_daftar" class="col-sm-3 col-form-label font-weight-bold">Confirm Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control font-weight-bold password" placeholder="Masukkan Ulang Password Anda" name="password2" id="password_daftar2">
                                        </div>
                                        <div class="col-sm-9 offset-sm-3 mb-n4">
                                            <span class="text-danger error_password"><?php echo form_error('password'); ?></span>
                                        </div>
                                        <div class="col-sm-6 offset-sm-3">
                                            <p class="mt-1">
                                                <input type="checkbox" class="form-checkbox show_password" id="checkbox2">
                                                Show Password
                                            </p>
                                        </div>
                                    </div>
                                    <fieldset class="form-group mt-n4">
                                        <div class="row font-weight-bold">
                                            <legend class="col-form-label col-sm-3 pt-0">Gender</legend>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="pria" checked>
                                                    <label class="form-check-label" for="gridRadios1">
                                                        Male <small>(Pria)</small>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="wanita">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Female <small>(Wanita)</small>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="row">
                                        <div class="col text-center mt-3">
                                            <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
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