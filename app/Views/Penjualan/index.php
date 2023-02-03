<?= $this->extend('Templates/Template'); ?>

<?= $this->Section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Penjualan</h4>
        <div class="row">
            <div class="col-12 col-md-9">
                <!-- CARD DAFTAR BARANG -->
                <div class="card overflow-hidden mb-3" style="max-height: 76vh;">
                    <h5 class="card-header">Daftar Barang</h5>
                    <div class="card-body " id="vertical-example">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31" />
                                </div>
                            </div>
                            <?php foreach ($row as $r) {
                            ?>
                                <div class="col-12 col-sm-6 col-md-3 mb-3">
                                    <div class="card h-100">
                                        <img class="card-img-top" src="<?= base_url('/assets/foto/' . $r['foto']); ?>" alt="Card image cap" style="height: 10em;" />
                                        <div class="card-body px-0">
                                            <div class="px-2">
                                                <h5 class="card-title" id="<?= 'namaBarang' . $r['id']; ?>"><?= $r['nama']; ?></h5>
                                                <span class="badge bg-label-primary" id="<?= 'hargaBarang' . $r['id']; ?>"><?= $r['harga']; ?></span>
                                            </div>
                                        </div>
                                        <div class="card-footer px-0 py-2">
                                            <div class="input-group justify-content-center border border-0">
                                                <button type="button" data-tipebtn="minus" data-idbarang="<?= $r['id']; ?>" class="btn btn-primary btn-sm btn-counter">-</button>
                                                <span id="<?= $r['id']; ?>" data-counter="0" class="input-group-text text-center">0</span>
                                                <button type="button" data-tipebtn="plus" data-idbarang="<?= $r['id']; ?>" class="btn btn-primary btn-sm btn-counter">+</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
                <!-- END CARD DAFTAR BARANG -->
            </div>
            <div class="col-12 col-md-3">
                <!-- CARD TRANSAKSI -->
                <div class="card">
                    <h5 class="card-header">Transaksi</h5>
                    <div class="card-body">
                        <div class="">
                            <ul class="list-group" id="listBarang">
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12">
                                <span class="fw-semibold d-block ">Total</span>
                                <h2 id="total">Rp 0,00</h2>
                            </div>
                            <div class="col-12">
                                <span class="fw-semibold d-block ">Uang</span>
                                <input id="uang" class="form-control form-control-lg mb-3" type="text" />
                            </div>
                            <div class="col-12">
                                <span class="fw-semibold d-block ">Kembalian</span>
                                <h2 id="kembalian">Rp 0,00</h2>
                            </div>
                            <div class="col-12 d-flex ">
                                <button type="button" class="btn btn-primary flex-fill">Bayar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CARD TRANSAKSI -->
            </div>
        </div>
    </div>

    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->

<!-- Page JS -->
<script src="<?= base_url(''); ?>/assets/assets/js/extended-ui-perfect-scrollbar.js"></script>
<script src="<?= base_url(''); ?>/assets/js/penjualan.js"></script>
<script>

</script>
<?= $this->endSection(); ?>