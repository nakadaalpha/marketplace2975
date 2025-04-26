<div class="container mt-5 flex-grow-1">
    <h1 class="mb-4 text-center">Transaksi</h1>
    <a href="add" class="btn btn-success mb-3">Tambah Transaksi</a>
    <div class="table-responsive" style="max-height: 70vh; overflow-y: auto;">
        <table class="table table-bordered table-hover table-striped" id="pagination">
            <thead class="table-dark" style="position: sticky; top: 0; z-index: 1020;">
                <tr class="text-center">
                    <th>Tanggal Transaksi</th>
                    <th>Total Transaksi</th>
                    <th>Ongkir Transaksi</th>
                    <th>Status Transaksi</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transaksi as $k => $v): ?>
                    <tr>
                        <td><?php echo $k + 1; ?></td>
                        <td><?php echo $v['tanggal_transaksi']; ?></td>
                        <td><?php echo $v['total_transaksi']; ?></td>
                        <td><?php echo $v['ongkir_transaksi']; ?></td>
                        <td><?php echo $v['status_transaksi']; ?></td>
                        <td>
                            <a href="" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>