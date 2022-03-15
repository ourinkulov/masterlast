<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{--    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kontingent
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item nav-link" href="/admin/kafedras"> {{__('Kafedra')}}</a>
                        <a href="{{url('/admin/teachers')}}" class="dropdown-item nav-link">{{__('O\'qituvchilar')}}</a>
                        <a href="{{url('/admin/fans')}}" class="dropdown-item nav-link">{{__('Fan')}}</a>
                        <a href="{{url('/admin/groups')}}" class="dropdown-item nav-link">{{__('Guruh')}}</a>
                        <a href="{{url('/admin/students')}}" class="dropdown-item nav-link">{{__('Tinglovchilar')}}</a>
{{--                        <a href="{{route('admin.students')}}" class="dropdown-item nav-link">{{__('Tinglovchilar')}}</a>--}}
                    </div>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        O'quv reja
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item nav-link" href="{{url('/admin/studyyear')}}"> {{__('O\'quv yili')}}</a>
                        <a class="dropdown-item nav-link" href="{{url('/admin/semestrs')}}"> {{__('O\'quv yili')}}</a>
                        <a class="dropdown-item nav-link" href="{{url('/admin/comples')}}"> {{__('O\'quv reja')}}</a>

                    </div>
                </li>

                {{--                    <li class="nav-item ">--}}
                {{--                        <a class="nav-link" href="{{route('admin.kafedras')}}"> {{__('Kafedra')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a href="{{route('admin.guruhs')}}" class="nav-link">{{__('Guruh')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a href="{{route('admin.fan')}}" class="nav-link">{{__('Fan')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a href="{{route('admin.teachers')}}" class="nav-link">{{__('O\'qituvchilar')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a href="{{route('admin.students')}}" class="nav-link">{{__('Tinglovchilar')}}</a>--}}
                {{--                    </li>--}}

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Tizimga kirish') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
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
                @endguest
            </ul>
        </div>
    </div>
</nav>

<main class="py-4">
    @yield('content')

</main>
{{--    {{$slot}}--}}
{{--    @livewire()--}}

@livewireScripts
<script type="text/javascript">
    // const createKaf = document.querySelector('.createKaf');
    // const kafedraAddModal = document.querySelector('#kafedraAddModal');
    // createKaf.addEventListener('click',()=>{
    //     $(kafedraAddModal).modal('hide');
    // })
    window.livewire.on('kafedraSaqlandi',()=>{
        $('#kafedraAddModal').modal('hide');
    });
    window.livewire.on('kafedraUzgardi',()=>{
        $('#kafedraUpdateModal').modal('hide');
    });
    window.livewire.on('guruhSaqlandi',()=>{
        $('#guruhAddModal').modal('hide');
    });
    window.livewire.on('guruhUzgardi',()=>{
        $('#guruhUpdateModal').modal('hide');
    });
    window.livewire.on('fanSaqlandi',()=>{
        $('#fanAddModal').modal('hide');
    });
    window.livewire.on('fanUzgardi',()=>{
        $('#fanUpdateModal').modal('hide');
    });
    window.livewire.on('teacherSaqlandi',()=>{
        $('#teacherAddModal').modal('hide');
    });
    window.livewire.on('teacherUzgardi',()=>{
        $('#teacherUpdateModal').modal('hide');
    });
    window.livewire.on('studentSaqlandi',()=>{
        $('#studentAddModal').modal('hide');
    });
    window.livewire.on('studentUzgardi',()=>{
        $('#studentUpdateModal').modal('hide');
    });
    window.livewire.on('studyyearSaqlandi',()=>{
        $('#studyyearAddModal').modal('hide');
    });
    window.livewire.on('studyyearUzgardi',()=>{
        $('#studyyearUpdateModal').modal('hide');
    });
    window.livewire.on('semestrSaqlandi',()=>{
        $('#semestrAddModal').modal('hide');
    });
    window.livewire.on('kafedraAdded',()=>{
        $('#createKafedraModal').modal('hide');
    });
    window.livewire.on('kafedraUzgardi',()=>{
        $('#createKafedraModal').modal('hide');
    });
    window.livewire.on('guruhUzgardi',()=>{
        $('#guruhUpdateModal').modal('hide');
    });



</script>
</body>
</html>
