<div class="container">
    <h1 class="mb-4 text-center">Kategori Produk</h1>
    <div class="row">
        <?php foreach ($kategori as $k => $v): ?>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm">
                    <imag src="<?php echo base_url('assets/kategori/' . $v['foto_kategori'])?>">
                    <div class="card-body text-center">
                        <h6><?php echo $v['nama_kategori']?></h6>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>