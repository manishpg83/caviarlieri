@extends('frontend.layouts.app')

@section('title', 'About | Celergen')
@section('header', 'About | Celergen')

@section('content')
<style type="text/css">
	
    .sidemenu6{color: #999999!important; border-right: 4px solid #000000!important;}		
        
        @media (max-width: 520px) {
            .header-bg-image{height: 160px; background-size: 100% auto; background-position: center 64px;}
            .title-top-margin{margin-top:64px;}
        }
        @media (min-width: 521px) {
            .header-bg-image{height: 310px; background-size: 100% auto; background-position: center top;}
            .title-top-margin{margin-top:0;}
            
        }
        @media (min-width: 769px) {
            .title-top-margin{margin-top:0;}
            .header-bg-image{  height: 340px; background-size: 100% auto; background-position: center top; }
        }
        @media (min-width: 1025px) {
            .title-top-margin{margin-top:0;}
            .header-bg-image{  height: 550px; background-size: 100% auto; background-position: center top; }
        }	
        
    #slanted-section:after {
        width: 100%;
        content: "";
        display: block;
        height: 100%;
        position: absolute;
        top: 5%;
        -webkit-transform: skewY(-2.5deg);
        -moz-transform: skewY(-2.5deg);
        -ms-transform: skewY(-2.5deg);
        -o-transform: skewY(-2.5deg);
        transform: skewY(-2.5deg);
        background-color: #e8e8e8;
        z-index: 2;
    }
    
    .slanted-wrapper {
        position: relative;
        z-index: 3;
    }
        
    #slanted-section {
        padding: 0;
        text-align: center;
        position: relative;
        width: 100%;
        overflow: hidden;
        z-index: 1;
        }
        
    </style>
<section>
    <div class="container-fluid px-0" >
        <div class="header-bg-image title-top-margin" style="overflow: hidden;  background-repeat: no-repeat; background-image:url('https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/swiss-cellular-therapy/Swiss-Cell-Therapy-header.png'); width: 100%; background-attachment: fixed;">
        </div>	
    </div>		
    </section>
    
    <section style="background-color: #e8e8e8">
    <div class="container flex-column px-4" style="padding: 50px 0;" align="center">
    <h3 class="h3 GothamThin" style="font-weight: bold">SWISS CELLULAR THERAPY</h3>
        <div class="col-lg-6 float-none mx-auto mb-4">
        <p class="GothamThin" style="font-weight: bold">THE EXCEPTIONAL TRANSFORMATIVE POWER OF SWISS CELLULAR THERAPY</p>	
        </div>	
    <div class="text-md-justify" align="left">
        
    <p class="p-small">Before the discovery of Swiss Cellular Therapy, the prevailing medical view was that aging was inevitable and diseases are unpreventable.</p>
    <p class="p-small">Our body contains some 37.2 trillion cells, which arise after conception from one unified cell through multiple cycles of division.  </p>
    <p class="p-small">This process of renewal and replacement continues in a dynamic fashion in young healthy individuals. As we age, this process begins to slow down significantly, adversely impacting the physiology of our entire body.  </p>
    <p class="p-small">Unwanted toxins, environmental pollution, improper nutrition, alcohol and free radicals diminish our body’s ability to renew, resulting in the malfunctioning of our tissues, organs and immune system.  </p>
    <p class="p-small">Today, Swiss Cellular Therapy is able to transform this degenerating process by directly energizing, stimulating and replenishing our cells.</p>
    </div>
        
    </div>	
    </section>	
        
    <section>
    <div class="container-fluid bg-darkblue">
        <div class="container1 flex-column pt-5" align="center">
            <h3 class="h3 text-lightgold">PHASES OF SWISS CELLULAR TREATMENT</h3>
            <img src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/swiss-cellular-therapy/phases-of-cell-treatment-edit-26-1024x576.png" style="max-width: 100%;" alt=""/>
        </div>
        
        <div class="container1 flex-column py-5" align="center">
            <div class="row">
                <div class="col-lg-7 col-md-7 px-4 px-md-5 text-md-start">
                <h3 class="h3 text-lightgold">A CELEBRITY’S SECRET TO EXTRAORDINARY YOUTH – CELLULAR THERAPY</h3>
                <div class="text-grey3 text-md-justify" align="left">
                <p class="p-small">We all dream and crave to be forever vibrant, young and radiant. Throughout eternity, man has relentlessly pursued to unravel the mystical secrets of aging and reverse its inevitable progress.</p>
    
    <p class="p-small">Today with the phenomenal advances in Cellular Therapy, the undesirable effects of aging can be dramatically delayed and prevented.</p>
    
    <p class="p-small">Show business celebrities, the rich and famous always look ageless, breathtakingly radiant and appear impervious to time. They are able to preserve their youth and beauty far beyond their actual age.</p>
    
    <p class="p-small">Their secret is the rare privilege of frequenting the famous youth rejuvenative clinics and centres in Switzerland for cutting edge Cellular Therapy through injectables. These therapies, provide them with a renewed spectrum of life and an infinite source of stamina and strength, which otherwise would be virtually impossible.</p>	
                </div>	
                </div>
                <div class="col-lg-5 col-md-5 px-4 px-md-2">
                    <div style="border-radius: 5px; overflow: hidden" class="animate-img">
                    <img src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/swiss-cellular-therapy/Screen-Shot-2019-03-11-at-16.26.18.png" width="100%" alt=""/>
                    </div>
                
                </div>	
            </div>	
        </div>
        
    </div> 
    </section>	
    
        
    <section>
    <div id="slanted-section" class="bg-darkblue">
            <div class="slanted-wrapper pb-5">
                <div class="container1 flex-column mt-5 px-4" style="padding-top: 60px;" align="center">
                <div class="row">
                <div class="col-lg-7 col-md-7 px-3 px-md-5 text-md-start">
                <h3 class="h3">THE RELENTLESS QUEST FOR THE ELIXIR OF YOUTH</h3>
                <div class="text-md-justify" align="left">
                <p class="p-small">Today the Science of Cellular Therapy has revolutionised the concept of Regenerative Medicine and achieved Worldwide Prominence.</p>
    
    <p class="p-small">The science of Cellular Therapy originated as far back as 1600 B.C. in Egypt where the practice of implanting animal organs and tissues for human vitality was an established complementary, integrative and regenerative medical therapy.</p>
    
    <p class="p-small">It was only in the 1930s, that modern day Cellular Therapy secured a foothold as a far more effective medical therapy as against conventional medicine by the amazing results achieved by Professor Dr. Paul Niehans in treating more than 20,000 patients for chronic ailments for which conventional medicine had no cure. His outstanding success attracted famous personalities like British Prime Minister Winston Churchill, Pope Pious XII, American President Dwight Eisenhower and the world famous comedian Charlie Chaplin who all sought his treatment in strict secrecy.</p>
                </div>	
                </div>
                <div class="col-lg-5 col-md-5 px-3 px-md-2 ">
                    <div style="border-radius: 5px; overflow: hidden" class="animate-img img-shadow">
                        <img src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/swiss-cellular-therapy/dreamstime_m_111661210.jpg" width="100%" alt=""/>
                    </div>
                    </div>	
            </div>	
        </div>
            </div>
    </div>    
    </section>


@endsection