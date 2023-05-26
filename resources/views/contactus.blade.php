@extends('includes.home')
@section('content')

{{-- <div id="background" data-bgimage="url(assets/images/background/9.jpg) fixed"></div> --}}
<div id="content-absolute">

    <!-- float text begin -->
    <div class="float-text">
        <div class="de_social-icons">
            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
        </div>
        <span><a href="#">Book Now</a></span>
    </div>
    <!-- float text close -->

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    {{-- <h4>Make a</h4> --}}
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="de-content-overlay">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>Seaside Miami</h3>
                                        <address>
                                            <span><strong>Address:</strong>100 S Main St, Los Angeles, CA</span>
                                            <span><strong>Phone:</strong>(208) 333 9296</span>
                                            <span><strong>Fax:</strong>(208) 333 9298</span>
                                            <span><strong>Email:</strong><a href="mailto:contact@example.com">contact@example.com</a></span>
                                        </address>
                                    </div>

                                    <div class="col-lg-6">
                                        <h3>Seaside Maldives</h3>
                                        <address>
                                            <span><strong>Address:</strong>100 S Main St, Los Angeles, CA</span>
                                            <span><strong>Phone:</strong>(208) 333 9296</span>
                                            <span><strong>Fax:</strong>(208) 333 9298</span>
                                            <span><strong>Email:</strong><a href="mailto:contact@example.com">contact@example.com</a></span>
                                        </address>
                                    </div>
                                </div>

                                <div class="spacer-single"></div>

                                <form name="contactForm" id='contact_form' method="post">
                                    <div class="row">
                                        <div class="col-md-12 mb10">
                                            <h3>Send Us Message</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <div id='name_error' class='error'>Please enter your name.</div>
                                            <div>
                                                <input type='text' name='Name' id='name' class="form-control" placeholder="Your Name" required>
                                            </div>

                                            <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                            <div>
                                                <input type='email' name='Email' id='email' class="form-control" placeholder="Your Email" required>
                                            </div>

                                            <div id='phone_error' class='error'>Please enter your phone number.</div>
                                            <div>
                                                <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id='message_error' class='error'>Please enter your message.</div>
                                            <div>
                                                <textarea name='message' id='message' class="form-control" placeholder="Your Message" required></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                                            <p id='submit' class="mt20">
                                                <input type='submit' id='send_message' value='Submit Form' class="btn btn-line">
                                            </p>
                                            <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                            <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>

                                        </div>
                                    </div>
                                </form>

                                <div id="success_message" class='success'>
                                    Your message has been sent successfully. Refresh this page if you want to send more messages.
                                </div>
                                <div id="error_message" class='error'>
                                    Sorry there was an error sending your form.
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="map-container map-fullwidth">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.7152203584424!2d-118.2453181849353!3d34.05117548060617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c648d9808fbd%3A0xb79dfbc6ae338c12!2s100%20S%20Main%20St%2C%20Los%20Angeles%2C%20CA%2090012%2C%20USA!5e0!3m2!1sen!2sid!4v1592143290578!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.footer')
</div>

@endsection
