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
                            <th class="text-center">No.</th>
                            <th>Nama Barang</th>
                            <th class="text-center">Stock</th>
                            <th>Harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($row as $r) {
                        ?>
                            <tr>
                                <td class="text-center fw-bold"><?= $no++; ?></td>
                                <td class=" text-wrap"><strong><?= $r['nama']; ?></strong></td>
                                <td class="text-center"><span class="badge bg-label-success me-1"><?= $r['stock']; ?></span></td>
                                <td><?= $r['harga']; ?></td>
                                <td class="text-end">
                                    <form action="<?= base_url('/Gudang/delete/' . $r['id']); ?>" method="post">
                                        <button type="button" data-namabarang="<?= $r['nama']; ?>" data-id="<?= $r['id']; ?>" class="restock btn btn-success btn-sm">Restock</button>
                                        <a href="<?= base_url('/Gudang/view/' . $r['id']); ?>" class="btn btn-info btn-sm">View</a>
                                        <a href="<?= base_url('/Gudang/edit/' . $r['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm flex-inline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div id="divModal">

    </div>
    <!-- END MODAL -->
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

    $('.restock').click(function(e) {
        // e.preventDefault();
        const namaBarang = $(this).data('namabarang');
        const id = $(this).data('id');
        console.log(namaBarang)
        $('#divModal').html(`
        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="<?= base_url('/Gudang/addStock'); ?>" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Restock ${namaBarang}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Jumlah stok yang ditambahkan</label>
                                <input name="stock" type="number" id="addStock" class="form-control" placeholder="00000000" required />
                                <input name="id" type="text" class="d-none" value="${id}"/>
                                <input name="nama" type="text" class="d-none" value="${namaBarang}"/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        `);

        $('#basicModal').modal('show')
    });
</script>

<?= $this->endSection(); ?>