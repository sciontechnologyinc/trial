<template>

    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <button class="btn btn-success btn-block" v-on:click="AddMember"> New Member
                            <i class="mdi mdi-plus"></i>
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="menu-icon mdi mdi-television"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="menu-icon mdi mdi-arrow-down"></i>
                        <span class="menu-title">Downline</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-account"></i>
                        <span class="menu-title">Account</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-debug-step-over"></i>
                        <span class="menu-title">Ways of Earnings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-factory"></i>
                        <span class="menu-title">Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-newspaper"></i>
                        <span class="menu-title">Catalog</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-label"></i>
                        <span class="menu-title">Sales</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-coin"></i>
                        <span class="menu-title">Money</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-link"></i>
                        <span class="menu-title">Social Links</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-file-multiple"></i>
                        <span class="menu-title">Reports Manager</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-settings"></i>
                        <span class="menu-title">General Settings</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i class="mdi mdi-cube text-danger icon-lg"></i>
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">Total Revenue</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0">$65,650</h3>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mt-3 mb-0">
                                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i class="mdi mdi-receipt text-warning icon-lg"></i>
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">Orders</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0">3455</h3>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mt-3 mb-0">
                                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i class="mdi mdi-poll-box text-success icon-lg"></i>
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">Sales</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0">5693</h3>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mt-3 mb-0">
                                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i class="mdi mdi-account-location text-info icon-lg"></i>
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">Employees</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0">246</h3>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mt-3 mb-0">
                                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 grid-margin stretch-card">
                        <div class="card card-weather">
                            <div class="card-body">
                                <div class="weather-date-location">
                                    <h3>Monday</h3>
                                    <p class="text-gray">
                                        <span class="weather-date">25 October, 2016</span>
                                        <span class="weather-location">London, UK</span>
                                    </p>
                                </div>
                                <div class="weather-data d-flex">
                                    <div class="mr-auto">
                                        <h4 class="display-3">21
                                        <span class="symbol">&deg;</span>C</h4>
                                        <p>
                                            Mostly Cloudy
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="d-flex weakly-weather">
                                    <div class="weakly-weather-item">
                                    <p class="mb-0">
                                        Sun
                                    </p>
                                    <i class="mdi mdi-weather-cloudy"></i>
                                    <p class="mb-0">
                                        30°
                                    </p>
                                </div>
                                <div class="weakly-weather-item">
                                    <p class="mb-1">
                                        Mon
                                    </p>
                                    <i class="mdi mdi-weather-hail"></i>
                                    <p class="mb-0">
                                        31°
                                    </p>
                                </div>
                                <div class="weakly-weather-item">
                                    <p class="mb-1">
                                        Tue
                                    </p>
                                    <i class="mdi mdi-weather-partlycloudy"></i>
                                    <p class="mb-0">
                                        28°
                                    </p>
                                </div>
                                <div class="weakly-weather-item">
                                    <p class="mb-1">
                                        Wed
                                    </p>
                                    <i class="mdi mdi-weather-pouring"></i>
                                    <p class="mb-0">
                                        30°
                                    </p>
                                </div>
                                <div class="weakly-weather-item">
                                    <p class="mb-1">
                                        Thu
                                    </p>
                                    <i class="mdi mdi-weather-pouring"></i>
                                    <p class="mb-0">
                                        29°
                                    </p>
                                </div>
                                <div class="weakly-weather-item">
                                    <p class="mb-1">
                                        Fri
                                    </p>
                                    <i class="mdi mdi-weather-snowy-rainy"></i>
                                    <p class="mb-0">
                                        31°
                                    </p>
                                </div>
                                <div class="weakly-weather-item">
                                    <p class="mb-1">
                                        Sat
                                    </p>
                                    <i class="mdi mdi-weather-snowy"></i>
                                    <p class="mb-0">
                                        32°
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h2 class="card-title text-primary mb-5">Performance History</h2>
                        <div class="wrapper d-flex justify-content-between">
                            <div class="side-left">
                                <p class="mb-2">The best performance</p>
                                <p class="display-3 mb-4 font-weight-light">+45.2%</p>
                            </div>
                            <div class="side-right">
                                <small class="text-muted">2017</small>
                            </div>
                        </div>
                        <div class="wrapper d-flex justify-content-between">
                            <div class="side-left">
                                <p class="mb-2">Worst performance</p>
                                <p class="display-3 mb-5 font-weight-light">-35.3%</p>
                            </div>
                            <div class="side-right">
                                <small class="text-muted">2015</small>
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Sales</p>
                                <p class="mb-2 text-primary">88%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 88%" aria-valuenow="88"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="wrapper mt-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Visits</p>
                                <p class="mb-2 text-success">56%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 56%" aria-valuenow="56"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class='add-member-shortcut' v-bind:class="{'show': this.isActive}">
                    <div class='member-main'>
                        <div class='member-title'>
                            <div class='member-title-text'>Member</div>
                            <i class="fas fa-times"  v-on:click="CloseAddMember"></i>
                        </div>
                        <div class='member-content'>
                            <div>
                                <span>First Name:</span>
                                <input type='text' id='fname'/>
                                <span>Middle Name:</span>
                                <input type='text' id='fname'/>
                                <span>Last Name:</span>
                                <input type='text' id='fname'/>
                                <div class='action-button'>
                                    <button class='btn-primary'>SAVE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                        <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.
                    </span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
                        <i class="mdi mdi-heart text-danger"></i>
                    </span>
                </div>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {
        data:{
            isActive: false
        },
        methods:{
            AddMember: function () {
                $('.add-member-shortcut').addClass('showed');
            },
            CloseAddMember: function () {
                $('.add-member-shortcut').removeClass('showed');
            }
        }
    }

    
</script>
