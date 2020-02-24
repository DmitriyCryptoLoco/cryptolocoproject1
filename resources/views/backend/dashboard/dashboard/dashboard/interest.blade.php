@extends('layouts.master')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @extends('parts.css')
</head>
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

    <form class="card make-paymnet">
        <div class="card first">
            <p>ENTER LOAN AMOUNT<span class="hint">!</span></p>
            <span class="wrapper"><span class="dlr">$</span>
                <input type="number" name="loan" class="loan" value="5000">
            </span>
            <div class="min-amount">
                Min. amount: $5,000
            </div>
            <p>Bticoin Payment</p>
            <div class="bitcoin-icon">
                <img src="" alt="" class="bitcoin-img">
            </div>
        </div>
        <div class="card secnd">
            <p>COLLATERAL NEEDED <span class="hint"></span></p>
            <p class="amount-result">BTC 5.21 <input id="hidden-amount-result" type="text" hidden></p>
            <p>Collateral amount based on a 50% Loan to Value (LTV).
                <a href="">learn about LTV ratios. <span class="hint"> </span></a>
                <span class="hint"></span></p>
            <input id="make-a-payment" type="button" value="GET YOUR RATE">
        </div>
    </form>
    <style type="text/css">
        .card.first {
            background: #fbfbfb !important;
            padding: 40px;
            margin: 0 30px !important;
        }

        #make-a-payment {
            color: #fff;
            cursor: pointer;
        }

        .card.secnd {
            background: #f1f6fa !important;
            padding-top: 40px !important;
            margin-top: 0px !important;
            margin: 0 30px !important;
            padding: 40px;
        }

        span.dlr {
            position: absolute;
            top: 6px;
            left: 6px;
            font-size: 18px;
        }

        input.loan {
            font-size: 18px;
            max-width: 360px;
        }

        .card.secnd input {
            max-width: 240px;
            background-color: #1acae3 !important;
        }

        form.card.make-paymnet {
            margin: 40px 0;
            padding: 40px;
        }

        .card.first, .card-secnd {
            margin: 0 20px;
        }

        .card make-paymnet {
            display: flex;
            flex-direction: row;
        }

        .card.first, .card.secnd {
            border-radius: 10px;
            box-shadow: none;
            border-radius: 0;
            width: 50%;
            font-size: 18px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        form.card.make-paymnet {
            display: flex;
            flex-direction: row;
        }

    </style>

    <div class="row">
        <div class="col-md-12">
            <div class="card o-hidden mb-4">
                <div class="card-header">
                    <h3 class="w-50 float-left card-title m-0">New Users</h3>
                    <div class="dropdown dropleft text-right w-50 float-right">
                        <button class="btn bg-gray-100" type="button" id="dropdownMenuButton_table1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="nav-icon i-Gear-2"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table1">
                            <a class="dropdown-item" href="#">Add new user</a>
                            <a class="dropdown-item" href="#">View All users</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Avatar</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Smith Doe</td>
                                <td>

                                    <img class="rounded-circle m-0 avatar-sm-table "
                                         src="{{asset('lend-bit.dev/assets/images/faces/1.jpg')}}" alt="">

                                </td>

                                <td>Smith@gmail.com</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="#" class="text-success mr-2">
                                        <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                    </a>
                                    <a href="#" class="text-danger mr-2">
                                        <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jhon Doe</td>
                                <td>

                                    <img class="rounded-circle m-0 avatar-sm-table "
                                         src="{{asset('lend-bit.dev/assets/images/faces/1.jpg')}}" alt="">

                                </td>

                                <td>Jhon@gmail.com</td>
                                <td><span class="badge badge-info">Pending</span></td>
                                <td>
                                    <a href="#" class="text-success mr-2">
                                        <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                    </a>
                                    <a href="#" class="text-danger mr-2">
                                        <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Alex</td>
                                <td>

                                    <img class="rounded-circle m-0 avatar-sm-table "
                                         src="{{asset('lend-bit.dev/assets/images/faces/1.jpg')}}" alt="">
                                </td>
                                <td>Otto@gmail.com</td>
                                <td><span class="badge badge-warning">Not Active</span></td>
                                <td>
                                    <a href="#" class="text-success mr-2">
                                        <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                    </a>
                                    <a href="#" class="text-danger mr-2">
                                        <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-4">
            <div class="card o-hidden">
                <div class="card-body">
                    <span class="text-28">$20038</span>
                    <p class="text-small text-muted m-0">Sales in current month</p>
                    <div id="echart1" style="height: 65px;"></div>
                    <div class="d-flex justify-content-between mt-4">
                        <div class="flex-grow-1">
                            <span class="text-small">Pages / Visit</span>
                            <h5 class="m-0 font-weight-bold text-muted">2065</h5>
                        </div>
                        <div class="flex-grow-1">
                            <span class="text-small">New user</span>
                            <h5 class="m-0 font-weight-bold text-muted">465</h5>
                        </div>
                        <div class="flex-grow-1">
                            <span class="text-small">Last week</span>
                            <h5 class="m-0 font-weight-bold text-muted">23456</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card o-hidden">
                <div class="card-body">
                    <span class="text-28">$7038</span>
                    <p class="text-small text-muted m-0">Sales in current week</p>
                    <div id="echart2" style="height: 65px;"></div>
                    <div class="d-flex justify-content-between mt-4">
                        <div class="flex-grow-1">
                            <span class="text-small">Pages / Visit</span>
                            <h5 class="m-0 font-weight-bold text-muted">2065</h5>
                        </div>
                        <div class="flex-grow-1">
                            <span class="text-small">New user</span>
                            <h5 class="m-0 font-weight-bold text-muted">465</h5>
                        </div>
                        <div class="flex-grow-1">
                            <span class="text-small">Last week</span>
                            <h5 class="m-0 font-weight-bold text-muted">23456</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4 mb-4">
            <div class="card o-hidden">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <div class="flex-grow-1">
                            <p class="text-small text-muted m-0">Sales in current month</p>
                            <p class="text-24 mb-3"><i class="i-Arrow-Up-in-Circle text-success"></i> 80765</p>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-small text-muted m-0">Sales in last month</p>
                            <p class="text-24 mb-3"><i class="i-Arrow-Down-in-Circle text-danger"></i> 10765</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between border-bottom p-2">
                        <div class="flex-grow-1">
                            <p class="text-12 text-muted m-0"><strong>2070</strong> Sales</p>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-12 text-muted m-0"><strong>100</strong> Expense</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between border-bottom p-2">
                        <div class="flex-grow-1">
                            <p class="text-12 text-muted m-0"><strong>4000</strong> Sales</p>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-12 text-muted m-0"><strong>2000</strong> Expense</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between p-2">
                        <div class="flex-grow-1">
                            <p class="text-12 text-muted m-0"><strong>3070</strong> Sales</p>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-12 text-muted m-0"><strong>1770</strong> Expense</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('page-js')
    <script src="{{asset('lend-bit.dev/assets/js/vendor/echarts.min.js')}}"></script>
    <script src="{{asset('lend-bit.dev/assets/js/es5/echart.options.min.js')}}"></script>
    <script src="{{asset('lend-bit.dev/assets/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('lend-bit.dev/assets/js/es5/dashboard.v4.script.js')}}"></script>
@endsection

