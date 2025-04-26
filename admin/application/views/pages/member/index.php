<div class="container mt-5 flex-grow-1">
    <h1 class="mb-4 text-center">Member</h1>
    <a href="add" class="btn btn-success mb-3">Tambah Member</a>
    <div class="table-responsive" style="max-height: 70vh; overflow-y: auto;">
        <table class="table table-bordered table-hover table-striped" id="pagination">
            <thead class="table-dark" style="position: sticky; top: 0; z-index: 1020;">
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama member</th>
                    <th>Email Member</th>
                    <th>Nomor WA Member</th>
                    <th>Nama Distrik Member</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($member as $k => $v): ?>
                    <tr>
                        <td><?php echo $k + 1; ?></td>
                        <td><?php echo $v['nama_member']; ?></td>
                        <td><?php echo $v['email_member']; ?></td>
                        <td><?php echo $v['nomor_member']; ?></td>
                        <td><?php echo $v['nama_distrik_member']; ?></td>
                        <td>
                            <a href="" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>