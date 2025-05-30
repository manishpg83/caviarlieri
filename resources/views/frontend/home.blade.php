@extends('frontend.layouts.app')

@section('title', 'Home | Swiss Caviarlieri')
@section('header', 'Home | Swiss Caviarlieri')

@section('content')
    <!--Swiper Banner Start -->
    <div class="page-content bg-light">
        <!--banner-->
        <div class="px-0 container-fluid">
            <div id="home-slider" class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="item">
                                <div class="video-wrapper">
                                    <video autoplay="" muted="" loop="" playsinline="" preload="metadata"
                                        class="video-slide">
                                        <source src="{{ asset('/frontend/images/home-slider/Video-Bg.mp4') }}"
                                            type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item">
                                <img src="{{ asset('/frontend/images/home-slider/banner1.jpg') }}" alt="">
                                <div class="home-banner-container">
                                    <div class="banner1-txt">
                                        <h1 class="h1">ENDURING YOUTH <br>IS A DREAM NO LONGER</h1>
                                        <div class="p-3" align="center"><img
                                                src="{{ asset('/frontend/images/home-slider/Vector.png') }}"
                                                style="width: 30px;" alt=""></div>
                                        <p class="mt-1 mb-3 text-uppercase mb-lg-5 mt-lg-3 GothamLight">Swiss Caviar
                                            Cellular Therapy Supplement</p>
                                        <a href="outstanding-benefits.php" class="gold-btn"><span
                                                class="btn-content-wrapper"><span
                                                    class="btn-content-text">Discover</span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item">
                                <img src="{{ asset('/frontend/images/home-slider/banner2.jpg') }}" alt="">
                                <div class="home-banner-container">
                                    <div class="banner2-txt">
                                        <h1 class="h1">MAKE YOUR <br>CELLS YOUNG AGAIN </h1>
                                        <div class="p-3" align="center"><img
                                                src="{{ asset('/frontend/images/home-slider/Vector.png') }}"
                                                style="width: 30px;" alt=""></div>
                                        <p class="mt-1 mb-3 text-uppercase mb-lg-5 mt-lg-3 GothamLight">Swiss Caviar
                                            Cellular Therapy Supplement</p>
                                        <a href="outstanding-benefits.php" class="gold-btn"><span
                                                class="btn-content-wrapper"><span
                                                    class="btn-content-text">Discover</span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--home slider for mobile -->
            <div id="home-slider-mobile" class="owl-carousel owl-theme owl-loaded owl-drag" style="">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="item mob-banner1"
                                style="background-image: url('{{ asset('/frontend/images/home/banner1M.jpg') }}'); background-repeat: no-repeat;">
                                <div class="home-banner-container">
                                    <div class="banner1-txt">
                                        <h2>ENDURING YOUTH <br>IS A DREAM NO LONGER</h2>
                                        <div class="p-2" align="center"><img
                                                src="{{ asset('/frontend/images/home/Vector.png') }}"
                                                style="width: 25px;" alt=""></div>
                                        <p class="mt-1 mb-3 text-uppercase GothamLight">Swiss Caviar Cellular Therapy
                                            Supplement</p>
                                        <a href="outstanding-benefits.php" class="gold-btn"><span
                                                class="btn-content-wrapper"><span
                                                    class="btn-content-text">Discover</span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item mob-banner2"
                                style="background-image: url('{{ asset('/frontend/images/home/banner2M.jpg') }}'); background-repeat: no-repeat;">
                                <div class="home-banner-container">
                                    <div class="banner2-txt">
                                        <h2>MAKE YOUR <br>CELLS YOUNG AGAIN </h2>
                                        <div class="p-2" align="center"><img
                                                src="{{ asset('/frontend/images/home/Vector.png') }}"
                                                style="width: 25px;" alt=""></div>
                                        <p class="mt-1 mb-3 text-uppercase GothamLight">Swiss Caviar Cellular Therapy
                                            Supplement</p>
                                        <a href="outstanding-benefits.php" class="gold-btn"><span
                                                class="btn-content-wrapper"><span
                                                    class="btn-content-text">Discover</span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="item mob-banner3">
                                <div class="video-wrapper">
                                    <video autoplay="" muted="" loop="" playsinline="" preload="metadata"
                                        class="video-slide">
                                        <source
                                            src="{{ asset('/frontend/images/home/Video-Bg.mp4') }}"
                                            type="video/mp4" style="width: 100%">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <div aria-hidden="true" class="fa owl-prev fa-angle-left"></div>
                    <div class="fa owl-next fa-angle-right"></div>
                </div>
                <div class="owl-dots">
                    <div class="owl-dot active"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                </div>
            </div>

            <!--home  slider for mobile slider-->
        </div>
    </div>
    <!--home slider for mobile -->
    <div id="home-slider-mobile" class="owl-carousel owl-theme owl-loaded owl-drag" style="">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <div class="owl-item">
                    <div class="item mob-banner1"
                        style="background-image: url('{{ asset('/frontend/images/home/banner1M.jpg') }}'); background-repeat: no-repeat;">
                        <div class="home-banner-container">
                            <div class="banner1-txt">
                                <h2>ENDURING YOUTH <br>IS A DREAM NO LONGER</h2>
                                <div class="p-2" align="center"><img
                                        src="{{ asset('/frontend/images/home/Vector.png') }}"
                                        style="width: 25px;" alt=""></div>
                                <p class="mt-1 mb-3 text-uppercase GothamLight">Swiss Caviar Cellular Therapy Supplement
                                </p>
                                <a href="outstanding-benefits.php" class="gold-btn"><span
                                        class="btn-content-wrapper"><span
                                            class="btn-content-text">Discover</span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="item mob-banner2"
                        style="background-image: url('{{ asset('/frontend/images/home/banner2M.jpg') }}'); background-repeat: no-repeat;">
                        <div class="home-banner-container">
                            <div class="banner2-txt">
                                <h2>MAKE YOUR <br>CELLS YOUNG AGAIN </h2>
                                <div class="p-2" align="center"><img
                                        src="{{ asset('/frontend/images/home/Vector.png') }}"
                                        style="width: 25px;" alt=""></div>
                                <p class="mt-1 mb-3 text-uppercase GothamLight">Swiss Caviar Cellular Therapy Supplement
                                </p>
                                <a href="outstanding-benefits.php" class="gold-btn"><span
                                        class="btn-content-wrapper"><span
                                            class="btn-content-text">Discover</span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="item mob-banner3">
                        <div class="video-wrapper">
                            <video autoplay="" muted="" loop="" playsinline="" preload="metadata"
                                class="video-slide">
                                <source src="{{ asset('/frontend/images/home/Video-Bg.mp4') }}"
                                    type="video/mp4" style="width: 100%">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-nav disabled">
            <div aria-hidden="true" class="fa owl-prev fa-angle-left"></div>
            <div class="fa owl-next fa-angle-right"></div>
        </div>
        <div class="owl-dots">
            <div class="owl-dot active"><span></span></div>
            <div class="owl-dot"><span></span></div>
            <div class="owl-dot"><span></span></div>
        </div>
    </div>

    <!--home  slider for mobile slider-->
    </div>
    <!--banner-->
    <!-- Product Start-->
    <section class="content-inner bg-light">
        <div class="container">
            <div class="section-head style-1 wow fadeInUp text-start" data-wow-delay="0.1s" style="margin-bottom: 20px">
                <div class="" style="text-align: center;">
                    <h2 class="title">YOUTH, VITALITY AND
                        TIMELESS BEAUTY WITH <span style="color: #817552">CAVIAR</span></h2>
                </div>
            </div>

            <div class="row product-style1">
                <p style="text-align: center">
                    <img src="{{ asset('/frontend/images/home-slider/Vector.png') }}" alt="image"><br><br>
                </p>

                <div class="col-lg-12 col-md-12 GothamLight text-grey2"
                    style="text-align: center; padding-left:20%; padding-right:20%; font-size: 22px; ">
                    <p>In the rarefied air of the Swiss Alps, the secret to enduring youth has been unearthed. Through a
                        process named Swiss Cellular Therapy, each of our cells can be directly energized, stimulated
                        and replenished. All by harnessing the natural benefits of that most storied and prestigious of
                        indulgences, Black Sturgeon Caviar.</p>

                    <p style="padding-top:20px;"> <a href="#"
                            class="btn btn-secondary btn-lg text-uppercase">DISCOVER</a>
                    </p>

                    <p style="text-align: center; font-size: 22px; padding-top: 25px; padding-bottom: 50px">Caviarlieri
                        is made only in Switzerland.</p>
                </div>
                <br>

                <p style="text-align: center; padding: 0px">
                    <img src="{{ asset('/frontend/images/home/banner3.jpg') }}" alt="image"><br><br>
                </p>

                <div class="" style="text-align: center; padding-top: 30px; padding-bottom: 60px;">
                    <h2 class="title" style="font-size: 52px">RESET YOUR AGE. MAKE YOUR CELLS<br>
                        <span style="color: #817552">YOUNG AGAIN</span>
                    </h2>
                </div>


            </div>
        </div>
        <!-- </section> -->

        <!-- <section class="section"> -->
        <div class="container-fluid" style="background-color: #000810">
            <div class="float-none m-auto col-lg-9 col-md-9">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <img src="{{ asset('/frontend/images/home/image-27.png') }}" width="120%" alt=""
                            style="max-width: 110%">
                    </div>
                    <div class="col-lg-7 col-md-7 d-flex align-content-center align-items-center" align="center">
                        <div class="float-none py-5 m-auto col-lg-10 col-md-12">
                            <h1 class="text-white h1" style="font-size: 50px; letter-spacing: .025em;">ACTIVATE
                                YOUR<br>
                                ANTI-AGING GENES</h1>
                            <p style="color: #C8C3C3; font-size: 18px;padding-top:10px">Caviarlieri is clinically
                                tested
                                and scientifically proven
                                to combat the effects of biological aging</p>

                            <div class="p-3 mb-4">
                                <a href="#" class="btn btn-secondary btn-lg text-uppercase">Order Now</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </section> -->

        <!-- <section class="section"> -->
        <div class="float-none px-4 py-5 m-auto col-lg-8 col-md-10" align="center">
            <div>
                <h1 class="mb-4 text-uppercase h1" style="font-size: 50px; letter-spacing: .025em; padding-top: 40px; ">
                    This Is No Miracle. This Is <span style="color:#817552">Science </span></h1>
                <p class="text-uppercase" style="font-size: 20px">A Leader in Scientific Research for Biological Aging
                </p>
            </div>
            <div class="section1">
                <h4 class="text-uppercase section h4" style="padding-bottom: 10px;">1. Gene Activity Studies on <span
                        style="color:#817552">CAVIARLIERI </span></h4>
                <p class="GothamLight text-grey2">This is the new frontier of science where the gene activity levels
                    (mRNA gene expression) levels of clinical subjects are measured before and after taking Caviarlieri.
                    The studies show significant therapeutic outcomes on key anti-aging biomarkers.</p>
                <div class="p-3 mb-4"><a href="clinical-science.php" class="gold-btn"><span
                            class="btn-content-wrapper"><span class="btn-content-text">Discover</span></span></a>
                </div>
            </div>

            <div class="p-3 mb-3"><img src="images/home/Vector.png" width="30" alt=""></div>

            <div class="section1">
                <h4 class="text-uppercase section h4" style="padding-bottom: 10px;">2. PEER-REVIEWED SCIENTIFIC
                    STUDIES
                    ON <span style="color:#817552">CAVIARLIERI </span></h4>
                <p class="GothamLight text-grey2">These studies, which are published in PubMed and Europe PMC,
                    validated
                    the outstanding benefit claims of Caviarlieri as a potent caviar supplement, which can help delay
                    the onset and progression of aging and chronic degenerative diseases.</p>
                <div class="p-3 mb-4"><a href="clinical-science.php" class="gold-btn"><span
                            class="btn-content-wrapper"><span class="btn-content-text">Discover</span></span></a>
                </div>
            </div>

            <div class="p-3 mb-3"><img src="images/home/Vector.png" width="30" alt=""></div>

            <div class="section1">
                <h4 class="text-uppercase section h4" style="padding-bottom: 10px;">3. EMPIRICAL STUDIES ON KEY
                    INGREDIENTS OF <span style="color:#817552">CAVIARLIERI </span></h4>
                <p class="GothamLight text-grey2">Randomized double blind placebo empirical studies on the key
                    ingredients of Caviarlieri demonstrated and validated the benefits experienced by clinical subjects
                    from the inherent and known properties of the bioactive ingredients encapsulated in Caviarlieri.</p>
                <div class="p-3 mb-4"><a href="clinical-science.php" class="gold-btn"><span
                            class="btn-content-wrapper"><span class="btn-content-text">Discover</span></span></a>
                </div>
            </div>

        </div>
        <!-- </section>
              <section> -->
        <div class="container-fluid"
            style="background-image:url('{{ asset('frontend/images/home/bg2.jpg') }}'); background-repeat: no-repeat; background-position: center; background-size: cover; padding: 50px 0">
            <div class="float-none m-auto col-lg-10 col-md-11" align="center">

                <h1 style="color: #FFFFFF; line-height: 1.2;" class="px-2 mb-4 h1">PHARMACEUTICAL GRADE CAVIAR
                    SUPPLEMENT <br> <span style="color: #ffdf9d;">OUTSTANDING BENEFITS</span></h1>
                <div class="float-none m-auto col-lg-10 col-md-12" align="center">
                    <div class="m-0 row">
                        <div class="px-0 col-md-3 py-md-3">
                            <div class="boost position-relative h-100">
                                <p class="my-auto "><a class="anchor" href="increase-cellular-energy.php"
                                        style="color: #fff;">Energy Boost </a></p>
                            </div>
                        </div>

                        <div class="px-0 col-md-3 py-md-3">
                            <div class="boost position-relative h-100">
                                <p class="my-auto "><a class="anchor" href="brain-enhancement.php"
                                        style="color: #fff;">Brain Enhancement </a></p>
                            </div>
                        </div>

                        <div class="px-0 col-md-3 py-md-3">
                            <div class="boost">
                                <p class="my-auto "><a class="anchor" href="metabolic-syndrome.php"
                                        style="color: #fff;"> Alleviate Metabolic Syndrome </a></p>
                            </div>
                        </div>

                        <div class="px-0 col-md-3 py-md-3">
                            <div class="boost position-relative h-100">
                                <p class="my-auto "><a class="anchor" href="beauty-enhancement.php"
                                        style="color: #fff;">Ageless Beauty</a></p>
                            </div>
                        </div>

                        <div class="px-0 col-md-3 py-md-3">
                            <div class="boost">
                                <p class="my-auto "><a class="anchor" href="joint-pain.php" style="color: #fff;">Joint
                                        Pain Reduction</a></p>
                            </div>
                        </div>

                        <div class="px-0 col-md-3 py-md-3">
                            <div class="boost">
                                <p class="my-auto p"><a class="anchor" href="mental-health.php"
                                        style="color: #fff;">Better Sleep</a></p>
                            </div>
                        </div>

                        <div class="px-0 col-md-3 py-md-3">
                            <div class="boost">
                                <p class="my-auto "><a class="anchor" href="improve-sperm-quality.php"
                                        style="color: #fff;">Sexual Performance</a></p>
                            </div>
                        </div>

                        <div class="px-0 col-md-3 py-md-3">
                            <div class="boost position-relative h-100">
                                <p class="my-auto "><a class="anchor" href="inflammation.php"
                                        style="color: #fff;">Anti-Inflammatory</a></p>
                            </div>
                        </div>

                        <div class="px-0 col-md-3 py-md-3">
                            <div class="">
                            </div>
                        </div>

                        <div class="px-0 col-md-3 py-md-3">
                            <div class="boost">
                                <p class="my-auto"><a class="anchor" href="immunity.php" style="color: #fff;">Immune
                                        Resilience</a></p>
                            </div>
                        </div>

                        <div class="px-0 col-md-3 py-md-3">
                            <div class="boost position-relative h-100">
                                <p class="my-auto"><a class="anchor" href="osteoporosis.php" style="color: #fff;">Bone
                                        Health</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" align="center">
                    <div class="py-2 mt-3 mt-md-0 py-md-5">
                        <a href="outstanding-benefits.php" class="white-btn"><span class="btn-content-wrapper"><span
                                    class="btn-content-text">Read More</span></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- </section>

              <section> -->
        <div class="float-none px-3 m-auto col-lg-8 col-md-8" style="padding: 100px 0">
            <h1 class="text-center h1 text-md-start" style="font-weight: 400;">TRUSTED BY <span
                    style="color:#817552 !important;">OLYMPIANS</span></h1>
            <h1 class="text-center h1 text-md-end" style="font-weight: 400;">AND <span
                    style="color:#817552 !important;">PROFESSIONAL ATHLETES.</span></h1>
        </div>
        <!-- </section>


              <section> -->
        <div class="px-4 container-fluid px-md-0">
            <div class="m-0 row">
                <div class="px-0 col-lg-6 col-md-6">
                    <img src="{{ asset('frontend/images/home/haeth2.jpg') }}" width="100%" alt="">
                </div>

                <div class="px-0 col-lg-6 col-md-6 d-flex align-content-center align-items-center"
                    style="background-color: #001026; color: #FFFFFF" align="center">
                    <div class="float-none px-3 py-5 m-auto col-lg-9 col-md-11" align="center">
                        <h3 class="mb-2 mb-lg-4 h3" style="color: #fff;">Olympian Emmanouil Karalis, Greece</h3>
                        <h5 class="mb-2 mb-lg-5 h5" style="color: #fff;">Ranked 4th In Tokyo Olympic Pole Vault, World
                            Best Performer Holder</h5>
                        <p class="m-0 text-white GothamLight">"Caviarlieri helps boost my strength and stamina."</p>
                        <div class="my-2 col-lg-6 col-md-6 my-lg-5" style="border-bottom: 1px solid #fff"></div>
                        <p class="m-0 text-white GothamLight">I was amazed that Caviarlieri – Swiss Caviar Cell Therapy
                            supplement has helped increase my cellular energy significantly, improve my sleep quality
                            and enhance my physical stamina and endurance. Caviarlieri has definitely helped enhance my
                            performance at the Tokyo Olympics 2021.</p>
                    </div>
                </div>
            </div>
            <div class="m-0 row">
                <div class="px-0 col-lg-6 col-md-6 order-md-2">
                    <img src="{{ asset('frontend/images/home/haeth1.jpg') }}" width="100%" height="100%"
                        alt="">
                </div>

                <div class="px-0 col-lg-6 col-md-6 d-flex align-content-center align-items-center"
                    style="background-color: #001026; color: #FFFFFF" align="center">
                    <div class="float-none px-3 py-5 m-auto col-lg-9 col-md-11" align="center">
                        <h3 class="mb-2 mb-lg-4 h3" style="color: #fff;">Olympian Stefanos Dimitriadis, Greece</h3>
                        <h5 class="mb-2 mb-lg-5 h5" style="color: #fff;">Dietitian-Nutritionist, BSc, MSc, RD</h5>
                        <p class="m-0 text-white GothamLight">"Caviarlieri makes my road to Olympics easier."</p>
                        <div class="my-2 col-lg-6 col-md-6 my-lg-5" style="border-bottom: 1px solid #fff"></div>
                        <p class="m-0 text-white GothamLight">Since I started using Caviarlieri, I noticed a huge
                            improvement in my Stamina and Endurance. Overall, my muscle fatigue and soreness were
                            reduced significantly.My sleep quality has improved tremendously and my mood is also
                            elevated. I can train harder and I am definitely more focused.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="px-0 container-fluid">
            <img alt="" src="{{ asset('frontend/images/home/bgndc.png') }}" width="100%">
        </div>
    </section>


    <section class="section">
        <div class="float-none m-auto col-lg-4 col-md-4">
            <h1 class="text-center h1 text-md-start" style="font-weight: 400;">JOURNALS</h1>
            <h1 class="text-center h1 text-md-end" style="font-weight: 400;">AND <span
                    style="color:#817552 !important;">FINDINGS</span></h1>
        </div>
    </section>

    <section class="section">
        <div class="float-none px-2 m-auto col-lg-10 col-md-10">
            <div class="m-0 mb-5 row">
                <div class="mb-5 col-lg-6 col-md-6 px-lg-5">
                    <img alt=""
                        src="{{ asset('frontend/images/home/caviarlieri-caviar-supplement-softgels.jpg') }}"
                        width="100%">
                    <h4 class="mt-3 mb-1 h4">The Amazing Benefits of
                        Highly Polymerized Fish Collagen Peptides with Elastin – Caviarlieri</h4>
                    <p class="mb-4 GothamLight">What is Fish Collagen? Fish Collagenis collagen protein derived from
                        fish, specifically fish skin, scales, and bones. Fish collagen is special because it ...</p>
                    <a href="blog-content.php?bid=16" class="blog-white-btn"><span class="btn-content-wrapper"><span
                                class="btn-content-text">Read More <span><img
                                        src="{{ asset('frontend/images/home/btn-arrow.png') }}"
                                        alt="" /></span></span></span></a>
                </div>

                <div class="mb-5 col-lg-6 col-md-6 px-lg-5">
                    <img alt=""
                        src="{{ asset('frontend/images/home/caviarlieri-cellular-therapy-supplement.jpg') }}"
                        width="100%">
                    <h4 class="mt-3 mb-1 h4">The World’s Most
                        Effective Caviar DNA Extract with Marine Bioactive Peptides</h4>
                    <p class="mb-4 GothamLight">Sturgeon Caviar is an exceptional nutritional ingredient, rich in amino
                        acids and essential fatty acids. The human body can make most of the types of fats it needs for
                        our body from other fats or raw materials...</p>
                    <a href="blog-content.php?bid=26" class="blog-white-btn"><span class="btn-content-wrapper"><span
                                class="btn-content-text">Read More <span><img
                                        src="{{ asset('frontend/images/home/btn-arrow.png') }}"
                                        alt="" /></span></span></span></a>
                </div>
            </div>

            <div class="m-0 row">
                <div class="mb-5 col-lg-4 col-md-6 px-lg-4"><img alt=""
                        src="{{ asset('frontend/images/home/effective-supplements-for-joint-pain.jpg') }}"
                        width="100%">
                    <h4 class="mt-3 mb-1 h4">Are Supplements effective
                        for Joint Pain?</h4>
                    <p class="mb-4 GothamLight">If you have joint pain from arthritis, you may be looking for ways to
                        help to reduce the severity of your...</p>
                    <a href="blog-content.php?bid=53" class="blog-white-btn"><span class="btn-content-wrapper"><span
                                class="btn-content-text">Read More <span><img
                                        src="{{ asset('frontend/images/home/btn-arrow.png') }}"
                                        alt="" /></span></span></span></a>
                </div>

                <div class="mb-5 col-lg-4 col-md-6 px-lg-4">
                    <img alt=""
                        src="{{ asset('frontend/images/home/sustainable-immunity-for-long-term-health.jpg') }}"
                        width="100%">
                    <h4 class="mt-3 mb-1 h4">Why Is Sustainable
                        Immunity Important for Your Long-Term Health</h4>
                    <p class="mb-4 GothamLight">For those of us who had hoped that 2021 will be the year that will put
                        the pandemic in the...</p>
                    <a href="blog-content.php?bid=54" class="blog-white-btn"><span class="btn-content-wrapper"><span
                                class="btn-content-text">Read More <span><img
                                        src="{{ asset('frontend/images/home/btn-arrow.png') }}"
                                        alt="" /></span></span></span></a>
                </div>

                <div class="mb-5 col-lg-4 col-md-6 px-lg-4">
                    <img alt="" src="{{ asset('frontend/images/home/what-is-biological-age.jpg') }}"
                        width="100%">
                    <h4 class="mt-3 mb-1 h4">What is your “Body Age” –
                        Biological Age?</h4>
                    <p class="mb-4 GothamLight">Do you know that you have 2 “ages”? Chronological age is the age of a
                        person as measured from birth...</p>
                    <a href="blog-content.php?bid=1" class="blog-white-btn"><span class="btn-content-wrapper"><span
                                class="btn-content-text">Read More <span><img
                                        src="{{ asset('frontend/images/home/btn-arrow.png') }}"
                                        alt="" /></span></span></span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="float-none m-auto col-lg-9 col-md-11">
            <div class="p-2" align="center">
                <h1 class="mb-0 h1" style="font-weight: 400;">GLOBALLY ACCREDITED <span
                        style="color:#817552;">CERTIFICATIONS</span></h1>
            </div>
            <div class="section">
                <div class="px-5 m-0 row seven-cols px-md-0" align="center">
                    <div class="px-3 col-md-1"><img src="{{ asset('frontend/images/home/logo1.png') }}" width="100%"
                            alt="" /></div>
                    <div class="px-3 col-md-1"><img src="{{ asset('frontend/images/home/logo2.png') }}" width="100%"
                            alt="" /></div>
                    <div class="px-3 col-md-1"><img src="{{ asset('frontend/images/home/logo3.png') }}" width="100%"
                            alt="" /></div>
                    <div class="px-3 col-md-1"><img src="{{ asset('frontend/images/home/logo4.png') }}" width="100%"
                            alt="" /></div>
                    <div class="px-3 col-md-1"><img src="{{ asset('frontend/images/home/logo5.png') }}" width="100%"
                            alt="" /></div>
                    <div class="px-3 col-md-1"><img src="{{ asset('frontend/images/home/logo6.png') }}" width="100%"
                            alt="" /></div>
                    <div class="px-3 col-md-1"><img src="{{ asset('frontend/images/home/logo7.png') }}" width="100%"
                            alt="" /></div>
                </div>
            </div>
            <div class="container px-3 text-center section" align="center" style="padding-bottom: 60px;">
                <div class="float-none m-auto col-lg-8 col-md-6">
                    <p class="mb-0 p-small GothamLight text-grey2">These statements have not been evaluated by the Food
                        and Drug Administration.</p>
                    <p class="p-small GothamLight text-grey2">This product is not intended to diagnose, treat, cure or
                        prevent any disease.</p>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
