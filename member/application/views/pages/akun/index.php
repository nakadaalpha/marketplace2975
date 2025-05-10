<div class="container">
    <h5>Ubah Akun</h5>
    <div class="row">
        <div class="col-md-4">
            <form method="post">
                <div class="mb-3">
                    <label>Email Anda</label>
                    <input type="text" name="email_member" class="form-control" value="<?php echo set_value("email_member", $this->session->userdata("email_member"))?>">
                    <span class="text-danger small">
                        <?php echo form_error("email_member")?>
                    </span>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="text" name="password_member" class="form-control">
                    <p class="text-muted">Kosongkan jika password tidak diubah</p>
                </div>
                <div class="mb-3">
                    <label>nama_distrik Lengkap</label>
                    <input type="text" name="nama_member" class="form-control" value="<?php echo set_value("nama_member", $this->session->userdata("nama_member"))?>">
                    <span class="text-danger small">
                        <?php echo form_error("nama_member")?>
                    </span>
                </div>
                <div class="mb-3">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat_member" class="form-control" value="<?php echo set_value("alamat_member", $this->session->userdata("alamat_member"))?>">
                    <span class="text-danger small">
                        <?php echo form_error("alamat_member")?>
                    </span>
                </div>
                <div class="mb-3">
                    <label>Nomor</label>
                    <input type="text" name="nomor_member" class="form-control" value="<?php echo set_value("nomor_member", $this->session->userdata("nomor_member"))?>">
                    <span class="text-danger small">
                        <?php echo form_error("nomor_member")?>
                    </span>
                </div>
                <div class="mb-3">
                    <label>Kota/Kabupaten</label>
                    <input type="text" name="nama_distrik_member" class="form-control" value="<?php echo set_value("nama_distrik_member", $this->session->userdata("nama_distrik_member"))?>">
                    <span class="text-danger small">
                        <?php echo form_error("nama_distrik_member")?>
                    </span>
                </div>
                <div class="mb-3">
                    <label>Kode Kota/Kabupaten</label>
                    <input type="text" name="kode_distrik_member" class="form-control" value="<?php echo set_value("kode_distrik_member", $this->session->userdata("kode_distrik_member"))?>">
                    <span class="text-danger small">
                        <?php echo form_error("kode_distrik_member")?>
                    </span>
                </div>
                <button class="btn btn-primary">Ubah Akun</button>
            </form>
        </div>
    </div>
</div>