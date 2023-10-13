@extends('layouts.aaryav')
@section('content')


     
<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url('{{ asset("public/img/carousel-bg-2.jpg")}}');">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Our Portfolio</h1>
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
                <h6 class="text-primary text-uppercase">// Our Portfolio //</h6>
                <h1 class="mb-5">All Photos</h1>
            </div>


            <div class="row g-4">

                 @if(count($photos)>0)
                    @foreach($photos as $key => $ph)

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="position-relative overflow-hidden">
                                    <a href="{{asset('public/uploads/portfolio/').'/'.$ph['photo']}}" target="_blank"><img class="img-fluid" src="{{asset('public/uploads/portfolio/').'/'.$ph['photo']}}" alt="" style="width: 100%; height:400px;object-fit: cover;"></a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                 @endif

            </div>


        </div>
    </div>
    

@endsection