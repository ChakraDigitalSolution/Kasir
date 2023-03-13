<?= $this->extend('Templates/Template'); ?>

<?= $this->Section('content'); ?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- ORDER STATISTIK -->
            <div class="col-12 col-md-8 order-1 order-md-0 mb-4">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-week" aria-controls="navs-tabs-line-card-week" aria-selected="true">
                                    Week
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-month" aria-controls="navs-tabs-line-card-month" aria-selected="true">Month</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body px-0">
                        <div class="tab-content p-0">
                            <div class="tab-pane fade show active" id="navs-tabs-line-card-week" role="tabpanel">
                                <div class="d-flex p-4 pt-3">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="<?= base_url(''); ?>/assets/assets/img/icons/unicons/wallet.png" alt="User" />
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Total Balance Weekly</small>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-1">$459.10</h6>
                                            <small class="text-success fw-semibold">
                                                <i class="bx bx-chevron-up"></i>
                                                42.9%
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div id="weekChart"></div>
                            </div>
                            <div class="tab-pane fade show " id="navs-tabs-line-card-month" role="tabpanel">
                                <div class="d-flex p-4 pt-3">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="<?= base_url(''); ?>/assets/assets/img/icons/unicons/wallet.png" alt="User" />
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Pendapatan Bulan Ini</small>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-1"><?= "Rp " . number_format($totalPendapatanBulanan, 2, ',', '.'); ?></h6>
                                            <small class="<?= substr($selisihBulanSebelumnya, 0, 1)[0] != '-' ? 'text-success' : 'text-danger' ?> fw-semibold">
                                                <i class="bx <?= substr($selisihBulanSebelumnya, 0, 1)[0] != '-' ? 'bx-chevron-up' : 'bx-chevron-down' ?> "></i>
                                                <?= $selisihBulanSebelumnya; ?>%
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div id="monthChart"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- PENDAPATAN HARIAN -->
            <div class="col-12 col-md-4 order-0 order-md-1">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="<?= base_url(''); ?>/assets/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                            <a class="dropdown-item" href="<?= base_url(''); ?>/Transaksi">View More</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Pendapatan Hari Ini</span>
                                <h3 class="card-title mb-2"><?= "Rp " . number_format($totalPendapatanHarian, 2, ',', '.'); ?></h3>
                                <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="<?= base_url(''); ?>/assets/assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                            <a class="dropdown-item" href="<?= base_url(''); ?>/Transaksi">View More</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Transaksi Hari Ini</span>
                                <h3 class="card-title text-nowrap mb-1"><?= $transaksiHarian; ?></h3>
                                <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-8 mb-4">
                <div class="card ">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0 mb-3">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Transaksi Hari Ini</h5>
                            <small class="text-muted"><?= "Rp " . number_format($totalPendapatanHarian, 2, ',', '.'); ?> Total Sales</small>
                        </div>
                    </div>
                    <div class="card-body overflow-hidden" id="ver-scroll1" style="max-height: 400px;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <h2 class="mb-2"><?= count($transaksiHariIni); ?></h2>
                                <span>Total Orders</span>
                            </div>
                            <div id="chartBarangHariIni"></div>
                        </div>

                        <table class="table table-hover" id="used-table">
                            <thead>
                                <th class="text-center">No</th>
                                <th>Tanggal</th>
                                <th>Barang</th>
                                <th>Total</th>
                                <th>Uang</th>
                                <th>Kembalian</th>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($transaksiHariIni as $tsk) {
                                ?>
                                    <tr>
                                        <td class="text-center fw-bold"><?= $no++; ?></td>
                                        <td><?= $tsk['tanggal']; ?></td>
                                        <td class=" text-wrap"><strong><?= $tsk['barang']; ?></strong></td>
                                        <td class=" text-wrap"><?= "Rp " . number_format($tsk['total_bayar'], 2, ',', '.'); ?></td>
                                        <td class=" text-wrap"><?= "Rp " . number_format($tsk['uang'], 2, ',', '.'); ?></td>
                                        <td class=" text-wrap"><?= "Rp " . number_format($tsk['kembalian'], 2, ',', '.'); ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0 mb-3">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Stok Gudang</h5>
                        </div>
                    </div>
                    <div class="card-body overflow-hidden" id="ver-scroll2" style="max-height: 400px;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th class="text-center">Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($barangDanStok as $b) {
                                ?>
                                    <tr>
                                        <td class=" text-wrap"><strong><?= $b['nama']; ?></strong></td>
                                        <td class="text-center"><span class="badge <?= $b['stock'] < 50 ? 'bg-label-danger' : 'bg-label-success'; ?>  me-1"><?= $b['stock']; ?></span></td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>
<script src="<?= base_url(''); ?>/assets/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- SCRIPT CHART -->
<script>
    let cardColor, headingColor, axisColor, shadeColor, borderColor;

    cardColor = "#fff";
    headingColor = "#566a7f";
    axisColor = "a1acb8";
    borderColor = "eceef1";

    // WEEKCHART
    // --------------------------------------------------------------------
    const weekChartEl = document.querySelector("#weekChart"),
        weekChartConfig = {
            series: [{
                name: "Pendapatan",
                data: [
                    0,
                    <?= $dataWeekly['Senin'] != 0 ? $dataWeekly['Senin'] : 0; ?>,
                    <?= $dataWeekly['Selasa'] != 0 ? $dataWeekly['Selasa'] : 0; ?>,
                    <?= $dataWeekly['Rabu'] != 0 ? $dataWeekly['Rabu'] : 0; ?>,
                    <?= $dataWeekly['Kamis'] != 0 ? $dataWeekly['Kamis'] : 0; ?>,
                    <?= $dataWeekly['Jumat'] != 0 ? $dataWeekly['Jumat'] : 0; ?>,
                    <?= $dataWeekly['Sabtu'] != 0 ? $dataWeekly['Sabtu'] : 0; ?>,
                    <?= $dataWeekly['Minggu'] != 0 ? $dataWeekly['Minggu'] : 0; ?>,
                ],
            }, ],
            chart: {
                height: 215,
                parentHeightOffset: 0,
                parentWidthOffset: 0,
                toolbar: {
                    show: false,
                },
                type: "area",
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 2,
                curve: "smooth",
            },
            legend: {
                show: false,
            },
            markers: {
                size: 6,
                colors: "transparent",
                strokeColors: "transparent",
                strokeWidth: 4,
                discrete: [{
                    fillColor: config.colors.white,
                    seriesIndex: 0,
                    dataPointIndex: <?= date('N'); ?>,
                    strokeColor: config.colors.primary,
                    strokeWidth: 2,
                    size: 6,
                    radius: 8,
                }, ],
                hover: {
                    size: 7,
                },
            },
            colors: [config.colors.primary],
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 0.6,
                    opacityFrom: 0.5,
                    opacityTo: 0.25,
                    stops: [0, 95, 100],
                },
            },
            grid: {
                borderColor: borderColor,
                strokeDashArray: 3,
                padding: {
                    top: -20,
                    bottom: -8,
                    left: -10,
                    right: 8,
                },
            },
            xaxis: {
                categories: [
                    "",
                    "Senin",
                    "Selasa",
                    "Rabu",
                    "Kamis",
                    "Jumat",
                    "Sabtu",
                    "Minggu",
                ],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
                labels: {
                    show: true,
                    style: {
                        fontSize: "13px",
                        colors: axisColor,
                    },
                },

            },

        };
    if (typeof weekChartEl !== undefined && weekChartEl !== null) {
        const weekChart = new ApexCharts(weekChartEl, weekChartConfig);
        weekChart.render();
    }
    // MONTHCHART
    // --------------------------------------------------------------------
    const monthChartEl = document.querySelector("#monthChart"),
        monthChartConfig = {
            series: [{
                name: "Pendapatan",
                data: [0,
                    <?= $dataMonthly['Januari'] != 0 ? $dataMonthly['Januari'] : 0; ?>,
                    <?= $dataMonthly['Februari'] != 0 ? $dataMonthly['Februari'] : 0; ?>,
                    <?= $dataMonthly['Maret'] != 0 ? $dataMonthly['Maret'] : 0; ?>,
                    <?= $dataMonthly['April'] != 0 ? $dataMonthly['April'] : 0; ?>,
                    <?= $dataMonthly['Mei'] != 0 ? $dataMonthly['Mei'] : 0; ?>,
                    <?= $dataMonthly['Juni'] != 0 ? $dataMonthly['Juni'] : 0; ?>,
                    <?= $dataMonthly['Juli'] != 0 ? $dataMonthly['Juli'] : 0; ?>,
                    <?= $dataMonthly['Agustus'] != 0 ? $dataMonthly['Agustus'] : 0; ?>,
                    <?= $dataMonthly['September'] != 0 ? $dataMonthly['September'] : 0; ?>,
                    <?= $dataMonthly['Oktober'] != 0 ? $dataMonthly['Oktober'] : 0; ?>,
                    <?= $dataMonthly['November'] != 0 ? $dataMonthly['November'] : 0; ?>,
                    <?= $dataMonthly['Desember'] != 0 ? $dataMonthly['Desember'] : 0; ?>,
                ],
            }, ],
            chart: {
                height: 215,
                parentHeightOffset: 0,
                parentWidthOffset: 0,
                toolbar: {
                    show: false,
                },
                type: "area",
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 2,
                curve: "smooth",
            },
            legend: {
                show: false,
            },
            markers: {
                size: 6,
                colors: "transparent",
                strokeColors: "transparent",
                strokeWidth: 4,
                discrete: [{
                    fillColor: config.colors.white,
                    seriesIndex: 0,
                    dataPointIndex: <?= date('m'); ?>,
                    strokeColor: config.colors.primary,
                    strokeWidth: 2,
                    size: 6,
                    radius: 8,
                }, ],
                hover: {
                    size: 7,
                },
            },
            colors: [config.colors.primary],
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 0.6,
                    opacityFrom: 0.5,
                    opacityTo: 0.25,
                    stops: [0, 95, 100],
                },
            },
            grid: {
                borderColor: borderColor,
                strokeDashArray: 3,
                padding: {
                    top: -20,
                    bottom: -8,
                    left: -10,
                    right: 8,
                },
            },
            xaxis: {
                categories: [
                    "",
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "Mei",
                    "Jun",
                    "Jul",
                    "Agu",
                    "Sep",
                    "Okt",
                    "Nov",
                    "Des",
                ],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
                labels: {
                    show: true,
                    style: {
                        fontSize: "13px",
                        colors: axisColor,
                    },
                },
            },

        };
    if (typeof monthChartEl !== undefined && monthChartEl !== null) {
        const incomeChart = new ApexCharts(monthChartEl, monthChartConfig);
        incomeChart.render();
    }

    const chartOrderStatistics = document.querySelector("#chartBarangHariIni"),
        orderChartConfig = {
            chart: {
                height: 150,
                width: 130,
                type: "donut",
            },
            labels: [
                <?php
                foreach ($dataBarangDaily as $brg) {
                ?> "<?= $brg['nama']; ?>",
                <?php
                }
                ?>
            ],
            series: [
                <?php
                $total = 0;
                foreach ($dataBarangDaily as $brg) {
                    $total = $total + (int)$brg['jumlah'];
                    echo $brg['jumlah'] . ',';
                }
                ?>
            ],
            colors: [
                config.colors.primary,
                config.colors.secondary,
                config.colors.info,
                config.colors.success,
            ],
            stroke: {
                width: 5,
                colors: cardColor,
            },
            dataLabels: {
                enabled: false,
                formatter: function(val, opt) {
                    return parseInt(val);
                },
            },
            legend: {
                show: false,
            },
            grid: {
                padding: {
                    top: 0,
                    bottom: 0,
                    right: 15,
                },
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: "60%",
                        labels: {
                            show: true,
                            value: {
                                fontSize: "1.5rem",
                                fontFamily: "Public Sans",
                                color: headingColor,
                                offsetY: -15,
                                formatter: function(val) {
                                    return parseInt(val);
                                },
                            },
                            name: {
                                offsetY: 20,
                                fontFamily: "Public Sans",
                            },
                            total: {
                                show: true,
                                fontSize: "0.8125rem",
                                color: axisColor,
                                label: "Pieces",
                                formatter: function(w) {
                                    return <?= $total; ?>;
                                },
                            },
                        },
                    },
                },
            },
        };
    if (
        typeof chartOrderStatistics !== undefined &&
        chartOrderStatistics !== null
    ) {
        const statisticsChart = new ApexCharts(
            chartOrderStatistics,
            orderChartConfig
        );
        statisticsChart.render();
    }
</script>

<script src="<?= base_url(''); ?>/assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= base_url(''); ?>/assets/assets/js/extended-ui-perfect-scrollbar.js"></script>
<script>
    const verScroll1 = document.getElementById('ver-scroll1')
    const verScroll2 = document.getElementById('ver-scroll2')
    new PerfectScrollbar(verScroll1, {
        wheelPropagation: false
    });
    new PerfectScrollbar(verScroll2, {
        wheelPropagation: false
    });
</script>

<?= $this->endSection(); ?>