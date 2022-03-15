<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    {{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    {{--    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">--}}


    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .marginnol{margin:0;padding: 0 !important;}
        .col-md-4{margin: 0; padding: 0}
        .ca_card_title
        {
            margin-top: 30px;
            font-family: Roboto;
            font-weight: bolder;
            color: #1b4b72;

        }
        a:hover{
            text-decoration: none;
        }
        .card-title{font-size: 14px !important;}
        .bg-primary{background-color:rgb(14 97 110) !important}
        body{
            font-size:14px !important;}
        .thbody{background-color:rgb(0 35 141);color: white }
        .legend {
            font-size: 1.5rem;
            line-height: inherit;
            display: block;
            width: 100%;
            max-width: 100%;
            margin-bottom: .5rem;
            padding: 0;
            white-space: normal;
            color: inherit;
        }
        .col-auto{width: auto;
            max-width: none;
            flex: 0 0 auto;}
        .icon-shape i {
            font-size: 1.25rem;
        }
        .footer {
            padding: 2.5rem 0;
            background: #f7fafc;
        }

        .footer .copyright {
            font-size: .875rem;
        }

        .header {
            position: relative;
        }

        .icon {
            width: 3rem;
            height: 3rem;
        }

        .icon i {
            font-size: 1.75rem;
        }

        .icon-shape {
            display: inline-flex;
            padding: 12px;
            text-align: center;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
        }
        .ca_card_icon
        {
            margin-top: 20px;

        }
    </style>
    {{--    <script src="{{ asset('js/jquery.js') }}" ></script>--}}
    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>--}}
    @livewireStyles
</head>
<body id="page-top">


<div id="wrapper">


    <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">


        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/users/dashboard')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-window-restore"></i>
            </div>
            <div class="mx-3 sidebar-brand-text">MAGISTRATURA  <sup></sup></div>
        </a>


        <hr class="my-0 sidebar-divider">


        <li class="nav-item active">
            <a class="nav-link" href="{{url('/users/dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Boshqaruv paneli</span></a>
        </li>


        <hr class="sidebar-divider">


        <div class="sidebar-heading">
            SAXIFALAR
        </div>


        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-user-edit fa-cog"></i>
                <span>Nazorat ishlari</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="py-2 bg-white rounded collapse-inner">
                    <a class="collapse-item" href="{{url('/users/joriynazorat')}}"><i class="fa fa-chalkboard-teacher"></i><span for="">  JN yaratish</span></a>
                    <a class="collapse-item" href="{{url('/users/jnjurnal')}}"><i class="fa fa-pen"></i><span for="">   JN baholash</span></a>
                    <a class="collapse-item" href="{{url('/users/useronjnjurnal')}}"><i class="fa fa-pen-fancy"></i><span for="">  ON baholash</span></a>
                    <a class="collapse-item" href="{{url('/users/ynjurnals')}}"><i class="fa fa-pen-fancy"></i><span for="">  YN baholash</span></a>
                    <a class="collapse-item" href="{{url('/users/showallmarks')}}"><i class="fa fa-calendar"></i><span for=""> Umumiy jadval</span></a>



                </div>
            </div>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">--}}
{{--                <i class="fas fa-book "></i>--}}
{{--                <span>Faoliyat</span>--}}
{{--            </a>--}}
{{--            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">--}}
{{--                <div class="py-2 bg-white rounded collapse-inner">--}}
{{--                    <a class="collapse-item" href="{{route('user.dars')}}"><i class="fa fa-chalkboard-teacher"></i><span for=""> Maxorat darslari</span></a>--}}
{{--                    <a class="collapse-item" href="{{route('user.maqola')}}"><i class="fa fa-scroll"></i><span for="">  Maqolalar</span></a>--}}
{{--                    <a class="collapse-item" href="{{route('user.dissertats')}}"><i class="fa fa-atom"></i><span for="">  Dissertatsiyalar</span></a>--}}
{{--                    <a class="collapse-item" href="{{route('user.materials')}}"><i class="fa fa-book"></i><span for="">  Materiallar</span></a>--}}
{{--                    <a class="collapse-item" href="{{route('user.patents')}}"><i class="fa fa-certificate"></i><span for="">  Patentlar</span></a>--}}
{{--                    <a class="collapse-item" href="{{route('user.loyiha')}}"><i class="fa fa-pencil-ruler"></i><span for="">  Loyihalar</span></a>--}}
{{--                    <a class="collapse-item" href="{{route('user.lang')}}"><i class="fa fa-language"></i><span for=""> Til bilish</span></a>--}}
{{--                    <a class="collapse-item" href="{{route('user.kurs')}}"><i class="fa fa-users"></i><span for="">  To'garaklar</span></a>--}}
{{--                    <a class="collapse-item" href="{{route('user.malaka')}}"><i class="fa fa-hat-wizard"></i><span for="">  Malaka oshirishlar</span></a>--}}




{{--                </div>--}}
{{--            </div>--}}
{{--        </li>--}}

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities">--}}
{{--                <i class="fas fa-book "></i>--}}
{{--                <span>Arxiv</span>--}}
{{--            </a>--}}
{{--            <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">--}}
{{--                <div class="py-2 bg-white rounded collapse-inner">--}}
{{--                    --}}{{--                    <a class="collapse-item" href="{{route('user.dars')}}"><i class="fa fa-chalkboard-teacher"></i><span for=""> Maxorat darslari</span></a>--}}
{{--                    <a class="collapse-item" href="{{url('user/oldmaqola')}}"><i class="fa fa-scroll"></i><span for="">  Maqolalar</span></a>--}}



{{--                </div>--}}
{{--            </div>--}}
{{--        </li>--}}



    <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="border-0 rounded-circle" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="mr-3 btn btn-link d-md-none rounded-circle">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="my-2 mr-auto d-none d-sm-inline-block form-inline ml-md-3 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="border-0 form-control bg-light small" placeholder="Qidiruv..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="ml-auto navbar-nav">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i><sup>2</sup>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="p-3 shadow dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="mr-auto form-inline w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="border-0 form-control bg-light small" placeholder="Qidiruv..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="mx-1 nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="" >
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter"></span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="shadow dropdown-list dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                E'lonlar
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="text-white fas fa-file-alt"></i>

                                    </div>
                                </div>
                                <div>
                                    <div class="text-gray-500 small">December 12, 2019</div>

                                </div>
                            </a>

                            <a class="text-center text-gray-500 dropdown-item small" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="mx-1 nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter"></span>
                        </a>

                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    {{--                    <li class="nav-item dropdown no-arrow">--}}
                    {{--                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--                            <span class="mr-2 text-gray-600 d-none d-lg-inline small">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>--}}

                    {{--                        </a>--}}
                    {{--                        <!-- Dropdown - User Information -->--}}
                    {{--                        <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="userDropdown">--}}
                    {{--                            <a class="dropdown-item" href="#">--}}
                    {{--                                <i class="mr-2 text-gray-400 fas fa-user fa-sm fa-fw"></i>--}}
                    {{--                                Profile--}}
                    {{--                            </a>--}}
                    {{--                            <a class="dropdown-item" href="#">--}}
                    {{--                                <i class="mr-2 text-gray-400 fas fa-cogs fa-sm fa-fw"></i>--}}
                    {{--                                Settings--}}
                    {{--                            </a>--}}
                    {{--                            <a class="dropdown-item" href="#">--}}
                    {{--                                <i class="mr-2 text-gray-400 fas fa-list fa-sm fa-fw"></i>--}}
                    {{--                                Activity Log--}}
                    {{--                            </a>--}}
                    {{--                            <div class="dropdown-divider"></div>--}}

                    {{--                            <a class="dropdown-item" href="{{route('logout')}}" data-toggle="modall" data-target="#logoutModall">--}}
                    {{--                                <i class="mr-2 text-gray-400 fas fa-sign-out-alt fa-sm fa-fw"></i>--}}
                    {{--                                Logout--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Chiqish') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>

            </nav>
            @yield('content')
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="my-auto text-center copyright">
                    <span>IIV Akademiyasi &copy; Axborot texnologiyalari va ta'limni raqamlashtirish bo'limi 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>

@livewireScripts

<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
<script type="text/javascript">
    window.livewire.on('jncreated',()=>{
        $('#createJn').modal('hide');
    });
    window.livewire.on('baholandi',()=>{
        $('#jnjurnals').modal('hide');
    });
    window.livewire.on('onbaholandi',()=>{
        $('#onjurnals').modal('hide');
    });
    window.livewire.on('onbaholangan',()=>{
        $('#onjurnals').modal('hide');
    });
    window.livewire.on('uzgartirildi',()=>{
        $('#jnjurnalsupd').modal('hide');
    });



    /*dfdfdfdf*/

//ghghgh




</script>
<script  type="text/javascript">

    // Area Chart Example
    var ctx = document.getElementById("myAreaChart").getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels:['2016','2017','2018','2019','2020',],
            // labels: ["2016", "2017", "2018", "2019", "2020"],
            datasets: [{
                label: "",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgb(252,38,4)",
                pointRadius: 3,
                pointBackgroundColor: "rgb(223,78,211)",
                pointBorderColor: "rgb(223,155,78)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgb(84,255,157)",
                pointHoverBorderColor: "rgba(91,97,190,0.37)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data:['1','2','3','4','5'],
                //data: [10, 11, 20, 25, 30],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return '#' + number_format(value);
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': #' + number_format(tooltipItem.yLabel);
                    }
                }
            }
        }
    });


    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Fan doktorlari", "PhD", "Mavjud emas"],
            datasets: [{
                data: [8.33, 29.17, 62.50],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

    // Bar Chart Example
    var ctx = document.getElementById("myBarChart");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["ATK", "TQFK", "DTK", "HTK", "DHFK", "ss","dd", "fg", "uh", "HTK", "DHFK", "IIFK","ATK", "TQFK", "DTK", "HTK", "DHFK", "IIFK","ATK", "TQFK", "DTK", "HTK", "DHFK", "IIFK"],
            datasets: [{
                label: "",
                backgroundColor: ["#0000000","#1cc88a"],
                hoverBackgroundColor: "#4e73df",
                borderColor: "#4e73df",
                data: [215, 312, 251, 841, 821, 4984, 4215, 5312, 6251, 7841, 9821, 4984,4215, 5312, 6251, 7841, 9821, 4984,4215, 5312, 10, 100, 1000, 1],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 6
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 10000,
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return '#' + number_format(value);
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#9561e2",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + '' + number_format(tooltipItem.yLabel);
                    }
                }
            },
        }
    });


    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ['Ilmiy faoliyat', 'Pedagogik faoliyat', 'Xorijiy tillar', 'Loyihalar', 'To\'garalar', 'Malak oshirishlar'],
            datasets: [{
                label: '# Darajada',
                data: [12, 15, 13, 15, 12, 13],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Ilmiy faoliyat', 'Pedagogik faoliyat', 'Xorijiy tillar', 'Loyihalar', 'To\'garalar', 'Malak oshirishlar'],
            datasets: [{
                label: '# Darajada',
                data: [12, 15, 13, 15, 12, 13],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>

</html>
