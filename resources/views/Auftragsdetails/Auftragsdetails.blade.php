@extends('includes.home')
@section('stlye')
<style>
    .form-text-color{
        color: #4b88a2 !important;
    }
     .active{
        color: #F05D5e !important;
    }
    .text-cont{
        background-color: #d3d4d9 !important;
        margin-top: -4.75em !important;
        padding: 35px 70px 20px 70px !important;
        margin-bottom: 3em !important;
    }
    .text-div{
        width: 25% !important;
    }
    .form-h{
        display: flex !important;
        justify-content: center !important;
    }
    input[type=checkbox] {
        transform: scale(1.5);
    }
    #send_message:hover{
        color: #d3d4d9 !important;
        border: 1px solid #d3d4d9 !important;
    }
    .input-hidden {
        position: absolute;
        left: -9999px;
    }




    .mainCont{
        width: 100% !important;
        margin-left: 0% !important;
    }


    .radioButtons {
        display: flex;
        flex-wrap: wrap;
    }

    #qty input[type="radio"] {
        display: none;
    }
    .sad input[type="radio"] {
        display: none;
    }
    .happy input[type="radio"] {
        display: none;
    }

    .radioButton {
        display: inline-block;
        cursor: pointer;
        margin: 5px;
    }

    #qty img {
        border: 1px dashed #444;
        width: 25em !important;
        height: auto !important;
        transition: 500ms all;
        margin: 30% 50% 0% 50% !important;
        /* padding: 0% 25px ; */
    }
    .radioButton img {
        border: 1px dashed #444;
        width:  15em !important;
        height: auto !important;
        transition: 500ms all;
        margin: 20% 10% 0% 10% !important;
    }

    input[type="radio"]:checked + .radioButton img {
        transform:
            rotateZ(-10deg)
            rotateX(10deg);
    }
    input[type=radio]:checked + label>img {
        border: 1px solid #fff;
        box-shadow: 0 0 3px 3px #090;
    }

</style>
@endsection
@section('content')
    <div id="background" data-bgimage="url(assets/images/background/2.jpg) fixed"></div>
    <div id="content-absolute">

        <!-- subheader -->
        <section id="subheader" class="no-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>ProduktInformationen</h1>
                        <h3>Immobiliengröße</h3>
                    </div>
                </div>
            </div>
        </section>
            <div class="row text-cont">
                <div class="col-2 text-center text-div "  >
                    <h3 class="form-text-color ">Produktinformationen</h3>
                </div>
                <div class="col-2 text-center text-div" >
                    <h3 class="form-text-color">Ihre Daten</h3>
                </div>
                <div class="col-2 text-center text-div" >
                    <h3 class="form-text-color">Übersicht und Zahlung</h3>
                </div>
                <div class="col-2 text-center text-div" >
                    <h3 class="form-text-color active">Auftragsdetails</h3>
                </div>
            </div>

        <section id="section-main" class="no-bg no-top" aria-label="section-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 mainCont">
                        <div class="de-content-overlay">
                            <h2 class="form-h">Auftragsdetails</h2>
                            <form name="contactForm" id='contact_form' method="post">
                                <div id="step-1" class="row">
                                    <div class="col-md-12 mb10">

                                        <div class="guests-n-rooms">
                                            <div class="dhs row" style="margin: 0% 25% 0% 25% !important;">
                                                <div class="col-sm-6">
                                                    <input type="radio" name="digitalhjomestaging" id="vordefiniertedesign"> Vordefinierte Design
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="radio" name="digitalhjomestaging" id="individuelledesignauswahl"> Individuelle Designauswahl
                                                </div>

                                            </div>
                                            <div id="qty" style="width: 100 !important;">
                                                <input type="radio" id="radio1" name="option" />
                                                <label for="radio1" class="radioButton">
                                                    <img src="{{asset('assets/img/3D_Grundriss_urban-removebg-preview.png')}}" alt="Radio Button" />
                                                    <br>
                                                    <h5 style="margin: 15% 100%;">Leicht Gekippte Auführung</h5>
                                                </label>
                                                <input type="radio" id="radio2" name="option" />
                                                <label for="radio2" class="radioButton">
                                                    <img src="{{asset('assets/img/3DGrundrissfrontleausführung.png')}}" alt="Radio Button" />
                                                    <br>
                                                    <h5 style="margin: 15% 100%;">Draufsicht</h5>
                                                </label>
                                            </div>
                                            <div id="mqty" class="col-md-12">
                                                <p style="margin: 5% 25% 0% 25% !important;">
                                                    Sie haben die Möglichkeit, Ihr gewünschtes Grundriss- Design auch selbst anzupassen.
                                                </p>
                                                <div>
                                                    <label>Bitte füllen Sie den Fragebogen aus: </label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="perspektive">Perspektive (leicht gekippt oder Draufsicht) </label>
                                                        <input class="form-control" type="text" name="perspektive">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="apartaments">Stockwerk des Apartaments</label>
                                                        <input class="form-control" type="text" name="apartaments">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="wohnzimmer">Fußboden Wohnzimmer</label>
                                                        <input class="form-control" type="text" name="wohnzimmer">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="schlafzimmer">Fußboden Schlafzimmer:</label>
                                                        <input class="form-control" type="text" name="schlafzimmer">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="flur">Fußboden Flur:</label>
                                                        <input class="form-control" type="text" name="flur">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="flur">Fußboden Bad/ WC</label>
                                                        <input class="form-control" type="text" name="flur">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="flur">Fußboden Balkon/ Terrasse (wenn vorhanden)</label>
                                                        <input class="form-control" type="text" name="flur">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="flur">Sonstiges</label>
                                                        <input class="form-control" type="text" name="flur">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for=""> Laden Sie Ihre Dateien hoch</label>
                                                        <input class="form-control" type="file" name="" id="">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="">Projektname</label>
                                                        <input class="form-control" type="text" name="" id="">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="">Weitere Anmerkungen zum Auftrag </label>
                                                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="sad">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <input type="radio" id="radio3" name="option" />
                                                        <label for="radio3" class="radioButton">
                                                            <img src="{{asset('assets/leicht_gekippte_auführung/weiß.jpg')}}" alt="Radio Button 3" />
                                                            <br>
                                                            <h5 style="margin: 15% 50%;">weiß</h5>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="radio" id="radio4" name="option" />
                                                        <label for="radio4" class="radioButton">
                                                            <img src="{{asset('assets/leicht_gekippte_auführung/warm.jpg')}}" id="rImag" alt="Radio Button" />
                                                            <br>
                                                            <h5 style="margin: 15% 50%;">warm</h5>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="radio" id="radio5" name="option" />
                                                        <label for="radio5" class="radioButton">
                                                            <img src="{{asset('assets/leicht_gekippte_auführung/urban.jpg')}}" id="rImag" alt="Radio Button" />
                                                            <br>
                                                            <h5 style="margin: 15% 50%;">urban</h5>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="radio" id="radio6" name="option" />
                                                        <label for="radio6" class="radioButton">
                                                            <img src="{{asset('assets/leicht_gekippte_auführung/rustik.jpg')}}" id="rImag" alt="Radio Button" />
                                                            <br>
                                                            <h5 style="margin: 15% 50%;">rustik</h5>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="radio" id="radio7" name="option" />
                                                        <label for="radio7" class="radioButton">
                                                            <img src="{{asset('assets/leicht_gekippte_auführung/spah.jpg')}}" id="rImag" alt="Radio Button" />
                                                            <br>
                                                            <h5 style="margin: 15% 50%;">spah</h5>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="radio" id="radio8" name="option" />
                                                        <label for="radio8" class="radioButton">
                                                            <img src="{{asset('assets/leicht_gekippte_auführung/cappuccino.jpg')}}" id="rImag" alt="Radio Button" />
                                                            <br>
                                                            <h5 style="margin: 15% 50%;">cappuccino</h5>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="radio" id="radio9" name="option" />
                                                        <label for="radio9" class="radioButton">
                                                            <img src="{{asset('assets/leicht_gekippte_auführung/hell.jpg')}}" id="rImag" alt="Radio Button" />
                                                            <br>
                                                            <h5 style="margin: 15% 50%;">hell</h5>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="radio" id="radio10" name="option" />
                                                        <label for="radio10" class="radioButton">
                                                            <img src="{{asset('assets/leicht_gekippte_auführung/beige.jpg')}}" id="rImag" alt="Radio Button" />
                                                            <br>
                                                            <h5 style="margin: 15% 50%;">beige</h5>
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="happy">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <input type="radio" id="radio11" name="option" />
                                                        <label for="radio11" class="radioButton">
                                                            <img src="{{asset('assets/Draufsicht/3D Grundriss.png')}}" alt="Radio Button 3" />
                                                            {{-- <br>
                                                            <h5 style="margin: 15% 50%;">weiß</h5> --}}
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="radio" id="radio12" name="option" />
                                                        <label for="radio12" class="radioButton">
                                                            <img src="{{asset('assets/Draufsicht/3D Grundriss1.png')}}" id="rImag" alt="Radio Button" />
                                                            {{-- <br>
                                                            <h5 style="margin: 15% 50%;">warm</h5> --}}
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="radio" id="radio13" name="option" />
                                                        <label for="radio13" class="radioButton">
                                                            <img src="{{asset('assets/Draufsicht/3D Grundriss 3.png')}}" id="rImag" alt="Radio Button" />
                                                            {{-- <br>
                                                            <h5 style="margin: 15% 50%;">urban</h5> --}}
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="radio" id="radio14" name="option" />
                                                        <label for="radio14" class="radioButton">
                                                            <img src="{{asset('assets/Draufsicht/3D GrundrissWohnen,3D Grundriss page.png')}}" id="rImag" alt="Radio Button" />
                                                            {{-- <br>
                                                            <h5 style="margin: 15% 50%;">rustik</h5> --}}
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="radio" id="radio15" name="option" />
                                                        <label for="radio15" class="radioButton">
                                                            <img src="{{asset('assets/Draufsicht/3D GrundrissWohnen1,3D Grundrisspage.png')}}" id="rImag" alt="Radio Button" />
                                                            {{-- <br>
                                                            <h5 style="margin: 15% 50%;">spah</h5> --}}
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="radio" id="radio16" name="option" />
                                                        <label for="radio16" class="radioButton">
                                                            <img src="{{asset('assets/Draufsicht/Grundriss_3D, Gewerbe, 3D Grundrisse page.jpg')}}" id="rImag" alt="Radio Button" />
                                                            {{-- <br>
                                                            <h5 style="margin: 15% 50%;">cappuccino</h5> --}}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 andere_designoptionen" style="margin-top: 3rem; margin-left: 5em;">
                                                <h3>Andere Designoptionen</h3>
                                                    <input type="radio" name="andere_designoptionen"> mit Möblierung
                                                    <br>
                                                    <input type="radio" name="andere_designoptionen"> ohne Möblierung
                                                    <br>
                                                    <input type="radio" name="andere_designoptionen"> mit Zimmernamen
                                                    <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p id='submit' class="mt20">
                                    <a href="{{ route('thanks') }}" id='btn1' class="btn btn-line"> Next</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
@section('scripts')
    <script>
        $(function () {
            $('#qty').hide();
            $('#mqty').hide();
            $('.sad').hide();
            $('.happy').hide();
            $('.andere_designoptionen').hide();

        });
        $("#vordefiniertedesign").click(function () {
            if($(this).prop("checked")) {
                $('#qty').show();
                $('#mqty').hide();
                $('.sad').hide();
                $('.happy').hide();
                $('.andere_designoptionen').hide();
             }
        });
        $("#individuelledesignauswahl").click(function () {
            if($(this).prop("checked")) {
                $('#qty').hide();
                $('#mqty').show();

                $('.sad').hide();
                $('.happy').hide();
                $('.andere_designoptionen').hide();
             }
        });
        $("#radio1").click(function () {
            if($(this).prop("checked")) {
                $('.sad').show();
                $('.andere_designoptionen').show();
                $('.happy').hide();
             }
        });
        $("#radio2").click(function () {
            if($(this).prop("checked")) {
                $('.sad').hide();
                $('.happy').show();
                $('.andere_designoptionen').show();
            }
        });






    </script>
@endsection
