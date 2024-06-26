<!doctype html>
<html lang="en">

<head>

        <meta charset="utf-8" />
        <title>TechTutor Pro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="techtutorpro platform kursus online teknologi">
        <meta name="keywords" content="techtutor, techtutorpro, kursus online, platform kursus online">
        <meta name="google-site-verification" content="aEPRquVrya1KgKn5TXMgqpF5A47i050myHGriD61xXA" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/logo-techtutor-pro-only.jpg') }}">

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{ asset('libs/owl.carousel/assets/owl.carousel.min.css') }}">

        <link rel="stylesheet" href="{{ asset('libs/owl.carousel/assets/owl.theme.default.min.css') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        <style>
            .product-image {
                height: 200px; /* Set a fixed height for the product images */
                object-fit: cover; /* This property ensures the image covers the container */
            }


        .product-card {
            height: 315px;
        }
        </style>

    </head>

    <body data-bs-spy="scroll" data-bs-target="#topnav-menu" data-bs-offset="60">

        <nav class="navbar navbar-expand-lg navigation fixed-top sticky">
            <div class="container">
                <a class="navbar-logo" href="index.html">
                    <img src="{{ asset('images/logo-techtutorpro-horizontal.png') }}" alt="" height="60" class="logo logo-dark">
                    <img src="{{ asset('images/logo-techtutorpro-horizontal.png') }}" alt="" height="60" class="logo logo-light">
                </a>

                <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav ms-auto" id="topnav-menu" >
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Metode</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Tim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news">Kursus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faqs">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Kontak Kami</a>
                        </li>

                    </ul>

                    <div class="my-2 ms-lg-2">
                        @guest
                                <a href="{{ route('login') }}" class="btn btn-outline-success w-xs">Login</a>
                                <a href="{{ route('register') }}" class="btn btn-dark waves-effect waves-light w-xs">Registrasi</a>
                        @endguest

                        @auth
                            <a href="{{ route('dashboard.index') }}" class="btn btn-success w-xs">Dashboard</a>
                            <button onclick="logout()" class="btn btn-danger waves-effect waves-light w-xs">Logout</button>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- hero section start -->
        <section class="section hero-section bg-ico-hero" id="home">
            <div class="bg-overlay bg-primary"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="text-white-50">
                            <h1 class="text-white fw-semibold mb-3 hero-title">TechTutor Pro Kursus Online Teknologi</h1>
                            <p class="font-size-14">Selamat datang di platform kursus online techtutor pro! Kami menyediakan beragam kursus berkualitas yang dapat membantu Anda mencapai tujuan belajar Anda</p>

                            @guest
                            <div class="d-flex flex-wrap gap-2 mt-4">
                                <a href="{{ route('login') }}" class="btn btn-success">Login</a>
                                <a href="{{ route('register') }}" class="btn btn-light">Registrasi</a>
                            </div>
                            @endguest
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-10 ms-lg-auto">

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- hero section end -->

        <!-- about section start -->
        <section class="section pt-4 bg-white" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <div class="small-title">Tentang kami</div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">

                        <div class="text-muted">
                            <h4>Apa itu TechTutor Pro</h4>
                            <p>TechTutor Pro adalah platform kursus online yang berfokus pada pemrograman dan teknologi. Anda bisa memperoleh berbagai kursus dan materi pembelajaran untuk mengembangkan keterampilan teknis dalam berbagai aspek pemrograman, pengembangan web, pengembangan perangkat lunak, serta topik terkait teknologi lainnya.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="text-muted">
                            <h4>Mengapa TechTutor Pro dibuat?</h4>
                            <p>Pentingnya pemahaman teknologi dan pemrograman di era digital, TechTutor Pro diciptakan untuk membantu orang mempelajari teknologi dan Kami menyadari kebutuhan untuk meningkatkan pendidikan di pemrograman dan teknologi. Oleh karena itu, kami menyediakan kursus yang dapat diakses secara online.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <hr class="my-5">
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- about section end -->

        <!-- Features start -->
        <section class="section" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <div class="small-title">Metode</div>
                            <h4>Metode pembelajaran di TechTutor Pro</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center pt-4">
                    <div class="col-md-6 col-sm-8">
                        <div>
                            <img src="{{ asset('images/crypto/features-img/img-1.png') }}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-md-5 ms-auto">
                        <div class="mt-4 mt-md-auto">
                            <div class="d-flex align-items-center mb-2">
                                <div class="features-number fw-semibold display-4 me-3">01</div>
                                <h4 class="mb-0">Pembelajaran Teks</h4>
                            </div>
                            <p class="text-muted">Metode pembelajaran teks adalah cara efektif untuk memahami konsep dan pengetahuan dengan membaca. Dalam kursus online kami, Anda akan menemukan materi yang terstruktur dalam bentuk artikel, buku elektronik, dan panduan teks yang mudah diakses. Ini memberi Anda kesempatan untuk memeriksa materi dengan kecepatan Anda sendiri, membuat catatan, dan merujuk kembali ke informasi yang diperlukan. Metode ini cocok bagi mereka yang lebih suka belajar dengan membaca dan meresapkan pengetahuan dengan mendalam.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center mt-5 pt-md-5">
                    <div class="col-md-5">
                        <div class="mt-4 mt-md-0">
                            <div class="d-flex align-items-center mb-2">
                                <div class="features-number fw-semibold display-4 me-3">02</div>
                                <h4 class="mb-0">Pembelajaran Video</h4>
                            </div>
                            <p class="text-muted">Pembelajaran video adalah metode yang memungkinkan Anda untuk memahami konsep dengan visual dan audio. Di kursus online kami, kami menyediakan video pembelajaran yang terstruktur dengan baik, di mana instruktur kami menjelaskan materi secara detail. Anda dapat memantau praktik, studi kasus, dan demonstrasi secara langsung. Pembelajaran video adalah pilihan yang bagus untuk visual learners yang lebih suka melihat dan mendengar konsep yang diajarkan.</p>
                        </div>
                    </div>
                    <div class="col-md-6  col-sm-8 ms-md-auto">
                        <div class="mt-4 me-md-0">
                            <img src="{{ asset('images/crypto/features-img/img-2.png') }}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Features end -->

        <!-- Blog start -->
        @if (count($lastCourses) > 0)
            <section class="section bg-white" id="news">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mb-5">
                                <div class="small-title">Kursus</div>
                                <h4>Kursus Terbaru</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        @foreach ($lastCourses as $course)
                        <div class="col-xl-4 col-sm-6">
                            <div class="blog-box mb-4 mb-xl-0">
                                <div class="product-card">
                                    <div class="position-relative">
                                        <img src="{{ getFile($course->thumbnail_url, asset('images/default-profile.jpg')) }}" alt="" class="rounded img-fluid mx-auto d-block product-image">
                                        <div class="badge bg-success blog-badge font-size-11">
                                            {{ $course->type }}
                                        </div>
                                    </div>

                                    <div class="mt-4 text-muted">
                                        <h5 class="mb-3">{{ $course->name }}</h5>
                                        <p>
                                            {{ Str::limit($course->summary, 88) }}
                                        </p>
                                    </div>
                                </div>

                                <div>
                                    <a href="{{ route('dashboard.student.course.show', $course->slug) }}" class="">Lihat kursus</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
        @endif
        <!-- Blog end -->

        <!-- Faqs start -->
        <section class="section" id="faqs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <div class="small-title">FAQs</div>
                            <h4>Pertanyaan yang sering ditanyakan</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="vertical-nav">
                            <div class="row">
                                <div class="col-lg-2 col-sm-4">
                                    <div class="nav flex-column nav-pills" role="tablist">
                                        <a class="nav-link active" id="v-pills-gen-ques-tab" data-bs-toggle="pill" href="#v-pills-gen-ques" role="tab">
                                            <i class= "bx bx-help-circle nav-icon d-block mb-2"></i>
                                            <p class="fw-bold mb-0">Pertanyaan Umum</p>
                                        </a>
                                        <a class="nav-link" id="v-pills-token-sale-tab" data-bs-toggle="pill" href="#v-pills-token-sale" role="tab">
                                            <i class= "bx bx-receipt nav-icon d-block mb-2"></i>
                                            <p class="fw-bold mb-0">Cara Belajar</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-sm-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="v-pills-gen-ques" role="tabpanel">
                                                    <h4 class="card-title mb-4">Pertanyaan Umum</h4>

                                                    <div>
                                                        <div id="gen-ques-accordion" class="accordion custom-accordion">
                                                            <div class="mb-3">
                                                                <a href="#general-collapseOne" class="accordion-list" data-bs-toggle="collapse" aria-expanded="true"
                                                                    aria-controls="general-collapseOne">

                                                                    <div>What is Lorem Ipsum ?</div>
                                                                    <i class="mdi mdi-minus accor-plus-icon"></i>

                                                                </a>

                                                                <div id="general-collapseOne" class="collapse show" data-bs-parent="#gen-ques-accordion">
                                                                    <div class="card-body">
                                                                        <p class="mb-0">Everyone realizes why a new common language would be desirable: one could refuse to
                                                                            pay expensive translators. To achieve this, it would be necessary to have uniform grammar,
                                                                            pronunciation and more common words.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <a href="#general-collapseTwo" class="accordion-list collapsed" data-bs-toggle="collapse"
                                                                    aria-expanded="false" aria-controls="general-collapseTwo">
                                                                    <div>Why do we use it ?</div>
                                                                    <i class="mdi mdi-minus accor-plus-icon"></i>
                                                                </a>
                                                                <div id="general-collapseTwo" class="collapse" data-bs-parent="#gen-ques-accordion">
                                                                    <div class="card-body">
                                                                        <p class="mb-0">If several languages coalesce, the grammar of the resulting language is more simple
                                                                            and regular than that of the individual languages. The new common language will be more simple
                                                                            and regular than the existing European languages.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <a href="#general-collapseThree" class="accordion-list collapsed" data-bs-toggle="collapse"
                                                                    aria-expanded="false" aria-controls="general-collapseThree">
                                                                    <div>Where does it come from ?</div>
                                                                    <i class="mdi mdi-minus accor-plus-icon"></i>
                                                                </a>
                                                                <div id="general-collapseThree" class="collapse" data-bs-parent="#gen-ques-accordion">
                                                                    <div class="card-body">
                                                                        <p class="mb-0">It will be as simple as Occidental; in fact, it will be Occidental. To an English
                                                                            person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me
                                                                            what Occidental.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <a href="#general-collapseFour" class="accordion-list collapsed" data-bs-toggle="collapse"
                                                                    aria-expanded="false" aria-controls="general-collapseFour">
                                                                    <div>Where can I get some ?</div>
                                                                    <i class="mdi mdi-minus accor-plus-icon"></i>
                                                                </a>
                                                                <div id="general-collapseFour" class="collapse" data-bs-parent="#gen-ques-accordion">
                                                                    <div class="card-body">
                                                                        <p class="mb-0">To an English person, it will seem like simplified English, as a skeptical Cambridge
                                                                            friend of mine told me what Occidental is. The European languages are members of the same
                                                                            family. Their separate existence is a myth.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-token-sale" role="tabpanel">
                                                    <h4 class="card-title mb-4">Cara Belajar</h4>

                                                    <div>
                                                        <div id="token-accordion" class="accordion custom-accordion">
                                                            <div class="mb-3">
                                                                <a href="#token-collapseOne" class="accordion-list collapsed" data-bs-toggle="collapse"
                                                                                aria-expanded="false"
                                                                                aria-controls="token-collapseOne">
                                                                    <div>Why do we use it ?</div>
                                                                    <i class="mdi mdi-minus accor-plus-icon"></i>
                                                                </a>
                                                                <div id="token-collapseOne" class="collapse" data-bs-parent="#token-accordion">
                                                                    <div class="card-body">
                                                                        <p class="mb-0">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <a href="#token-collapseTwo" class="accordion-list" data-bs-toggle="collapse"
                                                                                                aria-expanded="true"
                                                                                                aria-controls="token-collapseTwo">

                                                                    <div>What is Lorem Ipsum ?</div>
                                                                    <i class="mdi mdi-minus accor-plus-icon"></i>

                                                                </a>

                                                                <div id="token-collapseTwo" class="collapse show" data-bs-parent="#token-accordion">
                                                                    <div class="card-body">
                                                                        <p class="mb-0">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <a href="#token-collapseThree" class="accordion-list collapsed" data-bs-toggle="collapse"
                                                                                aria-expanded="false"
                                                                                aria-controls="token-collapseThree">
                                                                    <div>Where can I get some ?</div>
                                                                    <i class="mdi mdi-minus accor-plus-icon"></i>
                                                                </a>
                                                                <div id="token-collapseThree" class="collapse" data-bs-parent="#token-accordion">
                                                                    <div class="card-body">
                                                                        <p class="mb-0">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <a href="#token-collapseFour" class="accordion-list collapsed" data-bs-toggle="collapse"
                                                                                aria-expanded="false"
                                                                                aria-controls="token-collapseFour">
                                                                    <div>Where does it come from ?</div>
                                                                    <i class="mdi mdi-minus accor-plus-icon"></i>
                                                                </a>
                                                                <div id="token-collapseFour" class="collapse" data-bs-parent="#token-accordion">
                                                                    <div class="card-body">
                                                                        <p class="mb-0">It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental.</p>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end vertical nav -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Faqs end -->


        <!-- Footer start -->
        <footer class="landing-footer">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="mb-4 mb-lg-0">
                            <h5 class="mb-3 footer-list-title">Perusahaan</h5>
                            <ul class="list-unstyled footer-list-menu">
                                <li><a href="javascript: void(0);">Tentang Kami</a></li>
                                <li><a href="javascript: void(0);">Metode</a></li>
                                <li><a href="javascript: void(0);">Tim</a></li>
                                <li><a href="javascript: void(0);">Kursus</a></li>
                                <li><a href="javascript: void(0);">FAQs</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                    </div>

                    <div class="col-lg-3 col-sm-6">
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="mb-4 mb-lg-0">
                            <h5 class="mb-3 footer-list-title">Alamat</h5>
                            <div class="blog-post">
                                <a href="javascript: void(0);" class="post">
                                    <p class="post-title">Jalan tanah abang dan kaliabang dan kalimantan</p>
                                </a>
                            </div>
                        </div>
                        <div class="mb-4 mb-lg-0">
                            <h5 class="mb-3 footer-list-title">Kontak</h5>
                            <div class="blog-post">
                                <a href="javascript: void(0);" class="post">
                                    <p class="post-title">62891-1234-1244</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <hr class="footer-border my-5">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <img src="{{ asset('images/logo-techtutorpro-horizontal.png') }}" alt="" height="70">
                        </div>

                        <p class="mb-2">{{ date('Y') }} © TechTutor Pro. Made with <i class="mdi mdi-heart text-danger"></i> by TechTutor Pro</p>
                    </div>

                </div>
            </div>
            <!-- end container -->
        </footer>
        <!-- Footer end -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>

        <script src="{{ asset('libs/jquery.easing/jquery.easing.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('libs/jquery-countdown/jquery.countdown.min.js') }}"></script>

        <!-- owl.carousel js -->
        <script src="{{ asset('libs/owl.carousel/owl.carousel.min.js') }}"></script>

        <!-- ICO landing init -->
        <script src="{{ asset('js/pages/ico-landing.init.js') }}"></script>

        <script src="{{ asset('js/app.js') }}"></script>

        <script>
            function logout() {
                $.ajax({
                    type: 'POST',
                    url: '/logout',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function (data) {
                        location.reload();
                    },
                    error: function (data) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Logout Failed',
                            text: 'An error occurred during the logout process.'
                        });
                    }
                });
            }
        </script>
    </body>
</html>
