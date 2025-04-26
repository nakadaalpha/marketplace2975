<div class="container mt-5 flex-grow-1">
    <h1 class="mb-4 text-center">Produk</h1>
    <a href="add" class="btn btn-success mb-3">Tambah Produk</a>
    <div class="table-responsive" style="max-height: 70vh; overflow-y: auto;">
        <table class="table table-bordered table-hover table-striped" id="pagination">
            <thead class="table-dark" style="position: sticky; top: 0; z-index: 1020;">
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Foto Produk</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produk as $k => $v): ?>
                    <tr>
                        <td><?php echo $k + 1; ?></td>
                        <td><?php echo $v['nama_produk']; ?></td>
                        <td><?php echo $v['harga_produk']; ?></td>
                        <td><?php echo $v['foto_produk']; ?></td>
                        <td>
                            <a href="" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>