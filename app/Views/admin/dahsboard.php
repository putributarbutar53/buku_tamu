<!-- home.php -->
<?php $this->extend('admin/layout/main') ?>

<?php $this->section('content') ?>


<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(<?= base_url() ?>assets/img/illustrations/corner-4.png);">
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="mb-0">BUKU TAMU</h3>
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
                    <h6 class="mb-0">Seluruh Data</h6>
                </div>
                <div class="card-body pt-2">
                    <div class="row no-gutters h-100 align-items-center">
                        <div class="col">
                            <div class="media align-items-center">
                                <img class="mr-3" src="<?= base_url() ?>assets/img/icons/select.png" alt="" height="60" />
                                <div class="media-body">
                                    <h6 class="mb-2">Status Pengajuan Permohonan SKT</h6>
                                    <div class="fs--2 font-weight-semi-bold">
                                        <div class="text-warning">Seluruh Permohonan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-center pl-2">
                            <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                <?= $totalData ?>
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
                    <h6 class="mb-0">Diproses</h6>
                </div>
                <div class="card-body pt-2">
                    <div class="row no-gutters h-100 align-items-center">
                        <div class="col">
                            <div class="media align-items-center">
                                <img class="mr-3" src="<?= base_url() ?>assets/img/icons/loading.png" alt="" height="60" />
                                <div class="media-body">
                                    <h6 class="mb-2">Status Pengajuan Permohonan SKT</h6>
                                    <div class="fs--2 font-weight-semi-bold">
                                        <div class="text-warning">Dalam Proses</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-center pl-2">
                            <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                <?= $inProcess ?>
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
                    <h6 class="mb-0">Diterima</h6>
                </div>
                <div class="card-body pt-2">
                    <div class="row no-gutters h-100 align-items-center">
                        <div class="col">
                            <div class="media align-items-center">
                                <img class="mr-3" src="<?= base_url() ?>assets/img/icons/work-in-progress.png" alt="" height="60" />
                                <div class="media-body">
                                    <h6 class="mb-2">Status Pengajuan Permohonan SKT</h6>
                                    <div class="fs--2 font-weight-semi-bold">
                                        <div class="text-warning">Disetujui</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-center pl-2">
                            <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                <?= $accepted ?>
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
                    <h6 class="mb-0">Ditolak</h6>
                </div>
                <div class="card-body pt-2">
                    <div class="row no-gutters h-100 align-items-center">
                        <div class="col">
                            <div class="media align-items-center">
                                <img class="mr-3" src="<?= base_url() ?>assets/img/icons/reject.png" alt="" height="60" />
                                <div class="media-body">
                                    <h6 class="mb-2">Status Pengajuan Permohonan SKT</h6>
                                    <div class="fs--2 font-weight-semi-bold">
                                        <div class="text-warning">Ditolak</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-center pl-2">
                            <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">
                                <?= $rejected ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->endsection() ?>