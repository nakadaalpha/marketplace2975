<div class="container">
    <br>
    <h1 class="text-center my-5">Detail Transaksi</h1>
    <div class="row my-5">
        <div class="col-md-3">
            <h5>Transaksi</h5>
            <p>ID: <?php echo $transaksi['id_transaksi'] ?></p>
            <p><?php echo date('d M Y H:i', strtotime($transaksi['tanggal_transaksi'])) ?></p>
        </div>
        <div class="col-md-3">
            <h5>Pengirim</h5>
            <p><?php echo $transaksi['nama_pengirim'] ?>, <?php echo $transaksi['nomor_pengirim'] ?></p>
            <p><?php echo $transaksi['alamat_pengirim'] ?>, <?php echo $transaksi['distrik_pengirim'] ?></p>
        </div>
        <div class="col-md-3">
            <h5>Penerima</h5>
            <p><?php echo $transaksi['nama_penerima'] ?>, <?php echo $transaksi['nomor_penerima'] ?></p>
            <p><?php echo $transaksi['alamat_penerima'] ?>, <?php echo $transaksi['distrik_penerima'] ?></p>
        </div>
        <div class="col-md-3">
            <h5>Ekspedisi</h5>
            <p><?php echo $transaksi['nama_ekspedisi'] ?>, <?php echo $transaksi['layanan_ekspedisi'] ?></p>
            <p><?php echo $transaksi['estimasi_ekspedisi'] ?>, <?php echo $transaksi['berat_ekspedisi'] ?></p>
        </div>
    </div>

    <h5>Produk</h5>

    <table class="table table-bordered table-hover table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transaksi_detail as $k => $v): ?>
                <tr>
                    <th><?php echo $v["nama_beli"] ?></th>
                    <th><?php echo $v["harga_beli"] ?></th>
                    <th><?php echo $v["jumlah_beli"] ?></th>
                    <th><?php echo $v["harga_beli"] * $v["jumlah_beli"] ?></th>
                </tr>
            <?php endforeach ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Total Belanja</td>
                <th><?php echo $transaksi["belanja_transaksi"] ?></th>
            </tr>
            <tr>
                <td colspan="3">Ongkos Kirim</td>
                <th><?php echo $transaksi["ongkir_transaksi"] ?></th>
            </tr>
            <tr>
                <td colspan="3">Total Yang Harus Dibayar</td>
                <th><?php echo $transaksi["total_transaksi"] ?></th>
            </tr>
        </tfoot>
    </table>
</div>