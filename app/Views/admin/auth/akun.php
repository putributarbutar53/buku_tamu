<!-- home.php -->
<?php $this->extend('admin/layout/main') ?>

<?php $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card mb-3 btn-reveal-trigger">
            <div class="card-header position-relative min-vh-25 mb-8">
                <div class="cover-image">
                    <div class="bg-holder bg-danger rounded-soft rounded-bottom-0">
                    </div>
                    <!--/.bg-holder-->
                </div>
                <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                    <div class="h-100 w-100 rounded-circle overflow-hidden position-relative"> <img src="<?php if (session()->get('admin_picture')) {
                                                                                                                echo base_url() . getenv('dir.upload.profile') . session()->get('admin_picture') ?><?php } else {
                                                                                                                                                                                                    echo base_url() ?>admin/assets/img/team/avatar.png<?php } ?>" width="200" alt="" data-dz-thumbnail id="profile-image-preview">
                        <form id="update_profile">
                            <input class="d-none" id="profile-image" name="picture" type="file">
                            <label class="mb-0 overlay-icon d-flex flex-center" for="profile-image"><span class="bg-holder overlay overlay-0"></span><span class="z-index-1 text-white text-center fs--1"><span class="fas fa-camera"></span><span class="d-block">Update</span></span></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <!-- <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(<?= base_url() ?>assets/img/illustrations/corner-4.png);">
    </div> -->

    <div class="card-body">
        <div class="row d-flex justify-content-center text-center">

            <a href="<?php echo (session()->get('admin_role') == 'superadmin') ? site_url('admin2053/profile/format') : site_url('admin2053/profile/format') ?>" class="btn btn-sm btn-falcon-danger rounded-capsule mr-1 mb-1" type="button">
                <?php echo (session()->get('admin_role') == 'superadmin') ? 'Unggah Format Formulir' : 'Unduh Format Formulir' ?>
            </a>

            <?php if (session()->get('admin_role') == 'superadmin') : ?>
                <a href="<?= site_url() ?>admin2053/ormas" class="btn btn-sm btn-falcon-warning rounded-capsule mr-1 mb-1" type="button">Cek Status Permohonan Pendaftaran Ormas</button> <?php endif; ?>&nbsp;&nbsp;
                    <a href="<?= site_url() ?>admin2053/skt" class="btn btn-sm btn-falcon-success rounded-capsule mr-1 mb-1" type="button">Cek Status Permohonan SKT Ormas</a>
        </div>

    </div>
</div>
<div class="row no-gutters">
    <div class="col-lg-8 pr-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Profile Settings</h5>
            </div>
            <div class="card-body bg-light">
                <form id="change_profile">
                    <div class="row">
                        <?php if (session()->get('admin_role') == 'user') : ?>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Nama Organisasi</label>
                                    <input class="form-control" id="name" name="n_organisasi" type="text" value="<?= session()->get('admin_organisasi') ?>" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="ns_organisasi">Nama Singkat Organisasi</label>
                                    <input class="form-control" id="ns_organisasi" name="ns_organisasi" type="text" value="<?= session()->get('admin_name') ?>" placeholder="Nama Singkat Organisasi">
                                </div>
                            </div>
                        <?php endif ?>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" id="username" name="username" type="text" value="<?= session()->get('admin_username') ?>" placeholder="Username">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email1">Email</label>
                                <input class="form-control" id="email1" name="email" type="text" value="<?= session()->get('admin_email') ?>" placeholder="example@domain.com">
                            </div>
                        </div>
                        <?php if (session()->get('admin_role') == 'user') : ?>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="addr_organisasi">Alamat Organisasi</label>
                                    <input class="form-control" id="addr_organisasi" name="addr_organisasi" type="text" value="<?= session()->get('admin_addr_organisasi') ?>" placeholder="Alamat Organisasi">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="jlh_anggota">Jumlah Anggota</label>
                                    <input class="form-control" id="jlh_anggota" name="jlh_anggota" type="text" value="<?= session()->get('admin_jlh_anggota') ?>" placeholder="Jumlah Anggota">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="bentuk_organisasi">Bentuk Organisasi</label>
                                    <input class="form-control" id="bentuk_organisasi" name="bentuk_organisasi" type="text" value="<?= session()->get('admin_bentuk_organisasi') ?>" placeholder="Bentuk Organisasi">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nama_ketua">Nama Ketua</label>
                                    <input class="form-control" id="nama_ketua" name="nama_ketua" type="text" value="<?= session()->get('admin_nama_ketua') ?>" placeholder="Nama Ketua">
                                </div>
                            </div>
                            <!-- <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nama_sekretaris">Nama Sekretaris</label>
                                    <input class="form-control" id="nama_sekretaris" name="nama_sekretaris" type="text" value="<?= session()->get('admin_nama_sekretaris') ?>" placeholder="Nama Sekretaris">
                                </div>
                            </div> -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="no_pic">Nomor PIC</label>
                                    <input class="form-control" id="no_pic" name="no_pic" type="text" value="<?= session()->get('admin_no_pic') ?>" placeholder="Nomor PIC">
                                </div>
                            </div>
                        <?php endif ?>
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="col-lg-4 pl-lg-2">
        <div class="sticky-top sticky-sidebar">
            <div class="card mb-3 overflow-hidden">
                <div class="card-header">
                    <h5 class="mb-0">Change Password</h5>
                </div>
                <div class="card-body bg-light">
                    <form id="change_password">
                        <div class="form-group">
                            <label for="old-password">Old Password</label>
                            <input class="form-control" id="old-password" name="oPassword" type="password">
                        </div>
                        <div class="form-group">
                            <label for="new-password">New Password</label>
                            <input class="form-control" id="new-password" name="nPassword" type="password">
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirm Password</label>
                            <input class="form-control" id="confirm-password" name="cPassword" type="password">
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endsection() ?>

<?php $this->section('script') ?>
<script>
    $(document).ready(function() {
        $('#profile-image').on('change', function(e) {
            e.preventDefault();
            var form = $('#update_profile');
            var formData = new FormData(form[0]);
            $.ajax({
                url: "<?= site_url('admin2053/profile/change_picture') ?>",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#profile-image-preview').attr('src', response.photo_url);
                    $('#photo_profile_in_top_menu').attr('src', response.photo_url);
                    showToast(response.status, response.message);
                },
                error: function(xhr, status, error) {
                    var response = xhr.responseJSON;
                    showToastError('Error', response);
                }
            });
        });
        $('#change_password').on('submit', function(e) {
            e.preventDefault();
            var form = $(this)[0];
            var formData = new FormData(form);
            $.ajax({
                url: "<?= site_url('admin2053/profile/change_password') ?>",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    showToast(response.status, response.message);
                },
                error: function(xhr, status, error) {
                    var response = xhr.responseJSON;
                    showToastError('Error', response);
                }
            });
        });
        $('#change_profile').on('submit', function(e) {
            e.preventDefault();
            var form = $(this)[0];
            var formData = new FormData(form);
            $.ajax({
                url: "<?= site_url('admin2053/profile/change_profile') ?>",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    showToast("success", response.message);
                },
                error: function(xhr, status, error) {
                    var response = xhr.responseJSON;
                    showToastError('Error', response);
                }
            });
        });
    });
</script>
<?php $this->endsection() ?>