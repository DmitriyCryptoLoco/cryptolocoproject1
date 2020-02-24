@extends('layouts.master')
@section('page-css')
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
@endsection
@section('main-content')

    <div class="file-manager wrapper">
        <p>Files to Download</p>
        <?php
        $dir = '/home/lendbit/public_html/lend-bit.dev/storage/app/pdf';
        $files1 = scandir($dir, 1);
        echo "  <ul>";
        foreach ($files1 as $i => $item) {
            print_r("<li>
                         <div class='pdf-icon'></div>
                         <div><a href='https://lend-bit.dev/lend-bit.dev/storage/app/pdf/{$item}'>{$item}</a></div>
                    </li>");
        }
        echo "</ul>";
        ?>
    </div>
    <div class="form-files-for-download">
        <form action="" method="get">


        </form>
    </div>

    <style type="text/css">
        .file-manager ul {
            list-style: none;
            list-style: numeric;
        }

        .file-manager ul li {
            display: inline-block;
            max-width: 140px;
            text-align: center;
            margin: 0 30px;
        }

        .file-manager .pdf-icon {
            background: url("https://lend-bit.dev/lend-bit.dev/public/images/pdf.png");
            background-size: contain;
            width: 120px;
            height: 120px;
            display: block;
        }
    </style>
@endsection
@section('page-js')
    <script src="{{asset('lend-bit.dev/assets/js/vendor/echarts.min.js')}}"></script>
    <script src="{{asset('lend-bit.dev/assets/js/es5/echart.options.min.js')}}"></script>
    <script src="{{asset('lend-bit.dev/assets/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('lend-bit.dev/assets/js/es5/dashboard.v4.script.js')}}"></script>
@endsection
