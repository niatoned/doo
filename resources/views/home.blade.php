@extends('layouts.app')
@section('content')
    <!--============================= SLIDER =============================-->
    <section class="slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="slider-content">
                        <h1>Cleaning Made Easy</h1>
                        <h3>Book expert home cleaners and handymen at a moment's notice. Just pick a time and we’ll do the rest.</h3>
                        <form class="form-wrap" action="{{ route('bookings.create') }}">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <input type="text" name="email" placeholder="Email Address" class="btn-group1">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="number" name="zipcode" placeholder="Zip Code" class="btn-group2">
                                @error('zipcode')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button type="submit" class="btn-form">Continue<i class="pe-7s-angle-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END SLIDER -->
    <!--============================= OUR CLIENTS =============================-->
    <section class="our-client">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>AS SEEN ON</span>
                </div>
                <div class="col-md-12">
                    <ul>
                        <li>
                            <a href="#"><img src="{{asset ('app-assets/images/client1.png')}}" class="img-fluid" alt="client logo"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset ('app-assets/images/client2.png')}}" class="img-fluid" alt="client logo"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset ('app-assets/images/client3.png')}}" class="img-fluid" alt="client logo"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset ('app-assets/images/client4.png')}}" class="img-fluid" alt="client logo"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--//END CLIENTS -->
    <!--============================= HOW IT WORK =============================-->
    <section class="howit-work main-block center-block" id="howitworks">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>How it <span>works</span></h2>
                    <h6>We’ve made all the hardwork for making it simple for you. Here’s how it works</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="howit-wrap">
                        <span class="pe-7s-date"></span>
                        <h4>Book a Cleaning</h4>
                        <p>Click the book now button to make a booking on your preffered date and time</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="howit-wrap">
                        <span class="pe-7s-lock"></span>
                        <h4>Confirm Booking</h4>
                        <p>We will confirm your booking along with your instructions via secure transaction.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="howit-wrap">
                        <span class="pe-7s-home"></span>
                        <h4>We’ll Clean it</h4>
                        <p>Our trusted & experienced maid will come to your door-step on the time for a cleaning</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END HOW IT WORK -->
    <!--============================= TESIMONIAL =============================-->
    <section class="testimonial main-block center-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Don’t take our <span>word</span></h2>
                    <h6>Read what our past customers said about our cleaning and services.</h6>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="testi-block">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p>Maid Services NYC is a wonderful service. I utilized their services to clean a one bedroom apartment I was staying in NYC after throwing a get together. They were prompt, left the place spotless, and very professional. </p>
                    </div>
                    <div class="testi-title">
                        <h4>Sandra</h4>
                        <p>Marketing Staff, New York</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testi-block">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p>I had them out to help me clean my new place for an office dinner I was having. I was very happy with the results. Jennifer came to the location on time. It is such a treat to have the home professionally cleaned. </p>
                    </div>
                    <div class="testi-title">
                        <h4>Jessica</h4>
                        <p>Photographer, New York</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testi-block">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p>They did such a good job. Whether you want to give a unique gift or have your own home cleaned, Maid for you provides a large range of top-notch services that I highly recommend to anyone. </p>
                    </div>
                    <div class="testi-title">
                        <h4>Samantha</h4>
                        <p>Physical Therapist, Manhattan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END TESIMONIAL -->
    <!--============================= SERVICES =============================-->
    <section class="service-title" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Check out some of our <span>services!</span></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Object img Sec 01 -->
    <section class="service">
        <div class="img-objectfit">
            <div class="grid">
                <figure class="effect-lily">
                    <img src="{{asset ('app-assets/images/service-img1.jpg')}}" class="img-fluid" alt="#">
                </figure>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="service-link">
                        <h3>Make Better <span>Living room</span></h3>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Cleaning and highrise dusting</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Furniture Dusting/Vacuuming</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Fixtures cleaning - A/C,Fan etc</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Wall marks cleaning (Washable paint)</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Floor scrubbing / Dry and Wet mop</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Carpet vacuuming</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Object img Sec 02 -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="service-link service-link1">
                        <h3>Your Beautiful <span>Kitchen</span></h3>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Wash and scrub sink</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Wash cabinet faces and appliances</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Dust and wipe all reachable surfaces</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Wipe mirrors and glass fixtures</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Vacuum and mop all floors</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Take out trash and recyclables</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div class="img-objectfit_1">
            <div class="grid">
                <figure class="effect-lily">
                    <img src="{{asset ('app-assets/images/service-img2.jpg')}}" class="img-fluid" alt="#">
                </figure>
            </div>
        </div>
    </section>
    <!-- Object img Sec 03 -->
    <section class="service">
        <div class="img-objectfit">
            <div class="grid">
                <figure class="effect-lily">
                    <img src="{{asset ('app-assets/images/service-img3.jpg')}}" class="img-fluid" alt="#">
                </figure>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="service-link">
                        <h3>Tidy <span>Bathroom</span></h3>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Wash and sanitize toilet, shower and sink</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Dust and wipe all reachable surfaces</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Wipe door handles and light switches</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Wipe mirrors and glass fixtures</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Vacuum and mop all floors</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Take out trash and recyclables</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Object img Sec 04 -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="service-link service-link1">
                        <h3>The Perfect <span>Bedroom</span></h3>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Make beds and change linens</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Dust and wipe all reachable surfaces</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Wipe door handles and light switches</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Wipe mirrors and glass fixtures</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Vacuum and mop all floors</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Take out trash and recyclables</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div class="img-objectfit_1">
            <div class="grid">
                <figure class="effect-lily">
                    <img src="{{asset ('app-assets/images/service-img4.jpg')}}" class="img-fluid" alt="#">
                </figure>
            </div>
        </div>
    </section>
    <!--//END SERVICES -->
    <!--============================= BOOKING =============================-->
    <section class="booking main-block center-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Don’t wait, Book a cleaning now.</h2>
                    <h6>Book expert home cleaners and handymen at a moment's notice. Just pick a time and we’ll do the rest.</h6>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form class="form-wrap mt-5" action="booking.html">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <input type="email" placeholder="Email Address" class="btn-group1">
                            <input type="number" placeholder="Zip Code" class="btn-group2">
                            <button type="submit" class="btn-form">Continue<i class="pe-7s-angle-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--//END BOOKING -->
@endsection
