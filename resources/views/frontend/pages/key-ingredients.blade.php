@extends('frontend.layouts.app')

@section('title', 'About | Swiss Caviarlieri')
@section('header', 'About | Swiss Caviarlieri')

@section('content')

    <style type="text/css">
        .sidemenu7 {
            color: #999999 !important;
            border-right: 4px solid #000000 !important;
        }

        .arrow-bg {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .arrow-bg-container {
            z-index: 1;
            position: relative;
            width: 100%;
            left: 0;
            overflow: hidden;
            pointer-events: none;
            height: 57px;
        }
    </style>

    <section>
        <div class="container-fluid pb-5 bg-opacity-container" style="background-color: #01060c">
            <div class="title-top-margin position-relative text-center" style="z-index: 500;">
                <h5 class="h5 text-grey3">KEY INGREDIENTS OF OUR</h5>
                <h2 class="h2 GothamLight text-white">CAVIAR SUPPLEMENT</h2>
            </div>
            <img style="top:-339%; position: absolute; left: 0; opacity: .2"
                src="{{ asset('frontend/images/key-ingredients/Caviarlieri_CoverRevised-scaled.jpg') }}"
                alt="" />
        </div>
    </section>

    <section>
        <div class="container-fluid" style="background-color: #E8E8E8"></div>
        <div class="col-lg-7 float-none mx-auto mt-5 px-4" style="padding-top: 60px;" align="center">
            <div class="row">
                <div class="col-lg-5 col-md-5 px-3 px-md-2 mb-5">
                    <div style="border-radius: 5px; overflow: hidden" class="animate-img img-shadow">
                        <img src="{{ asset('frontend/images/key-ingredients/GettyImages-500363028_o.jpg') }}"
                            width="100%" alt="" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 px-3 px-md-5 text-md-start">
                    <p class="p-small mb-3">Caviarlieri is lavishly and synergistically formulated with evidence based and
                        potent key ingredients:</p>
                    <div class="text-left" align="left">
                        <ol class="p-small">
                            <li>Caviar Cellular DNA Extracts and Marine Peptides</li>
                            <li>Marine Collagen and Elastin Plus </li>
                            <li>Coenzyme Q10 </li>
                            <li>Selenium</li>
                        </ol>
                        <div style="font-size: 10pt" class="mt-4"><strong>Important:</strong> Our product contains soy
                            lecithin and fish proteins. If you are allergic to soy and fish proteins, please do not take the
                            product.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid px-0">
            <div class="arrow-bg-container"><svg class="arrow-bg" width="2700px" height="57px" viewBox="0 0 2700 57"
                    version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <polygon fill="#fff" style="fill:#000f26" class="bmask-bgfill"
                        points="0 57 0 0 1350 55.5 2700 0 2700 57"></polygon>
                </svg></div>

            <div class="bg-darkblue col-12 text-white">
                <div class="col-lg-7 col-md-12 float-none mx-auto text-center" style="padding: 70px 0;">
                    <h4 class="h4 GothamLight text-white mb-5">CAVIAR CELLULAR DNA EXTRACTS AND MARINE PEPTIDES</h4>
                    <div class="GothamLight px-4 px-md-2">
                        <p class="font-16px GothamMedium mb-2"><strong>Why is it effective?</strong></p>
                        <p class="font-16px">Caviar (sturgeon caviar) is an exceptional nutritional ingredient, rich in
                            amino acids and essential fatty acids (EPA, DHA). It has been known to be an ingredient which
                            helps to promote a healthy nervous, circulatory and immune system,. The known beneficial
                            properties of EFA (essential fatty acids) are extensive like ensuring proper functioning of our
                            cells, supporting brain health, ensuring regulation of inflammatory responses, reduction of
                            joint pain and prevention of photo skin aging.</p>
                        <p class="font-16px mb-md-5 mb-3">Unlike regular caviar, the high degree of polymerization of the
                            Caviar Cellular DNA Extract in Caviarlieri enables it to penetrate into the cells and remain
                            biologically active for multifunctional benefits.</p>

                        <p class="font-16px GothamMedium mb-2"><strong>How does it work?</strong></p>
                        <p class="font-16px mb-md-5 mb-3">Effective essential fatty acids are critical because our body
                            cannot produce them and they have to supplemented with our diet. However, not everything we
                            consume can be absorbed. Using exclusively patented Swiss Proprietary Cold
                            &ldquo;Cellularix&rdquo; DNA extraction technologies, Caviarlieri&rsquo;s Caviar Cellular DNA
                            extracts and Marine peptides are kept biologically active during the entire manufacturing
                            process. This ensures the potency and effectiveness of the micro nutrients and ensure optimal
                            absorption and results.</p>

                        <p class="font-16px GothamMedium mb-2"><strong>
                                What is the delivery mechanism?</strong></p>
                        <p class="font-16px">Caviarlieri is also made of Marine Peptides which escort the micronutrients
                            across the intestinal barrier into the blood, making it a superior delivery mechanism, where the
                            active ingredients can be fully absorbed at the cellular level.</p>
                        <p class="font-16px mb-1">What other ingredients does Caviarlieri contain and what are its
                            functional benefits?</p>
                        <p class="font-16px">The other potent and complementary bioactive ingredients in Caviarlieri are
                            marine protein peptides (DNA extracts from wild salmon and haddock), marine collagen, coenzyme
                            Q10 and selenium</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid" align="center" style="background-color: #DFDCDC">
            <div class="col-lg-8 float-none mx-auto px-4" style="padding: 60px 0;" align="center">
                <div class="row">
                    <div class="col-lg-7 col-md-7 px-3 px-md-5 text-md-start">
                        <h3 class="h3 mb-4">MARINE COLLAGEN AND ELASTIN PLUS</h3>
                        <div class="text-left" align="left">
                            <p class="font-16px mb-2"><strong>Why is it effective?</strong></p>
                            <p class="font-16px">Collagen Elastin Plus comprises the highest premium marine grade quality of
                                hydrolysed collagen and elastin peptides in the same ratio as our skin, only from France and
                                has been proven to enhance the moisture and resilience of our skin.
                            </p>
                            <p class="font-16px mb-4">In addition, marine collagen is known to promote bone health, improve
                                skin, nails and hair improves wound healing, stabilizes blood sugar, reduce inflammation,
                                supports brain health. </p>

                            <p class="font-16px mb-2"><strong>Clinically Proven Benefits</strong></p>
                            <p class="font-16px">Clinical studies have also demonstrated unequivocally that HP Collagen
                                Elastin Plus helps to substantially improve bone density in people who are afflicted with
                                joint diseases.
                            </p>
                            <p class="font-16px">HP Collagen Elastin Plus plays a critical role in the regeneration of
                                cartilage, treatment of osteoarthritis and is very effective against photo aging of our
                                skin. </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 px-3 px-md-4" align="right">
                        <div class="col-lg-9 col-md-11 float-end">
                            <div style="border-radius: 5px; overflow: hidden" class="animate-img">
                                <img src="{{ asset('frontend/images/key-ingredients/image3.jpg') }}"
                                    width="100%" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="arrow-bg-container" style="background-color: #DFDCDC"><svg class="arrow-bg" width="2700px"
                    height="57px" viewBox="0 0 2700 57" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <polygon fill="#fff" style="fill:#000f26" class="bmask-bgfill"
                        points="0 57 0 0 1350 55.5 2700 0 2700 57"></polygon>
                </svg></div>

            <div class="bg-darkblue col-12 text-white">
                <div class="col-lg-7 col-md-12 float-none mx-auto text-center" style="padding: 70px 0;">
                    <div class="GothamLight px-4 px-md-2">
                        <p class="font-16px GothamMedium mb-2"><strong>Coenzyme Q10</strong></p>
                        <p class="font-16px">It helps provide energy to cells. It is an antioxidant which protects cells
                            from damage and plays an important part in the metabolism. Our cells use CoQ10 for growth and
                            maintenance.</p>
                        <p class="font-16px mb-md-5 mb-3">CoQ10 levels have also been found to be lower in people with
                            certain conditions, such as heart disease.</p>

                        <p class="font-16px GothamMedium mb-2"><strong>Selenium</strong></p>
                        <p class="font-16px mb-md-4 mb-3">Selenium is a trace mineral which plays an important role in cell
                            division and providing immune support.</p>
                        <p class="font-16px mb-md-4 mb-3">It also helps the antioxidants work better. Antioxidants help
                            protect our cells from oxidation reactions caused by molecules called free radicals. While
                            people only need a very small amount, selenium plays a key role in the metabolism, and helps to
                            protect our body from oxidative stress particularly in our heart and brain.</p>
                        <p class="font-16px mb-md-4 mb-3">It is also known that selenium helps activate and deactivate
                            specific thyroid hormones, encouraging thyroid function &amp; protecting the thyroid gland from
                            oxidative stress.</p>

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