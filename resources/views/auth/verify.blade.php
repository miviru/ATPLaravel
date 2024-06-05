@extends('layouts.app')

@section('content')
    <div class="container mt-5" style="background-image: url('https://www.atptour.com/-/media/images/news/2022/10/21/14/36/nitto-atp-finals-2022-prize-money.jpg'); background-size: cover; background-position: center; height: 500px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary text-white">
                <div class="card-header bg-primary text-white">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body bg-black">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
