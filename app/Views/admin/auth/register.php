<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>SIRAMA | Register</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicons/favicon.ico">
    <link rel="manifest" href="<?= base_url() ?>assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->

    <script src="<?= base_url() ?>assets/js/config.navbar-vertical.js"></script>
    <link href="<?= base_url() ?>assets/lib/toastr/toastr.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/theme.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="<?= base_url() ?>assets/lib/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <div class="row flex-center min-vh-100 py-6">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-12 col-xxl-6">
                    <div class="card">
                        <div class="card-body p-4 p-sm-5">
                            <div class="row text-left justify-content-between align-items-center mb-2">
                                <div class="col-auto">
                                    <h5>Register</h5>
                                </div>
                                <div class="col-auto">
                                    <p class="fs--1 text-600 mb-0">Sudah Terdaftar? <a href="<?php echo site_url('admin2053/login') ?>">Login Disini</a></p>
                                </div>
                            </div>
                            <form id="add_register">
                                <input type="hidden" name="action" value="<?= $action ?>" />
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="n_organisasi">Nama Organisasi</label>
                                            <input id="n_organisasi" class="form-control" type="text" name="n_organisasi" placeholder="Nama Organisasi" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="ns_organisasi">Nama Singkat Organisasi</label>
                                            <input id="ns_organisasi" class="form-control" type="text" name="ns_organisasi" placeholder="Nama Organisasi" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">Email Organisasi</label>
                                            <input id="email" class="form-control" type="email" name="email" placeholder="Email Organisasi" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="addr_organisasi">Alamat Organisasi</label>
                                            <input id="addr_organisasi" class="form-control" type="text" name="addr_organisasi" placeholder="Alamat Organisasi" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="jlh_anggota">Jumlah Anggota Organisasi</label>
                                            <input id="jlh_anggota" class="form-control" type="number" name="jlh_anggota" placeholder="Jumlah Anggota Organisasi" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bentuk_organisasi">Bentuk Organisasi</label>
                                            <select id="bentuk_organisasi" class="form-control" name="bentuk_organisasi">
                                                <option value="">Bentuk Organisasi</option>
                                                <option value="yayasan">Yayasan</option>
                                                <option value="ormas">Ormas</option>
                                                <option value="lsm">LSM</option>
                                                <option value="okp">OKP</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nama_ketua">Nama Ketua Organisasi</label>
                                            <input id="nama_ketua" class="form-control" type="text" name="nama_ketua" placeholder="Nama Ketua Organisasi" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="kecamatan">Kecamatan</label>
                                            <select id="kecamatan" class="form-control" name="kecamatan">
                                                <option value="">Pilih Kecamatan</option>
                                                <option value="Balige">Kecamatan Balige</option>
                                                <option value="Tampahan">Kecamatan Tampahan</option>
                                                <option value="Laguboti">Kecamatan Laguboti</option>
                                                <option value="Habinsaran">Kecamatan Habinsaran</option>
                                                <option value="Borbor">Kecamatan Borbor</option>
                                                <option value="Nassau">Kecamatan Nassau</option>
                                                <option value="Silaen">Kecamatan Silaen</option>
                                                <option value="Sigumpar">Kecamatan Sigumpar</option>
                                                <option value="Porsea">Kecamatan Porsea</option>
                                                <option value="Pintu Pohan Meranti">Kecamatan Pintu Pohan Meranti</option>
                                                <option value="Siantar Narumonda">Kecamatan Siantar Narumonda</option>
                                                <option value="Parmaksian">Kecamatan Parmaksian</option>
                                                <option value="Lumban Julu">Kecamatan Lumban Julu</option>
                                                <option value="Uluan">Kecamatan Uluan</option>
                                                <option value="Ajibata">Kecamatan Ajibata</option>
                                                <option value="Bonatua Lunasi">Kecamatan Bonatua Lunasi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="no_pic">Nomor WA PIC</label>
                                            <input id="no_pic" class="form-control" type="text" name="no_pic" placeholder="No Whatsapp PIC" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input id="username" class="form-control" type="text" name="username" placeholder="Username" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input id="password" class="form-control" type="password" name="password" placeholder="Password" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="confirm_password">Konfirmasi Password</label>
                                            <input id="confirm_password" class="form-control" type="password" name="confirm_password" placeholder="Konfirmasi Password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="basic-register-checkbox" />
                                    <label class="custom-control-label" for="basic-register-checkbox">
                                        I accept the <a href="#!">terms</a> and <a href="#!">privacy policy</a>
                                    </label>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary mt-3" type="submit" name="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/toastr/toastr.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/@fortawesome/all.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/stickyfilljs/stickyfill.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/sticky-kit/sticky-kit.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/is_js/is.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/lodash/lodash.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/perfect-scrollbar/perfect-scrollbar.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <!-- Pastikan Anda sudah menyertakan SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function showToast(type, message, title = null) {
            var defaultOptions = {
                closeButton: true,
                newestOnTop: false,
                positionClass: 'toast-bottom-right'
            };
            var vTitle = (title != null) ? title : type;
            toastr.options = defaultOptions;

            switch (type) {
                case 'success':
                    toastr.success(message, vTitle);
                    break;

                case 'warning':
                    toastr.warning(message, vTitle);
                    break;

                case 'error':
                    toastr.error(message, vTitle);
                    break;

                default:
                    toastr.info(message, vTitle);
                    break;
            }
        }

        function showToastError(error, eJson = null) {
            var defaultOptions = {
                closeButton: true,
                newestOnTop: false,
                positionClass: 'toast-bottom-right'
            };
            toastr.options = defaultOptions;

            if (eJson && eJson.errors) {
                for (var key in eJson.errors) {
                    toastr.error(eJson.errors[key], key);
                }
            } else {
                toastr.error(error, "Error");
            }
        }

        $(document).ready(function() {
            $('#add_register').submit(function(e) {
                e.preventDefault();
                var form = $(this)[0];
                var formData = new FormData(form);

                // Periksa apakah checkbox dicentang
                if (!$('#basic-register-checkbox').is(':checked')) {
                    showToast('warning', 'You must accept the terms and privacy policy to register.');
                    return;
                }

                $.ajax({
                    type: "post",
                    url: "<?= site_url('home/submitdata') ?>",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $('#add_register')[0].reset();
                        Swal.fire({
                            icon: 'success',
                            title: 'Registration Success',
                            text: 'You have successfully registered.',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed || result.isDismissed) {
                                window.location.href = "<?= site_url('admin2053/login') ?>";
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        var response = xhr.responseJSON;
                        showToastError('Error', response);
                    }
                });
            });
        });
    </script>


</body>

</html>