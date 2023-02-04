<?= $this->extend('Templates/Template'); ?>

<?= $this->Section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Detail Barang</h4>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img class="card-img card-img-left" src="<?= base_url('/assets/foto/' . $row->foto); ?>" alt="Card image" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row->nama; ?></h5>
                        <p class="card-text">
                            <?= $row->deskripsi; ?>
                        </p>
                        <p class="card-text">
                            <span class="badge bg-primary"><?= $row->harga; ?></span>
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">
                            <small class="text-muted">Added At <?= $row->updated_at; ?></small>
                            <br>
                            <small class="text-muted">Last updated <?= $row->updated_at; ?></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
<script>

</script>

<?= $this->endSection(); ?>