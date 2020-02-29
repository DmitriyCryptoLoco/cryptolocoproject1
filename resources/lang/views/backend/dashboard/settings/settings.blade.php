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
        <p>Page of Settings</p>
    </div>
    <h2>Profile</h2>

    <form action="">
        <ul>
            <li><input type="text" value="">1</li>
            <li><input type="text" value="">2</li>
            <li><input type="text" value="">3</li>
            <li><input type="text" value="">4</li>
            <li><input type="text" value="">5</li>
            <li><input type="text" value="">6</li>
            <li><input type="text" value="">7</li>
            <li><input type="text" value="">8</li>
            <li><input type="text" value="">9</li>
            <li><input type="text" value="">10</li>
            <li><input type="text" value="">11</li>
            <li><input type="text" value="">12</li>
        </ul>
    </form>

    <h2>Profile</h2>

    <form action=""></form>
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
