<div class="container">
    <h5>Tambah Produk</h5>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Kategori</label>
            <select class="form-control form-select">
                <option value="">Pilih</option>
                <?php foreach ($kategori as $k => $v): ?>
                    <option value="<?php echo $v['id_kategori'] ?>" <?php echo $v['id_kategori'] == $produk['id_kategori'] ? 'selected' : "" ?>>
                        <?php echo $v['nama_kategori'] ?>
                    </option>
                <? endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama_produk" class="form-control">
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="text" name="harga_produk" class="form-control">
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto_produk" class="form-control">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi_produk" class="form-control">
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>