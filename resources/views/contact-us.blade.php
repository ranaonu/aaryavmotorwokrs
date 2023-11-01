@extends('layouts.aaryav')
@section('content')
    
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url('{{ asset("public/img/serv-1.jpeg")}}');">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                    </ol>
                </nav> -->
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Contact Us //</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
               <!--  <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Booking //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>book@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// General //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Technical //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="gmap_iframe position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3433.186212689301!2d76.79676420000001!3d30.62870920000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feb6d0022697b%3A0xde5a50fd78a2a229!2sAaryav%20Motor%20Works!5e0!3m2!1sen!2sin!4v1696656863341!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <!-- <iframe class="gmap_iframe position-relative rounded w-100 h-100" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=adda jhungia Tile Market, Patiala Road,  Zirakpur&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0">                        
                    </iframe> -->
                </div>

                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <p class="mb-4">If you are looking for Car Service workshop near you, then you can visit our workshop. You can find the location on map. For any other help please complete the contact form and we will contact to you as soon as possible.</p>
                        {!! Form::open(['url' => url('/send-contact-us-form'),'id'=>'contactForm',  'class' => 'my_form  contactForm m-t-20 data-parsley-validate novalidate form-control','enctype'=>'multipart/form-data'] ) !!}
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control required removeErrorField" id="name" name="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control required removeErrorField email" id="email" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control required removeErrorField number" id="phoneno" name="phoneno" placeholder="Contact No">
                                        <label for="email">Contact No.</label>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control required removeErrorField" id="subject" name="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control required removeErrorField" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="button" id="submitContactUsForm">Send Message</button>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/users.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')  