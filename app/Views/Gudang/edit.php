<?= $this->extend('Templates/Template'); ?>

<?= $this->Section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Tambah Barang</h4>
        <div class="card px-3 py-4 table-responsive">
            <form action="<?= base_url('/Gudang/update'); ?>" id="formTambah" method="post" enctype="multipart/form-data">
                <input name="id" type="text" value="<?= $row->id; ?>" class="d-none">
                <input name="oldFoto" type="text" value="<?= $row->foto; ?>" class="d-none">
                <input name="gantiFoto" type="text" value="" class="d-none">
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <div class="input-group">
                        <input value="<?= $row->nama; ?>" type="text" class="form-control" name="nama" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <div class="input-group">
                        <input value="<?= $row->stock; ?>" type="text" class="form-control" name="stock" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <div class="input-group">
                        <input value="<?= substr($row->harga, 0, -3); ?>" type="text" class="form-control" name="harga" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi Barang</label>
                    <div class="input-group">
                        <textarea class="form-control" name="deskripsi" required><?= $row->deskripsi; ?></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto Barang</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="foto" id="foto" accept="image/*" />
                    </div>
                    <div class="row mt-2" id="preview">
                        <div class="col-12">
                            <img src="<?= base_url('/assets/foto/' . $row->foto); ?>" alt="<?= $row->foto; ?>" width="35%">
                        </div>
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
        let trigg = $('input[name=gantiFoto]').val('ganti');
        reader.onload = function(e) {
            $('#preview').html(`
            <div class="col-12">
                <img src="${e.target.result}" alt="${file.name}" width="35%">
            </div>            
            `);
        }

        reader.readAsDataURL(file)
    });

    // Ganti Value Menjadi Rupiah dan Limitasi Input Harus Nomor
    $(document).ready(function() {
        change()
    });

    function change() {
        let input = $('input[name=harga]')
        console.log(input.val())
        let val = parseInt(input.val().replaceAll('.', ''))
        console.log(val)
        let newVal = val.toLocaleString('id-ID', {
            style: 'currency',
            currency: 'IDR'
        })
        input.val(newVal)
    }
    $('input[name=harga]')
        .change(function(e) {
            e.preventDefault();
            const valAwal = this.value
            let val = 0
            if (valAwal.includes('Rp')) {
                val = parseInt(valAwal.substr(3).replaceAll('.', ''))
            } else {
                val = parseInt(valAwal)
            }
            this.value = val.toLocaleString('id-ID', {
                style: 'currency',
                currency: 'IDR'
            })
        })
        .mask('000000000000000000000000000000000000000')

    // Masking Input Stock
    $('input[name=stock]').mask('000000000000000000000000000000000000000')
</script>

<?= $this->endSection(); ?>