@extends('frontend.layouts.app')

@section('title', 'About | Celergen')
@section('header', 'About | Celergen')

@section('content')

    <style type="text/css">
        .modal-dialog {
            max-width: 640px !important;
            width: 100%;
        }

        .modal-content {
            border-radius: 0;
            border: 0;
        }

        .modal-backdrop {
            opacity: 0.9 !important;
        }

        .owl-nav {
            padding: 0 15px !important;
        }

        .owl-prev,
        .owl-next {
            background: none !important;
            font-size: 35px !important;
            margin: 8px !important;
            height: 30px !important;
        }
    </style>

    <section>
        <div class="container-fluid px-0">
            <div id="expert-slider" class="owl-carousel owl-theme px-0 owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item" >
                        <div class="owl-item cloned">
                            <div class="item">
                                <div class="expert-bg"
                                    style="background-image: url('{{ asset('frontend/images/experts-opinions/emmanouil-karalis-tokyo-olympics-1.jpg') }}')">
                                    <div
                                        class="slider-inner h-100 col-lg-4 col-sm-8 col-md-6 align-items-center pl-md-5 px-5 text-white">
                                        <div class="text-left">
                                            <div class="profile-circle">
                                                <img src="{{ asset('frontend/images/experts-opinions/emmanouil-karalis-profile.jpg') }}"
                                                    width="100%" alt="">
                                            </div>
                                            <h3 class="h3 mb-4 text-white">Dr. Ghislaine Beilin, France</h3>
                                            <p class="p-small GothamLight mb-4">Dermatologist, World renowned Aesthetic
                                                Medicine Speaker, IMCAS Academy</p>
                                            <p class="p-small GothamBook mb-4">“Caviarlieri is a great breakthrough in the
                                                field of stem cell research and anti-aging medicine.”</p>
                                            <a href="#" class="doctor-a1 white-btn-expert"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" >
                            <div class="item">
                                <div class="expert-bg"
                                    style="background-image: url('https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images//expert-review/ivana-scheiz2.jpg')">
                                    <div
                                        class="slider-inner h-100 col-lg-4 col-sm-8 col-md-6 align-items-center pl-md-5 px-5 text-white">
                                        <div class="text-left">
                                            <div class="profile-circle">
                                                <img src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/expert-review/ivana-scaled.jpg"
                                                    width="100%" alt="">
                                            </div>
                                            <h3 class="h3 mb-4 text-white">Ms. Ivana Sgheiz, Switzerland</h3>
                                            <p class="p-small GothamLight mb-4">CEO, Chenot Palace, Weggis Switzerland, <br>
                                                Group Director - Chenot International</p>
                                            <p class="p-small GothamBook mb-4">“Caviarlieri has helped to improve my energy
                                                and vitality tremendously.”</p>
                                            <a href="#" class="doctor-a1 white-btn-expert"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" >
                            <div class="item">
                                <div class="expert-bg"
                                    style="background-image: url('https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images//expert-review/dr-Michael-papacharalampous.jpg')">
                                    <div
                                        class="slider-inner h-100 col-lg-4 col-sm-8 col-md-6 align-items-center pl-md-5 px-5 text-white">
                                        <div class="text-left">
                                            <div class="profile-circle">
                                                <img src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/expert-review/Michael.jpg"
                                                    width="100%" alt="">
                                            </div>
                                            <h3 class="h3 mb-4 text-white">Dr. Michael Papacharalambous, Greece</h3>
                                            <p class="p-small GothamLight mb-4">Director of Internal Medicine, Metropolitan
                                                Hospital Athens,
                                                Medical Director of Orthobiotiki S.A</p>
                                            <p class="p-small GothamBook mb-4">“Caviarlieri helps Reduce the Inflammation of
                                                the joints, so No Pain of the Joints.”</p>
                                            <a href="#" class="doctor-a1 white-btn-expert"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" >
                            <div class="item">
                                <div class="expert-bg"
                                    style="background-image: url('https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images//expert-review/emmanouil-karalis-tokyo-olympics-1.jpg')">
                                    <div
                                        class="slider-inner h-100 col-lg-4 col-sm-8 col-md-6 align-items-center pl-md-5 px-5 text-white">
                                        <div class="text-left">
                                            <div class="profile-circle">
                                                <img src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/expert-review/emmanouil-karalis-profile.jpg"
                                                    width="100%" alt="">
                                            </div>
                                            <h3 class="h3 mb-4 text-white">Ranked 4th in Tokyo Olympic Pole Vault</h3>
                                            <p class="p-small GothamLight mb-4">Olympian Emmanouil Karalis, World Best
                                                Performance Holder, Greece</p>
                                            <p class="p-small GothamBook mb-4">“Caviarlieri helps boost my strength and
                                                stamina.”</p>
                                            <a href="#" class="expert-a1 white-btn-expert"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" >
                            <div class="item">
                                <div class="expert-bg"
                                    style="background-image: url('{{ asset('frontend/images/experts-opinions/grand-resort-bad-ragaz-spa.jpg') }}')">
                                    <div
                                        class="slider-inner h-100 col-lg-4 col-sm-8 col-md-6 align-items-center pl-md-5 px-5 text-white">
                                        <div class="text-left">
                                            <div class="profile-circle">
                                                <img src="{{ asset('frontend/images/experts-opinions/Brigitte-Bollinger.jpg') }}"
                                                    width="100%" alt="">
                                            </div>
                                            <h3 class="h3 mb-4 text-white">Dr.Med. Brigette Bollinger, Switzerland</h3>
                                            <p class="p-small GothamLight mb-4">Specialist FMH for Dermatology and
                                                Venereology, Medical Centre Bad Ragaz, Switzerland</p>
                                            <p class="p-small GothamBook mb-4">“Cell Regeneration Is Activated in
                                                Caviarlieri.”</p>
                                            <a href="#" class="doctor-a1 white-btn-expert"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active">
                        <div class="owl-item active" >
                            <div class="item">
                                <div class="expert-bg"
                                    style="background-image: url('{{ asset('frontend/images/experts-opinions/imcas-academy.jpg') }}')">
                                    <div
                                        class="slider-inner h-100 col-lg-4 col-sm-8 col-md-6 align-items-center pl-md-5 px-5 text-white">
                                        <div class="text-left">
                                            <div class="profile-circle">
                                                <img src="{{ asset('frontend/images/experts-opinions/Ghislaine.jpg') }}"
                                                    width="100%" alt="">
                                            </div>
                                            <h3 class="h3 mb-4 text-white">Dr. Ghislaine Beilin, France</h3>
                                            <p class="p-small GothamLight mb-4">Dermatologist, World renowned Aesthetic
                                                Medicine Speaker, IMCAS Academy</p>
                                            <p class="p-small GothamBook mb-4">“Caviarlieri is a great breakthrough in the
                                                field of stem cell research and anti-aging medicine.”</p>
                                            <a href="#" class="doctor-a1 white-btn-expert"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" >
                            <div class="item">
                                <div class="expert-bg"
                                    style="background-image: url('{{ asset('frontend/images/experts-opinions/ivana-scheiz2.jpg') }}')">
                                    <div
                                        class="slider-inner h-100 col-lg-4 col-sm-8 col-md-6 align-items-center pl-md-5 px-5 text-white">
                                        <div class="text-left">
                                            <div class="profile-circle">
                                                <img src="{{ asset('frontend/images/experts-opinions/ivana-scaled.jpg') }}"
                                                    width="100%" alt="">
                                            </div>
                                            <h3 class="h3 mb-4 text-white">Ms. Ivana Sgheiz, Switzerland</h3>
                                            <p class="p-small GothamLight mb-4">CEO, Chenot Palace, Weggis Switzerland,
                                                <br>
                                                Group Director - Chenot International
                                            </p>
                                            <p class="p-small GothamBook mb-4">“Caviarlieri has helped to improve my energy
                                                and vitality tremendously.”</p>
                                            <a href="#" class="doctor-a1 white-btn-expert"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" >
                            <div class="item">
                                <div class="expert-bg"
                                    style="background-image: url('{{ asset('frontend/images/experts-opinions/dr-Michael-papacharalampous.jpg') }}')">
                                    <div
                                        class="slider-inner h-100 col-lg-4 col-sm-8 col-md-6 align-items-center pl-md-5 px-5 text-white">
                                        <div class="text-left">
                                            <div class="profile-circle">
                                                <img src="{{ asset('frontend/images/experts-opinions/Michael.jpg') }}"
                                                    width="100%" alt="">
                                            </div>
                                            <h3 class="h3 mb-4 text-white">Dr. Michael Papacharalambous, Greece</h3>
                                            <p class="p-small GothamLight mb-4">Director of Internal Medicine, Metropolitan
                                                Hospital Athens,
                                                Medical Director of Orthobiotiki S.A</p>
                                            <p class="p-small GothamBook mb-4">“Caviarlieri helps Reduce the Inflammation
                                                of the joints, so No Pain of the Joints.”</p>
                                            <a href="#" class="doctor-a1 white-btn-expert"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" >
                            <div class="item">
                                <div class="expert-bg"
                                    style="background-image: url('https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images//expert-review/emmanouil-karalis-tokyo-olympics-1.jpg')">
                                    <div
                                        class="slider-inner h-100 col-lg-4 col-sm-8 col-md-6 align-items-center pl-md-5 px-5 text-white">
                                        <div class="text-left">
                                            <div class="profile-circle">
                                                <img src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/expert-review/emmanouil-karalis-profile.jpg"
                                                    width="100%" alt="">
                                            </div>
                                            <h3 class="h3 mb-4 text-white">Ranked 4th in Tokyo Olympic Pole Vault</h3>
                                            <p class="p-small GothamLight mb-4">Olympian Emmanouil Karalis, World Best
                                                Performance Holder, Greece</p>
                                            <p class="p-small GothamBook mb-4">“Caviarlieri helps boost my strength and
                                                stamina.”</p>
                                            <a href="#" class="expert-a1 white-btn-expert"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" >
                            <div class="item">
                                <div class="expert-bg"
                                    style="background-image: url('https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images//expert-review/grand-resort-bad-ragaz-spa.jpg')">
                                    <div
                                        class="slider-inner h-100 col-lg-4 col-sm-8 col-md-6 align-items-center pl-md-5 px-5 text-white">
                                        <div class="text-left">
                                            <div class="profile-circle">
                                                <img src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/expert-review/Brigitte-Bollinger.jpg"
                                                    width="100%" alt="">
                                            </div>
                                            <h3 class="h3 mb-4 text-white">Dr.Med. Brigette Bollinger, Switzerland</h3>
                                            <p class="p-small GothamLight mb-4">Specialist FMH for Dermatology and
                                                Venereology, Medical Centre Bad Ragaz, Switzerland</p>
                                            <p class="p-small GothamBook mb-4">“Cell Regeneration Is Activated in
                                                Caviarlieri.”</p>
                                            <a href="#" class="doctor-a1 white-btn-expert"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" >
                            <div class="item">
                                <div class="expert-bg"
                                    style="background-image: url('https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images//expert-review/imcas-academy.jpg')">
                                    <div
                                        class="slider-inner h-100 col-lg-4 col-sm-8 col-md-6 align-items-center pl-md-5 px-5 text-white">
                                        <div class="text-left">
                                            <div class="profile-circle">
                                                <img src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/expert-review/Ghislaine.jpg"
                                                    width="100%" alt="">
                                            </div>
                                            <h3 class="h3 mb-4 text-white">Dr. Ghislaine Beilin, France</h3>
                                            <p class="p-small GothamLight mb-4">Dermatologist, World renowned Aesthetic
                                                Medicine Speaker, IMCAS Academy</p>
                                            <p class="p-small GothamBook mb-4">“Caviarlieri is a great breakthrough in the
                                                field of stem cell research and anti-aging medicine.”</p>
                                            <a href="#" class="doctor-a1 white-btn-expert"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--doctors review-->
    <section>
        <div id="doctor-a1" class="container-fluid" style="padding: 60px 0; background-color: #f1f1f1;" align="center">
            <h2 class="h2 GothamLight mb-5">DOCTOR'S REVIEW</h2>
            <div class="col-lg-12 col-xl-10 float-none mx-auto">
                <div id="doctors-review" class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img class="doc-pic"
                                                src="{{ asset('frontend/images/experts-opinions/Brigitte-Bollinger1.jpg') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Dr.Med. Brigette Bollinger, Switzerland</p>
                                                <p class="doctor-title mb-4">Specialist FMH for Dermatology and
                                                    Venereology, Medical Centre Bad Ragaz, Switzerland</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>“Caviarlieri works on multiple levels. Many patients reported
                                                        reduction in joint pain, inflammation, increase sexual desire and
                                                        libido.”</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal1"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img class="doc-pic"
                                                src="{{ asset('frontend/images/experts-opinions/Ghislaine1.jpg') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Dr. Ghislaine Beilin, France</p>
                                                <p class="doctor-title mb-4">Dermatologist, World renowned Aesthetic
                                                    Medicine Speaker, IMCAS Academy</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>“Caviarlieri is a great breakthrough in the field of stem cell
                                                        research and anti-aging medicine”</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal2"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img class="doc-pic"
                                                src="{{ asset('frontend/images/experts-opinions/ivana1.jpg') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Ms. Ivana Sgheiz, Switzerland</p>
                                                <p class="doctor-title mb-4">CEO, Chenot Palace, Weggis Switzerland, Group
                                                    Director - Chenot International</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>“Caviarlieri helps improve my energy levels and vitality
                                                        tremendously.”</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal3"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img class="doc-pic"
                                                src="{{ asset('frontend/images/experts-opinions/michael1.jpg') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Dr. Michael Papacharalambous, Greece</p>
                                                <p class="doctor-title mb-4">Director of Internal Medicine, Metropolitan
                                                    Hospital Athens, Medical Director of Orthobiotiki S.A</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>“Caviarlieri helps Reduce the Inflammation of the joints, so No Pain
                                                        of the Joints.”</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal4"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--experts review-->
    <section>
        <div id="expert-a1" class="container-fluid" style="padding: 60px 0; background-color: #f1f1f1;" align="left">
            <div class="text-center" align="center">
                <h2 class="h2 GothamLight mb-5">EXPERTS' REVIEW</h2>
            </div>

            <div id="expert-review1" class="col-lg-12 col-xl-10 float-none mx-auto">
                <div class="expert-review owl-carousel owl-theme mb-5 px-md-4 owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-md-2 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img src="{{ asset('frontend/images/experts-opinions/stefanos-1.jpg') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Stefanos Dimitriadis, Greece</p>
                                                <p class="doctor-title mb-4">Olympian, Dietitian-Nutritionist, BSc, MSc, RD
                                                </p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>"I noticed a huge improvement in my stamina and endurance. I am more
                                                        focused and I can train harder."</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal5"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-md-2 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img src="{{ asset('frontend/images/experts-opinions/karalis1.jpg') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Emmanouil Karalis, Greece</p>
                                                <p class="doctor-title mb-4">SOlympian, Ranked 4th in Tokyo Olympic Pole
                                                    Vault<br> World Best Performance Holder</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>“Caviarlieri helps boost my strength and stamina..”</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal6"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-md-2 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img src="{{ asset('frontend/images/experts-opinions/florence.png') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Florence Schaeffer, France</p>
                                                <p class="doctor-title mb-4">Spa Director, Vichy Célestins Spa Hôtel. Vichy
                                                    - France</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>“I am able to resume outdoor sports activities because Caviarlieri
                                                        accelerate the recovery of my damaged knee cartilage. I am skiing
                                                        again.”</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal7"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expert-review owl-carousel owl-theme mb-5 px-md-4 owl-loaded owl-drag">





                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-md-2 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img src="{{ asset('frontend/images/experts-opinions/gillianyip.jpg') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Dr. Gillian Yip, China</p>
                                                <p class="doctor-title mb-4">Aesthetic Doctor and Dermatologist</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>“Caviarlieri Swiss Cell Therapy helps to improve sleep quality,
                                                        elevate mood and enhance skin complexion and beauty.”</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal8"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-md-2 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img src="{{ asset('frontend/images/experts-opinions/sotaris.jpg') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Dr. Sotiris Nikolopoulos, United States</p>
                                                <p class="doctor-title mb-4">Founder and Director of the Center for
                                                    Molecular Analysis &amp; Research S.A.</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>"Caviarlieri shows amazing anti-aging and anti-inflammatory results
                                                        forpatients age 18-83"</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal9"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-md-2 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img src="{{ asset('frontend/images/experts-opinions/reddy-3.jpg') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Dr. Prathap Chandra Reddy, India</p>
                                                <p class="doctor-title mb-4">Founder and Chairman of Apollo group of
                                                    hospitals</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>"The potency of Caviarlieri is undeniable. It helps regulate my
                                                        blood sugar levels, reduce
                                                        inflammation and is effective in preventing brain
                                                        degeneration."</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal10"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expert-review owl-carousel owl-theme mb-5 px-md-4 owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-md-2 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img src="{{ asset('frontend/images/experts-opinions/Evi-Laskaridis-Greece.jpg') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Evi Laskaridis,</p>
                                                <p class="doctor-title mb-4">Greece</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>"Taking Caviarlieri... there is no turning back for us anymore"</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal11"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-md-2 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img src="{{ asset('frontend/images/experts-opinions/Le-Grand-Spa.jpeg') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Isabel Bastos, Switzerland</p>
                                                <p class="doctor-title mb-4">Head Therapist, Le Grand Bellevue Gstaad</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>"Many of my guests have taken Caviarlieri and none of them want to
                                                        stop because of the amazing results!"</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal12"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-md-2 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img src="{{ asset('frontend/images/experts-opinions/Dr-YH.jpg') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Dr. YH, United States</p>
                                                <p class="doctor-title mb-4">Medical Doctor</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>“Both my husband and I take Caviarlieri. Caviarlieri helps increase
                                                        our energy levels significantly and also improve our sleep
                                                        quality."</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal13"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expert-review owl-carousel owl-theme mb-5 px-md-4 owl-loaded owl-drag">





                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-md-2 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img src="{{ asset('frontend/images/experts-opinions/saeng-lin-website9540.png') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Prof. Seang Lin Tan, Canada</p>
                                                <p class="doctor-title mb-4">Medical Director. OriginElle Fertility Clinic
                                                    &amp; Inventor of IVF</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>“I found the scientific evidence for Caviarlieri’s use in
                                                        therapeutic indications extremely compelling.”</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal14"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-md-2 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img src="{{ asset('frontend/images/experts-opinions/Carol-Norris.png') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Carol Norris, United Kingdom</p>
                                                <p class="doctor-title mb-4">Loyal Caviarlieri Customer</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>"I experienced a significant 90% improvement for my Rheumatoid
                                                        Arthritis symptoms."</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal15"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" >
                                <div class="item h-100 px-5 px-md-2 px-lg-4">
                                    <div class="d-flex h-100 flex-column justify-content-between bg-grey1" align="left">
                                        <div>
                                            <img src="{{ asset('frontend/images/experts-opinions/martha-mitropoulou-caviarlieri-review.jpg') }}"
                                                width="100%" alt="">
                                            <div class="p-3">
                                                <p class="doctor-name">Ms. Martha Mitropoulos, Greece</p>
                                                <p class="doctor-title mb-4">Loyal Caviarlieri Customer</p>
                                                <p class="doctor-testimonial text-grey1 GothamLight">
                                                    <em>"I feel great taking Caviarlieri.. it makes a world of difference to
                                                        me."</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <a href="#" class="doctor-review-btn GothamMedium"
                                                data-bs-toggle="modal" data-bs-target="#modal16"><span
                                                    class="btn-content-wrapper"><span
                                                        class="btn-content-text navbar-round-btn">READ FULL
                                                        QUOTE</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--review modals-->
    <div class="modal fade" id="modal1" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-3 p-md-5">
                    “Caviarlieri works on multiple levels. Most patients reported improved energy levels, better sleep
                    quality, enhanced skin complexion in the first few weeks of taking Caviarlieri. In the sixth week, many
                    of my patients also reported significant reduction in joint pain and inflammation, mood elevation,
                    increased sexual desire and libido, just to name a few.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal2" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “Life expectancy is increasing but we need to get it in good health.We want to be optimistic, to
                    maintain our physical appearance, our mechanical functionality and our brain even as we age. Caviarlieri
                    is based on Science. It is proven to help increase energy levels, reduce inflammation for joint pain and
                    increase collagen for our skin and tissues. It’s a wonderful product for depression, brain degeneration
                    and even fibromyalgia. This is the secret of life, of aging and preventing aging. The best thing I can
                    tell you is I am taking it for myself.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal3" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “This is especially important in the most delicate times of a woman, so I don’t lose energy or feel
                    tired. I am extremely happy to say that Caviarlieri is an exceptional supplement, important to my life
                    and will be continuing to take it.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal4" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “I am chief of Internal Medicine and Anti-Aging at the Metropolitan Hospital and the owner of
                    Orthobiotiki Anti-Aging Clinic. The last 7 years I was Vice President of ESSAM, European Society of
                    Anti-Aging Medicine.<br><br>
                    The Swiss Cell Treatment, Caviarlieri renews old cells, reduces and controls inflammation and other
                    medical conditions which are age-related.<br><br>
                    As an internist, I have discovered that Caviarlieri helps reduce inflammation of the joints
                    significantly in addition to a reduction in the pain. It also helps to lower glucose levels which
                    therefore benefit the diabetics and the non-diabetics. In my opinion Caviarlieri fulfils all the 5
                    criteria that defines an Anti-Aging product.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal5" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “Since I started using Caviarlieri, I noticed a huge improvement in my Stamina and Endurance. Overall,
                    my muscle fatigue and soreness were reduced significantly. My sleep quality has improved tremendously,
                    and my mood is also elevated. I can train harder and I am definitely more focused.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal6" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “Caviarlieri helps boost my strength and stamina.<br><br>
                    I have been taking Caviarlieri for almost 1 year and the benefits I experience from this caviar
                    supplement are extraordinary. The product was recommended to me by Dr. Sotiris Nikolopoulos and Dr.
                    Michael Papacharalampous, both world renowned doctors in Athens.<br><br>
                    I was amazed that Caviarlieri – Swiss Caviar Cell Therapy supplement has helped increase my cellular
                    energy significantly , improve my sleep quality and enhance my physical stamina and endurance.
                    Caviarlieri has definitely helped enhance my performance at the Tokyo Olympics 2021.<br><br>
                    Henceforth, I will continue to take this supplement as it is a product not only backed by science with
                    peer-reviewed studies and it is also listed in the Cologne List® which is committed to “clean sports”
                    and promotes safety through tested products.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal7" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “I am an outdoor sports enthusiast who enjoys travelling, diving, swimming, skiing, fitness and hiking.
                    In late 2017, while doing my sports activities, I injured my knees and was diagnosed with grade 3
                    Chondropathy. This is a disease of the cartilage and is caused by inflammation and damage to the knee
                    cartilage. The pain can be difficult at times but I tried to manage. The doctors gave me the usual
                    advice. They told me to avoid the overuse of my knees and to go for physiotherapy treatments.<br><br>
                    This potentially meant that I have to avoid engaging in some sports activities indefinitely, which was
                    devastating for me. Dr. Brigitte Bollinger, a reputable dermatologist from Bad Ragaz Medical Center then
                    introduced me to Caviarlieri. She told me that this caviar supplement is able to provide essential
                    nutrition at the cellular level thereby stimulating cellular repair and renewal against the damaged
                    cells in my knees. She assured me that Caviarlieri is backed by science and it is a supplement and not a
                    drug. The results have been phenomenal. After 4 months of taking Caviarlieri, I was amazed at my
                    recovery. I am now able to resume sports and outdoor activities like before. Most importantly I am so
                    thrilled that I am able to ski again and my life has returned back to normalcy.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal8" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “As an aesthetic doctor and dermatologist, I really appreciate the outstanding benefits of Caviarlieri.
                    Not only does it improve my skin complexion, I find significant increase in my energy levels and
                    enhancement of sexual desire only weeks after taking the Caviar Supplement.<br><br>
                    Based on the scientific studies, it is also evident that Caviarlieri can benefit at a cellular and
                    molecular level, which is unbelievable. It also helps improve my quality of sleep, which is few and
                    precious due to my heavy work schedule.<br><br>
                    I have taken this product for more than 6 months and I know I will continue with this product for
                    vitality, youth and beauty.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal9" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “Regardless of their age, all of the patients show improvement in energy levels, enhancement in collagen
                    levels, significant reduction in inflammation. This means that Caviarlieri can trigger epigenetics
                    changes, which is really revolutionary and ground breaking. It was a Eureka moment for me as a research
                    scientist to discover a product which can benefit patients at a molecular, cellular and genetic level,
                    unheard of any other food supplement.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal10" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “I have been taking Caviarlieri for more than 1 year and the benefits I experienced are phenomenal and
                    outstanding. The potency of the product is undeniable, I am invigorated to exercise and my mental
                    concentration has improved significantly. At 86, I am full of life and people are amazed how I am able
                    to walk briskly without joint pain and I can even surpass the work schedule of my employees and my
                    daughters who are responsible for the management of the hospitals. Many people also commented on my skin
                    complexion and glow.<br><br>
                    Caviarlieri also helps to regulate my blood sugar levels , reduce
                    inflammation and is very effective in preventing brain degeneration. I look forward to taking this
                    Caviar Supplement every single morning.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal11" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “I am a 47 year old active woman. I initially took Caviarlieri for 3 consecutive months and I noticed an
                    improvement in my mood, energy levels and menstrual cycle. It’s when I decided to stop for the summer
                    time when I noticed a huge difference. My cycle went completely off track, I had severe cramps and a lot
                    of mood swings. Since I got back on Caviarlieri all these symptoms disappeared, I have regained my
                    energy and good moods.<br><br>
                    After seeing its positive effects on me I introduced it to my 67 year old husband who experienced
                    similar positive effects. On top of extra energy and good mood, he also noticed an increase in his
                    libido and a decrease in his blood sugar daily readings without any other change in his lifestyle. There
                    is no turning back for us anymore.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal12" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “I am Isabel Bastos, Head Therapist of Le Grand Bellevue Gstaad.<br><br>
                    I have been very lucky to be the brand ambassador of Caviarlieri.<br><br>
                    Why? Because I started to take it and I love the results that I had in my body because im a spa
                    therapist and we lose a lot of energy. My skin really looks better. I am 52.<br><br>
                    My bodies issues, they are really getting really really better and the thing that I like more is that my
                    guests had the chance to take it for 3 months and they didn’t want to stop it. Because each of them, in
                    a different way feels the results. In the skin, in the body, a lot of people at this moment, like we
                    know are suffering from COVID and might be feeling a little bit sick but after taking this, they feel
                    more energized, they sleep better and even to their normal life, the things are really getting better.
                    Please try it. Just give it chance, don’t doubt like me because we have thousands of products like this
                    in the world, but this is really special.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal13" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “I am a medical doctor who has worked about 60 to 80 hours a week for the past 20 years. I was tired all
                    the time and my sleep was not restful. I started to feel more energy within the first two weeks of
                    taking Caviarlieri. I also gave it to my husband and noticed that his memory has improved significantly.
                    We both sleep better and wake up with more energy. It is expensive but my health is invaluable and I am
                    worth it.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal14" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “As a Professor in Obstetrics and Gynaecology and a medical expert in IVF discipline, I am sceptical
                    about the benefits and claims of any health supplement unless it is backed by empirical evidence. When I
                    first came to know Caviarlieri, I was impressed by the list of scientific studies published in peer
                    reviewed journals , demonstrating that this caviar supplement is backed by science. I found the evidence
                    in support of Caviarlieri’s use in many therapeutic indications extremely compelling.When I finally got
                    to try Caviarlieri, I was astounded that even though I am over 65 years of age, I feel that I am able to
                    function and work like I did 30 years ago. My mental focus and stamina have increased incredibly and I
                    am able to focus and concentrate on many complex issues simultaneously from early morning to late at
                    night, much to the surprise of my fellow colleagues.I am a living testament to the amazing benefits of
                    this product.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal15" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “The benefits of taking Caviarlieri for me have been significant. Prior to taking them I had been
                    diagnosed with Rheumatoid Arthritis but the symptoms have been 90% improved in the last year. My asthma
                    symptoms have also improved drastically by 80% and most of the time I have no need for an inhaler.”
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal16" aria-hidden="true">
        <div class="modal-dialog mx-md-auto mx-0 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-2">
                <button type="button" class="btn-close position-absolute align-self-end" style="z-index: 50;"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-4 p-md-5">
                    “I always aspire to lead an active lifestyle regardless of my age but it can be very challenging to
                    sustain energy levels as we age chronologically. My doctor recommended me Caviarlieri and it has
                    transformed my life. Not only do I experience a surge in energy levels, physical stamina, my sleep
                    quality has improved significantly as well.<br><br>
                    With the pandemic, many of my friends feel a little stressed, anxious and depressed. Not for me.
                    Caviarlieri elevates my mood and I feel great. It also helps me in my mental focus and concentration.
                    Without a doubt, I am a fan.”
                </div>
            </div>
        </div>
    </div>



    <!--review modals-->

    <!--video review-->
    <section>
        <div id="video-div" class="container-fluid bg-darkblue" style="padding: 60px 0;">
            <div class="col-md-12 col-lg-10 col-xl-10 float-none mx-auto mb-4 text-white px-4 position-relative"
                align="center">
                <h2 class="h2 text-white GothamLight mb-5">VIDEO REVIEWS BY EXPERTS</h2>
                <div class="row">
                    <div class="col-lg-5 col-md-6 px-md-5" align="left">
                        <div class="tab-content overflow-hidden">
                            <!--review left text1-->
                            <div class="tab-pane move-right active" id="ex-review1" role="tabpanel">
                                <h4 class="h5 small m-0 text-white"><small>Dr.Med. Brigitte Bollinger, Switzerland</small></h4>
                                <h4 class="h5 small text-lightgold mb-4" style="line-height: 1;"><small>Specialist FMH for
                                        Dermatology and Venereology</small></h4>
                                <p class="p-small GothamLight"><i>"Cell Regeneration is activated in Caviarlieri"</i></p>
                                <p class="font-16px GothamLight">Dr. Bollinger explains why Caviarlieri is part of the
                                    Anti-Aging protocol in the Medical Centre of Bad Ragaz and how patients benefit from the
                                    outcomes.</p>
                            </div>

                            <!--review left text2-->
                            <div class="tab-pane move-right" id="ex-review2" role="tabpanel">
                                <h4 class="h5 small m-0"><small>Dr. Ghislaine Beilin, France</small></h4>
                                <h4 class="h5 small text-lightgold mb-4" style="line-height: 1;"><small>Dermatologist at
                                        IMAS Academy</small></h4>
                                <p class="p-small GothamLight"><i>"Caviarlieri is a a great breakthrough in the field of
                                        stem cells and anti-aging medicine."</i></p>
                                <p class="font-16px GothamLight">Dr. Ghislaine Beilin is a World renowned Aesthetic
                                    Medicine Speaker and the President of ESAAM (European Society of Anti-Aging Medicine)
                                    and she speaks about the outstanding benefits of Caviarlieri from a medical perspective.
                                </p>
                            </div>

                            <!--review left text3-->
                            <div class="tab-pane move-right" id="ex-review3" role="tabpanel">
                                <h4 class="h5 small m-0"><small>MS. Ivana Sgheiz, Switzerland</small></h4>
                                <h4 class="h5 small text-lightgold mb-4" style="line-height: 1;"><small>Director of HC
                                        International S.A.</small></h4>
                                <p class="p-small GothamLight"><i>"Caviairlieri is a Magic Pill with Outstanding
                                        Benefits"</i></p>
                                <p class="font-16px GothamLight">Ms Ivana Sgheiz, a director of a leading luxury Spa shared
                                    her personal experience on how Caviarlieri has benefited her for the past years.</p>
                            </div>

                            <!--review left text4-->
                            <div class="tab-pane move-right" id="ex-review4" role="tabpanel">
                                <h4 class="h5 small m-0"><small>Maximilian Warth, Switzerland</small></h4>
                                <h4 class="h5 small text-lightgold mb-4" style="line-height: 1;"><small>Managing Director
                                        at CHC Swiss AG</small></h4>
                                <p class="p-small GothamLight"><i>"Caviarlieri will be extremely successful."</i></p>
                                <p class="font-16px GothamLight">Mr Warth is the Ex-Vice President of Swiss Caps Inc. and
                                    an expert in manufacturing for more than 11 years in the pharmaceutical industry. He
                                    shares his positive experience with Caviarlieri and explains why the product is
                                    effective because of its unique APIs , active ingredients which are very rare and
                                    difficult to find in the world.</p>
                            </div>

                            <!--review left text5-->
                            <div class="tab-pane move-right" id="ex-review5" role="tabpanel">
                                <h4 class="h5 small m-0"><small>Dr. Michael Papacharalambous, Greece</small></h4>
                                <h4 class="h5 small text-lightgold mb-4" style="line-height: 1;"><small>Director of
                                        Internal Medicine</small></h4>
                                <p class="p-small GothamLight"><i>"Caviarlieri helps Reduce Inflammation of the Joints, so
                                        No Pain of the joints"</i></p>
                                <p class="font-16px GothamLight">Dr Michael Pappas, an active member of ESSAM (European
                                    Society of Anti-Aging) speaks about the amazing benefits of Caviarlieri and how this
                                    Caviar Cell Therapy product fulfils all 5 criteria of Anti-Aging.</p>
                            </div>

                            <!--review left text6-->
                            <div class="tab-pane move-right" id="ex-review6" role="tabpanel">
                                <h4 class="h5 small m-0"><small>Caviarlieri Launch, Switzerland</small></h4>
                                <p class="font-16px GothamLight">Medical Center Bad Ragaz Caviarlieri Launch. The event was
                                    attended by anti-aging doctors and luminaries from Switzerland, US, France, Germany,
                                    Greece, China, Brazil, Saudi Arabia, Nigeria and Asia. Most of the guests are consumers
                                    and loyal fans of Caviarlieri.</p>
                            </div>

                            <!--review left text7-->
                            <div class="tab-pane move-right" id="ex-review7" role="tabpanel">
                                <h4 class="h5 small m-0"><small>Caviarlieri Product Conference, Bad Ragaz,
                                        Switzerland</small></h4>
                                <p class="font-16px GothamLight">Dr. med. Brigitte Bollinger also speaks on the evidenced
                                    based benefits of Caviarlieri.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <video id="vplayer" playsinline="" autoplay="" controls="" width="100%"
                            webkit-playsinline="">
                            <source
                                src="{{ asset('frontend/images/experts-opinions/video1.mp4') }}"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xl-10 float-none mx-auto px-3">
                <ul class="video-gallery owl-carousel owl-theme owl-loaded owl-drag" id="video-gallery" role="tablist">




                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item active" style="width: 1038.83px;">
                                <li class="item px-2">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 mb-4">
                                            <a class="video-thumb text-decoration-none active" data-bs-toggle="tab"
                                                data-bs-target="#ex-review1" aria-selected="true"
                                                onclick="javascript:setvideosrc('{{ asset('frontend/images/experts-opinions/video1.mp4') }}');"
                                                role="tab">
                                                <div class="thumb-container"
                                                    style="background-image: url('{{ asset('frontend/images/experts-opinions/Brigitte-Bollinger1.jpg') }}')">
                                                </div>
                                                <div class="mt-2 text-white">
                                                    <p class="thumb-caption mb-1">Dr.Med. Brigitte Bollinger,
                                                        Switzerland<br><small>Specialist FMH for Dermatology and
                                                            Venereology</small></p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 mb-4">
                                            <a class="video-thumb text-decoration-none" data-bs-toggle="tab"
                                                data-bs-target="#ex-review2" aria-selected="false"
                                                onclick="javascript:setvideosrc('{{ asset('frontend/images/experts-opinions/video2.mp4') }}');"
                                                tabindex="-1" role="tab">
                                                <div class="thumb-container"
                                                    style="background-image: url('{{ asset('frontend/images/experts-opinions/Ghislaine1.jpg') }}')">
                                                </div>
                                                <div class="mt-2 text-white">
                                                    <p class="thumb-caption mb-1">Dr. Ghislaine Beilin,
                                                        France<br><small>Dermatologist at IMAS Academy</small></p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 mb-4">
                                            <a class="video-thumb text-decoration-none" data-bs-toggle="tab"
                                                data-bs-target="#ex-review3" aria-selected="false"
                                                onclick="javascript:setvideosrc('{{ asset('frontend/images/experts-opinions/video3.mp4') }}');"
                                                tabindex="-1" role="tab">
                                                <div class="thumb-container"
                                                    style="background-image: url('{{ asset('frontend/images/experts-opinions/ivana1.jpg') }}')">
                                                </div>
                                                <div class="mt-2 text-white">
                                                    <p class="thumb-caption mb-1">MS. Ivana Sgheiz,
                                                        Switzerland<br><small>Director of HC International S.A.</small></p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 mb-4">
                                            <a class="video-thumb text-decoration-none" data-bs-toggle="tab"
                                                data-bs-target="#ex-review4" aria-selected="false"
                                                onclick="javascript:setvideosrc('{{ asset('frontend/images/experts-opinions/video4.mp4') }}');"
                                                tabindex="-1" role="tab">
                                                <div class="thumb-container"
                                                    style="background-image: url('{{ asset('frontend/images/experts-opinions/maxmillan.jpg') }}')">
                                                </div>
                                                <div class="mt-2 text-white">
                                                    <p class="thumb-caption mb-1">Maximilian Warth,
                                                        Switzerland<br><small>Managing Director at CHC Swiss AG</small></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="owl-item" style="width: 1038.83px;">
                                <li class="item px-2">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 mb-4">
                                            <a class="video-thumb text-decoration-none" data-bs-toggle="tab"
                                                data-bs-target="#ex-review5" aria-selected="false"
                                                onclick="javascript:setvideosrc('{{ asset('frontend/images/experts-opinions/video5.mp4') }}');"
                                                tabindex="-1" role="tab">
                                                <div class="thumb-container"
                                                    style="background-image: url('{{ asset('frontend/images/experts-opinions/michael1.jpg') }}')">
                                                </div>
                                                <div class="mt-2 text-white">
                                                    <p class="thumb-caption mb-1">Dr. Michael Papacharalambous,
                                                        Greece<br><small>Director of Internal Medicine</small></p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 col-md-4 mb-4">
                                            <a class="video-thumb text-decoration-none" data-bs-toggle="tab"
                                                data-bs-target="#ex-review6" aria-selected="false"
                                                onclick="javascript:setvideosrc('{{ asset('frontend/images/experts-opinions/video6.mp4') }}');"
                                                tabindex="-1" role="tab">
                                                <div class="thumb-container"
                                                    style="background-image: url('{{ asset('frontend/images/experts-opinions/caviarlieri_lunch-scaled.jpg') }}')">
                                                </div>
                                                <div class="mt-2 text-white">
                                                    <p class="thumb-caption mb-1">Caviarlieri Launch, Switzerland</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3 col-md-4 mb-4">
                                            <a class="video-thumb text-decoration-none" data-bs-toggle="tab"
                                                data-bs-target="#ex-review7" aria-selected="false"
                                                onclick="javascript:setvideosrc('{{ asset('frontend/images/experts-opinions/video7.mp4') }}');"
                                                tabindex="-1" role="tab">
                                                <div class="thumb-container"
                                                    style="background-image: url('{{ asset('frontend/images/experts-opinions/screen-shot1.jpg') }}')">
                                                </div>
                                                <div class="mt-2 text-white">
                                                    <p class="thumb-caption mb-1">Caviarlieri Product Conference, Bad
                                                        Ragaz, Switzerland</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </section>
    <!--content-->
    <script type="text/javascript">
        function setvideosrc(src) {

            var videoPlayer = document.getElementById("vplayer");
            if (videoPlayer != null) {
                videoPlayer.src = src;
                videoPlayer.load();
            }

        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            document.getElementById("vplayer").pause();
        });
    </script>

    <script>
        $(".expert-a1").click(function() {
            $('html, body').animate({
                scrollTop: $("#expert-a1").offset().top
            }, "slow");
        });

        $(".doctor-a1").click(function() {
            $('html, body').animate({
                scrollTop: $("#doctor-a1").offset().top
            }, "slow");
        });

        $(".video-thumb").click(function() {
            $("html, body").animate({
                scrollTop: document.body.scrollHeight
            }, "fast");
            $('html, body').animate({
                scrollTop: $("#video-div").offset().top
            }, 500);
        });
    </script>

@endsection
