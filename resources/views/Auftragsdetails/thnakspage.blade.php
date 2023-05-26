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
                        <h1></h1>
                        <h3></h3>
                    </div>
                </div>
            </div>
        </section>
            {{-- <div class="row text-cont">
                <div class="col-2 text-center text-div "  >
                    <h3 class="form-text-color "></h3>
                </div>
                <div class="col-2 text-center text-div" >
                    <h3 class="form-text-color"> </h3>
                </div>
                <div class="col-2 text-center text-div" >
                    <h3 class="form-text-color active">Übersicht und </h3>
                </div>
                <div class="col-2 text-center text-div" >
                    <h3 class="form-text-color"></h3>
                </div>
            </div> --}}

        <section id="section-main" class="no-bg no-top" aria-label="section-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="de-content-overlay">
                            <h2 class="form-h">Vielen Dank für Ihre Bestellung! </h2>
                            <p class="form-h">
                                Im nächsten Schritt können Sie die Details Ihres Auftrags auswählen.
                            </p>

                            <a href="" class="btn btn-line"> Auftragsdetails</a>


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
