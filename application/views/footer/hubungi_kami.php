<section id="contact" class="bg-white pb-3">
    <div class="container-fluid pt-5">
        <div class="row ml-2 pt-2">
            <div class="col-lg-12">
                <h1 id="hubungi_title">Hubungi Kami</h1>
            </div>
        </div>
        <?php if ($this->session->flashdata()) : ?>
            <div class="flash" data-id="<?= $this->session->flashdata('sukses') ?>"></div>
            <div class="flash2" data-id="<?= $this->session->flashdata('gagal') ?>"></div>
        <?php endif ?>
        <div class="row text-justify" id="gambar_contact">
            <div class="col-12">
                <div class="row justify-content-between">
                    <div class="col-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="<?= base_url('assets/image/call.jpg') ?>" width="150%">
                            </div>
                            <div class="col-lg-6">
                                <div class="row ml-2">
                                    <div class="col">
                                        <h2>Kepuasan Anda selalu menjadi prioritas Kami</h2>
                                        <p>Untuk pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami menggunakan formulir yang tersedia. Kami akan menghubungi Anda sesegera mungkin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card shadow-sm p-3 mb-5 bg-white rounded" id="card_hub_kami">
                            <!-- <form action="<?= base_url('hubungi_kami/index') ?>" method="POST"> -->
                            <form>
                                <div class="container mt-3">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-2 col-form-label font-weight-bold ">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control font-weight-bold shadow-sm p-3 bg-white rounded" value="<?= set_value('nama') ?>" placeholder="Masukkan nama lengkap Anda" id="nama" name="nama">
                                            <div class="text-danger mb-n4 error_nama"><?= form_error('nama') ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label font-weight-bold">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control font-weight-bold shadow-sm p-3 bg-white rounded" value="<?= set_value('email') ?>" placeholder="Masukkan email Anda" id="email" name="email">
                                            <div class="text-danger mb-n4 error_email"><?= form_error('email') ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-2 col-form-label font-weight-bold">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control font-weight-bold shadow-sm p-3 bg-white rounded" value="<?= set_value('phone') ?>" placeholder="Masukkan nomor telepon Anda" id="phone" name="phone">
                                            <div class="text-danger mb-n4 error_phone"><?= form_error('phone') ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-2 col-form-label font-weight-bold">Kategori</label>
                                        <div class="col-sm-10">
                                            <select class="form-control font-weight-bold" name="kategori" value="<?= set_value('kategori') ?>" id="kategori">
                                                <option class="font-weight-bold" disabled selected value <?php echo set_select('kategori', '', TRUE); ?>>Pilih Kategori</option>
                                                <option value="keluhan" class="font-weight-bold" <?php echo set_select('kategori', 'keluhan'); ?>>Keluhan</option>
                                                <option value="saran" class="font-weight-bold" <?php echo set_select('kategori', 'saran'); ?>>Saran</option>
                                                <option value="pertanyaan" class="font-weight-bold" <?php echo set_select('kategori', 'pertanyaan'); ?>>Pertanyaan</option>
                                                <option value="sponsorship" class="font-weight-bold" <?php echo set_select('kategori', 'sponsorship'); ?>>Sponsorship</option>
                                                <option value="lain-lain" class="font-weight-bold" <?php echo set_select('kategori', 'lain-lain'); ?>>Lain-lain</option>
                                            </select>
                                            <div class="text-danger mb-n4 error_kategori"><?= form_error('kategori') ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pesan" class="col-sm-2 col-form-label font-weight-bold">Pesan</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control font-weight-bold shadow-sm p-3 bg-white rounded" placeholder="Masukkan pesan Anda" name="pesan" id="pesan" rows="3"><?= set_value('pesan') ?></textarea>
                                            <div class="text-danger error_pesan"><?= form_error('pesan') ?></div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger float-right mb-3" id="btn_hubKami">Kirim Pesan</button>
                                    <!-- button loading -->
                                    <button class="btn btn-primary d-none float-right" id="btn-loading" type="button" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>