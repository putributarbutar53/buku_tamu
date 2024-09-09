<!-- home.php -->
<?php $this->extend('admin/layout/main') ?>

<?php $this->section('content') ?>
<!-- Page content goes here -->

<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(<?= base_url() ?>assets/img/illustrations/corner-4.png);">
    </div>
    <!--/.bg-holder-->
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-0">Dashboard</h3>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="content">
        <div class="row no-gutters">
            <!-- Total Data -->
            <div class="col-md-3 col-xxl-3 mb-3 pl-md-2">
                <div class="card h-md-100">
                    <div class="card-header d-flex flex-between-center pb-0">
                    </div>
                    <div class="card-body pt-2">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col">
                                <div class="media align-items-center">
                                    <img class="mr-3" src="<?= base_url() ?>assets/img/icons/visitors.png" alt="" height="60" />
                                    <div class="media-body">
                                        <h6 class="mb-2">Total Pengunjung</h6>
                                        <div class="fs--2 font-weight-semi-bold">
                                            <div class="text-warning">Seluruh Data Pengunjung</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto text-center pl-2">
                                <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                    <?= $totalVisitors ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- In Process Data -->
            <div class="col-md-3 col-xxl-3 mb-3 pl-md-2">
                <div class="card h-md-100">
                    <div class="card-header d-flex flex-between-center pb-0">
                    </div>
                    <div class="card-body pt-2">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col">
                                <div class="media align-items-center">
                                    <img class="mr-3" src="<?= base_url() ?>assets/img/icons/visitor.png" alt="" height="60" />
                                    <div class="media-body">
                                        <h6 class="mb-2">Hari Ini</h6>
                                        <div class="fs--2 font-weight-semi-bold">
                                            <div class="text-warning">Pengunjung Hari ini</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto text-center pl-2">
                                <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                    <?= $dailyVisitors ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accepted Data -->
            <div class="col-md-3 col-xxl-3 mb-3 pl-md-2">
                <div class="card h-md-100">
                    <div class="card-header d-flex flex-between-center pb-0">
                    </div>
                    <div class="card-body pt-2">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col">
                                <div class="media align-items-center">
                                    <img class="mr-3" src="<?= base_url() ?>assets/img/icons/meeting.png" alt="" height="60" />
                                    <div class="media-body">
                                        <h6 class="mb-2">Bulan ini</h6>
                                        <div class="fs--2 font-weight-semi-bold">
                                            <div class="text-warning">Pengunjung Bulan ini</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto text-center pl-2">
                                <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                    <?= $monthlyVisitors ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rejected Data -->
            <div class="col-md-3 col-xxl-3 mb-3 pl-md-2">
                <div class="card h-md-100">
                    <div class="card-header d-flex flex-between-center pb-0">
                    </div>
                    <div class="card-body pt-2">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col">
                                <div class="media align-items-center">
                                    <img class="mr-3" src="<?= base_url() ?>assets/img/icons/calendar.png" alt="" height="60" />
                                    <div class="media-body">
                                        <h6 class="mb-2">Tahun ini</h6>
                                        <div class="fs--2 font-weight-semi-bold">
                                            <div class="text-warning">Pengunjung Tahun ini</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto text-center pl-2">
                                <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                    <?= $yearlyVisitors ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="card mb-3">
    <div class="card-header">
        <div class="row align-items-center justify-content-between">
            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                <h6 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Pengunjung ke bidang</h6>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row no-gutters">
            <!-- Total Data -->
            <div class="col-md-6 col-xxl-3 mb-3 pl-md-2">
                <div class="card h-md-100">
                    <div class="card-header d-flex flex-between-center pb-0">
                    </div>
                    <div class="card-body pt-2">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col">
                                <div class="media align-items-center">
                                    <img class="mr-3" src="<?= base_url() ?>assets/img/icons/boss.png" alt="" height="60" />
                                    <div class="media-body">
                                        <h6 class="mb-2">Kepala Dinas</h6>
                                        <div class="fs--2 font-weight-semi-bold">
                                            <div class="text-warning">Pengunjung Kepala Dinas</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto text-center pl-2">
                                <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                    <?= $tujuanCounts['kepalaDinas'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- In Process Data -->
            <div class="col-md-6 col-xxl-3 mb-3 pl-md-2">
                <div class="card h-md-100">
                    <div class="card-header d-flex flex-between-center pb-0">
                    </div>
                    <div class="card-body pt-2">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col">
                                <div class="media align-items-center">
                                    <img class="mr-3" src="<?= base_url() ?>assets/img/icons/leader.png" alt="" height="60" />
                                    <div class="media-body">
                                        <h6 class="mb-2">Sekretaris</h6>
                                        <div class="fs--2 font-weight-semi-bold">
                                            <div class="text-warning">Pengunjung Sekretaris</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto text-center pl-2">
                                <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                    <?= $tujuanCounts['sekretaris'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row no-gutters">
            <!-- Total Data -->
            <div class="col-md-3 col-xxl-3 mb-3 pl-md-2">
                <div class="card h-md-100">
                    <div class="card-header d-flex flex-between-center pb-0">
                    </div>
                    <div class="card-body pt-2">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col">
                                <div class="media align-items-center">
                                    <img class="mr-3" src="<?= base_url() ?>assets/img/icons/gear.png" alt="" height="60" />
                                    <div class="media-body">
                                        <h6 class="mb-2">PIKP</h6>
                                        <div class="fs--2 font-weight-semi-bold">
                                            <div class="text-warning">Pengunjung bidang PIKP</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto text-center pl-2">
                                <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                    <?= $tujuanCounts['pengelolaanInfokomPublik'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- In Process Data -->
            <div class="col-md-3 col-xxl-3 mb-3 pl-md-2">
                <div class="card h-md-100">
                    <div class="card-header d-flex flex-between-center pb-0">
                    </div>
                    <div class="card-body pt-2">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col">
                                <div class="media align-items-center">
                                    <img class="mr-3" src="<?= base_url() ?>assets/img/icons/data-gathering.png" alt="" height="60" />
                                    <div class="media-body">
                                        <h6 class="mb-2">Statistik dan Persandian</h6>
                                        <div class="fs--2 font-weight-semi-bold">
                                            <div class="text-warning">Pengunjung bidang SP</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto text-center pl-2">
                                <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                    <?= $tujuanCounts['statistikDanPersandian'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accepted Data -->
            <div class="col-md-3 col-xxl-3 mb-3 pl-md-2">
                <div class="card h-md-100">
                    <div class="card-header d-flex flex-between-center pb-0">
                    </div>
                    <div class="card-body pt-2">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col">
                                <div class="media align-items-center">
                                    <img class="mr-3" src="<?= base_url() ?>assets/img/icons/message.png" alt="" height="60" />
                                    <div class="media-body">
                                        <h6 class="mb-2">Tata Usaha</h6>
                                        <div class="fs--2 font-weight-semi-bold">
                                            <div class="text-warning">Pengunjung Tata Usaha</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto text-center pl-2">
                                <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                    <?= $tujuanCounts['tataUsaha'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rejected Data -->
            <div class="col-md-3 col-xxl-3 mb-3 pl-md-2">
                <div class="card h-md-100">
                    <div class="card-header d-flex flex-between-center pb-0">
                    </div>
                    <div class="card-body pt-2">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col">
                                <div class="media align-items-center">
                                    <img class="mr-3" src="<?= base_url() ?>assets/img/icons/app-development.png" alt="" height="60" />
                                    <div class="media-body">
                                        <h6 class="mb-2">TKPBE</h6>
                                        <div class="fs--2 font-weight-semi-bold">
                                            <div class="text-warning">Pengunjung TKPBE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto text-center pl-2">
                                <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                    <?= $tujuanCounts['tataKelolaPemerintahan'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endsection() ?>