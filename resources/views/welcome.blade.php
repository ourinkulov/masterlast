<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PFM</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
</head>
<style>
    html, body {
        background-color: #fff !important;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 400;
        line-height: 1.45;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    .real{
        position: fixed;
        align-items: center;
        display: flex;
        justify-content: center;
        width: 100%;


    }
    #section2{
        height: 100vh;
    }
    .realh1{
        position: inherit;
        font-size: 4rem;
        left: 20%;



    }
    .realp{
        position: inherit;
        font-size: 2.5rem;

        left: 20%;
        top: -10%;
    }
    #senter { margin-top: 40% !important;}
    html {
        scroll-behavior: smooth;
    }
    label {
        margin-bottom: .2857rem;
        color: #5e5873;
        font-size: .857rem;
    }
    .btn-primary2
    {
        border-color: #7367f0!important;
        background-color: #7367f0!important;
        color: white;
        text-align: center;
        padding: .786rem 1.5rem;
        border-radius: .358rem;
        font-weight: 500;
    }
    .btn-primary2:hover
    {
        color: white;
        box-shadow: 0 12px 16px 0 rgba(115,103,240,0.24), 0 17px 50px 0 rgba(115,103,240,0.24);

    }
</style>
</head>
<body>
@if(session()->has('message'))
    <div class="alert alert-success">{{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

{{--@if (Route::has('login'))--}}
{{--    <div class="top-right links">--}}
{{--        @auth--}}
{{--            <a href="{{ url('/user') }}">Bosh saxifaga o'tish</a>--}}
{{--        @else--}}
{{--            <a href="{{ route('login') }}">Kirish</a>--}}

{{--            @if (Route::has('register'))--}}
{{--                <a href="{{ route('register') }}">Ro'yxatdan o'tish</a>--}}
{{--            @endif--}}
{{--        @endauth--}}
{{--    </div>--}}
{{--@endif--}}

<div class="container-fluid">
    <div class="row real" >
        <div class="col-md-8 col-lg-8 bg-light" id="section2">
            <div class="animate__animated animate__backInUp">
                <div id="imgS">
                    <img src="{{asset('How-to-create-a-yearbook.webp')}}" alt="" height="60%" width="60%" style="margin-left: 15%; margin-top: 15%;" />
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12 bg-white" id="section2">
            <div id="senter">
                <div class="card-body text-left  mb-0">
                    <h2 style="font-weight: 400">Magistratura</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">Login</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Parol</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary2 btn-block"> Tizimga kirish </button>
                    </form>
                </div>

            </div>







            {{--            <h1 class=" animate__animated animate__backInLeft">M O N I T O R I N G- </h1>--}}
            {{--            <p class="realp animate__animated animate__backInUp ">pedagogik faoliyat monitoringi axborot tizimi</p>--}}
            {{--            <a href="{{url('/about')}}"><button class="btn btn-primary realp  animate__animated animate__bounce " style="border-radius: 50%;">Batafsil</button></a>--}}



        </div>
    </div>


</div>



</body>
</html>
