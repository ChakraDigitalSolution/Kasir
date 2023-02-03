<?= $this->extend('Templates/Template'); ?>

<?= $this->Section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Gudang</h4>
        <div class="card px-3 py-4 table-responsive">
            <div class="card-header px-1 py-1 mb-2">
                <a href="<?= base_url(''); ?>/Gudang/tambah" class="btn btn-primary btn-sm">Tambah Barang</a>
            </div>
            <div class="card-body px-1 py-1">
                <table class="table table-hover" id="used-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Stock</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($row as $r) {
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td class=" text-wrap"><strong><?= $r['nama']; ?></strong></td>
                                <td><span class="badge bg-label-success me-1"><?= $r['stock']; ?></span></td>
                                <td><?= $r['harga']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm">View</button>
                                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->

<script>
    $(document).ready(function() {
        $('#used-table').DataTable({
            language: {
                paginate: {
                    next: '<button type="button" class="btn btn-primary btn-sm">Next</button>', // or '→'
                    previous: '<button type="button" class="btn btn-primary btn-sm">Pevious</button>', // or '←'
                }
            },

        });
    });

    const swal = '<?= session()->getFlashdata('Berhasil') ?>';

    if (swal) {
        Swal.fire({
            title: swal,
            icon: 'success',
            confirmButtonText: 'Ok'
        })
    }
</script>

<?= $this->endSection(); ?>