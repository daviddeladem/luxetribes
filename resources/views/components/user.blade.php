@extends('layout')

@section('content')
    <div class="row my-5">
        <div class="col-md-6 ">
            <h2 class="my-5">Welcome Back!</h2>

            <h4>Your Profile</h4>
            @if (auth()->user()->profile)
                <img src="{{ url('public/profile/' . auth()->user()->profile) }}" class="img-round w-30">
            @endif
            <h5>Name : {{ auth()->user()->fullname }}</h5>
            <h5>Phone : {{ auth()->user()->phone }}</h5>
            <h5>Email : {{ auth()->user()->email }}</h5>
            <h5>Nationality : {{ auth()->user()->nationality }}</h5>
        </div>
        <div class=" register-images col-md-6 bg-gray ">
            <div class="flex-row my-5">
                <div class="front-img  px-3 py-3">
                    <img src="https://booking.luxetribes.com/images/background/back-8.jpeg" width="300" class="br-12"
                        alt="">
                </div>
                <div class="flex-column ">
                    <div class="front-img  px-3 py-3">
                        <img src="https://booking.luxetribes.com/images/background/back-7.png" width="150"
                            alt="">
                    </div>
                    <div class="front-img px-3 py-3">
                        <img src="https://booking.luxetribes.com/images/background/back-6.jpeg" width="150"
                            class="br-12" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
