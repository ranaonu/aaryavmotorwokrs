@extends('layouts.aaryav')
@section('content')
    
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url('{{ asset("public/img/carousel-bg-1.jpg")}}');">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Add New Portfolio</h1>
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
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Portfolio') }}</div>

                <div class="card-body">
                    {!! Form::open(['url' => url('/add-new-portfolio'),'id'=>'addPortfolioForm',  'class' => 'addPortfolioForm m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Select type') }}</label>

                            <div class="col-md-6">
                                <select name="type" class="form-control required removeErrorField" id="changeType">                                    
                                    <option value="">--select--</option>
                                    <option value="photo">Photo</option>
                                    <option value="video">Video</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3 phptoDiv">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Add Photo') }}</label>

                            <div class="col-md-6">
                               <input
                                    type="file"
                                    id="addPhotos"
                                    class="form-control demo required removeErrorField"
                                    data-position="bottom left"
                                    name="photos"
                                    value=""
                                    accept="image/png, image/gif, image/jpeg,image/jpg"
                                />
                            </div>
                        </div>

                        <div class="row mb-3 videoDiv">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Add Video Url') }}</label>
                            <div class="col-md-6">
                                <input id="addVideo" type="text" class="form-control required removeErrorField" name="video_url" >
                            </div>
                        </div>

                       <!--  <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="button" class="btn btn-primary" id="submitPortfolioButton">
                                    {{ __('Submit') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
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
    $('#addPortfolioForm').get(0).reset();
</script>
@endsection('js-files')  