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
    </style>
</head>

<body>
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

    <div class="site-wrapper">
        <div class="swiper hero-bg-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-area-two overflow-hidden">
                        <div class="img-layer" style="
                  background: linear-gradient(
                      180deg,
                      rgba(0, 0, 0, 0.37) 16.65%,
                      #000 100.78%
                    ),
                    url(<?= base_url() ?>web/images/hero/bg.png);
                "></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="hero-info text-center">
                                        <h1 class="text_color_white">Buku Tamu Digital</h1>
                                        <h3 class="text_color_white">
                                            Dinas Komunikasi dan Informatika Kab. Toba
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-area-two overflow-hidden">
                        <div class="img-layer" style="
                  background: linear-gradient(
                      180deg,
                      rgba(0, 0, 0, 0.37) 16.65%,
                      #000 100.78%
                    ),
                    url(<?= base_url() ?>web/images/hero/bg-2.png);
                "></div>
                        <div class="container h-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="hero-info text-center">
                                        <h1 class="text_color_white">Buku Tamu Digital</h1>
                                        <h3 class="text_color_white">
                                            Dinas Komunikasi dan Informatika Kab. Toba
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form placed outside swiper-wrapper -->
        <div class="form-container position-absolute w-100 d-flex justify-content-center">
            <form id="main-form" class="footer-subscribe-form mt-4 d-flex justify-content-between align-items-center" action="#">
                <input id="nik-input" class="w-100 border-0 h-100 ps-3 pe-3" type="number" placeholder="NIK" />
                <button class="common-btn h-100 flex-shrink-0 border-0 border-radius-0 ms-lg-4 ms-2" type="submit">
                    <span>Daftar</span>
                </button>
            </form>
        </div>
        <div class="cta-area cta-area-two">
            <div class="container">
                <div class="row gy-5 cta-wrap">
                    <div class="col-lg-3 col-md-6 cta-single">
                        <div class="cta-info text-center wow fadeInLeft" data-wow-delay=".0s">
                            <h2 class="counter-item">
                                <span class="odometer d-inline-block" data-odometer-final="15">.</span>
                            </h2>
                            <p>Visitors</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 cta-single">
                        <div class="cta-info text-center wow fadeInLeft" data-wow-delay=".2s">
                            <h2 class="counter-item">
                                <span class="odometer d-inline-block" data-odometer-final="5">.</span>
                            </h2>
                            <p>This Day</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 cta-single">
                        <div class="cta-info text-center wow fadeInLeft" data-wow-delay=".4s">
                            <h2 class="counter-item">
                                <span class="odometer d-inline-block" data-odometer-final="200">.</span>
                            </h2>
                            <p>This Week</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 cta-single">
                        <div class="cta-info text-center wow fadeInLeft" data-wow-delay=".6s">
                            <h2 class="counter-item">
                                <span class="odometer d-inline-block" data-odometer-final="35">.</span>
                            </h2>
                            <p>This Year</p>
                        </div>
                    </div>
                </div>
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


        document.querySelector('#main-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form submit

            const nik = document.querySelector('#nik-input').value;

            // Melakukan AJAX request untuk mendapatkan data dari backend
            fetch('<?= base_url('home/checkNik') ?>', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        'nik': nik
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: 'Selamat Datang!',
                            text: `Nama: ${data.nama}`,
                            icon: 'success',
                            confirmButtonText: 'OK',
                            didOpen: () => {
                                speak(`Selamat datang, ${data.nama}`);
                            }
                        });
                    } else {
                        Swal.fire({
                            title: 'Oops!',
                            text: 'NIK tidak ditemukan.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        title: 'Error!',
                        text: 'Terjadi kesalahan saat memproses data.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
        });
    </script>

</body>

</html>