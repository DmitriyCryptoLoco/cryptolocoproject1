@extends('layouts.master')
@section('page-css')
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection
@section('main-content')

    <div class="breadcrumb">
        <h1> Interest || Dashboard About BTC,ETH,LTC </h1>
        <ul>
            <li><a href=""> Interest </a></li>
            <li> Index</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top">
        <p></p>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p>Page Of Settings </p>
        </div>
    </div>

@endsection
@section('page-js')
    <script src="{{asset('lend-bit.dev/assets/js/vendor/echarts.min.js')}}"></script>
    <script src="{{asset('lend-bit.dev/assets/js/es5/echart.options.min.js')}}"></script>
    <script src="{{asset('lend-bit.dev/assets/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('lend-bit.dev/assets/js/es5/dashboard.v4.script.js')}}"></script>
@endsection
