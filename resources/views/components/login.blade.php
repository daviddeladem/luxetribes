@extends('layout')

@section('content')
    <div class="row my-5">
        <div class="col-md-6 ">
            <h2 class="my-5">Welcome Back!</h2>

            <form class="form-row" method="POST" action="{{ url('login-user') }}">
                @csrf
                <div class="form-group col-sm-12">
                    <input type="email" name="email" class="form-control br-12" placeholder="Email" required>
                </div>
                <div class="form-group col-sm-12">
                    <input type="password" name="password" class="form-control br-12" placeholder="Password" required>
                </div>
                <button class=" btn-pink py-2" type="submit">Login</button>
                <div class="form-group col-sm-12">
                    <p class="my-3">Don't have an account? <a href="{{ url('register') }}">Register</a> </p>
                    <p class="my-3">Forgot Pasword? <a href="#"> Reset Password?</a> </p>
                </div>

            </form>
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
