@extends('layouts.master')
@section('page-css')
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection
@section('main-content')

    <div class="wrapper">
        <p>Files to Download</p>
        <?php
        $dir = '/home/lendbit/public_html/lend-bit.dev/storage/app/pdf';
        $files1 = scandir($dir, 1);
        echo "  <ul style='list-style: numeric'>";
        foreach ($files1 as $i => $item) {
            print_r("<li><span class='pdf-icon'><a class='pdf-icon' href='https://lend-bit.dev/lend-bit.dev/storage/app/pdf/{$item}'>{$item}</a></span></li>");
        }
        echo "</ul>";
        ?>


    </div>
    <div class="form-files-for-download">
        <form action="" method="get">


        </form>
    </div>

    <style>
        ul {
            list-style-type:
        }
    </style>
@endsection
@section('page-js')
    <script src="{{asset('lend-bit.dev/assets/js/vendor/echarts.min.js')}}"></script>
    <script src="{{asset('lend-bit.dev/assets/js/es5/echart.options.min.js')}}"></script>
    <script src="{{asset('lend-bit.dev/assets/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('lend-bit.dev/assets/js/es5/dashboard.v4.script.js')}}"></script>
@endsection
