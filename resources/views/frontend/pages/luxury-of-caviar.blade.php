@extends('frontend.layouts.app')

@section('title', 'About | Celergen')
@section('header', 'About | Celergen')

@section('content')

    <style type="text/css">
        .sidemenu4 {
            color: #999999 !important;
            border-right: 4px solid #000000 !important;
        }
    </style>

    <section>
        <div class="container-fluid py-5 bg-opacity-container" style="background-color: #01060c">
            <div class="title-top-margin position-relative text-center" style="z-index: 500;">
                <h2 class="h2 GothamLight" style="color: #cebc92">LUXURY OF CAVIAR</h2>
            </div>
            <img style="top:-339%; position: absolute; left: 0; opacity: .2"
                src="{{ asset('frontend/images/luxury-of-caviar/Caviarlieri_CoverRevised-scaled.jpg') }}"
                alt="" />
        </div>
    </section>

    <section>
        <div class="container-fluid bg-darkblue py-5">
            <div class="container1">
                <div class="row">
                    <div class="col-lg-6 col-md-6 px-md-4">
                        <img class="animate-img mb-4"
                            src="{{ asset('frontend/images/luxury-of-caviar/luxury-of-caviar.png') }}"
                            width="100%" alt="" />
                    </div>

                    <div class="col-lg-6 col-md-6 px-md-5 text-white GothamLight" style="line-height: 1.5">
                        <p class="font-16px">Caviar has trumpeted status, wealth, prestige and sex appeal and is today a
                            symbol of sensual love, beauty, luxury and, health. For centuries, it has been heralded as the
                            most extravagant aphrodisiac.</p>

                        <p class="font-16px">Unprecedented in its potency and prized across the globe, Black Sturgeon Caviar
                            is an exceptional nutritional product rich in amino acids with very high concentrations of
                            nutrients.</p>

                        <p class="font-16px">Caviarlieri is a unique anti-aging creation, harnessing the intrinsic value of
                            Black Caviar to create the ultimate luxury of youth, personifying beauty, energy, and
                            irresistible appeal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-5">
            <div class="container1">
                <div class="row">
                    <div class="col-lg-6 col-md-6 px-md-5 GothamLight" style="line-height: 1.7">
                        <h2 class="h2">THE REVOLUTIONARY BREAKTHROUGH OF CAVIAR</h2>
                        <img class="d-block d-md-none my-3"
                            src="{{ asset('frontend/images/luxury-of-caviar/box-on-the-water.jpg') }}"
                            width="100%" alt="" />
                        <p class="font-16px">Encapsulating the potent bio active nutrients of Caviar into a supplement has
                            been a drearn and a formidable challenge for the Anti-Aging Medical World for several decades.
                            Our panel of Anti-Aging medical experts comprising distinguished Swiss French and German Cell
                            Therapists, biotech chemists have created, after 20 years of intensive research, this
                            Age-Defying Caviar Supplement, Caviarlieri.</p>

                        <p class="font-16px">Using its proprietary Swiss Cold “Cellularix” DNA extraction technology,
                            Caviarlieri is encapsulated with the potent Caviar Cellular DNA Extract and premium bio active
                            Marine peptides – a product unparalleled in energy, strength and beauty.</p>

                        <p class="font-16px">Irrespective of your age, Caviarlieri’s unique and intrinsic ability to deliver
                            the most outstanding and awesome anti-aging results becomes evident almost immediately.</p>
                    </div>

                    <div class="col-lg-6 col-md-6 px-md-4 d-none d-md-block">
                        <img class="animate-img"
                            src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/luxury/box-on-the-water.jpg"
                            width="100%" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var oldScrollY = window.scrollY;
        window.onscroll = function(e) {
            if (oldScrollY < window.scrollY) {
                $(".animate-img").addClass("animate-up");
                $(".animate-img").removeClass("animate-down");
            } else {
                $(".animate-img").removeClass("animate-up");
                $(".animate-img").addClass("animate-down");
            }
            oldScrollY = window.scrollY;
        }
    </script>
@endsection
