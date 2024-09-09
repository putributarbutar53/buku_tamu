<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from epicurean.netlify.app/epicurean/home-02 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jul 2024 04:27:38 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Buku Tamu Digital - Dinas Komunikasi dan Informatika</title>

    <link rel="icon" href="<?= base_url() ?>web/images/favicon.ico" type="image/gif" sizes="20x20" />

    <!-- Box Icon CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>web/css/boxicons.min.css" />
    <!-- Bootstrap Icon CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>web/css/bootstrap-icons.css" />
    <!-- Swiper Carousel CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>web/css/swiper-bundle.min.css" />
    <!-- Wow CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>web/css/animate.css" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>web/css/magnific-popup.css" />
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>web/css/odometer.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>web/css/bootstrap.min.css" />
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>web/css/meanmenu.min.css" />
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>web/css/YouTubePopUp.css" />
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>web/css/select2.css" />
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>web/css/datepicker.css" />
    <!-- Jquery UI CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>web/css/jquery-ui.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>web/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        .swiper {
            height: 100vh;
        }

        .form-container {
            top: 65%;
            transform: translateY(-50%);
            z-index: 10;
        }

        .hero-area-two {
            position: relative;
            height: 100%;
        }

        .img-layer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }

        h1 {
            text-align: center;
        }

        /* #reader {
            width: 500px;
        }

        .result {
            background-color: green;
            color: #fff;
            padding: 20px;
        }

        .row {
            display: flex;
        }

        #reader__scan_region {
            background: white;
        } */
    </style>

</head>

<body>

    <audio id="welcome-audio" src="<?= base_url() ?>assets/audio/bataknaraja.mp3" preload="auto"></audio>

    <!-- Custom Cursor -->

    <div class="cursor d-none d-lg-block"></div>

    <!-- Custom Cursor End -->

    <!-- Preloader -->

    <div class="preloader">
        <div class="spinner-wrap">
            <div class="preloader-logo">
                <img src="<?= base_url() ?>web/images/preload.png" alt="" class="img-fluid" />
            </div>
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Preloader End -->

    <!-- back to to button start-->
    <a href="#" id="scroll-top" class="back-to-top-btn"><i class="bi bi-arrow-up"></i></a>
    <!-- back to to button end-->

    <!-- Header area -->

    <h1>QR Code Reader using Javascript</h1>

    <!-- QR SCANNER CODE BELOW  -->
    <div class="row">
        <div class="col">
            <div id="reader"></div>
        </div>
        <div class="col" style="padding: 30px">
            <h4>Scan Result </h4>
            <div id="result">
                Result goes here
            </div>
        </div>
    </div>

    <!-- Jquery JS -->
    <script src="<?= base_url() ?>web/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?= base_url() ?>web/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper Carousel JS -->
    <script src="<?= base_url() ?>web/js/swiper-bundle.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="<?= base_url() ?>web/js/jquery.magnific-popup.min.js"></script>
    <!-- Wow JS -->
    <script src="<?= base_url() ?>web/js/wow.min.js"></script>
    <!-- Odometer JS -->
    <script src="<?= base_url() ?>web/js/odometer.min.js"></script>
    <script src="<?= base_url() ?>web/js/viewport.jquery.js"></script>
    <!-- Mean menu JS -->
    <script src="<?= base_url() ?>web/js/jquery.meanmenu.min.js"></script>
    <!-- YouTubePopUp JS -->
    <script src="<?= base_url() ?>web/js/YouTubePopUp.js"></script>
    <!-- Datepicker JS -->
    <script src="<?= base_url() ?>web/js/datepicker.js"></script>
    <!-- Select2 JS -->
    <script src="<?= base_url() ?>web/js/select2.js"></script>
    <!-- Jquery UI JS -->
    <script src="<?= base_url() ?>web/js/jquery-ui.min.js"></script>
    <!-- Main JS -->
    <script src="<?= base_url() ?>web/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.2.0/html5-qrcode.min.js"></script>
    <script>
        // When scan is successful fucntion will produce data
        function onScanSuccess(qrCodeMessage) {
            document.getElementById("result").innerHTML =
                '<span class="result">' + qrCodeMessage + "</span>";
        }

        // When scan is unsuccessful fucntion will produce error message
        function onScanError(errorMessage) {
            // Handle Scan Error
        }

        // Setting up Qr Scanner properties
        var html5QrCodeScanner = new Html5QrcodeScanner("reader", {
            fps: 10,
            qrbox: 250
        });

        // in
        html5QrCodeScanner.render(onScanSuccess, onScanError);
    </script>
    <script>
        document.body.addEventListener('click', () => {
            const audio = document.getElementById('welcome-audio');
            audio.play().catch(error => {
                console.error('Audio play error:', error);
            });
            // Remove the event listener after the first click
            document.body.removeEventListener('click', arguments.callee);
        }, {
            once: true
        });
    </script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Swiper options
            on: {
                slideChange: function() {
                    const form = document.querySelector('.form-container');
                    form.style.display = 'block'; // Always display the form
                },
                init: function() {
                    const form = document.querySelector('.form-container');
                    form.style.display = 'block';
                }
            }
        });

        function speak(text) {
            if ('speechSynthesis' in window) {
                const synth = window.speechSynthesis;
                const utterance = new SpeechSynthesisUtterance(text);
                utterance.lang = 'id-ID'; // Bahasa Indonesia
                console.log('Speaking:', text); // Log untuk memastikan fungsi dipanggil
                synth.speak(utterance);
            } else {
                console.error('Speech synthesis not supported in this browser.');
            }
        }
        document.getElementById('main-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah form dari submit default

            var form = e.target;
            var formData = new FormData(form);

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Menentukan teks yang akan dibaca berdasarkan ketersediaan nama
                        const welcomeText = data.nama ? `Selamat datang, ${data.nama}` : 'Selamat datang';

                        Swal.fire({
                            icon: 'success',
                            title: 'Selamat Datang!',
                            text: data.nama, // Menampilkan nama jika ada, jika tidak tampilkan 'Selamat datang'
                            timer: 2000, // Menampilkan alert selama 2 detik
                            showConfirmButton: false,
                            didOpen: () => {
                                speak(welcomeText); // Membaca teks yang sesuai
                            }
                        }).then(() => {
                            // Redirect atau lakukan tindakan lain setelah sukses
                            form.reset(); // Ganti dengan URL tujuan Anda
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: data.message
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Terjadi kesalahan pada server.'
                    });
                });
        });
    </script>
</body>

</html>