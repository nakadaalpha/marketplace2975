<div class="container">
<h1 class="my-4 text-center">Tambah Kategori</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control">
            <span class="small text-danger">
                <?php echo form_error("nama_kategori")?>
            </span>
        </div>
        <div class="mb-3">
            <label>Foto Kategori</label>
            <input type="file" name="foto_kategori" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>