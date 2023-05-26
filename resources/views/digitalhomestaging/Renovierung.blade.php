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
                    <h3 class="form-text-color active">Produktinformationen</h3>
                </div>
                <div class="col-2 text-center text-div" >
                    <h3 class="form-text-color">Ihre Daten</h3>
                </div>
                <div class="col-2 text-center text-div" >
                    <h3 class="form-text-color">Übersicht und Zahlung</h3>
                </div>
                <div class="col-2 text-center text-div" >
                    <h3 class="form-text-color">Auftragsdetails</h3>
                </div>
            </div>

        <section id="section-main" class="no-bg no-top" aria-label="section-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="de-content-overlay">
                            <h2 class="form-h">PRODUKTINFORMATIONEN</h2>
                            <form name="contactForm" id='contact_form' method="post">
                                <div id="step-1" class="row">
                                    <div class="col-md-12 mb10">

                                        <div class="guests-n-rooms">
                                            <div class="dhs">
                                                <div>
                                                    <input type="radio" name="digitalhjomestaging" id="digitalhjomestaging1"> Digitales Staging für Wohnungen
                                                </div>
                                                <div>
                                                    <input type="radio" name="digitalhjomestaging" id="digitalhjomestaging2"> Digitales Staging für Gewerbe
                                                </div>

                                            </div>
                                            <input type="number" class="form-control" id="qty" value="1" min="1">
                                            <p id="mqty">
                                                Bitte füllen Sie <a href="{{ route('gebkooking') }}" style="color: #F05D5e"> das Formular</a> aus, um ein individuelles Angebot für Gewerbe zu erhalten-
                                            </p>
                                            <span id="error" style="color: #F05D5e"></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="step-2" class="col-sm-6">
                                        <h4>Gesamtbetrag </h4>
                                        <h4> <span id="total"></span>Є inkl. Ust. </h4>
                                    </div>
                                </div>
                                <p id='submit' class="mt20">
                                    {{-- <input type='submit' id='send_message' value='Next' class="btn btn-line"> --}}
                                    <a href="{{ route('ihre_daten') }}" id='btn1' class="btn btn-line"> Next</a>
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
            $('#btn1').hide();

        });
        $("#digitalhjomestaging1").click(function () {
            if($(this).prop("checked")) {
                $('#qty').show();
                $('#mqty').hide();
                $('#btn1').show();
             }
        });
        $("#digitalhjomestaging2").click(function () {
            if($(this).prop("checked")) {
                $('#qty').hide();
                $('#mqty').show();
                $('#btn1').hide();
             }
        });


        let t;
        let price = 136;
        $(function () {
             let qty = $('#qty').val();
                t = price *qty;
                $("#total").html(`${t} `);
        });
        $('#qty').change(function () {
            let qty = $('#qty').val();
            t = price *qty;
            console.log(t);
            $("#total").html(`${t} `);
        });



    </script>
@endsection
