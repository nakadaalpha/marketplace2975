<div class="container mt-5 flex-grow-1">
    <h1 class="mb-4 text-center">Data Transaksi Jual <?php echo $this->session->userdata("nama_member") ?></h1>
    <div class="table-responsive" style="max-height: 70vh; overflow-y: auto;">
        <table class="table table-bordered table-hover table-striped" id="pagination">
            <thead class="table-dark" style="position: sticky; top: 0; z-index: 1020;">
                <tr class="text-center">
                    <th>No</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total Transaksi</th>
                    <th>Status Transaksi</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jual as $k => $v): ?>
                    <tr>
                        <td><?php echo $k + 1; ?></td>
                        <td><?php echo date('d M Y H:i', strtotime($v['tanggal_transaksi'])); ?></td>
                        <td><?php echo number_format($v['total_transaksi']); ?></td>
                        <td>
                            <span class="badge bg-success">
                                <?php echo $v['status_transaksi']; ?>
                            </span>
                        </td>
                        <td>
                            <a href="<?php echo base_url('transaksi/detail/' . $v['id_transaksi']) ?>" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>