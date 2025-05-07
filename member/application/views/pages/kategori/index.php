<div class="container mt-5 flex-grow-1">
    <h1 class="mb-4 text-center">Kategori</h1>
    <a href="<?php echo base_url("kategori/tambah")?>" class="btn btn-success mb-3">Tambah Kategori</a>
    <div class="table-responsive" style="max-height: 70vh; overflow-y: auto;">
        <table class="table table-bordered table-hover table-striped" id="pagination">
            <thead class="table-dark" style="position: sticky; top: 0; z-index: 1020;">
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Gambar Kategori</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kategori as $k => $v): ?>
                    <tr>
                        <td><?php echo $k + 1; ?></td>
                        <td><?php echo $v['nama_kategori']; ?></td>
                        <td><img src="<?php echo base_url('assets/kategori/' . $v['foto_kategori']); ?>" width="200"></td>
                        <td>
                            <a href="<?php echo base_url('kategori/edit/' . $v['id_kategori'])?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url('kategori/hapus/' . $v['id_kategori'])?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>