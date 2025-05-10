<div class="container">
    <h1 class="mb-4 text-center">Produk</h1>
    <div class="row">
        <?php foreach ($produk as $k => $v): ?>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <imag src="<?php echo base_url('assets/produk/' . $v['foto_produk'])?>">
                        <div class="card-body text-center">
                        <h6><?php echo $v['nama_produk']?></h6>
                        <p class="lead">Rp <?php echo number_format($v['harga_produk'])?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>