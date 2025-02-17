@extends('layouts.content-layout')

@section('previous-button')
    <a href="{{ route('home') }}" class="text-decoration-none text-white">
        <span class="material-icons">arrow_back_ios_new</span>
    </a>
@endsection

@section('title')
    <div class="text-white">Register Your OTP</div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="sectionnn">
                    <h4 class="card-heading text-center mt-4">Set up Google Authenticator</h4>
                    <div class="card-body" style="text-align: center;">
                        <p>Set up your two factor authentication by scanning the barcode below. Alternatively, you can use the code <strong>{{ $secret }}</strong></p>
                        <div class="mb-3">
                            {!! $QR_Image !!}
                        </div>
                        <p>You must set up your Google Authenticator app before continuing. You will be unable to login otherwise</p>
                        <div>
                            <a href="{{ route('complete.registration') }}" class="btn btn-primary">Complete Registration</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
