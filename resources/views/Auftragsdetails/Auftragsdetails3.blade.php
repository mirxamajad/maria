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
                    <h3 class="form-text-color ">Produktinformationen</h3>
                </div>
                <div class="col-2 text-center text-div" >
                    <h3 class="form-text-color ">Ihre Daten</h3>
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
                    <div class="col-lg-6 offset-lg-3">
                        <div class="de-content-overlay">
                            <h2 class="form-h">Auftragsdetails</h2>
                            <form name="contactForm" id='contact_form' method="post">
                                    <div id="name_error" class="error" style="background-size: cover;">Möbel und Einrichtung</div>
                                    <div style="background-size: cover;">
                                        <div class="form-group">
                                            <input type="radio" name="Name" id="" placeholder="Firma" required="">
                                            <label for="">Keine strikten Vorgaben (Wir wählen die Möblierung und Design aus )</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="Name" id="" placeholder="Firma" required="">
                                            <label for="">Ich habe eine Vorstelung, wie es aussehen soll</label>
                                        </div>
                                    </div>
                                    <div style="background-size: cover;">
                                        <input type="file" name="img" id="img" class="form-control" required="">
                                    </div>
                                    <div style="background-size: cover; mar" class="form-group">
                                        <h3 style="background-size: cover;" for="accessories">   Renovierungen und Änderungen </h3>
                                        <div class="form-group">
                                            <label for="my-input">Farben der Wände und Decken</label>
                                            <input type="text" name="accessories" id="accessories" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="my-input">Farben und Materiellien der Böden</label>
                                            <input type="text" name="accessories" id="accessories" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="my-input">Farben der Fensterrahmen:</label>
                                            <input type="text" name="accessories" id="accessories" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="my-input">Farben und Materialien der Türen</label>
                                            <input type="text" name="accessories" id="accessories" class="form-control">
                                        </div>
                                    </div>
                                    <div style="background-size: cover; mar" class="form-group">
                                        <label style="background-size: cover;" for="format"> Accessoires einfügen </label>
                                        <input type="text" name="format" id="format" class="form-control" placeholder="(z.B. Handtücher, Pfannen, Pflanzen etc.):"  required="">
                                    </div>
                                    <div style="background-size: cover; mar" class="form-group">
                                        <label style="background-size: cover;" for="Sonstiges">  Gewünschtes Format der fertigen Datei  </label>
                                        <input type="text" name="Sonstiges" id="Sonstiges" class="form-control" placeholder="" required="">
                                    </div>
                                    <div style="background-size: cover; mar" class="form-group">
                                        <label style="background-size: cover;" for="Sonstiges">  Sonstiges </label>
                                        <input type="text" name="Sonstiges" id="Sonstiges" class="form-control" placeholder="z.B. Zielgruppe,.." required="">
                                    </div>
                                    <div style="background-size: cover; mar" class="form-group">
                                        <label style="background-size: cover;" for="accessories">  Laden Sie Ihre Dateien hoch  </label>
                                        <p>Laden Sie bis zu 3 Bilder für den Raum hoch. Wir wählen das Passendste aus.
                                            <br>
                                            Nehmen Sie das Bild aus einer Ecke des Raumes im Querformat auf.
                                            Achten Sie bitte darauf, dass möglichst viel von dem Raum zusehen ist.
                                        </p>
                                        <input type="file" name="imgs" id="imgs" class="form-control"  required="">
                                    </div>
                                    <div style="background-size: cover; mar" class="form-group">
                                        <label style="background-size: cover;" for="accessories">  Benennen Sie Ihr Projekt </label>
                                        <input type="text" name="accessories" id="accessories" class="form-control" placeholder="Projektname" required="">
                                    </div>
                                <div class="col-md-12" style="background-size: cover;">
                                    <p id='submit' class="mt20">
                                        {{-- <input type='submit' id='send_message' value='Next' class="btn btn-line"> --}}
                                        <a href="{{ route('ihre_daten') }}" id='send_message' class="btn btn-line"> Next</a>
                                    </p>
                                </div>
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
        let t;
        let price = 69;
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
        $('#mqQty').change(function () {
            // debugger;
            let mqQty = $('#mqQty').val();
            let qty = $('#qty').val();
            if (qty <= mqQty) {
                mqQtyT = price *mqQty;
                t = t + mqQtyT;
                console.log(t);
                $("#total").html(`${t} `);
                $('#error').html(``);
            }

            else{
                $('#error').html(`Bitte wählen Sie den richtigen Wert aus`);

            }

        });

    </script>
@endsection
