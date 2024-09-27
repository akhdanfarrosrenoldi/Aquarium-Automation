@extends('layouts.app')

@section('content')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                @include('layouts.navbars.guest.navbar')
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Reset your password</h4>
                                    <p class="mb-0">Enter your email and please wait a few seconds</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('reset.perform') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" value="{{ old('email') }}" aria-label="Email">
                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-info btn-lg w-100 mt-4 mb-0">Send Reset Link</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="alert">
                                    @include('components.alert')
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('https://img.freepik.com/free-photo/algae-marine-plants_1160-753.jpg?w=996&t=st=1699673335~exp=1699673935~hmac=5c7972fa9a801e3506b11d1d821d14522b6fd428757a02d69641e70e4fde65e0');
                                        background-size: cover;">
                                <span class="mask bg-gradient-info opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"One app to rule them all"</h4>
                                <p class="text-white position-relative">is an aquarium controller capable of controlling and monitoring aquarium equipment and measuring pH/ORP levels.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
