<?= $this->extend('Templates/Template'); ?>

<?= $this->Section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Gudang</h4>
        <div class="card px-3 py-4 table-responsive">
            <div class="card-header px-1 py-1 mb-2">
                <a href="<?= base_url(''); ?>/Kasir" class="btn btn-primary btn-sm">Tambah Transaksi</a>
            </div>
            <div class="card-body px-1 py-1">
                <table class="table table-hover" id="used-table">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Tanggal</th>
                            <th>Barang</th>
                            <th>Total</th>
                            <th>Uang</th>
                            <th>Kembalian</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="body-table">

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
    const data = <?= json_encode($row); ?>;
    $(document).ready(function() {
        let no = 1;
        data.forEach(ele => {
            $('#body-table').append(`
            <tr>
                <td class="text-center fw-bold">${no++}</td>
                <td>${ele.tanggal}</td>
                <td class=" text-wrap"><strong>${ele.barang}</strong></td>
                <td><span class="badge bg-label-primary me-1">${parseInt(ele.total_bayar).toLocaleString("id-ID", {
                    style: "currency",
                    currency: "IDR",
                })}</span></td>
                <td><span class="badge bg-label-info me-1">${parseInt(ele.uang).toLocaleString('id-ID',{
                    style: 'currency',
                    currency: 'IDR'
                })}</span></td>
                <td><span class="badge bg-label-success me-1">${parseInt(ele.kembalian).toLocaleString('id-ID',{
                    style: 'currency',
                    currency: 'IDR'
                })}</span></td>
                <td class="text-end">
                <form action="Transaksi/print/${ele.nomor_invoice}" method="get" target="_blank">
                    <button type="submit" class="btn btn-dark btn-sm flex-inline">Print</button>
                </form>
                </td>
            </tr>
            `);
        });
        $('#used-table').DataTable({
            language: {
                paginate: {
                    next: '<button type="button" class="btn btn-primary btn-sm">Next</button>', // or '→'
                    previous: '<button type="button" class="btn btn-primary btn-sm">Pevious</button>', // or '←'
                }
            },
        });
    });
</script>

<?= $this->endSection(); ?>