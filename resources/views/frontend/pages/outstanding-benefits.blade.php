@extends('frontend.layouts.app')

@section('title', 'About | Swiss Caviarlieri')
@section('header', 'About | Swiss Caviarlieri')

@section('content')

<style type="text/css">
    .sidemenu3 {
        color: #999999 !important;
        border-right: 4px solid #000000 !important;
    }

    .bg-water {
        background-image: url("{{ asset('frontend/images/outstanding-benefits/body-of-water-2071319-scaled.png') }}");
        background-repeat: no-repeat;
        background-position: 0 -100px;
        background-size: 100% 300%;
    }
</style>

<section>
    <div class="container-fluid bg-black py-5 benifits bg-water">
        <div class="">
            <div class="container1 title-top-margin">
                <div class="row">
                    <div class="col-lg-8 col-md-8 text-md-start text-center position-relative">
                        <h2 class="h2 text-white GothamLight">Unparalleled Benefits of Caviarlieri - test</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid benifits">
        <div class="row">
            <div class="col-lg-6 col-md-6 bg-gradient-gold d-flex align-items-center">
                <div class="col-lg-9 py-4 float-none m-auto">
                    <h3 class="h3 GothamLight text-md-start text-center mt-3 mt-md-0"><a href="increase-cellular-energy.php" class="text-white text-decoration-none hover-black">Significant Increase in Cellular Energy</a></h3>
                    <div class="text-md-start text-center">
                        <hr class="hr mt-0 d-inline-block">
                    </div>
                    <ul class="text-white GothamLight ul-inner p-small">
                        <li><a href="increase-cellular-energy.php" class="text-decoration-none text-white hover-black">Energy and Vitality for optimal life | <span class="text-black GothamBook hover-white">Read More</span></a></li>
                        <li>Fast recovery from exercise</li>
                        <li>Significant reduction in chronic fatigue</li>
                        <li>Prolonged physical stamina and endurance</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-0">
                <img src="{{ asset('frontend/images/outstanding-benefits/Cellular-Energy2.jpg') }}" alt="" width="100%" />
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container-fluid benifits bg-darkblue">
        <div class="col-lg-8 col-md-10 py-md-5 pt-5 pb-0 float-none mx-auto">
            <div class="row py-lg-5 py-0">
                <div class="col-lg-6 col-md-6 d-flex align-items-center order-md-2">
                    <div class="col-lg-10 float-none m-auto">
                        <h3 class="h3 GothamLight text-md-start text-center mt-3 mt-md-0"><a href="beauty-enhancement.php" class="text-decoration-none text-white hover-skintone">Beauty Enhancement</a></h3>
                        <div class="text-md-start text-center">
                            <hr class="hr mt-0 d-inline-block">
                        </div>
                        <ul class="text-white GothamLight ul-inner p-small">
                            <li><a href="beauty-enhancement.php" class="text-decoration-none text-white hover-skintone">Stimulates collagen production | <span class="text-skintone GothamBook hover-white">Read More</span></a></li>
                            <li>Restores skin elasticity and complexion</li>
                            <li>Increases skin moisturization</li>
                            <li>Reduces the appearance of wrinkles and lines</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pr-md-0 pl-md-5 benifit-small-row">
                    <img src="{{ asset('frontend/images/outstanding-benefits/2-Beauty-Enhancement.jpg') }}" alt="" width="100%" />
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid benifits">
        <div class="row">
            <div class="col-lg-6 col-md-6 bg-gradient-gold d-flex align-items-center">
                <div class="col-lg-9 py-4 float-none m-auto">
                    <h3 class="h3 GothamLight text-md-start text-center mt-3 mt-md-0"><a href="joint-pain.php" class="text-white text-decoration-none hover-black">Substantial Reduction in
                            Joint Pain</a></h3>
                    <div class="text-md-start text-center">
                        <hr class="hr mt-0 d-inline-block">
                    </div>
                    <ul class="text-white GothamLight ul-inner p-small">
                        <li><a href="joint-pain.php" class="text-decoration-none text-white hover-black">Osteoarthritis | <span class="text-black GothamBook hover-white">Read More</span></a></li>
                        <li>Rheumatoid Arthritis</li>
                        <li>Fibromyalgia</li>
                        <li><a href="joint-pain.php" class="text-decoration-none text-white hover-black">Significant reduction in inflammation | <span class="text-black GothamBook hover-white">Read More</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-0">
                <img src="{{ asset('frontend/images/outstanding-benefits/3-Joint-Pain2.jpg') }}" alt="" width="100%" />
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid benifits bg-darkblue">
        <div class="col-lg-8 col-md-10 py-md-5 pt-5 pb-0 float-none mx-auto">
            <div class="row py-lg-5 py-0">
                <div class="col-lg-6 col-md-6 d-flex align-items-center order-md-2">
                    <div class="col-lg-10 float-none m-auto">
                        <h3 class="h3 GothamLight text-md-start text-center mt-3 mt-md-0"><a href="immunity.php" class="text-decoration-none text-white hover-skintone">Strengthens Immunity</a></h3>
                        <div class="text-md-start text-center">
                            <hr class="hr mt-0 d-inline-block">
                        </div>
                        <ul class="text-white GothamLight ul-inner p-small">
                            <li><a href="immunity.php" class="text-decoration-none text-white hover-skintone">Regulates the immune system | <span class="text-skintone GothamBook hover-white">Read More</span></a></li>
                            <li>Significant reduction in oxidative stress</li>
                            <li><a href="inflammation.php" class="text-decoration-none text-white hover-skintone">Reduction in inflammation</a></li>
                            <li><a href="inflammation.php" class="text-decoration-none text-white hover-skintone">Effective Immuno-Modulatory Properties | <span class="text-skintone GothamBook hover-white">Read More</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pr-md-0 pl-md-5 benifit-small-row">
                    <img src="{{ asset('frontend/images/outstanding-benefits/4-Strengthen-Immunity.jpg') }}" alt="" width="100%" />
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid benifits">
        <div class="row">
            <div class="col-lg-6 col-md-6 bg-gradient-gold d-flex align-items-center">
                <div class="col-lg-9 py-4 float-none m-auto">
                    <h3 class="h3 GothamLight text-md-start text-center mt-3 mt-md-0"><a href="inflammation.php" class="text-white text-decoration-none hover-black">Significant Reduction in Inflammation</a></h3>
                    <div class="text-md-start text-center">
                        <hr class="hr mt-0 d-inline-block">
                    </div>
                    <ul class="text-white GothamLight ul-inner p-small">
                        <li><a href="metabolic-syndrome.php" class="text-decoration-none text-white hover-black">Alleviates metabolic syndrome | <span class="text-black GothamBook hover-white">Read More</span></a></li>
                        <li><a href="#" class="text-decoration-none text-white hover-black">Delays the onset and progression of degenerative disease</a></li>
                        <li>Defies biological and cellular aging</li>
                        <li><a href="joint-pain.php" class="text-decoration-none text-white hover-black">Substantial reduction of joint pain | <span class="text-black GothamBook hover-white">Read More</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-0">
                <img src="{{ asset('frontend/images/outstanding-benefits/5-Reduction-in-Inflammation.jpg') }}" alt="" width="100%" />
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid benifits bg-darkblue">
        <div class="col-lg-8 col-md-10 py-md-5 pt-5 pb-0 float-none mx-auto">
            <div class="row py-lg-5 py-0">
                <div class="col-lg-6 col-md-6 d-flex align-items-center order-md-2">
                    <div class="col-lg-10 float-none m-auto">
                        <h3 class="h3 GothamLight text-md-start text-center mt-3 mt-md-0"><a href="improve-sperm-quality.php" class="text-decoration-none text-white hover-skintone">Sexual Performance</a></h3>
                        <div class="text-md-start text-center">
                            <hr class="hr mt-0 d-inline-block">
                        </div>
                        <ul class="text-white GothamLight ul-inner p-small">
                            <li><a href="improve-sperm-quality.php" class="text-decoration-none text-white hover-skintone">Improves sperm quality and Spermatogenesis | <span class="text-skintone GothamBook hover-white">Read More</span></a></li>
                            <li><a href="mental-health.php" class="text-decoration-none text-white hover-skintone">Increases sexual desire</a></li>
                            <li><a href="increase-cellular-energy.php" class="text-decoration-none text-white hover-skintone">Increases sexual energy</a></li>
                            <li>Increases libido </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pr-md-0 pl-md-5 benifit-small-row">
                    <img src="{{ asset('frontend/images/outstanding-benefits/6-Sexual-Performance.jpg') }}" alt="" width="100%" />
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid benifits">
        <div class="row">
            <div class="col-lg-6 col-md-6 bg-gradient-gold d-flex align-items-center">
                <div class="col-lg-9 py-4 float-none m-auto">
                    <h3 class="h3 text-white GothamLight text-md-start text-center mt-3 mt-md-0"><a href="mental-health.php" class="text-white text-decoration-none hover-black">Improves Mental Health &amp; Sleep Quality</a></h3>
                    <div class="text-md-start text-center">
                        <hr class="hr mt-0 d-inline-block">
                    </div>
                    <ul class="text-white GothamLight ul-inner p-small">
                        <li><a href="mental-health.php" class="text-decoration-none text-white hover-black">Enhances mental focus, concentration and alertness | <span class="text-black GothamBook hover-white">Read More</span></a></li>
                        <li>Improves sleep quality</li>
                        <li>Alleviates mild depression and elevates mood</li>
                        <li>Reduces mental fatigue</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-0">
                <img src="{{ asset('frontend/images/outstanding-benefits/7-Improve-Mental-Health-Sleep-Quality.png') }}" alt="" width="100%" />
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid benifits bg-darkblue">
        <div class="col-lg-8 col-md-10 py-md-5 pt-5 pb-0 float-none mx-auto">
            <div class="row py-lg-5 py-0">
                <div class="col-lg-6 col-md-6 d-flex align-items-center order-md-2">
                    <div class="col-lg-10 float-none m-auto">
                        <h3 class="h3 GothamLight text-md-start text-center mt-3 mt-md-0"><a href="brain-enhancement.php" class="text-decoration-none text-white hover-skintone">Brain Enhancement</a></h3>
                        <div class="text-md-start text-center">
                            <hr class="hr mt-0 d-inline-block">
                        </div>
                        <ul class="text-white GothamLight ul-inner p-small">
                            <li><a href="brain-enhancement.php" class="text-decoration-none text-white hover-skintone">Prevents and delays Brain Degeneration</a></li>
                            <li>Supports Brain Health | <a href="brain-enhancement.php" class="text-decoration-none text-skintone GothamBook hover-white">Read More</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pr-md-0 pl-md-5 benifit-small-row">
                    <img src="{{ asset('frontend/images/outstanding-benefits/8-Brain-Enhancement2.png') }}" alt="" width="100%" />
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid benifits">
        <div class="row">
            <div class="col-lg-6 col-md-6 bg-gradient-gold d-flex align-items-center">
                <div class="col-lg-9 py-4 float-none m-auto">
                    <h3 class="h3 text-white GothamLight text-md-start text-center mt-3 mt-md-0">Diabetes Management</h3>
                    <div class="text-md-start text-center">
                        <hr class="hr mt-0 d-inline-block">
                    </div>
                    <ul class="text-white GothamLight ul-inner p-small">
                        <li><a href="lowers-glycemic-home.php" class="text-decoration-none text-white hover-black">Lowers glycemic index and blood sugar control | <span class="text-black GothamBook hover-white">Read More</span></a></li>
                        <li>Promotes satiation and help weight management</li>
                        <li><a href="metabolic-syndrome.php" class="text-decoration-none text-white hover-black">Alleviates metabolic syndrome | <span class="text-black GothamBook hover-white">Read More</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-0">
                <img src="{{ asset('frontend/images/outstanding-benefits/9-Diabetes-Management.jpg') }}" alt="" width="100%" />
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid benifits bg-darkblue">
        <div class="col-lg-8 col-md-10 py-md-5 pt-5 pb-0 float-none mx-auto">
            <div class="row py-lg-5 py-0">
                <div class="col-lg-6 col-md-6 d-flex align-items-center order-md-2">
                    <div class="col-lg-10 float-none m-auto">
                        <h3 class="h3 GothamLight text-md-start text-center mt-3 mt-md-0"><a href="osteoporosis.php" class="text-decoration-none text-white hover-skintone">Supports Bone Health</a></h3>
                        <div class="text-md-start text-center">
                            <hr class="hr mt-0 d-inline-block">
                        </div>
                        <ul class="text-white GothamLight ul-inner p-small">
                            <li><a href="osteoporosis.php" class="text-decoration-none text-white hover-skintone">Prevents Osteoporosis | <span class="text-skintone GothamBook hover-white">Read More</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pr-md-0 pl-md-5 benifit-small-row">
                    <img src="{{ asset('frontend/images/outstanding-benefits/10-Support-Bone-Health.jpg') }}" alt="" width="100%" />
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid benifits">
        <div class="row">
            <div class="col-lg-6 col-md-6 bg-gradient-gold d-flex align-items-center">
                <div class="col-lg-9 py-4 float-none m-auto">
                    <h3 class="h3 GothamLight text-md-start text-center mt-3 mt-md-0"><a href="control-high-blood-pressure.php" class="text-white text-decoration-none hover-black">Helps Control High Blood Pressure/Hypertension</a></h3>
                    <div class="text-md-start text-center">
                        <hr class="hr mt-0 d-inline-block">
                    </div>
                    <ul class="text-white GothamLight ul-inner p-small">
                        <li><a href="control-high-blood-pressure.php" class="text-decoration-none text-white hover-black">Hypertension | <span class="text-black GothamBook hover-white">Read More</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-0">
                <img src="{{ asset('frontend/images/outstanding-benefits/control-high-blood-pressure.png') }}" alt="" width="100%" />
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid benifits">
        <div class="row">

            <div class="col-lg-6 col-md-6 bg-gradient-gold d-flex align-items-center order-md-2">
                <div class="col-lg-9 py-4 float-none m-auto">
                    <h3 class="h3 text-white GothamLight text-md-start text-center mt-3 mt-md-0">Protects Eye Health and Prevents Macular Degeneration</h3>
                    <div class="text-md-start text-center">
                        <hr class="hr mt-0 d-inline-block">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-0">
                <img src="{{ asset('frontend/images/outstanding-benefits/eye-benefits9751.png') }}" alt="" width="100%" />
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid benifits" style="background-color: #000710;">
        <div class="container float-none mx-auto">
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 order-md-2">
                    <img src="{{ asset('frontend/images/outstanding-benefits/home-5-768x960.jpg') }}" alt="" width="100%" />
                </div>

                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 d-flex align-items-center">
                    <h3 class="h3 text-white GothamLight text-center text-md-start">The Only Swiss Caviar Cellular Therapy Supplement in the World</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid benifits bg-darkblue py-5 px-5 px-md-0">
        <div class="container">
            <div class="col-lg-7 col-xl-6 col-xxl-5 text-center text-md-start">
                <p style="font-size: 12px!important; color: #FFFFFF; line-height: 1.2;">This statement has not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.</p>
            </div>

        </div>
    </div>
</section>

@endsection