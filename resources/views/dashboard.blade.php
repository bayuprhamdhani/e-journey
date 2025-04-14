@extends('layout')

@section('content')
<link href="css/dashboard.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="js/dashboard.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body rounded shadow">
                        @guest
                            <h1 class="logo-text" style="font-weight: bold; font-size: 40px;">Welcome To e-journey</h1>
                            <h5 class="">Lets make your dream come true with us !</h5>
                        @else
                            <h1 class="logo-text" style="font-weight: bold; font-size: 40px;">Hello, {{ auth()->user()->student->name ?? 'Guest' }}</h1>
                            <h5 class="">Are you ready for make your dream come true ?</h5>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection