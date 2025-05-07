<div class="container">
    <h1 class="my-4 text-center">Edit Kategori</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" value="<?php echo $kategori['nama_kategori'] ?>">
            <span class="small text-danger">
                <?php echo form_error("nama_kategori")?>
            </span>
        </div>
        <div class="mb-3">
            <label>Foto Kategori</label>
            <img src="<?php echo base_url('assets/kategori/' . $kategori['foto_kategori']) ?>" width="300">
        </div>
        <div class="mb-3">
            <label>Ubah Foto Kategori</label>
            <input type="file" name="foto_kategori" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>