<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>SIRAMA</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicons/favicon.ico">
    <link rel="manifest" href="<?= base_url() ?>assets/img/favicons/manifest.json">
    <meta name="theme-color" content="#ffffff">
    <!-- ===============================================-->
    <!--    Stylesheets-->

    <style>
        #chat-container {
            padding: 10px;
            width: 100%;
            height: calc(100vh - 300px);
            /* Tinggi total viewport dikurangi tinggi header dan form */
            overflow-y: auto;
            /* Tambahkan scroll jika konten melebihi tinggi kontainer */
        }

        .message {
            padding: 10px;
            margin: 5px;
            border-radius: 13px;
            max-width: 70%;
            clear: both;
            word-wrap: break-word;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .sender {
            background-color: #007bff;
            color: #fff;
            align-self: flex-end;
            float: right;
            text-align: right;
        }

        .receive {
            background-color: #f1f1f1;
            align-self: flex-start;
            float: left;
        }

        .message img {
            max-width: 100px;
            max-height: 100px;
            border-radius: 5px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .custom-file {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .custom-file-label {
            margin-left: 10px;
        }

        .message a img {
            max-width: 50px;
            max-height: 50px;
            border-radius: 5px;
            margin: 5px auto;
            /* Centers the image horizontally */
            display: block;
        }

        #image-preview img {
            max-width: 100px;
            max-height: 100px;
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 5px;
        }

        .message .message-content {
            margin-bottom: 5px;
        }

        .message .message-info {
            font-size: 12px;
            color: #999;
            text-align: right;
            align-self: flex-end;
        }

        .receive .message-info {
            text-align: left;
            align-self: flex-start;
        }

        /* Style for notification */
        .notification-count {
            position: absolute;
            top: 0;
            right: 0;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
            display: none;
            /* Initially hidden */
        }

        .notification-count {
            position: absolute;
            top: 10px;
            right: 10px;
            background: red;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
        }

        .notification-container {
            max-height: 300px;
            overflow-y: auto;
        }

        .notification-item {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .notification-item:last-child {
            border-bottom: none;
        }

        .formatted-date {
            color: black;
            font-size: 9px;
        }

        .icon-small {
            width: 120px;
            /* Sesuaikan dengan ukuran yang Anda inginkan */
            height: auto;
            /* Mempertahankan rasio aspek */
        }

        .message.system {
            background-color: #f0f0f0;
            color: #888;
            text-align: center;
            /* font-style: italic; */
        }


        /* style untuk halaman login end */
    </style>
    <!-- ===============================================-->
    <link href="<?= base_url() ?>assets/lib/flatpickr/flatpickr.min.css" rel="stylesheet">

    <script src="<?= base_url() ?>assets/js/config.navbar-vertical.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="<?= base_url() ?>assets/lib/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/prismjs/prism-okaidia.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/datatables-bs4/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/select2/select2.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/emojionearea/emojionearea.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/toastr/toastr.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/theme.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>



    <!-- datatables -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
    <script src="<?= base_url() ?>assets/lib/datatables/js/jquery.dataTables.min.js"></script>

    <!-- checkbox -->
    <link type="text/css" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
    <script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>

</head>

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

        <div class="container-fluid" data-layout="container">
            <div class="content">

                <?= $this->include('admin/layout/top_menu') ?>
                <!-- Render the content section -->
                <?= $this->renderSection('content') ?>

                <?= $this->include('admin/layout/modal-lg') ?>
                <?= $this->include('admin/layout/modal') ?>
            </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/@fortawesome/all.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/stickyfilljs/stickyfill.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/sticky-kit/sticky-kit.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/is_js/is.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/lodash/lodash.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/perfect-scrollbar/perfect-scrollbar.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="<?= base_url() ?>assets/lib/prismjs/prism.js"></script>

    <script src="<?= base_url() ?>assets/lib/datatables-bs4/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/datatables.net-responsive/dataTables.responsive.js"></script>
    <script src="<?= base_url() ?>assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
    <script src="<?= base_url() ?>assets/lib/flatpickr/flatpickr.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/fancybox/jquery.fancybox.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/select2/select2.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/toastr/toastr.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/emojionearea/emojionearea.min.js"></script>
    <script src="<?= base_url() ?>assets/js/theme.js"></script>
    <script src="<?= base_url() ?>assets/lib/echarts/echarts.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                // Menggunakan for...in loop
                for (var key in eJson.errors) {
                    toastr.error(eJson.errors[key], key);
                }
            } else {
                toastr.error(error, "Error");
            }
        }
    </script>
    <?= $this->renderSection('script') ?>
</body>

</html>