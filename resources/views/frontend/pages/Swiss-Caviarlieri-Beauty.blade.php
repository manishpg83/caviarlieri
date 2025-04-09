@extends('frontend.layouts.app')

@section('title', 'About | Swiss Caviarlieri')
@section('header', 'About | Swiss Caviarlieri')

@section('content')

    <style>
        .bgclr-black {
            background-color: #16171F;
        }

        .heading1 {
            font-size: 38px;
        }

        .heading2 {
            font-size: 28px;
        }

        .heading3 {
            font-size: 23px;
        }

        .sub-heading {
            font-size: 24px;
        }

        .content {
            font-size: 16px !important;
        }

        .content1 {
            font-size: 15px !important;
        }

        .CVbeauty-bg {
            background-image: url("{{ asset('frontend/images/Swiss-Caviarlieri-Beauty/CV_Beauty_Girl-03.jpg') }}");
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 700px;
        }

        .serumbanner-bg {
            background-image: url("{{ asset('frontend/images/Swiss-Caviarlieri-Beauty/Serum Banner-02.jpg') }}");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 800px;
        }

        .girlbanner-bg {
            background-image: url("{{ asset('frontend/images/Swiss-Caviarlieri-Beauty/Girl banner.jpg') }}");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 600px;
        }

        .girlbanner-text {
            padding-top: 250px;
        }



        .eyeimage-bg {
            background-image: url("{{ asset('frontend/images/Swiss-Caviarlieri-Beauty/Eye Image.jpg') }}");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 750px;
        }


        .bettertogether-bg {
            background-image: url("{{ asset('frontend/images/Swiss-Caviarlieri-Beauty/BETTER TOGETHER.jpg') }}");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 650px;
        }

        .ingredients {
            padding-top: 200px;
        }




        @media (max-width: 768px) {
            .ingredients {
                padding-top: 65px;
            }



            .heading1 {
                font-size: 26px;
            }

            .heading2 {
                font-size: 20px;
            }

            .heading3 {
                font-size: 20px;
            }

            .sub-heading {
                font-size: 18px;
            }


            .content {
                font-size: 15px !important;
            }

            .content1 {
                font-size: 16px !important;
            }

            .CVbeauty-bg {
                background-position: right;
                background-repeat: no-repeat;
                min-width: 45vh;
                height: 500px;
            }

            .cavialieri-beauty img {
                height: 200px !important;
            }
        }
    </style>

    <section class="bgclr-black">
        <div class=" ingredients text-center pb-5 d-lg-none d-block">
            <h2 class="heading2 
         text-white pt-5">
                <img class="pb-4"
                    src="{{ asset('frontend/images/Swiss-Caviarlieri-Beauty/cropped-Caviarlieri-logo.png') }}"
                    alt="" width="150"><br>

                SWISS CAVIARLIERI BEAUTY
            </h2>
            <h2 class="sub-heading  text-white">Platinum Caviar Serum </h2>
            <h2 class="sub-heading  text-white">Eye Brightening Cream </h2>
        </div>
        <div class="container-fluid CVbeauty-bg">
            <div class="row">
                <div class="col-lg-6 float-none m-auto ingredients text-center d-lg-block d-none">
                    <h2 class="heading2">
                        <img class="pb-4"
                            src="{{ asset('frontend/images/Swiss-Caviarlieri-Beauty/cropped-Caviarlieri-logo.png') }}"
                            alt="" width="150"><br>
                        SWISS CAVIARLIERI BEAUTY
                    </h2>
                    <h2 class="sub-heading ">Platinum Caviar Serum </h2>
                    <h2 class="sub-heading ">Eye Brightening Cream </h2>
                </div>
                <div class="col-lg-6 ">
                </div>
            </div>
        </div>
    </section>
    <!--section 1 end-->


    <!--section 2 start-->
    <section class="bgclr-black py-5 px-3">
        <div class="container-fluid">
            <div class="col-lg-6 float-none mx-auto ">
                <div class="heading3 text-center text-white">
                    SWISS CAVIARLIERI BEAUTY
                </div>
                <div class="heading1 text-center" style="color: #88754e;">
                    INTERCEPT SKIN AGING
                </div>
                <div class="heading3 text-center text-white">
                    WHERE IT BEGINS
                </div>
                <p class="content text-white pt-5 text-lg-start text-center">
                    It's never too early or too late to address skin aging by stimulating cell renewal and repair.
                    Introducing Caviarlieri’s Swiss Cellular Rejuvenating skincare regime, the Platinum Caviar Facial Serum
                    and Eye Brightening Cream.
                </p>
                <p class="content text-white py-3 text-lg-start text-center">
                    Enriched with luxurious caviar and infused with precious platinum, exquisite pearl extracts and other
                    potent anti-ageing ingredients, Caviarlieri facial serum and eye cream work synergistically to slow down
                    the aging process. By targeting the root cause of aging at the cellular level, these potent extracts
                    prevent moisture loss, treat deep-seated inflammation, stimulate skin cell turnover, boost collagen
                    synthesis and maintain healthy skin.
                </p>
                <p class="content text-white pb-3 text-lg-start text-center">
                    It transcends everything you dream about having youthful skin.
                </p>
            </div>
        </div>
    </section>
    <!--section 2 end-->

    <!-- section 3 strat-->
    <section>
        <div class="container-fluid bgclr-black d-lg-none d-blok ">
            <div class="">
                <div class="ingredients">
                    <div class="px-3 pb-5 ">
                        <div class="heading3 text-center text-white">
                            AGE DEFIANT INGREDIENTS
                        </div>
                        <div class="heading1 text-center" style="color: #88754e;">
                            BEAUTY RESISTS TIME
                        </div>
                        <div class="heading3 text-center text-white">
                            PLATINUM CAVIAR FACIAL SERUM
                        </div>
                        <p class="content text-white pt-5 text-lg-start text-center ">
                            Developed, researched and made only in Switzerland, Caviarlieri Platinum Caviar Serum is imbued
                            with luxurious Caviar and the powerful anti-aging benefits of Platinum.
                        </p>
                        <p class="content text-white py-3 text-lg-start text-center">
                            Its creation is also inspired by the infusion of exquisite plant extracts Snow Algae, Sweet Iris
                            Stem Cells and Marigold Flower with its extraordinary ability to protect, regenerate, revitalize
                            and moisturize your skin.
                            Experience unimaginable skin transformation with Caviarlieri Platinum Caviar Serum.

                        </p>
                        <p class="content text-white pb-3 text-lg-start text-center">
                            You will never look your age again.
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="d-lg-none d-block ">
            <img src="{{ asset('frontend/images/Swiss-Caviarlieri-Beauty/Serum Banner-02.jpg') }}"
                alt="" width="100%">
        </div>
        <div class="container-fluid serumbanner-bg d-lg-block d-none">
            <div class="container">
                <div class="row ingredients">
                    <div class="col-lg-6  pb-5 GothamLigh">
                        <div class="heading3 text-center text-white">
                            AGE DEFIANT INGREDIENTS
                        </div>
                        <div class="heading1 text-center" style="color: #88754e;">
                            BEAUTY RESISTS TIME
                        </div>
                        <div class="heading3 text-center text-white">
                            PLATINUM CAVIAR FACIAL SERUM
                        </div>
                        <p class="content text-white pt-5 text-lg-start text-center ">
                            Developed, researched and made only in Switzerland, Caviarlieri Platinum Caviar Serum is imbued
                            with luxurious Caviar and the powerful anti-aging benefits of Platinum.
                        </p>
                        <p class="content text-white py-3 text-lg-start text-center">
                            Its creation is also inspired by the infusion of exquisite plant extracts Snow Algae, Sweet Iris
                            Stem Cells and Marigold Flower with its extraordinary ability to protect, regenerate, revitalize
                            and moisturize your skin.
                            Experience unimaginable skin transformation with Caviarlieri Platinum Caviar Serum.

                        </p>
                        <p class="content text-white pb-3 text-lg-start text-center">
                            You will never look your age again.
                        </p>
                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section 3 end-->

    <!--section 4 start-->
    <section>
        <div class="container-fluid d-lg-none d-block bgclr-black">
            <div class="px-3 py-5 ">
                <div class="heading3 text-center text-white">
                    THE SECRET TO
                </div>
                <div class="heading1 text-center" style="color: #88754e;">
                    A CAPTIVATING GAZE
                </div>
            </div>
        </div>
        <div class="d-lg-none d-block">
            <img src="{{ asset('frontend/images/Swiss-Caviarlieri-Beauty/Girl banner.jpg') }}"
                alt="" width="100%">
        </div>
        <div class="container-fluid girlbanner-bg d-lg-block d-none">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-4 float-none m-auto ">
                    <div class="heading3 text-center girlbanner-text">
                        THE SECRET TO
                    </div>
                    <div class="heading1 text-center" style="color: #88754e;">
                        A CAPTIVATING GAZE
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--section 4 end-->

    <!--section 5 start-->
    <section>
        <div class="container-fluid bgclr-black d-lg-none d-blok ">
            <div class="">
                <div class="ingredients">
                    <div class="px-3 pb-5 ">
                        <div class="heading3 text-center text-white">
                            DISCOVER SWISS FORMULATED
                        </div>
                        <div class="heading1 text-center" style="color: #88754e;">
                            EYE BRIGHTENING CREAM
                        </div>

                        <p class="content text-white pt-5 text-lg-start text-center ">
                            This advanced anti-aging, brightening eye cream captures the elements of Swiss Cellular Therapy,
                            delivering amazing results and addressing the most visible signs of aging around our eyes.
                        </p>
                        <p class="content text-white py-3 text-lg-start text-center">
                            Infused with the extraordinary caviar and pearl extracts, this eye cream helps to illuminate and
                            revitalize the beauty of our eyes while activating cellular rejuvenation and repair around our
                            delicate eyes.

                        </p>
                        <p class="content text-white pb-3 text-lg-start text-center">
                            Your eyes will radiate with brilliant beauty.
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="d-lg-none d-block">
            <img src="{{ asset('frontend/images/Swiss-Caviarlieri-Beauty/Eye Image.jpg') }}"
                alt="" width="100%">
        </div>
        <div class="container-fluid eyeimage-bg d-lg-block d-none">
            <div class="container">
                <div class="row ingredients">
                    <div class="col-lg-6  pb-5 GothamLigh">
                        <div class="heading3 text-center text-white">
                            DISCOVER SWISS FORMULATED
                        </div>
                        <div class="heading1 text-center" style="color: #88754e;">
                            EYE BRIGHTENING CREAM
                        </div>

                        <p class="content text-white pt-5 text-lg-start text-center ">
                            This advanced anti-aging, brightening eye cream captures the elements of Swiss Cellular Therapy,
                            delivering amazing results and addressing the most visible signs of aging around our eyes.
                        </p>
                        <p class="content text-white py-3 text-lg-start text-center">
                            Infused with the extraordinary caviar and pearl extracts, this eye cream helps to illuminate and
                            revitalize the beauty of our eyes while activating cellular rejuvenation and repair around our
                            delicate eyes.

                        </p>
                        <p class="content text-white pb-3 text-lg-start text-center">
                            Your eyes will radiate with brilliant beauty.
                        </p>
                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section 5 end-->

    <!--section 6 start-->
    <section>
        <div class="container-fluid bgclr-black d-lg-none py-5 d-block">
            <div class="text-center  heading1" style="color: #88754e;">
                BETTER TOGETHER
            </div>
            <div class="text-center sub-heading text-white ">
                CAVIAR SUPPLEMENT <br>
                PLATINUM CAVIAR FACIAL SERUM<br>
                EYE BRIGHTENING CREAM
            </div>

        </div>
        <div class="d-lg-none">
            <img src="{{ asset('frontend/images/Swiss-Caviarlieri-Beauty/BETTER TOGETHER.jpg') }}"
                alt="" width="100%">
        </div>

        <div class="container-fluid bettertogether-bg d-lg-block d-none">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-7">

                    </div>
                    <div class="col-lg-5 float-none m-auto pt-5">
                        <div class="text-center heading1" style="color: #88754e;">
                            BETTER TOGETHER
                        </div>
                        <div class="text-center heading3 ">
                            CAVIAR SUPPLEMENT <br>
                            PLATINUM CAVIAR FACIAL SERUM<br>
                            EYE BRIGHTENING CREAM
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--section 6 end-->

    <!--section 7 start -->
    <section>
        <div class="cotainer-fluid pb-lg-5 px-4">
            <div class="col-lg-6 float-none mx-auto pb-5">
                <p class="content pt-5 text-lg-start text-center text-block ">
                    Together, they form the perfect combination to effectively combat cellular aging. Experience the
                    unprecedented Swiss regenerative benefits of Caviarlieri Swiss Caviar Supplement, Platinum Caviar Facial
                    Serum and Brightening Eye Cream.
                </p>
                <p class="content py-3 text-lg-start text-center">
                    Immerse yourself in the ultimate rejuvenating experience for youth, vitality and ageless beauty.
                </p>
                <div class="text-center heading1" style="color: #88754e;">
                    THOSE WHO KNOW WILL KNOW
                </div>
                <div class="p-3" align="center"><img
                        src="{{ asset('/frontend/images/home-slider/Vector.png') }}" style="width: 30px;"
                        alt=""></div>
            </div>
        </div>
    </section>
    <!--section 7 end-->

@endsection
