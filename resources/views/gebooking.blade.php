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
                        <h1>Ihr individuelles Angebot für Gewerbe</h1>
                        <h3 style="font-size:14px ;">Schicken Sie uns bitte eine Email mit den Objektunterlagen und wir senden Ihnen innerhalb von 24 Stunden ein individuelles Angebot!</h3>
                    </div>
                </div>
            </div>
        </section>



        <section id="section-main" class="no-bg no-top" aria-label="section-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="de-content-overlay">
                            {{-- <h2 class="form-h">IHRE DATEN</h2> --}}
                            <form name="contactForm" id='contact_form' method="post">

                                            <div>
                                                <label for=""> Wählen Sie ein Produkt aus:</label>
                                                    <select id="my-select" class="form-control" name="">
                                                        <option selected disabled>bitte wählen</option>
                                                        <option>3D Grundriss</option>
                                                        <option> Digitales Home Staging </option>
                                                        <option> Digitale Renovierung</option>
                                                    </select>
                                            </div>
                                            <div id="phone_error" class="error" style="background-size: cover;">Vorname</div>
                                            <div style="background-size: cover;">
                                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Vorname" required="">
                                            </div>

                                            <div id="phone_error" class="error" style="background-size: cover;">name</div>
                                            <div style="background-size: cover;">
                                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Nachname" required="">
                                            </div>

                                            <div id="phone_error" class="error" style="background-size: cover;"> Telefon</div>
                                            <div style="background-size: cover;">
                                                <input type="text" name="phone" id="phone" class="form-control" placeholder=" Telefon" required="">
                                            </div>

                                            <div id="email_error" class="error" style="background-size: cover;">E-Mail</div>
                                            <div style="background-size: cover;">
                                                <input type="email" name="Email" id="email" class="form-control" placeholder="E-Mail" required="">
                                            </div>

                                            <div id="email_error" class="error" style="background-size: cover;">Ihre Nachricht </div>
                                            <div style="background-size: cover;">
                                                <textarea name="textatarea" id="textatarea"  class="form-control" cols="30" rows="10">

                                                </textarea>
                                            </div>

                                            <div id="file" class="error" style="background-size: cover;">Image</div>
                                            <div style="background-size: cover;">
                                                <input type="file" name="file" id="file" class="form-control"  >
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
