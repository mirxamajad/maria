@extends('includes.home')
@section('content')
<div id="background" data-bgimage="url(images/background/6.jpg) fixed"></div>
        <div id="content-absolute">
            <!-- subheader -->
            <section id="subheader" class="no-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>DIGITALES HOME STAGING</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-main" class="no-bg no-top" aria-label="section-menu">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="de-room">
                                <div class="d-image">
                                    <div class="d-label">99.00 -EUR</div>
                                    <a href="{{ route('digital_home_staing.create') }}">
                                        <img src="{{asset('assets/img/digitalhomestaging/DigitalesHomeStaging-chlafzimmer-before.png')}}" class="img-fluid" alt="">
                                        <img src="{{asset('assets/img/digitalhomestaging/DigitalesHomeStagingSchlafzimmer-after.png')}}" class="d-img-hover img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="d-text">
                                    <h3>HOME STAGING</h3>
                                    <p>Möblierung von leeren Räumen mit geschmackvollen Möbeln und Einrichtungsgegenständen. Verschiedene Stils für eine emotionale Darstellung Ihrer Objekte.</p>
                                    <a href="{{ route('digital_home_staing.create') }}" class="btn-line"><span>Zur ProduktInformationen</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="de-room">
                                <div class="d-image">
                                    <div class="d-label">139.00 -EUR</div>

                                    <a href="{{ route('booking') }}">
                                        <img src="assets/images/room/2.jpg" class="img-fluid" alt="">
                                        <img src="assets/images/room/2-alt.jpg" class="d-img-hover img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="d-text">
                                    <h3>RENOVIERUNG</h3>
                                    <p>Erhebliche Veränderungen an renovierungsbedürftigen Wohnungen, wie zum Beispiel das Versetzen von Wänden, Entfernen von Möbeln, Änderung der Fußböden. <br /> &nbsp;</p>
                                    <a href="{{ route('booking') }}" class="btn-line"><span>Zur ProduktInformationen</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('includes.footer')
        </div>
@endsection
