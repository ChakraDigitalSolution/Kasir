<?= $this->extend('Templates/Template'); ?>

<?= $this->Section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Tambah Barang</h4>
        <div class="card px-3 py-4 table-responsive">
            <form action="<?= base_url('/Gudang/simpan'); ?>" id="formTambah" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="nama" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="stock" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="harga" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi Barang</label>
                    <div class="input-group">
                        <textarea class="form-control" name="deskripsi" required></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto Barang</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="foto" id="foto" accept="image/*" required />
                    </div>
                    <div class="row mt-2" id="preview">

                    </div>
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary flex-fill">Simpan</button>
                </div>
            </form>
        </div>
    </div>


    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
<!-- JQUERY -->
<script>
    // PreviewFoto
    $('#foto').change(function(e) {
        const file = this.files[0]
        const reader = new FileReader()

        reader.onload = function(e) {
            $('#preview').html(`
            <div class="col-12">
                <img src="${e.target.result}" alt="${file.name}" width="100%">
            </div>            
            `);
        }

        reader.readAsDataURL(file)
    });

    // Ganti Value Menjadi Rupiah dan Limitasi Input Harus Nomor
    $('input[name=harga]')
        .change(function(e) {
            e.preventDefault();
            const valAwal = this.value
            const valAkhir = parseInt(valAwal).toLocaleString('id-ID', {
                style: 'currency',
                currency: 'IDR'
            })
            this.value = valAkhir
            console.log(valAkhir)
        })
        .mask('000000000000000000000000000000000000000')

    // Masking Input Stock
    $('input[name=stock]').mask('000000000000000000000000000000000000000')
</script>

<?= $this->endSection(); ?>