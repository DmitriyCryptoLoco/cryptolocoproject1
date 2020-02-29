@extends('layouts.master')
@section('before-css')


@endsection

@section('main-content')
<div class="breadcrumb">
    <h1>Widgets List</h1>
    <ul>
        <li><a href="">Widgets</a></li>
        <li>Widgets List</li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>

<!-- begin::Widgets content -->
<section class="widgets-content">
    <div class="">
        <!-- begin::first-section -->
        <div class="row mt-2">
            <div class="col-lg-4 col-md-6 col-xl-4 mt-2 mb-2">
                <!-- start::widget tasks -->
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Tasks
                                </h3>
                            </div>
                            <div class="ul-widget__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line ul-widget-nav-tabs-line"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#ul-widget2-tab1-content"
                                            role="tab">
                                            Today
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#ul-widget2-tab2-content"
                                            role="tab">
                                            Week
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#ul-widget2-tab3-content"
                                            role="tab">
                                            Month
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="ul-widget2-tab1-content">
                                    <div class="ul-widget1">
                                        <div class="ul-widget2__item">
                                            <label class="checkbox checkbox-outline-primary">
                                                <input type="checkbox" checked="" />

                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ul-widget2__info">
                                                <a href="#" class="ul-widget2__title">
                                                    Lorem Ipsum Amet
                                                </a>
                                                <a href="#" class="ul-widget2__username">
                                                    By Wick
                                                </a>
                                            </div>

                                            <div class="ul-widget2__actions">
                                                <button type="button" class="btn btn-primary" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Statistic"> </i>
                                                        Reports</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Email"> </i>
                                                        Members
                                                    </a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Pie-Chart-2"></i>
                                                        Charts</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Business-ManWoman"></i>
                                                        Members</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Gears-2"></i>
                                                        Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ul-widget1">
                                        <div class="ul-widget2__item">
                                            <label class="checkbox checkbox-outline-primary">
                                                <input type="checkbox" />

                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ul-widget2__info">
                                                <a href="#" class="ul-widget2__title">
                                                    Lorem Ipsum Amet
                                                </a>
                                                <a href="#" class="ul-widget2__username">
                                                    By Wick
                                                </a>
                                            </div>

                                            <div class="ul-widget2__actions">
                                                <button type="button" class="btn btn-primary" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Statistic"> </i>
                                                        Reports</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Email"> </i>
                                                        Members
                                                    </a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Pie-Chart-2"></i>
                                                        Charts</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Business-ManWoman"></i>
                                                        Members</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Gears-2"></i>
                                                        Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ul-widget1">
                                        <div class="ul-widget2__item">
                                            <label class="checkbox checkbox-outline-primary">
                                                <input type="checkbox" />

                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ul-widget2__info">
                                                <a href="#" class="ul-widget2__title">
                                                    Lorem Ipsum Amet
                                                </a>
                                                <a href="#" class="ul-widget2__username">
                                                    By Wick
                                                </a>
                                            </div>

                                            <div class="ul-widget2__actions">
                                                <button type="button" class="btn btn-primary" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Statistic"> </i>
                                                        Reports</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Email"> </i>
                                                        Members
                                                    </a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Pie-Chart-2"></i>
                                                        Charts</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Business-ManWoman"></i>
                                                        Members</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Gears-2"></i>
                                                        Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ul-widget1">
                                        <div class="ul-widget2__item">
                                            <label class="checkbox checkbox-outline-primary">
                                                <input type="checkbox" />

                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ul-widget2__info">
                                                <a href="#" class="ul-widget2__title">
                                                    Lorem Ipsum Amet
                                                </a>
                                                <a href="#" class="ul-widget2__username">
                                                    By Wick
                                                </a>
                                            </div>

                                            <div class="ul-widget2__actions">
                                                <button type="button" class="btn btn-primary" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Statistic"> </i>
                                                        Reports</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Email"> </i>
                                                        Members
                                                    </a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Pie-Chart-2"></i>
                                                        Charts</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Business-ManWoman"></i>
                                                        Members</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Gears-2"></i>
                                                        Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ul-widget1">
                                        <div class="ul-widget2__item">
                                            <label class="checkbox checkbox-outline-primary">
                                                <input type="checkbox" />

                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ul-widget2__info">
                                                <a href="#" class="ul-widget2__title">
                                                    Lorem Ipsum Amet
                                                </a>
                                                <a href="#" class="ul-widget2__username">
                                                    By Wick
                                                </a>
                                            </div>

                                            <div class="ul-widget2__actions">
                                                <button type="button" class="btn btn-primary" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Statistic"> </i>
                                                        Reports</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Email"> </i>
                                                        Members
                                                    </a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Pie-Chart-2"></i>
                                                        Charts</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Business-ManWoman"></i>
                                                        Members</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Gears-2"></i>
                                                        Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="ul-widget2-tab2-content">
                                    <div class="ul-widget1">
                                        <div class="ul-widget2__item">
                                            <label class="checkbox checkbox-outline-primary">
                                                <input type="checkbox" />

                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ul-widget2__info">
                                                <a href="#" class="ul-widget2__title">
                                                    Lorem Ipsum Amet
                                                </a>
                                                <a href="#" class="ul-widget2__username">
                                                    By Wick
                                                </a>
                                            </div>

                                            <div class="ul-widget2__actions">
                                                <button type="button" class="btn btn-primary" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Statistic"> </i>
                                                        Reports</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Email"> </i>
                                                        Members
                                                    </a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Pie-Chart-2"></i>
                                                        Charts</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Business-ManWoman"></i>
                                                        Members</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Gears-2"></i>
                                                        Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ul-widget1">
                                        <div class="ul-widget2__item">
                                            <label class="checkbox checkbox-outline-primary">
                                                <input type="checkbox" />

                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ul-widget2__info">
                                                <a href="#" class="ul-widget2__title">
                                                    Lorem Ipsum Amet
                                                </a>
                                                <a href="#" class="ul-widget2__username">
                                                    By Wick
                                                </a>
                                            </div>

                                            <div class="ul-widget2__actions">
                                                <button type="button" class="btn btn-primary" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Statistic"> </i>
                                                        Reports</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Email"> </i>
                                                        Members
                                                    </a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Pie-Chart-2"></i>
                                                        Charts</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Business-ManWoman"></i>
                                                        Members</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Gears-2"></i>
                                                        Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ul-widget1">
                                        <div class="ul-widget2__item">
                                            <label class="checkbox checkbox-outline-primary">
                                                <input type="checkbox" />

                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ul-widget2__info">
                                                <a href="#" class="ul-widget2__title">
                                                    Lorem Ipsum Amet
                                                </a>
                                                <a href="#" class="ul-widget2__username">
                                                    By Wick
                                                </a>
                                            </div>

                                            <div class="ul-widget2__actions">
                                                <button type="button" class="btn btn-primary" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Statistic"> </i>
                                                        Reports</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Email"> </i>
                                                        Members
                                                    </a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Pie-Chart-2"></i>
                                                        Charts</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Business-ManWoman"></i>
                                                        Members</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Gears-2"></i>
                                                        Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane " id="ul-widget2-tab3-content">
                                    <div class="ul-widget1">
                                        <div class="ul-widget2__item">
                                            <label class="checkbox checkbox-outline-primary">
                                                <input type="checkbox" />

                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ul-widget2__info">
                                                <a href="#" class="ul-widget2__title">
                                                    Lorem Ipsum Amet
                                                </a>
                                                <a href="#" class="ul-widget2__username">
                                                    By Wick
                                                </a>
                                            </div>

                                            <div class="ul-widget2__actions">
                                                <button type="button" class="btn btn-primary" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Statistic"> </i>
                                                        Reports</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Email"> </i>
                                                        Members
                                                    </a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Pie-Chart-2"></i>
                                                        Charts</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Business-ManWoman"></i>
                                                        Members</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Gears-2"></i>
                                                        Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ul-widget1">
                                        <div class="ul-widget2__item">
                                            <label class="checkbox checkbox-outline-primary">
                                                <input type="checkbox" />

                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ul-widget2__info">
                                                <a href="#" class="ul-widget2__title">
                                                    Lorem Ipsum Amet
                                                </a>
                                                <a href="#" class="ul-widget2__username">
                                                    By Wick
                                                </a>
                                            </div>

                                            <div class="ul-widget2__actions">
                                                <button type="button" class="btn btn-primary" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Statistic"> </i>
                                                        Reports</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Email"> </i>
                                                        Members
                                                    </a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Pie-Chart-2"></i>
                                                        Charts</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Business-ManWoman"></i>
                                                        Members</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Gears-2"></i>
                                                        Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ul-widget1">
                                        <div class="ul-widget2__item">
                                            <label class="checkbox checkbox-outline-primary">
                                                <input type="checkbox" />

                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ul-widget2__info">
                                                <a href="#" class="ul-widget2__title">
                                                    Lorem Ipsum Amet
                                                </a>
                                                <a href="#" class="ul-widget2__username">
                                                    By Wick
                                                </a>
                                            </div>

                                            <div class="ul-widget2__actions">
                                                <button type="button" class="btn btn-primary" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Statistic"> </i>
                                                        Reports</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Email"> </i>
                                                        Members
                                                    </a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Pie-Chart-2"></i>
                                                        Charts</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Business-ManWoman"></i>
                                                        Members</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Gears-2"></i>
                                                        Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ul-widget1">
                                        <div class="ul-widget2__item">
                                            <label class="checkbox checkbox-outline-primary">
                                                <input type="checkbox" />

                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="ul-widget2__info">
                                                <a href="#" class="ul-widget2__title">
                                                    Lorem Ipsum Amet
                                                </a>
                                                <a href="#" class="ul-widget2__username">
                                                    By Wick
                                                </a>
                                            </div>

                                            <div class="ul-widget2__actions">
                                                <button type="button" class="btn btn-primary" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                    <span class="_dot _inline-dot"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Statistic"> </i>
                                                        Reports</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Email"> </i>
                                                        Members
                                                    </a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Pie-Chart-2"></i>
                                                        Charts</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Business-ManWoman"></i>
                                                        Members</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                                        <i class="i-Gears-2"></i>
                                                        Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end::widget tasks -->
            </div>
            <div class="col-lg-4 col-md-6 col-xl-4 mt-2 mb-2">
                <!-- start::widget tasks -->
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Notifications
                                </h3>
                            </div>
                            <div class="ul-widget__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold " role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#ul-widget3-tab1-content"
                                            role="tab">
                                            Today
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#ul-widget3-tab2-content"
                                            role="tab">
                                            Week
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#ul-widget3-tab3-content"
                                            role="tab">
                                            Month
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="ul-widget3-tab1-content">
                                    <div class="ul-widget-notification">
                                        <div class="ul-widget-notification-item-div">
                                            <a href="#" class="ul-widget-notification-item">
                                                <div class="ul-widget-notification-item-icon">
                                                    <i class="i-Checkout"></i>
                                                </div>
                                                <div class="ul-widget-notification-item-details">
                                                    <div class="ul-widget-notification-item-title">
                                                        New order has been received.
                                                    </div>
                                                    <div class="ul-widget-notification-item-time">
                                                        2 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="ul-widget-notification-item-div">
                                            <a href="#" class="ul-widget-notification-item">
                                                <div class="ul-widget-notification-item-icon">
                                                    <i class="i-Arrow-Refresh"></i>
                                                </div>
                                                <div class="ul-widget-notification-item-details">
                                                    <div class="ul-widget-notification-item-title">
                                                        Pending Order.
                                                    </div>
                                                    <div class="ul-widget-notification-item-time">
                                                        24 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="ul-widget-notification-item-div">
                                            <a href="#" class="ul-widget-notification-item">
                                                <div class="ul-widget-notification-item-icon">
                                                    <i class="i-Close-Window"></i>
                                                </div>
                                                <div class="ul-widget-notification-item-details">
                                                    <div class="ul-widget-notification-item-title">
                                                        Decline Order.
                                                    </div>
                                                    <div class="ul-widget-notification-item-time">
                                                        Today
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="ul-widget-notification-item-div">
                                            <a href="#" class="ul-widget-notification-item">
                                                <div class="ul-widget-notification-item-icon">
                                                    <i class="i-Checkout"></i>
                                                </div>
                                                <div class="ul-widget-notification-item-details">
                                                    <div class="ul-widget-notification-item-title">
                                                        New order has been received.
                                                    </div>
                                                    <div class="ul-widget-notification-item-time">
                                                        2 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="ul-widget-notification-item-div">
                                            <a href="#" class="ul-widget-notification-item">
                                                <div class="ul-widget-notification-item-icon">
                                                    <i class="i-Arrow-Refresh"></i>
                                                </div>
                                                <div class="ul-widget-notification-item-details">
                                                    <div class="ul-widget-notification-item-title">
                                                        Pending Order.
                                                    </div>
                                                    <div class="ul-widget-notification-item-time">
                                                        24 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="ul-widget3-tab2-content">
                                    <div class="ul-widget-notification-item-div">
                                        <a href="#" class="ul-widget-notification-item">
                                            <div class="ul-widget-notification-item-icon">
                                                <i class="i-Checkout"></i>
                                            </div>
                                            <div class="ul-widget-notification-item-details">
                                                <div class="ul-widget-notification-item-title">
                                                    New order has been received.
                                                </div>
                                                <div class="ul-widget-notification-item-time">
                                                    2 hrs ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="ul-widget-notification-item-div">
                                        <a href="#" class="ul-widget-notification-item">
                                            <div class="ul-widget-notification-item-icon">
                                                <i class="i-Arrow-Refresh"></i>
                                            </div>
                                            <div class="ul-widget-notification-item-details">
                                                <div class="ul-widget-notification-item-title">
                                                    Pending Order.
                                                </div>
                                                <div class="ul-widget-notification-item-time">
                                                    24 hrs ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ul-widget-notification-item-div">
                                        <a href="#" class="ul-widget-notification-item">
                                            <div class="ul-widget-notification-item-icon">
                                                <i class="i-Close-Window"></i>
                                            </div>
                                            <div class="ul-widget-notification-item-details">
                                                <div class="ul-widget-notification-item-title">
                                                    Decline Order.
                                                </div>
                                                <div class="ul-widget-notification-item-time">
                                                    Today
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="tab-pane " id="ul-widget3-tab3-content">
                                    <div class="ul-widget3">
                                        <div class="ul-widget-notification-item-div">
                                            <a href="#" class="ul-widget-notification-item">
                                                <div class="ul-widget-notification-item-icon">
                                                    <i class="i-Checkout"></i>
                                                </div>
                                                <div class="ul-widget-notification-item-details">
                                                    <div class="ul-widget-notification-item-title">
                                                        New order has been received.
                                                    </div>
                                                    <div class="ul-widget-notification-item-time">
                                                        2 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="ul-widget-notification-item-div">
                                            <a href="#" class="ul-widget-notification-item">
                                                <div class="ul-widget-notification-item-icon">
                                                    <i class="i-Arrow-Refresh"></i>
                                                </div>
                                                <div class="ul-widget-notification-item-details">
                                                    <div class="ul-widget-notification-item-title">
                                                        Pending Order.
                                                    </div>
                                                    <div class="ul-widget-notification-item-time">
                                                        24 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="ul-widget-notification-item-div">
                                            <a href="#" class="ul-widget-notification-item">
                                                <div class="ul-widget-notification-item-icon">
                                                    <i class="i-Close-Window"></i>
                                                </div>
                                                <div class="ul-widget-notification-item-details">
                                                    <div class="ul-widget-notification-item-title">
                                                        Decline Order.
                                                    </div>
                                                    <div class="ul-widget-notification-item-time">
                                                        Today
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end::widget tasks -->
            </div>
            <!-- begin::users -->
            <div class="col-lg-4 col-md-6 col-xl-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Users
                                </h3>
                            </div>
                            <div class="ul-widget__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-toggle="tab"
                                            href="#__g-widget4-tab1-content" role="tab" aria-selected="true">
                                            Today
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#__g-widget4-tab2-content"
                                            role="tab" aria-selected="false">
                                            Month
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="__g-widget4-tab1-content">
                                    <div class="ul-widget1">
                                        <div class="ul-widget4__item  ul-widget4__users">
                                            <div class="ul-widget4__img">
                                                <img src="{{ asset('assets/images/faces/1.jpg') }}" id="userDropdown"
                                                    alt="" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" />
                                            </div>
                                            <div class="ul-widget2__info ul-widget4__users-info">
                                                <a href="#" class="ul-widget2__title">
                                                    Anna Strong
                                                </a>
                                                <span href="#" class="ul-widget2__username">
                                                    Visual Designer,Google Inc
                                                </span>
                                            </div>
                                            <div class="ul-widget4__actions">
                                                <button type="button" class="btn btn-outline-danger m-1">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                        <div class="ul-widget4__item ul-widget4__users">
                                            <div class="ul-widget4__img">
                                                <img src="{{ asset('assets/images/faces/2.jpg') }}" id="userDropdown"
                                                    alt="" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" />
                                            </div>
                                            <div class="ul-widget2__info ul-widget4__users-info">
                                                <a href="#" class="ul-widget2__title">
                                                    Anna Strong
                                                </a>
                                                <span href="#" class="ul-widget2__username">
                                                    Visual Designer,Google Inc
                                                </span>
                                            </div>
                                            <div class="ul-widget4__actions">
                                                <button type="button" class="btn btn-outline-success m-1">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                        <div class="ul-widget4__item ul-widget4__users">
                                            <div class="ul-widget4__img">
                                                <img src="{{ asset('assets/images/faces/3.jpg') }}" id="userDropdown"
                                                    alt="" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" />
                                            </div>
                                            <div class="ul-widget2__info ul-widget4__users-info">
                                                <a href="#" class="ul-widget2__title">
                                                    Anna Strong
                                                </a>
                                                <span href="#" class="ul-widget2__username">
                                                    Visual Designer,Google Inc
                                                </span>
                                            </div>
                                            <div class="ul-widget4__actions">
                                                <button type="button" class="btn btn-outline-warning m-1">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                        <div class="ul-widget4__item ul-widget4__users">
                                            <div class="ul-widget4__img">
                                                <img src="{{ asset('assets/images/faces/5.jpg') }}" id="userDropdown"
                                                    alt="" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" />
                                            </div>
                                            <div class="ul-widget2__info ul-widget4__users-info">
                                                <a href="#" class="ul-widget2__title">
                                                    Anna Strong
                                                </a>
                                                <span href="#" class="ul-widget2__username">
                                                    Visual Designer,Google Inc
                                                </span>
                                            </div>
                                            <div class="ul-widget4__actions">
                                                <button type="button" class="btn btn-outline-info m-1">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="__g-widget4-tab2-content">
                                    <div class="ul-widget1">
                                        <div class="ul-widget4__item  ul-widget4__users">
                                            <div class="ul-widget4__img">
                                                <img src="{{ asset('assets/images/faces/2.jpg') }}" id="userDropdown"
                                                    alt="" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" />
                                            </div>
                                            <div class="ul-widget2__info ul-widget4__users-info">
                                                <a href="#" class="ul-widget2__title">
                                                    Anna Strong
                                                </a>
                                                <span href="#" class="ul-widget2__username">
                                                    Visual Designer,Google Inc
                                                </span>
                                            </div>
                                            <div class="ul-widget4__actions">
                                                <button type="button" class="btn btn-outline-danger m-1">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                        <div class="ul-widget4__item ul-widget4__users">
                                            <div class="ul-widget4__img">
                                                <img src="{{ asset('assets/images/faces/1.jpg') }}" id="userDropdown"
                                                    alt="" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" />
                                            </div>
                                            <div class="ul-widget2__info ul-widget4__users-info">
                                                <a href="#" class="ul-widget2__title">
                                                    Anna Strong
                                                </a>
                                                <span href="#" class="ul-widget2__username">
                                                    Visual Designer,Google Inc
                                                </span>
                                            </div>
                                            <div class="ul-widget4__actions">
                                                <button type="button" class="btn btn-outline-success m-1">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                        <div class="ul-widget4__item ul-widget4__users">
                                            <div class="ul-widget4__img">
                                                <img src="{{ asset('assets/images/faces/3.jpg') }}" id="userDropdown"
                                                    alt="" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" />
                                            </div>
                                            <div class="ul-widget2__info ul-widget4__users-info">
                                                <a href="#" class="ul-widget2__title">
                                                    Anna Strong
                                                </a>
                                                <span href="#" class="ul-widget2__username">
                                                    Visual Designer,Google Inc
                                                </span>
                                            </div>
                                            <div class="ul-widget4__actions">
                                                <button type="button" class="btn btn-outline-warning m-1">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                        <div class="ul-widget4__item ul-widget4__users">
                                            <div class="ul-widget4__img">
                                                <img src="{{ asset('assets/images/faces/4.jpg') }}" id="userDropdown"
                                                    alt="" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" />
                                            </div>
                                            <div class="ul-widget2__info ul-widget4__users-info">
                                                <a href="#" class="ul-widget2__title">
                                                    Anna Strong
                                                </a>
                                                <span href="#" class="ul-widget2__username">
                                                    Visual Designer,Google Inc
                                                </span>
                                            </div>
                                            <div class="ul-widget4__actions">
                                                <button type="button" class="btn btn-outline-info m-1">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::users -->
        </div>
        <!-- end::first-section -->
        <!-- start second section -->
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-4 mt-4 mb-4">
                <div class="card ">
                    <div class="card-body">
                        <!-- begin::widget-stats-1 -->
                        <div class="ul-widget1">
                            <div class="ul-widget__item">
                                <div class="ul-widget__info">
                                    <h3 class="ul-widget1__title">Member Profit</h3>
                                    <span class="ul-widget__desc text-mute">Average Weekly Profit</span>
                                </div>
                                <span class="ul-widget__number text-primary">+$17,800</span>
                            </div>
                            <div class="ul-widget__item">
                                <div class="ul-widget__info">
                                    <h3 class="ul-widget1__title">Orders</h3>
                                    <span class="ul-widget__desc text-mute">Weekly Customer Orders</span>
                                </div>
                                <span class="ul-widget__number text-danger">+1,800</span>
                            </div>
                            <div class="ul-widget__item">
                                <div class="ul-widget__info">
                                    <h3 class="ul-widget1__title">Issue Reports</h3>
                                    <span class="ul-widget__desc text-mute">System bugs and issues</span>
                                </div>
                                <span class="ul-widget__number text-success">-27,49%</span>
                            </div>
                        </div>
                        <!-- end::widget-stats-1 -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <!-- begin::widget-stats-1 -->
                        <div class="ul-widget1">
                            <div class="ul-widget__item">
                                <div class="ul-widget__info">
                                    <h3 class="ul-widget1__title">IPO Margin</h3>
                                    <span class="ul-widget__desc text-mute">Average IPO Margin</span>
                                </div>
                                <span class="ul-widget__number text-primary">+24%</span>
                            </div>
                            <div class="ul-widget__item">
                                <div class="ul-widget__info">
                                    <h3 class="ul-widget1__title">Payments</h3>
                                    <span class="ul-widget__desc text-mute">Yearly Expenses</span>
                                </div>
                                <span class="ul-widget__number text-danger">+$560,800</span>
                            </div>
                            <div class="ul-widget__item">
                                <div class="ul-widget__info">
                                    <h3 class="ul-widget1__title">Issue Reports</h3>
                                    <span class="ul-widget__desc text-mute">Overall Regional Logistics</span>
                                </div>
                                <span class="ul-widget__number text-success">-10%</span>
                            </div>
                        </div>
                        <!-- end::widget-stats-1 -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <!-- begin::widget-stats-1 -->
                        <div class="ul-widget1">
                            <div class="ul-widget__item">
                                <div class="ul-widget__info">
                                    <h3 class="ul-widget1__title">Transactions</h3>
                                    <span class="ul-widget__desc text-mute">Daily Transaction Increase</span>
                                </div>
                                <span class="ul-widget__number text-primary">+80%</span>
                            </div>
                            <div class="ul-widget__item">
                                <div class="ul-widget__info">
                                    <h3 class="ul-widget1__title">Orders</h3>
                                    <span class="ul-widget__desc text-mute">Average Weekly Orders</span>
                                </div>
                                <span class="ul-widget__number text-danger">+15%</span>
                            </div>
                            <div class="ul-widget__item">
                                <div class="ul-widget__info">
                                    <h3 class="ul-widget1__title">Revenue</h3>
                                    <span class="ul-widget__desc text-mute">Overall Revenue Increase</span>
                                </div>
                                <span class="ul-widget__number text-success">+60%</span>
                            </div>
                        </div>
                        <!-- end::widget-stats-1 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end second section -->

        <!-- begin::3rd section -->
        <div class="row mt-4">
            <!-- begin::authors-profit -->
            <div class="col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head pb-20 v-margin">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Authors Profit
                                </h3>
                            </div>
                            <button type="button" class="btn btn-info dropdown-toggle _r_btn border-0"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Latest
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start"
                                style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Bar-Chart-4"> </i>
                                    Export</a>
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Data-Save"> </i>
                                    Save
                                </a>
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Duplicate-Layer"></i>
                                    Import</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Folder-Download"></i>
                                    Update</a>
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Gears-2"></i>
                                    Customize</a>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="ul-widget1">
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img">
                                        <img src="{{ asset('assets/images/faces/1.jpg') }}" id="userDropdown" alt=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                                    </div>
                                    <div class="ul-widget2__info ul-widget4__users-info">
                                        <a href="#" class="ul-widget2__title">
                                            Anna Strong
                                        </a>
                                        <span href="#" class="ul-widget2__username">
                                            Visual Designer,Google Inc
                                        </span>
                                    </div>
                                    <span class="ul-widget4__number t-font-boldest text-success">+500</span>
                                </div>

                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img">
                                        <img src="{{ asset('assets/images/faces/2.jpg') }}" id="userDropdown" alt=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                                    </div>
                                    <div class="ul-widget2__info ul-widget4__users-info">
                                        <a href="#" class="ul-widget2__title">
                                            Will Smith
                                        </a>
                                        <span href="#" class="ul-widget2__username">
                                            Developer
                                        </span>
                                    </div>
                                    <span class="ul-widget4__number t-font-boldest text-danger">+900</span>
                                </div>

                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img">
                                        <img src="{{ asset('assets/images/faces/3.jpg') }}" id="userDropdown" alt=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                                    </div>
                                    <div class="ul-widget2__info ul-widget4__users-info">
                                        <a href="#" class="ul-widget2__title">
                                            Will Smith
                                        </a>
                                        <span href="#" class="ul-widget2__username">
                                            Developer
                                        </span>
                                    </div>
                                    <span class="ul-widget4__number t-font-boldest text-primary">+700</span>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img">
                                        <img src="{{ asset('assets/images/faces/4.jpg') }}" id="userDropdown" alt=""
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                                    </div>
                                    <div class="ul-widget2__info ul-widget4__users-info">
                                        <a href="#" class="ul-widget2__title">
                                            Megan Fox
                                        </a>
                                        <span href="#" class="ul-widget2__username">
                                            UI/UX
                                        </span>
                                    </div>
                                    <span class="ul-widget4__number t-font-boldest text-warning">+100</span>
                                </div>
                                <!-- <div class="ul-widget4__item ul-widget4__users">
<div class="ul-widget4__img">
<img src="{{ asset('assets/images/faces/5.jpg') }}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
</div>
<div class="ul-widget2__info ul-widget4__users-info">
<a href="#" class="ul-widget2__title">
Ryan Fox
</a>							 
<span href="#" class="ul-widget2__username">
Backend Developer
</span>							 	 
</div>
<span class="ul-widget4__number t-font-boldest text-info">+100</span>
</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::authors-profit -->
            <!-- start::widget tasks -->
            <div class="col-lg-4 col-xl-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head  v-margin pb-20">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title ">
                                    Download Files
                                </h3>
                            </div>
                            <button type="button" class="btn btn-info dropdown-toggle _r_btn border-0"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Latest
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start"
                                style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Bar-Chart-4"> </i>
                                    Export</a>
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Data-Save"> </i>
                                    Save
                                </a>
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Duplicate-Layer"></i>
                                    Import</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Folder-Download"></i>
                                    Update</a>
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Gears-2"></i>
                                    Customize</a>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="__g-widget4">
                                <div class="ul-widget4__item">
                                    <div class="ul-widget4__pic-icon">
                                        <i class="i-Folder-With-Document text-info "></i>
                                    </div>
                                    <a href="#" class="ul-widget4__title">
                                        Documentation
                                    </a>
                                </div>

                                <div class="ul-widget4__item">
                                    <div class="ul-widget4__pic-icon">
                                        <i class="i-File-CSV text-success "></i>
                                    </div>
                                    <a href="#" class="ul-widget4__title">
                                        Full Developer Manual For 4.7
                                    </a>
                                </div>

                                <div class="ul-widget4__item">
                                    <div class="ul-widget4__pic-icon">
                                        <i class="i-File-Zip text-danger "></i>
                                    </div>
                                    <a href="#" class="ul-widget4__title">
                                        Download Ziped version OF 5.0
                                    </a>
                                </div>
                                <div class="ul-widget4__item">
                                    <div class="ul-widget4__pic-icon">
                                        <i class="i-File-JPG text-warning "></i>
                                    </div>
                                    <a href="#" class="ul-widget4__title">
                                        Project Launch Event
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::widget-task -->

            <!-- begin::latest-updates -->
            <div class="col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head pb-20 v-margin">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Latest Updates
                                </h3>
                            </div>
                            <button type="button" class="btn btn-info dropdown-toggle _r_btn border-0"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Latest
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start"
                                style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Bar-Chart-4"> </i>
                                    Export</a>
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Data-Save"> </i>
                                    Save
                                </a>
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Duplicate-Layer"></i>
                                    Import</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Folder-Download"></i>
                                    Update</a>
                                <a class="dropdown-item ul-widget__link--font" href="#">
                                    <i class="i-Gears-2"></i>
                                    Customize</a>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="ul-widget1">
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__pic-icon">
                                        <i class="i-Folder-With-Document text-info "></i>
                                    </div>
                                    <div class="ul-widget2__info ul-widget4__users-info">
                                        <a href="#" class="ul-widget4__title">
                                            New Version
                                        </a>
                                    </div>
                                    <span class="ul-widget4__number t-font-boldest text-success">+500</span>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__pic-icon">
                                        <i class="i-Folder-Add- text-success "></i>
                                    </div>
                                    <div class="ul-widget2__info ul-widget4__users-info">
                                        <a href="#" class="ul-widget4__title">
                                            Old Version
                                        </a>
                                    </div>
                                    <span class="ul-widget4__number t-font-boldest text-info">+500</span>
                                </div>

                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__pic-icon">
                                        <i class="i-Folder-Binder text-danger "></i>
                                    </div>
                                    <div class="ul-widget2__info ul-widget4__users-info">
                                        <a href="#" class="ul-widget4__title">
                                            Old Version 2
                                        </a>
                                    </div>
                                    <span class="ul-widget4__number t-font-boldest text-warning">+333</span>
                                </div>

                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__pic-icon">
                                        <i class="i-Folder-Download text-warning "></i>
                                    </div>
                                    <div class="ul-widget2__info ul-widget4__users-info">
                                        <a href="#" class="ul-widget4__title">
                                            Donwload New Version
                                        </a>
                                    </div>
                                    <span class="ul-widget4__number t-font-boldest text-danger">+200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::latest-updates -->
        </div>
        <!-- end::3rd section -->

        <!-- begin::4th section -->
        <div class="row mt-4">
            <!-- begin::best-sellers -->
            <div class="col-xl-8 col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Best Sellers
                                </h3>
                            </div>
                            <div class="ul-widget__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-toggle="tab"
                                            href="#ul-widget5-tab1-content" role="tab" aria-selected="true">
                                            Latest
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#ul-widget5-tab2-content" role="tab"
                                            aria-selected="false">
                                            Month
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="ul-widget5-tab1-content">
                                    <div class="ul-widget5">
                                        <div class="ul-widget5__item ">
                                            <div class="ul-widget5__content">
                                                <div class="ul-widget5__pic">
                                                    <img class=""
                                                        src="{{ asset('assets/images/products/iphone-1.jpg') }}"
                                                        alt="Third slide" />
                                                </div>
                                                <div class="ul-widget5__section">
                                                    <a href="#" class="ul-widget4__title">
                                                        Great Logo Designn
                                                    </a>
                                                    <p class="ul-widget5__desc">
                                                        UI lib admin themes.
                                                    </p>
                                                    <div class="ul-widget5__info">
                                                        <span>Author:</span>
                                                        <span class="text-primary">Jon Snow</span>
                                                        <span>Released:</span>
                                                        <span class="text-primary">23.08.17</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ul-widget5__content">
                                                <div class="ul-widget5__stats">
                                                    <span class="ul-widget5__number">19,200</span>
                                                    <span class="ul-widget5__sales text-mute">sales</span>
                                                </div>
                                                <div class="ul-widget5__stats">
                                                    <span class="ul-widget5__number">1046</span>
                                                    <span class="ul-widget5__sales text-mute">votes</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ul-widget5__item ">
                                            <div class="ul-widget5__content">
                                                <div class="ul-widget5__pic">
                                                    <img class=""
                                                        src="{{ asset('assets/images/products/speaker-1.jpg') }}"
                                                        alt="Third slide" />
                                                </div>
                                                <div class="ul-widget5__section">
                                                    <a href="#" class="ul-widget4__title">
                                                        Great Logo Designn
                                                    </a>
                                                    <p class="ul-widget5__desc">
                                                        UI lib admin themes.
                                                    </p>
                                                    <div class="ul-widget5__info">
                                                        <span>Author:</span>
                                                        <span class="text-primary">Jon Snow</span>
                                                        <span>Released:</span>
                                                        <span class="text-primary">23.08.17</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ul-widget5__content">
                                                <div class="ul-widget5__stats">
                                                    <span class="ul-widget5__number">29,200</span>
                                                    <span class="ul-widget5__sales text-mute">sales</span>
                                                </div>
                                                <div class="ul-widget5__stats">
                                                    <span class="ul-widget5__number">4500</span>
                                                    <span class="ul-widget5__sales text-mute">votes</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ul-widget5__item ">
                                            <div class="ul-widget5__content">
                                                <div class="ul-widget5__pic">
                                                    <img class=""
                                                        src="{{ asset('assets/images/products/watch-1.jpg') }}"
                                                        alt="Third slide" />
                                                </div>
                                                <div class="ul-widget5__section">
                                                    <a href="#" class="ul-widget4__title">
                                                        Great Logo Designn
                                                    </a>
                                                    <p class="ul-widget5__desc">
                                                        UI lib admin themes.
                                                    </p>
                                                    <div class="ul-widget5__info">
                                                        <span>Author:</span>
                                                        <span class="text-primary">Jon Snow</span>
                                                        <span>Released:</span>
                                                        <span class="text-primary">23.08.17</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ul-widget5__content">
                                                <div class="ul-widget5__stats">
                                                    <span class="ul-widget5__number">23,200</span>
                                                    <span class="ul-widget5__sales text-mute">sales</span>
                                                </div>
                                                <div class="ul-widget5__stats">
                                                    <span class="ul-widget5__number">2046</span>
                                                    <span class="ul-widget5__sales text-mute">votes</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="ul-widget5-tab2-content">
                                    <div class="ul-widget5">
                                        <div class="ul-widget5__item ">
                                            <div class="ul-widget5__content">
                                                <div class="ul-widget5__pic">
                                                    <img class=""
                                                        src="{{ asset('assets/images/products/speaker-1.jpg') }}"
                                                        alt="Third slide" />
                                                </div>
                                                <div class="ul-widget5__section">
                                                    <a href="#" class="ul-widget4__title">
                                                        Great Logo Designn
                                                    </a>
                                                    <p class="ul-widget5__desc">
                                                        UI lib admin themes.
                                                    </p>
                                                    <div class="ul-widget5__info">
                                                        <span>Author:</span>
                                                        <span class="text-primary">Jon Snow</span>
                                                        <span>Released:</span>
                                                        <span class="text-primary">23.08.17</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ul-widget5__content">
                                                <div class="ul-widget5__stats">
                                                    <span class="ul-widget5__number">19,200</span>
                                                    <span class="ul-widget5__sales text-mute">sales</span>
                                                </div>
                                                <div class="ul-widget5__stats">
                                                    <span class="ul-widget5__number">1046</span>
                                                    <span class="ul-widget5__sales text-mute">votes</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ul-widget5__item ">
                                            <div class="ul-widget5__content">
                                                <div class="ul-widget5__pic">
                                                    <img class=""
                                                        src="{{ asset('assets/images/products/iphone-1.jpg')  }}"
                                                        alt="Third slide" />
                                                </div>
                                                <div class="ul-widget5__section">
                                                    <a href="#" class="ul-widget4__title">
                                                        Great Logo Designn
                                                    </a>
                                                    <p class="ul-widget5__desc">
                                                        UI lib admin themes.
                                                    </p>
                                                    <div class="ul-widget5__info">
                                                        <span>Author:</span>
                                                        <span class="text-primary">Jon Snow</span>
                                                        <span>Released:</span>
                                                        <span class="text-primary">23.08.17</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ul-widget5__content">
                                                <div class="ul-widget5__stats">
                                                    <span class="ul-widget5__number">29,200</span>
                                                    <span class="ul-widget5__sales text-mute">sales</span>
                                                </div>
                                                <div class="ul-widget5__stats">
                                                    <span class="ul-widget5__number">4500</span>
                                                    <span class="ul-widget5__sales text-mute">votes</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ul-widget5__item ">
                                            <div class="ul-widget5__content">
                                                <div class="ul-widget5__pic">
                                                    <img class=""
                                                        src="{{ asset('assets/images/products/watch-1.jpg') }}"
                                                        alt="Third slide" />
                                                </div>
                                                <div class="ul-widget5__section">
                                                    <a href="#" class="ul-widget4__title">
                                                        Great Logo Designn
                                                    </a>
                                                    <p class="ul-widget5__desc">
                                                        UI lib admin themes.
                                                    </p>
                                                    <div class="ul-widget5__info">
                                                        <span>Author:</span>
                                                        <span class="text-primary">Jon Snow</span>
                                                        <span>Released:</span>
                                                        <span class="text-primary">23.08.17</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ul-widget5__content">
                                                <div class="ul-widget5__stats">
                                                    <span class="ul-widget5__number">23,200</span>
                                                    <span class="ul-widget5__sales text-mute">sales</span>
                                                </div>
                                                <div class="ul-widget5__stats">
                                                    <span class="ul-widget5__number">2046</span>
                                                    <span class="ul-widget5__sales text-mute">votes</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::best sellers -->

            <div class="col-lg-4 col-md-12 col-xl-4 mt-2 mb-2">
                <!-- start::widget tasks -->
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head v-margin pb-20">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Support Tickets
                                </h3>
                            </div>
                            <button type="button" class="btn bg-white _r_btn border-0" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="_dot _inline-dot bg-primary"></span>
                                <span class="_dot _inline-dot bg-primary"></span>
                                <span class="_dot _inline-dot bg-primary"></span>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start"
                                style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="ul-widget3">
                                <div class="ul-widget3-item">
                                    <div class="ul-widget3-header">
                                        <div class="ul-widget3-img">
                                            <img src="{{ asset('assets/images/faces/1.jpg') }}" id="userDropdown" alt=""
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                                        </div>
                                        <div class="ul-widget3-info">
                                            <a href="#" class="__g-widget-username">
                                                <span class="t-font-bolder">Timithy Clarkson</span>
                                            </a>
                                            <br />
                                            <span class="ul-widget-notification-item-time">
                                                2 hrs ago
                                            </span>
                                        </div>
                                        <span class="ul-widget3-status text-success t-font-bolder">
                                            Pending
                                        </span>
                                    </div>
                                    <div class="ul-widget3-body">
                                        <p class="ul-widget3-text text-mute">
                                            Lorem ipsum dolor sit amet,consectetuer edipiscing
                                            elit,sed diam nonummy nibh euismod tinciduntut
                                            laoreet doloremagna aliquam erat volutpat.
                                        </p>
                                    </div>
                                </div>

                                <div class="ul-widget3-item">
                                    <div class="ul-widget3-header">
                                        <div class="ul-widget3-img">
                                            <img src="{{ asset('assets/images/faces/2.jpg') }}" id="userDropdown" alt=""
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                                        </div>
                                        <div class="ul-widget3-info">
                                            <a href="#" class="__g-widget-username">
                                                <span class="t-font-bolder">Jannet Clarkson</span>
                                            </a>
                                            <br />
                                            <span class="ul-widget-notification-item-time">
                                                12 hrs ago
                                            </span>
                                        </div>
                                        <span class="ul-widget3-status text-danger t-font-bolder">
                                            Decline
                                        </span>
                                    </div>
                                    <div class="ul-widget3-body">
                                        <p class="ul-widget3-text text-mute">
                                            Lorem ipsum dolor sit amet,consectetuer edipiscing
                                            elit,sed diam nonummy nibh euismod tinciduntut
                                            laoreet doloremagna aliquam erat volutpat.
                                        </p>
                                    </div>
                                </div>
                                <div class="ul-widget3-item">
                                    <div class="ul-widget3-header">
                                        <div class="ul-widget3-img">
                                            <img src="{{ asset('assets/images/faces/3.jpg') }}" id="userDropdown" alt=""
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                                        </div>
                                        <div class="ul-widget3-info">
                                            <a href="#" class="__g-widget-username">
                                                <span class="t-font-bolder">William Shake</span>
                                            </a>
                                            <br />
                                            <span class="ul-widget-notification-item-time">
                                                Today
                                            </span>
                                        </div>
                                        <span class="ul-widget3-status text-warning t-font-bolder">
                                            Processing
                                        </span>
                                    </div>
                                    <div class="ul-widget3-body">
                                        <p class="ul-widget3-text text-mute">
                                            Lorem ipsum dolor sit amet,consectetuer edipiscing
                                            elit,sed diam nonummy nibh euismod tinciduntut
                                            laoreet doloremagna aliquam erat volutpat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end::widget tasks -->
            </div>
        </div>
        <!-- end::4th section -->

        <!-- begin::5th section -->
        <div class="row mt-4">
            <!-- begin::sales stats -->
            <div class="col-xl-4 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head __g-support v-margin">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Sales Stats
                                </h3>
                            </div>
                            <button type="button" class="btn bg-white _r_btn border-0" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="_dot _inline-dot bg-primary"></span>
                                <span class="_dot _inline-dot bg-primary"></span>
                                <span class="_dot _inline-dot bg-primary"></span>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start"
                                style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="ul-widget6">
                                <div class="ul-widget6__head">
                                    <div class="ul-widget6__item">
                                        <span>Scheduled</span>
                                        <span>Count</span>
                                        <span>Amount</span>
                                    </div>
                                </div>
                                <div class="ul-widget6__body">
                                    <div class="ul-widget6__item">
                                        <span>16/13/17</span>
                                        <span>67</span>
                                        <span class="t-font-boldest text-success">$14,740</span>
                                    </div>

                                    <div class="ul-widget6__item">
                                        <span>02/28/17</span>
                                        <span>120</span>
                                        <span class="t-font-boldest text-danger">$14,740</span>
                                    </div>

                                    <div class="ul-widget6__item">
                                        <span>02/28/17</span>
                                        <span>120</span>
                                        <span class="t-font-boldest text-warning">$14,740</span>
                                    </div>

                                    <div class="ul-widget6__item">
                                        <span>02/28/17</span>
                                        <span>120</span>
                                        <span class="t-font-boldest text-primary">$14,740</span>
                                    </div>

                                    <div class="ul-widget6__item">
                                        <span>02/28/17</span>
                                        <span>120</span>
                                        <span class="t-font-boldest text-dark">$14,740</span>
                                    </div>
                                </div>
                                <div class="ul-widget6-footer">
                                    <button type="button" class="btn btn-outline-danger m-1">
                                        Follow
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::sales stats -->

            <!-- user progress -->
            <div class="col-xl-8 col-lg-8 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Best Sellers
                                </h3>
                            </div>
                            <div class="ul-widget__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-toggle="tab"
                                            href="#__g-widget-s5-tab1-content" role="tab" aria-selected="true">
                                            Latest
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#__g-widget-s5-tab2-content"
                                            role="tab" aria-selected="false">
                                            Month
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="__g-widget-s5-tab1-content">
                                    <div class="ul-widget5">
                                        <div class="ul-widget-s5__item mb-5">
                                            <div class="ul-widget-s5__content">
                                                <div class="ul-widget-s5__pic">
                                                    <img src="{{ asset('assets/images/faces/1.jpg') }}"
                                                        id="userDropdown" alt="" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" />
                                                </div>
                                                <div class="ul-widget-s5__section">
                                                    <a href="#" class="ul-widget4__title ">
                                                        Great Logo Designn
                                                    </a>
                                                    <p class="ul-widget-s5__desc">
                                                        UI LIb admin themes.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ul-widget-s5__content">
                                                <div class="ul-widget-s5__progress">
                                                    <div class="ul-widget-s5__stats">
                                                        <span>50%</span>
                                                        <span>London</span>
                                                    </div>
                                                    <div class="progress mb-3">
                                                        <div class="progress-bar progress-bar-striped bg-success"
                                                            role="progressbar" style="width: 50%" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            50%
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-outline-primary ">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                        <div class="ul-widget-s5__item mb-5">
                                            <div class="ul-widget-s5__content">
                                                <div class="ul-widget-s5__pic">
                                                    <img src="{{ asset('assets/images/faces/2.jpg') }}"
                                                        id="userDropdown" alt="" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" />
                                                </div>
                                                <div class="ul-widget-s5__section">
                                                    <a href="#" class="ul-widget4__title ">
                                                        Great Logo Designn
                                                    </a>
                                                    <p class="ul-widget-s5__desc">
                                                        UI LIb admin themes.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ul-widget-s5__content">
                                                <div class="ul-widget-s5__progress">
                                                    <div class="ul-widget-s5__stats">
                                                        <span>75%</span>
                                                        <span>U.S</span>
                                                    </div>
                                                    <div class="progress mb-3">
                                                        <div class="progress-bar progress-bar-striped bg-danger"
                                                            role="progressbar" style="width: 75%" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            75%
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-outline-success ">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                        <div class="ul-widget-s5__item mb-5">
                                            <div class="ul-widget-s5__content">
                                                <div class="ul-widget-s5__pic">
                                                    <img src="{{ asset('assets/images/faces/3.jpg') }}"
                                                        id="userDropdown" alt="" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" />
                                                </div>
                                                <div class="ul-widget-s5__section">
                                                    <a href="#" class="ul-widget4__title ">
                                                        Frontend Developer
                                                    </a>
                                                    <p class="ul-widget-s5__desc">
                                                        UI LIb admin themes.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ul-widget-s5__content">
                                                <div class="ul-widget-s5__progress">
                                                    <div class="ul-widget-s5__stats">
                                                        <span>30%</span>
                                                        <span>Finland</span>
                                                    </div>
                                                    <div class="progress mb-3">
                                                        <div class="progress-bar progress-bar-striped bg-warning"
                                                            role="progressbar" style="width: 30%" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            30%
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-outline-danger ">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="__g-widget-s5-tab2-content">
                                    <div class="ul-widget5">
                                        <div class="ul-widget-s5__item mb-5">
                                            <div class="ul-widget-s5__content">
                                                <div class="ul-widget-s5__pic">
                                                    <img src="{{ asset('assets/images/faces/5.jpg') }}"
                                                        id="userDropdown" alt="" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" />
                                                </div>
                                                <div class="ul-widget-s5__section">
                                                    <a href="#" class="ul-widget4__title ">
                                                        Great Logo Designn
                                                    </a>
                                                    <p class="ul-widget-s5__desc">
                                                        UI LIb admin themes.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ul-widget-s5__content">
                                                <div class="ul-widget-s5__progress">
                                                    <div class="ul-widget-s5__stats">
                                                        <span>50%</span>
                                                        <span>London</span>
                                                    </div>
                                                    <div class="progress mb-3">
                                                        <div class="progress-bar progress-bar-striped bg-success"
                                                            role="progressbar" style="width: 50%" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            50%
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-outline-primary ">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                        <div class="ul-widget-s5__item mb-5">
                                            <div class="ul-widget-s5__content">
                                                <div class="ul-widget-s5__pic">
                                                    <img src="{{ asset('assets/images/faces/4.jpg') }}"
                                                        id="userDropdown" alt="" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" />
                                                </div>
                                                <div class="ul-widget-s5__section">
                                                    <a href="#" class="ul-widget4__title ">
                                                        Great Logo Designn
                                                    </a>
                                                    <p class="ul-widget-s5__desc">
                                                        UI LIb admin themes.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ul-widget-s5__content">
                                                <div class="ul-widget-s5__progress">
                                                    <div class="ul-widget-s5__stats">
                                                        <span>75%</span>
                                                        <span>U.S</span>
                                                    </div>
                                                    <div class="progress mb-3">
                                                        <div class="progress-bar progress-bar-striped bg-danger"
                                                            role="progressbar" style="width: 75%" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            75%
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-outline-success ">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                        <div class="ul-widget-s5__item mb-5">
                                            <div class="ul-widget-s5__content">
                                                <div class="ul-widget-s5__pic">
                                                    <img src="{{ asset('assets/images/faces/1.jpg') }}"
                                                        id="userDropdown" alt="" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" />
                                                </div>
                                                <div class="ul-widget-s5__section">
                                                    <a href="#" class="ul-widget4__title ">
                                                        Frontend Developer
                                                    </a>
                                                    <p class="ul-widget-s5__desc">
                                                        UI LIb admin themes.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ul-widget-s5__content">
                                                <div class="ul-widget-s5__progress">
                                                    <div class="ul-widget-s5__stats">
                                                        <span>50%</span>
                                                        <span>Finland</span>
                                                    </div>
                                                    <div class="progress mb-3">
                                                        <div class="progress-bar progress-bar-striped bg-warning"
                                                            role="progressbar" style="width: 50%" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            30%
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-outline-danger ">
                                                    Follow
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="__g-widget4-tab3-content">
                                    <div class="ul-widget3">
                                        <div class="ul-widget2__item">
                                            <div class="ul-widget2__info">
                                                <a href="#" class="ul-widget2__title">
                                                    Lorem Ipsum Amet
                                                </a>
                                                <a href="#" class="ul-widget2__username">
                                                    By wick
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::user progress -->
        </div>
        <!-- end::5th section -->

        <!-- begin::6th section -->
        <div class="row mt-4">
            <!-- begin exclusive datatable plugin -->
            <div class="col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head v-margin">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Exclusive datatable plugin
                                </h3>
                            </div>
                            <button type="button" class="btn bg-white _r_btn border-0" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="_dot _inline-dot bg-primary"></span>
                                <span class="_dot _inline-dot bg-primary"></span>
                                <span class="_dot _inline-dot bg-primary"></span>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start"
                                style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <div class="ul-widget-body">
                            <div class="ul-widget3">
                                <div class="ul-widget6__item--table">
                                    <table class="table ">
                                        <thead>
                                            <tr class="ul-widget6__tr--sticky-th">
                                                <th scope="col">#</th>
                                                <th scope="col">Company</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Managed By</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- start tr -->
                                            <tr>
                                                <th scope="row">
                                                    <label class="checkbox checkbox-outline-info">
                                                        <input type="checkbox" checked="" />

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{ asset('assets/images/faces/1.jpg') }}"
                                                                    id="userDropdown" alt="" />
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>11/28/2016</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-outline-danger p-2 m-1">Processing</span>
                                                </td>
                                                <td>
                                                    <a href="" class="ul-widget4__title d-block">UI Lib</a>
                                                    <span>Angular 2,Vue.js </span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn bg-white _r_btn border-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Bar-Chart-4"> </i>
                                                            Export</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Data-Save"> </i>
                                                            Save
                                                        </a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Duplicate-Layer"></i>
                                                            Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Folder-Download"></i>
                                                            Update</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Gears-2"></i>
                                                            Customize</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <!-- start tr -->
                                            <tr>
                                                <th scope="row">
                                                    <label class="checkbox checkbox-outline-info">
                                                        <input type="checkbox" checked="" />

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{ asset('assets/images/faces/10.jp') }}g"
                                                                    id="userDropdown" alt="" />
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>11/28/2016</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-outline-info p-2 m-1">Processing</span>
                                                </td>
                                                <td>
                                                    <a href="" class="ul-widget4__title d-block">UI Lib</a>
                                                    <span>Angular 2,Vue.js </span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn bg-white _r_btn border-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Bar-Chart-4"> </i>
                                                            Export</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Data-Save"> </i>
                                                            Save
                                                        </a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Duplicate-Layer"></i>
                                                            Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Folder-Download"></i>
                                                            Update</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Gears-2"></i>
                                                            Customize</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <!-- start tr -->
                                            <tr>
                                                <th scope="row">
                                                    <label class="checkbox checkbox-outline-info">
                                                        <input type="checkbox" checked="" />

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{ asset('assets/images/faces/12.jp') }}g"
                                                                    id="userDropdown" alt="" />
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>11/28/2016</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-outline-success p-2 m-1">Processing</span>
                                                </td>
                                                <td>
                                                    <a href="" class="ul-widget4__title d-block">UI Lib</a>
                                                    <span>Angular 2,Vue.js </span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn bg-white _r_btn border-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Bar-Chart-4"> </i>
                                                            Export</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Data-Save"> </i>
                                                            Save
                                                        </a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Duplicate-Layer"></i>
                                                            Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Folder-Download"></i>
                                                            Update</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Gears-2"></i>
                                                            Customize</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <!-- start tr -->
                                            <tr>
                                                <th scope="row">
                                                    <label class="checkbox checkbox-outline-info">
                                                        <input type="checkbox" checked="" />

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{ asset('assets/images/faces/13.jp') }}g"
                                                                    id="userDropdown" alt="" />
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>11/28/2016</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-outline-primary p-2 m-1">Processing</span>
                                                </td>
                                                <td>
                                                    <a href="" class="ul-widget4__title d-block">UI Lib</a>
                                                    <span>Angular 2,Vue.js </span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn bg-white _r_btn border-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Bar-Chart-4"> </i>
                                                            Export</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Data-Save"> </i>
                                                            Save
                                                        </a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Duplicate-Layer"></i>
                                                            Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Folder-Download"></i>
                                                            Update</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Gears-2"></i>
                                                            Customize</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <!-- start tr -->
                                            <tr>
                                                <th scope="row">
                                                    <label class="checkbox checkbox-outline-info">
                                                        <input type="checkbox" checked="" />

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{ asset('assets/images/faces/15.jp') }}g"
                                                                    id="userDropdown" alt="" />
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>11/28/2016</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-outline-danger p-2 m-1">Processing</span>
                                                </td>
                                                <td>
                                                    <a href="" class="ul-widget4__title d-block">UI Lib</a>
                                                    <span>Angular 2,Vue.js </span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn bg-white _r_btn border-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Bar-Chart-4"> </i>
                                                            Export</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Data-Save"> </i>
                                                            Save
                                                        </a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Duplicate-Layer"></i>
                                                            Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Folder-Download"></i>
                                                            Update</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Gears-2"></i>
                                                            Customize</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <!-- start tr -->
                                            <tr>
                                                <th scope="row">
                                                    <label class="checkbox checkbox-outline-info">
                                                        <input type="checkbox" checked="" />

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{ asset('assets/images/faces/16.jp') }}g"
                                                                    id="userDropdown" alt="" />
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>11/28/2016</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-outline-warning p-2 m-1">Processing</span>
                                                </td>
                                                <td>
                                                    <a href="" class="ul-widget4__title d-block">UI Lib</a>
                                                    <span>Angular 2,Vue.js </span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn bg-white _r_btn border-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Bar-Chart-4"> </i>
                                                            Export</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Data-Save"> </i>
                                                            Save
                                                        </a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Duplicate-Layer"></i>
                                                            Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Folder-Download"></i>
                                                            Update</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Gears-2"></i>
                                                            Customize</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <!-- start tr -->
                                            <tr>
                                                <th scope="row">
                                                    <label class="checkbox checkbox-outline-info">
                                                        <input type="checkbox" checked="" />

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{ asset('assets/images/faces/17.jp') }}g"
                                                                    id="userDropdown" alt="" />
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>11/28/2016</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-outline-success p-2 m-1">Processing</span>
                                                </td>
                                                <td>
                                                    <a href="" class="ul-widget4__title d-block">UI Lib</a>
                                                    <span>Angular 2,Vue.js </span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn bg-white _r_btn border-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Bar-Chart-4"> </i>
                                                            Export</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Data-Save"> </i>
                                                            Save
                                                        </a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Duplicate-Layer"></i>
                                                            Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Folder-Download"></i>
                                                            Update</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Gears-2"></i>
                                                            Customize</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <!-- start tr -->
                                            <tr>
                                                <th scope="row">
                                                    <label class="checkbox checkbox-outline-info">
                                                        <input type="checkbox" checked="" />

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{ asset('assets/images/faces/2.jpg') }}"
                                                                    id="userDropdown" alt="" />
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>11/28/2016</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-outline-info p-2 m-1">Processing</span>
                                                </td>
                                                <td>
                                                    <a href="" class="ul-widget4__title d-block">UI Lib</a>
                                                    <span>Angular 2,Vue.js </span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn bg-white _r_btn border-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Bar-Chart-4"> </i>
                                                            Export</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Data-Save"> </i>
                                                            Save
                                                        </a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Duplicate-Layer"></i>
                                                            Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Folder-Download"></i>
                                                            Update</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Gears-2"></i>
                                                            Customize</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <!-- start tr -->
                                            <tr>
                                                <th scope="row">
                                                    <label class="checkbox checkbox-outline-info">
                                                        <input type="checkbox" checked="" />

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{ asset('assets/images/faces/3.jpg') }}"
                                                                    id="userDropdown" alt="" />
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>11/28/2016</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-outline-warning p-2 m-1">Processing</span>
                                                </td>
                                                <td>
                                                    <a href="" class="ul-widget4__title d-block">UI Lib</a>
                                                    <span>Angular 2,Vue.js </span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn bg-white _r_btn border-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Bar-Chart-4"> </i>
                                                            Export</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Data-Save"> </i>
                                                            Save
                                                        </a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Duplicate-Layer"></i>
                                                            Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Folder-Download"></i>
                                                            Update</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Gears-2"></i>
                                                            Customize</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <!-- start tr -->
                                            <tr>
                                                <th scope="row">
                                                    <label class="checkbox checkbox-outline-info">
                                                        <input type="checkbox" checked="" />

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{ asset('assets/images/faces/4.jpg') }}"
                                                                    id="userDropdown" alt="" />
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>11/28/2016</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-outline-success p-2 m-1">Processing</span>
                                                </td>
                                                <td>
                                                    <a href="" class="ul-widget4__title d-block">UI Lib</a>
                                                    <span>Angular 2,Vue.js </span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn bg-white _r_btn border-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Bar-Chart-4"> </i>
                                                            Export</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Data-Save"> </i>
                                                            Save
                                                        </a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Duplicate-Layer"></i>
                                                            Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Folder-Download"></i>
                                                            Update</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Gears-2"></i>
                                                            Customize</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <!-- start tr -->
                                            <tr>
                                                <th scope="row">
                                                    <label class="checkbox checkbox-outline-info">
                                                        <input type="checkbox" checked="" />

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{ asset('assets/images/faces/5.jpg') }}"
                                                                    id="userDropdown" alt="" />
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>11/28/2016</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-outline-info p-2 m-1">Processing</span>
                                                </td>
                                                <td>
                                                    <a href="" class="ul-widget4__title d-block">UI Lib</a>
                                                    <span>Angular 2,Vue.js </span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn bg-white _r_btn border-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Bar-Chart-4"> </i>
                                                            Export</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Data-Save"> </i>
                                                            Save
                                                        </a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Duplicate-Layer"></i>
                                                            Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Folder-Download"></i>
                                                            Update</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Gears-2"></i>
                                                            Customize</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <!-- start tr -->
                                            <tr>
                                                <th scope="row">
                                                    <label class="checkbox checkbox-outline-info">
                                                        <input type="checkbox" checked="" />

                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span>
                                                        <div class="ul-widget_user-card">
                                                            <div class="ul-widget4__img">
                                                                <img src="{{ asset('assets/images/faces/9.jpg') }}"
                                                                    id="userDropdown" alt="" />
                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>11/28/2016</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-outline-danger p-2 m-1">Processing</span>
                                                </td>
                                                <td>
                                                    <a href="" class="ul-widget4__title d-block">UI Lib</a>
                                                    <span>Angular 2,Vue.js </span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn bg-white _r_btn border-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                        <span class="_dot _inline-dot bg-primary"></span>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Bar-Chart-4"> </i>
                                                            Export</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Data-Save"> </i>
                                                            Save
                                                        </a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Duplicate-Layer"></i>
                                                            Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Folder-Download"></i>
                                                            Update</a>
                                                        <a class="dropdown-item ul-widget__link--font" href="#">
                                                            <i class="i-Gears-2"></i>
                                                            Customize</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                        </tbody>
                                    </table>
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">Previous</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::exclusive datatable plugin  -->

            <!-- begin::latest log -->
            <div class="col-lg-4 col-xl-4 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Latest Log
                                </h3>
                            </div>
                            <div class="ul-widget__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-toggle="tab"
                                            href="#__g-widget-s6-tab1-content" role="tab" aria-selected="true">
                                            Today
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#__g-widget-s6-tab2-content"
                                            role="tab" aria-selected="false">
                                            Month
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="__g-widget-s6-tab1-content">
                                    <div class="ul-widget-s6__items">
                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-primary ul-widget6__dot"></p>
                                            </span>
                                            <span class="ul-widget-s6__text">12 new users registered</span>
                                            <span class="ul-widget-s6__time">Just Now</span>
                                        </div>
                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-success ul-widget6__dot"></p>
                                            </span>
                                            <p class="ul-widget-s6__text">
                                                System shutdown
                                                <span class="badge badge-pill badge-primary  m-2">Primary</span>
                                            </p>
                                            <span class="ul-widget-s6__time">14 mins</span>
                                        </div>

                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-warning ul-widget6__dot"></p>
                                            </span>
                                            <span class="ul-widget-s6__text">System error -
                                                <a href="" class="typo_link text-danger">
                                                    Danger state text</a>
                                            </span>
                                            <span class="ul-widget-s6__time">2 hrs </span>
                                        </div>
                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-danger ul-widget6__dot"></p>
                                            </span>
                                            <span class="ul-widget-s6__text">12 new users registered</span>
                                            <span class="ul-widget-s6__time">Just Now</span>
                                        </div>
                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-info ul-widget6__dot"></p>
                                            </span>
                                            <p class="ul-widget-s6__text">
                                                System shutdown
                                                <span class="badge badge-pill badge-success  m-2">Primary</span>
                                            </p>
                                            <span class="ul-widget-s6__time">14 mins</span>
                                        </div>

                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-dark ul-widget6__dot"></p>
                                            </span>
                                            <span class="ul-widget-s6__text">System error -
                                                <a href="" class="typo_link text-danger">
                                                    Danger state text</a>
                                            </span>
                                            <span class="ul-widget-s6__time">2 hrs </span>
                                        </div>
                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-primary ul-widget6__dot"></p>
                                            </span>
                                            <span class="ul-widget-s6__text">12 new users registered</span>
                                            <span class="ul-widget-s6__time">Just Now</span>
                                        </div>
                                        <div class="ul-widget-s6__item">
                                            <span class="ul-widget-s6__badge">
                                                <p class="badge-dot-success ul-widget6__dot"></p>
                                            </span>
                                            <p class="ul-widget-s6__text">
                                                System shutdown
                                                <span class="badge badge-pill badge-danger  m-2">Primary</span>
                                            </p>
                                            <span class="ul-widget-s6__time">14 mins</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="__g-widget-s6-tab2-content">
                                    <div class="ul-widget2">
                                        <div class="ul-widget-s6__items">
                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-danger ul-widget6__dot"></p>
                                                </span>
                                                <span class="ul-widget-s6__text">44 new users registered</span>
                                                <span class="ul-widget-s6__time">Just Now</span>
                                            </div>
                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-warning ul-widget6__dot"></p>
                                                </span>
                                                <p class="ul-widget-s6__text">
                                                    System shutdown
                                                    <span class="badge badge-pill badge-primary  m-2">Primary</span>
                                                </p>
                                                <span class="ul-widget-s6__time">14 mins</span>
                                            </div>

                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-primary ul-widget6__dot"></p>
                                                </span>
                                                <span class="ul-widget-s6__text">System error -
                                                    <a href="" class="typo_link text-danger">
                                                        Danger state text</a>
                                                </span>
                                                <span class="ul-widget-s6__time">2 hrs </span>
                                            </div>
                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-danger ul-widget6__dot"></p>
                                                </span>
                                                <span class="ul-widget-s6__text">12 new users registered</span>
                                                <span class="ul-widget-s6__time">Just Now</span>
                                            </div>
                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-info ul-widget6__dot"></p>
                                                </span>
                                                <p class="ul-widget-s6__text">
                                                    System shutdown
                                                    <span class="badge badge-pill badge-success  m-2">Primary</span>
                                                </p>
                                                <span class="ul-widget-s6__time">14 mins</span>
                                            </div>

                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-dark ul-widget6__dot"></p>
                                                </span>
                                                <span class="ul-widget-s6__text">System error -
                                                    <a href="" class="typo_link text-danger">
                                                        Danger state text</a>
                                                </span>
                                                <span class="ul-widget-s6__time">2 hrs </span>
                                            </div>
                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-primary ul-widget6__dot"></p>
                                                </span>
                                                <span class="ul-widget-s6__text">12 new users registered</span>
                                                <span class="ul-widget-s6__time">Just Now</span>
                                            </div>
                                            <div class="ul-widget-s6__item">
                                                <span class="ul-widget-s6__badge">
                                                    <p class="badge-dot-success ul-widget6__dot"></p>
                                                </span>
                                                <span class="ul-widget-s6__text">System shutdown
                                                    <span
                                                        class="badge badge-pill badge-danger  m-2">Primary</span></span>
                                                <span class="ul-widget-s6__time">14 mins</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::latest log -->
        </div>
        <!-- end::6th section -->

        <!-- begin::7th section -->
        <div class="row mt-4">
            <!-- begin::recent activities -->
            <div class="col-lg-6 col-xl-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head __g-support v-margin">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Sales Stats
                                </h3>
                            </div>
                            <button type="button" class="btn bg-white _r_btn border-0" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="_dot _inline-dot bg-primary"></span>
                                <span class="_dot _inline-dot bg-primary"></span>
                                <span class="_dot _inline-dot bg-primary"></span>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start"
                                style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>

                        <div class="ul-widget__body">
                            <div class="ul-widget-s7">
                                <div class="ul-widget-s7__items">
                                    <span class="ul-widget-s7__item-time">10:00</span>
                                    <div class="ul-widget-s7__item-circle">
                                        <p class="badge-dot-warning ul-widget7__big-dot"></p>
                                    </div>
                                    <div class="ul-widget-s7__item-text">
                                        Lorem ipsum dolor sit amit,consectetur eiusmdd
                                        tempor
                                        <br />
                                        incididunt ut labore et dolore magna
                                    </div>
                                </div>
                            </div>

                            <div class="ul-widget-s7">
                                <div class="ul-widget-s7__items">
                                    <span class="ul-widget-s7__item-time">16:00 </span>
                                    <div class="ul-widget-s7__item-circle">
                                        <p class="badge-dot-danger ul-widget7__big-dot"></p>
                                    </div>
                                    <div class="ul-widget-s7__item-text">
                                        Lorem ipsum dolor sit amit,consectetur eiusmdd
                                        tempor<br />
                                        incididunt ut labore et dolore magna elit enim at
                                        minim<br />
                                        veniam quis nostrud
                                    </div>
                                </div>
                            </div>
                            <div class="ul-widget-s7">
                                <div class="ul-widget-s7__items">
                                    <span class="ul-widget-s7__item-time">13:00</span>
                                    <div class="ul-widget-s7__item-circle">
                                        <p class="badge-dot-primary ul-widget7__big-dot"></p>
                                    </div>
                                    <div class="ul-widget-s7__item-text">
                                        Lorem ipsum dolor sit amit,consectetur eiusmdd
                                        tempor
                                        <br />
                                        incididunt ut labore et dolore magna
                                    </div>
                                </div>
                            </div>
                            <div class="ul-widget-s7">
                                <div class="ul-widget-s7__items">
                                    <span class="ul-widget-s7__item-time">08:00</span>
                                    <div class="ul-widget-s7__item-circle">
                                        <p class="badge-dot-success ul-widget7__big-dot"></p>
                                    </div>
                                    <div class="ul-widget-s7__item-text">
                                        Lorem ipsum dolor sit amit,consectetur eiusmdd
                                        tempor
                                        <br />
                                        incididunt ut labore et dolore magna
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::recent activities -->

            <!-- begin::recent notifications-->
            <div class="col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Recent Notifications
                                </h3>
                            </div>
                            <div class="ul-widget__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-toggle="tab"
                                            href="#__g-widget-s7-tab1-content" role="tab" aria-selected="true">
                                            Today
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#__g-widget-s7-tab2-content"
                                            role="tab" aria-selected="false">
                                            Month
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="__g-widget-s7-tab1-content">
                                    <div class="ul-widget-s7n">
                                        <div class="ul-widget-s7__items mb-4">
                                            <span class="ul-widget-s7__item-time ul-middle">10:00</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-primary "></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor
                                                <br />
                                                incididunt ut labore et dolore magna
                                            </div>
                                        </div>

                                        <div class="ul-widget-s7__items mb-4">
                                            <span class="ul-widget-s7__item-time ul-middle">08:00</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-success "></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor
                                                <br />
                                                incididunt ut labore et dolore magna
                                            </div>
                                        </div>

                                        <div class="ul-widget-s7__items mb-4">
                                            <span class="ul-widget-s7__item-time ul-middle">13:00</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-danger "></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor
                                                <br />
                                                incididunt ut labore et dolore magna
                                            </div>
                                        </div>

                                        <div class="ul-widget-s7__items">
                                            <span class="ul-widget-s7__item-time ul-middle">05:30</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-warning "></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor
                                                <br />
                                                incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="__g-widget-s7-tab2-content">
                                    <div class="ul-widget-s7n">
                                        <div class="ul-widget-s7__items mb-4">
                                            <span class="ul-widget-s7__item-time ul-middle">12:00</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-danger "></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor
                                                <br />
                                                incididunt ut labore et dolore magna
                                            </div>
                                        </div>

                                        <div class="ul-widget-s7__items mb-4">
                                            <span class="ul-widget-s7__item-time ul-middle">08:00</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-info "></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor
                                                <br />
                                                incididunt ut labore et dolore magna
                                            </div>
                                        </div>

                                        <div class="ul-widget-s7__items mb-4">
                                            <span class="ul-widget-s7__item-time ul-middle">04:30</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-warning "></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor
                                                <br />
                                                incididunt ut labore et dolore magna
                                            </div>
                                        </div>

                                        <div class="ul-widget-s7__items">
                                            <span class="ul-widget-s7__item-time ul-middle">05:30</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-dark "></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor
                                                <br />
                                                incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::recent notifications -->
        </div>
        <!-- end::7th section -->

        <!-- begin::8th section -->
        <div class="row">
            <div class="col-lg-6 col-xl-6 mb-4 mt-2">
                <!-- projects -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Project Status</div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Project</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            666
                                        </th>
                                        <td>
                                            <span class="text-15 font-weight-200">Dan brown on the North</span>
                                            <br />
                                        </td>
                                        <td>
                                            <span class="badge badge-primary w-badge">Developing</span>
                                        </td>
                                        <td>
                                            <div id="chart13"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            132-115-006
                                        </th>
                                        <td>
                                            <span class="text-15 font-weight">Lucy Loki</span>
                                            <br />
                                        </td>
                                        <td>
                                            <span class="badge badge-danger w-badge">Backend</span>
                                        </td>
                                        <td>
                                            <div id="widgetChart14"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            123-669-002
                                        </th>
                                        <td>
                                            <span class="text-15 font-weight-200">Dan</span>
                                            <br />
                                        </td>
                                        <td>
                                            <span class="badge badge-success w-badge">Frontend</span>
                                        </td>
                                        <td>
                                            <div id="widgetChart15"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            115-008-234
                                        </th>
                                        <td>
                                            <span class="text-15 font-weight-200">Jaret Leto</span>
                                            <br />
                                        </td>
                                        <td>
                                            <span class="badge badge-warning w-badge">Backend</span>
                                        </td>
                                        <td>
                                            <div id="widgetChart16"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            456-989-009
                                        </th>
                                        <td>
                                            <span class="text-15 font-weight-200">White Walker</span>
                                            <br />
                                        </td>
                                        <td>
                                            <span class="badge badge-dark w-badge">Fullstack</span>
                                        </td>
                                        <td>
                                            <div id="widgetChart17"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            132-115-086
                                        </th>
                                        <td>
                                            <span class="text-15 font-weight-200">Dan brown on the North</span>
                                            <br />
                                        </td>
                                        <td>
                                            <span class="badge badge-primary w-badge">Developing</span>
                                        </td>
                                        <td>
                                            <div id="widgetChart18"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            132-115-006
                                        </th>
                                        <td>
                                            <span class="text-15 font-weight">Lucy Loki</span>
                                            <br />
                                        </td>
                                        <td>
                                            <span class="badge badge-danger w-badge">Backend</span>
                                        </td>
                                        <td>
                                            <div id="widgetChart19"></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- end:projects -->
            </div>
            <div class="col-lg-6 col-xl-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Payment Form #01</div>
                        <div class="ul-widget-list__payment-method mb-3">
                            <img src="{{ asset('assets/images/master-card') }}.png" style="width: 50px" alt=""
                                srcset="" />
                            <img src="{{ asset('assets/images/visa.png" s') }}tyle=" width: 50px" alt="" srcset="" />
                            <img src="{{ asset('assets/images/paypal.png"') }} style=" width: 50px" alt="" srcset="" />
                        </div>
                        <p class="alert alert-success">
                            Some text success or error
                        </p>

                        <div class="ul-widget__payment-form">
                            <form action="">
                                <div class="card-body">
                                    <div class="form-row ">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4" class="ul-form__label">Full Name:</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="i-Male-21 text-18"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder=""
                                                    aria-label="Username" aria-describedby="basic-addon1" />
                                            </div>
                                            <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                Some help content goes here
                                            </small>
                                        </div>
                                    </div>

                                    <div class="form-row ">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4" class="ul-form__label">Card Number:</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="i-Credit-Card-2 text-18"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder=""
                                                    aria-label="Username" aria-describedby="basic-addon1" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label><span class="">Expiration</span> </label>
                                                <div class="form-inline">
                                                    <select class="form-control" style="width:45%">
                                                        <option>Month</option>
                                                        <option>01 - Janiary</option>
                                                        <option>02 - February</option>
                                                        <option>03 - February</option>
                                                        <option>04 - march</option>
                                                    </select>
                                                    <span class="text-center" style="width:10%">
                                                        /
                                                    </span>
                                                    <select class="form-control" style="width:45%">
                                                        <option>Year</option>
                                                        <option>2018</option>
                                                        <option>2019</option>
                                                        <option>2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="6 digits code on back side of the card"
                                                    class="font-weight-700 text-dark">CVV
                                                </label>
                                                <input class="form-control" required="" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-block m-1 mb-3">
                                        Confirm
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Payment Form #02</div>

                        <p class="alert alert-danger">Some text success or error</p>

                        <div class="card-body">
                            <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-link active " id="pills-home-tab" data-toggle="pill"
                                        href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                        <i class="i-Credit-Card-2 text-16 mr-2 align-middle"></i>
                                        Credit Card
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-home"
                                        role="tab" aria-controls="pills-profile" aria-selected="false">
                                        <i class="i-Paypal text-16 mr-2 align-middle"></i>
                                        Paypal
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-home"
                                        role="tab" aria-controls="pills-contact" aria-selected="false">
                                        <i class="i-Bank text-16 mr-2 align-middle"></i>
                                        <span class="">Bank Transaction</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content ul-tab__content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="ul-widget__payment-form">
                                        <form action="">
                                            <div class="card-body">
                                                <div class="form-row ">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Full
                                                            Name:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="i-Male-21 text-18"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder=""
                                                                aria-label="Username" aria-describedby="basic-addon1" />
                                                        </div>
                                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                            Some help content goes here
                                                        </small>
                                                    </div>
                                                </div>

                                                <div class="form-row ">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Card
                                                            Number:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="i-Credit-Card-2 text-18"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder=""
                                                                aria-label="Username" aria-describedby="basic-addon1" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <label><span class="">Expiration</span>
                                                            </label>
                                                            <div class="form-inline">
                                                                <select class="form-control" style="width:45%">
                                                                    <option>Month</option>
                                                                    <option>01 - Janiary</option>
                                                                    <option>02 - February</option>
                                                                    <option>03 - February</option>
                                                                    <option>04 - march</option>
                                                                </select>
                                                                <span class="text-center" style="width:10%">
                                                                    /
                                                                </span>
                                                                <select class="form-control" style="width:45%">
                                                                    <option>Year</option>
                                                                    <option>2018</option>
                                                                    <option>2019</option>
                                                                    <option>2020</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label data-toggle="tooltip" data-placement="top" title=""
                                                                data-original-title="6 digits code on back side of the card"
                                                                class="font-weight-700 text-dark">CVV
                                                            </label>
                                                            <input class="form-control" required="" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-primary btn-block m-1">
                                                    Confirm
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab"></div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::8th section  -->
    </div>
</section>
<!-- end::widgets content -->

@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>

<script src="{{asset('assets/js/es5/widget-list.min.js')}}"></script>

<script src="{{asset('assets/js/tooltip.script.js')}}"></script>



@endsection

@section('bottom-js')




@endsection