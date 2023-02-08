<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $transaksi->nomor_invoice; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url(''); ?>/assets/assets/img/favicon/logo.ico" />
</head>

<body>
    <div class="container text-center">
        <h1 class="py-3">TOKO MAJU BERSAMA SELAMANYA</h1>
        <p class="fs-2">INVOICE</p>
        <p class="text-start">Invoice <?= $transaksi->nomor_invoice; ?></p>
        <p class="text-start">Banjarmasin, <?= date_format(date_create($transaksi->tanggal), 'd/m/Y H:i:s') ?></p>
        <table class="table table-bordered border-dark border-1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Deskripsi</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="body-table">

            </tbody>
            <tfoot id="foot-table">

            </tfoot>
        </table>
    </div>
    <!-- JQUERY -->
    <script type="text/javascript" src="<?= base_url(''); ?>/assets/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script>
        const transaksi = <?= json_encode($transaksi); ?>;
        const barang = <?= json_encode($barang); ?>;
        let no = 1
        barang.forEach(element => {
            $('#body-table').append(`
                <tr>
                    <td>${no++}</td>
                    <td class="text-start">${element.nama}</td>
                    <td>${element.jumlah}</td>
                    <td >${parseInt(element.total_perbarang).toLocaleString('id-ID',{
                        style: 'currency',
                        currency: 'IDR'
                    })}</td>
                </tr>
            `);
        });

        $('#foot-table').html(`
            <tr>
                <td colspan="3" class="text-end fw-bold">Total</td>
                <td >${parseInt(transaksi.total_bayar).toLocaleString('id-ID',{
                        style: 'currency',
                        currency: 'IDR'
                    })}</td>
            </tr>
            <tr>
                <td colspan="3" class="text-end fw-bold">Uang</td>
                <td >${parseInt(transaksi.uang).toLocaleString('id-ID',{
                        style: 'currency',
                        currency: 'IDR'
                    })}</td>
            </tr>
            <tr>
                <td colspan="3" class="text-end fw-bold">Kembalian</td>
                <td >${parseInt(transaksi.kembalian).toLocaleString('id-ID',{
                        style: 'currency',
                        currency: 'IDR'
                    })}</td>
            </tr>

        `);

        window.print()
    </script>
</body>

</html>