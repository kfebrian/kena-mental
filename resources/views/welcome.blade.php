
    {{-- <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>Kena Mental</title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" title="Favicon"/>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="css/namari-color.css">

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status" class="la-ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--End of Preloader-->

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">

    <header id="banner" class="scrollto clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
            <div class="row clearfix">
                <div class="col-1">

                    <!--Logo-->
                    <div id="logo">

                        {{-- insert kena mental logo --}}
                        <!--Logo that is shown on the banner-->
                        {{-- <img src="images/logo.png" id="banner-logo" alt="Landing Page"/> --}}
                        <!--End of Banner Logo-->

                        <!--The Logo that is shown on the sticky Navigation Bar-->
                        {{-- <img src="images/logo-2.png" id="navigation-logo" alt="Landing Page"/> --}}
                        <!--End of Navigation Logo-->

                    </div>
                    <!--End of Logo-->

                    <!--Main Navigation-->
                    <nav id="nav-main">
                        <ul>
                            @if (Route::has('login'))
                                @auth
                                <li>
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                </li>
                                <li>
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                </li>
                                @endauth
                        @endif
                        </ul>
                    </nav>
                    <!--End of Main Navigation-->

                    <div id="nav-trigger"><span></span></div>
                    <nav id="nav-mobile"></nav>

                </div>
            </div>
        </div><!--End of Header-->

        <!--Banner Content-->
        <div id="banner-content" class="row clearfix">

            <div class="col-38">

                <div class="section-heading">
                    <h1>SOLUSI KESEHATAN MENTAL</h1>
                    <h2>Chat dokter, kunjungi rumah sakit, beli obat, cek lab dan update informasi seputar kesehatan, semua bisa di Kena Mental!</h2>
                </div>

                <!--Call to Action-->
                <a href="#" class="button">Chat Dokter Sekarang</a>
                <!--End Call to Action-->

            </div>

        </div><!--End of Row-->
    </header>

    <!--Main Content Area-->
    <main id="content">

        <!--Content Section-->
        <div id="services" class="scrollto clearfix">

            <div class="row no-padding-bottom clearfix">


                <!--Introduction-->
        <section id="about" class="introduction scrollto">

            <div class="row clearfix">

                <div class="col-3">
                    <div class="section-heading">
                        <h3>Masalah Mental</h3>
                        <h2 class="section-title">Kenali Masalah Mental Yang Kerap Terjadi</h2>
                        <p class="section-subtitle">Mental illness (mental disorder), disebut juga dengan gangguan mental atau jiwa,
                             adalah kondisi kesehatan yang memengaruhi pemikiran, perasaan, 
                            perilaku, suasana hati, atau kombinasi diantaranya. Kondisi ini dapat terjadi sesekali 
                            atau berlangsung dalam waktu yang lama (kronis).</p>
                    </div>

                </div>

                <div class="col-2-3">

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.1s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-heart fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Gangguan kecemasan</h4>
                            <p>Orang dengan masalah kecemasan akan memberikan respons terhadap sesuatu secara 
                                berlebihan. Berlebihan ini lebih ke arah negatif, seperti ketakutan, 
                                kekhawatiran, hingga hal-hal lain yang mungkin berhubungan kepada kematian.</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.3s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-comment fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Skizofrenia</h4>
                            <p>Gangguan skizofrenia termasuk ke dalam gangguan psikotik yang membuat orang seperti melihat atau merasakan sesuatu.
                                 Saat mengidap gangguan skizofrenia, seseorang sulit membedakan mana kehidupan yang nyata dan mimpi.</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-repeat fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Obsessive-compulsive disorder (OCD)</h4>
                            <p>Orang dengan OCD cenderung melakukan hal 
                                yang sama berulang-ulang hingga kadang merepotkan untuk diri sendiri. Beberapa orang menganggap hal tersebut menjadi 
                                sebuah ritual sakral yang membuatnya menjadi terganggu saat tidak melakukannya.</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-frown-o fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Attention Deficit Hyperactivity Disorder (ADHD)</h4>
                            <p>Kondisi ini membuat seseorang sulit fokus, impulsive, dan hiperaktif. 
                                Tidak jarang gangguan ini mempengaruhi aktivitas harian. Penyebab ADHD sebenarnya belum diketahui secara pasti. 
                                Namun, banyak pendapat yang menyebutkan bahwa gangguan ini diturunkan oleh faktor genetik.</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                </div>

            </div>


        </section>
        <!--End of Introduction-->

        
        <!--Content Section-->
        <div id="services" class="scrollto clearfix">

            <div class="row no-padding-bottom clearfix">


                <!--Content Left Side-->
                <div class="col-3">
                    <!--User Testimonial-->
                    <blockquote class="testimonial text-right bigtest">
                        <q>Beberapa pertempuran terbesar akan terjadi di dalam ruang sunyi jiwa Anda sendiri.</q>
                        <footer>— Ezra Taft Benson</footer>
                    </blockquote>
                    <!-- End of Testimonial-->

                </div>
                <!--End Content Left Side-->

                <!--Content of the Right Side-->
                <div class="col-3">
                    <div class="section-heading">
                        <h3>BELIEVING</h3>
                        <h2 class="section-title">Cegah Masalah Mental</h2>
                        <p class="section-subtitle">Mulai dengan hal yang sederhana, seperti melakukan aktivitas fisik sederhana, tertawa, 
                            mengobrol dengan orang dekat sampai memiliki tidur yang cukup
                        </p>
                    </div>
                    <p>Selain penanganan medis dengan bantuan psikolog atau psikiater, pengidap juga bisa melakukan perawatan mandiri untuk mengatasi gangguan kesehatan mental.

                        Misalnya, mengubah pola hidup dan pola makan sehat, dan mampu mengelola stres dengan baik. 
                    </p>
                    <p>
                        Jika diri sendiri atau kerabat menunjukkan gejala masalah kesehatan jiwa secara terus-menerus dan tidak membaik, 
                        sebaiknya segera lakukan pemeriksaan ke dokter spesialis jiwa atau psikiater untuk mendapatkan pemeriksaan dan penanganan lebih lanjut.
                    </p>
                    <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
                </div>
                <!--End Content Right Side-->

                <div class="col-3">
                    <img src="images/dancer-2.png" alt="Dancer"/>
                </div>

            </div>


        </div>
        <!--End of Content Section-->

        <!--Testimonials-->
        <aside id="testimonials" class="scrollto text-center" data-enllax-ratio=".2">

            <div class="row clearfix">

                <div class="section-heading">
                    <h3>DOCTOR</h3>
                    <h2 class="section-title">MEET THE DOCTOR</h2>
                </div>

                <!--User Testimonial-->
                <blockquote class="col-3 testimonial classic">
                    <img src="images/user-images/user-1.png" alt="User"/>
                    <q>Dokter dengan pengalaman lebih dari 10 tahun, 
                        aktif di berbagai rumah sakit dan klinik, fokus pada diagnosis dini, pengobatan efektif, dan perawatan holistik.</q>
                    <footer>Emily Rodriguez</footer>
                </blockquote>
                <!-- End of Testimonial-->
                
                <!--User Testimonial-->
                <blockquote class="col-3 testimonial classic">
                    <img src="images/user-images/user-3.png" alt="User"/>
                    <q>Dokter psikolog dengan pengalaman klinis lebih dari 8 tahun,
                         berfokus pada membantu individu mengatasi tantangan mental dan emosional.
                         Keterampilan mencakup pemeriksaan psikologis, terapi kognitif perilaku, dan manajemen stres</q>
                    <footer>Benjamin Davis</footer>
                </blockquote>
                <!-- End of Testimonial-->

                <!--User Testimonial-->
                <blockquote class="col-3 testimonial classic">
                    <img src="images/user-images/user-2.png" alt="User"/>
                    <q>Berpengalaman di bidang klinis, penelitian dan pendidikan kesehatan mental. 
                        Berkomitmen pada pengembangan ilmu kedokteran serta berbagi pengetahuan tentang masalah mental. </q>
                    <footer>Alexander Williams</footer>
                </blockquote>
                <!-- End of Testimonial-->

            </div>

        </aside>
        <!--End of Testimonials-->

    </main>
    <!--End Main Content Area-->


    <!--Footer-->
    <footer id="landing-footer" class="clearfix">
        <div class="row clearfix">

            <p id="copyright" class="col-2">Made with love by <a href="https://www.shapingrain.com">ShapingRain</a></p>

            <!--Social Icons in Footer-->
            <ul class="col-2 social-icons">
                <li>
                    <a target="_blank" title="Facebook" href="https://www.facebook.com/username">
                        <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="Google+" href="http://google.com/+username">
                        <i class="fa fa-google-plus fa-1x"></i><span>Google+</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="Twitter" href="http://www.twitter.com/username">
                        <i class="fa fa-twitter fa-1x"></i><span>Twitter</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="Instagram" href="http://www.instagram.com/username">
                        <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="behance" href="http://www.behance.net">
                        <i class="fa fa-behance fa-1x"></i><span>Behance</span>
                    </a>
                </li>
            </ul>
            <!--End of Social Icons in Footer-->
        </div>
    </footer>
    <!--End of Footer-->

</div>

<!-- Include JavaScript resources -->
<script src="js/jquery.1.8.3.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/featherlight.min.js"></script>
<script src="js/featherlight.gallery.min.js"></script>
<script src="js/jquery.enllax.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.stickyNavbar.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/images-loaded.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/site.js"></script>


</body>
</html>