@extends('includes.home')
@section('content')


<div id="content" class="no-bottom no-top">
    <div class="float-text">
        <div class="de_social-icons">
            <a href="https://www.linkedin.com/company/exposeprofi/"><i class="fa fa-linkedin fa-lg"></i></a>
            {{-- <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fa fa-instagram fa-lg"></i></a> --}}
        </div>
        {{-- <span><a href="#">Book Now</a></span> --}}
    </div>
    <!-- float text close -->
    {{-- <section class="no-top no-bottom jarallax vertical-center" data-video-src="mp4:video/local-video-1.mp4">
        <div class="de-overlay v-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>Enjoy Your<br>Dream Vacation</h1>
                        <p class="lead">The Seaside Hotel is the right choice for visitors who are searching for a combination of charm, peace and, comfort.</p>
                        <a class="btn-main" href="#"><span>Choose Room</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="jarallax">
        {{-- <img src="{{asset('assets/img/Digitale Renovierung after.png')}}" class="jarallax-img" style="filter: blur(5px); -webkit-filter: blur(8px);" alt=""> --}}
        <div class="container">
            <div class="row gx-4">
                <div class="col-lg-12 text-center">
                    <h2 class="title center" >Entdecken Sie unsere Produkte
                        <span class="small-border"></span>
                    </h2>
                </div>
                <div class="col-lg-6">
                    <div class="de-room">
                        <div class="d-image">
                            <div class="d-label">ab 69.00- EUR</div>
                            <a href="{{ route('Grundriss.index') }}">
                                <img src="{{asset('assets/img/3D_Grundriss_urban-removebg-preview.png')}}" class="img-fluid d-text" alt="">
                                <img src="{{asset('assets/img/3D_Grundriss_warm-removebg-preview.png')}}" class="d-img-hover d-text img-fluid" alt="">
                            </a>
                        </div>
                        <div class="d-text">
                            <h3>3D GRUNDRISS</h3>
                            <p>Hochwertige 3D Grundrisse aus Ihren Vorlagen</p>
                            <a href="{{ route('Grundriss.index') }}" class="btn-line"><span>zur Produktauswahl</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="de-room">
                        <div class="d-image">
                            <div class="d-label">ab 99.00- EUR</div>
                            <a href="{{ route('digital_home_staing.index') }}">
                                <img src="{{asset('assets/img/Digitale Renovierung before.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/Digitale Renovierung after.png')}}" class="d-img-hover img-fluid" alt="">
                            </a>
                        </div>
                        <div class="d-text">
                            <h3 style="padding-top: 40px !important">DIGITALES HOME STAGING</h3>
                            <p>Geschmackvolle Möblierung oder Renovierung von leeren Räumen</p>
                            <a href="{{ route('digital_home_staing.index') }}" class="btn-line"><span>zur Produktauswahl</span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

        <div class="no-top no-bottom bg-color text-light" style="margin-bottom: 3em !important;">
            <div class="container-fluid">
                <h2 style="display: flex;justify-content: center;">
                    Wie funktioniert die Bestellung?
                </h2>
                <div class="row g-0">
                    <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .2)">
                        <div class="info-box padding20">
                            <img src="{{asset('assets/img/icons/order.png')}}" width="40px" alt="" style="margin-bottom: -70px;">
                            <div class="info-box_text">
                                <div style="margin-bottom: 15px;" class="info-box_title">Wählen Sie ein Produkt aus</div>
                                <div class="info-box_subtite">Wählen Sie aus unseren Produkten und Preisoptionen.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .4)">
                        <div class="info-box padding20">
                            <img src="{{asset('assets/img/icons/package.png')}}" width="40px" alt="" style="margin-bottom: -70px;">
                            <div class="info-box_text">
                                <div style="margin-bottom: 15px;" class="info-box_title">Geben Sie Ihre Bestellung auf</div>
                                <div class="info-box_subtite">Bitte geben Sie Ihre Daten ein und wählen Sie eine Zahlungsmethode, um Ihre Bestellung aufzugeben.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .6)">
                        <div class="info-box padding20">
                            <img src="{{asset('assets/img/icons/file (1).png')}}" width="40px" alt="" style="margin-bottom: -70px;">
                            <div class="info-box_text">
                                <div style="margin-bottom: 15px;" class="info-box_title">Auftragdetails</div>
                                <div class="info-box_subtite">Nach Abschluss Ihrer Zahlung können Sie im nächsten Schritt die Details Ihrer Bestellung auswählen und das Produkt nach Ihren Wünschen anpassen.</div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    @include('includes.footer')
</div>
@endsection
