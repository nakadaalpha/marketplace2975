<div class="container">
    <h1 class="text-center">Produk Jual <?php echo $this->session->userdata("nama_member") ?></h1>

    <table class="table table-bordered table-hover table-striped" id="pagination">
        <thead class="table-dark" style="position: sticky; top: 0; z-index: 1020;">
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produk as $k => $v): ?>
                <tr>
                    <td><?php echo $k + 1 ?></td>
                    <td><?php echo $v["nama_produk"] ?></td>
                    <td><?php echo $v["harga_produk"] ?></td>
                    <td><img src="<?php echo base_url("assets/produk/" . $v["foto_produk"]) ?>" width="200"></td>
                    <td>
                        <a href="<?php echo base_url("seller/produk/edit/" . $v['id_produk'])?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo base_url("seller/produk/hapus/" . $v['id_produk'])?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <a href="<?php echo base_url('seller/produk/tambah') ?>" class="btn btn-primary">Tambah</a>
</div>