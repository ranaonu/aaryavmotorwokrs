@extends('layouts.aaryav')
@section('content')


     
<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url('{{ asset("public/img/serv-10.jpeg")}}');">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                    </ol>
                </nav> -->
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Diagnostic Test</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Engine Servicing</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Tires Replacement</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-oil-can fa-2x me-3"></i>
                            <h4 class="m-0">Oil Changing</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/img/serv-12.jpeg')}}"
                                        style="object-fit: contain;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                <p class="mb-4">Maintain your car and increase its performance with regular servicing.
We can provide professional servicing and maintenance work</p>
                                <p><i class="fa fa-check text-success me-3"></i>for all vehicle models of any make, any age, and even new ones
</p>
                                <p><i class="fa fa-check text-success me-3"></i>complete details shared before the service begins
</p>
                                <p><i class="fa fa-check text-success me-3"></i>recording of all work in a service booklet
</p>
                                <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/img/serv-4.jpeg')}}"
                                        style="object-fit: contain;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                <p class="mb-4">A computerized car diagnostic check will give you a true picture of how your vehicle is running.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Fault analysis with the latest diagnostic equipment</p>
                                <p><i class="fa fa-check text-success me-3"></i>Adjustment for optimum performance and emissions
</p>
                                <p><i class="fa fa-check text-success me-3"></i>Workshop personnel trained to an advanced level
</p>
                                <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/img/serv-10.jpeg')}}"
                                        style="object-fit: contain;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                <p class="mb-4">Tyre fitting may seem like a routine job, but if it’s done in a professional manner, it can greatly contribute to the economy and safety of your vehicle. That’s why you should always make an appointment when you need tyre replacement or seasonal swapping.</p>
                                <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/img/service-4.jpg')}}"
                                        style="object-fit: contain;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                <p class="mb-4">Modern motor oil is a miracle of engineering that has a host of positive effects on your engine – lubrication is just the beginning. But you do have to get an oil and filter change from time to time to avoid experiencing serious problems with your vehicle.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Use of genuine Auto part</p>
                                <p><i class="fa fa-check text-success me-3"></i>Responsible oil disposal</p>
                                <p><i class="fa fa-check text-success me-3"></i>Enhances the car’s service record
</p>
                                <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    @include('testmonial')
    <!-- Testimonial End -->
    

@endsection