<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Data Gejala
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Data Gejala</h3>
        <div class="card-tools">
            <a href="<?= route_to('gejala/create') ?>" class="btn btn-sm btn-success">Tambah Gejala</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode gejala</th>
                    <th>Nama gejala</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($gejalas as $gejala) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $gejala['kode_gejala'] ?></td>
                        <td><?= $gejala['nama_gejala'] ?></td>
                        <td class="manage-row">
                            <a href="<?= route_to('gejala/show', $gejala['kode_gejala']) ?>" class="show-button">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="<?= route_to('gejala/edit', $gejala['kode_gejala']) ?>" class="edit-button">
                                <i class="fa-solid fa-marker"></i>
                            </a>
                            <!-- Button trigger modal -->
                            <a href="<?= route_to('gejala/delete', $gejala['kode_gejala']) ?>" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm<?= $gejala['kode_gejala'] ?>">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-sm<?= $gejala['kode_gejala'] ?>" tabindex="-1" role="dialog" aria-hidden="">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">Apakah Anda yakin ingin menghapus data?</div>
                                        <div class="modal-footer">
                                            <form action="<?= route_to('gejala/delete', $gejala['kode_gejala']) ?>" method="POST">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tidak</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kode gejala</th>
                    <th>Nama gejala</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "buttons": ["csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
<?= $this->endSection() ?>