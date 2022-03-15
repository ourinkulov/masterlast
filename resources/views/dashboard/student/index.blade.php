@extends('layouts.studentApp')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card shadow-lg">
                    <div class="card-img">
                        <img src="{{asset('storage/images/'.\Illuminate\Support\Facades\Auth::user()->image)}}" alt="" height="50%" style="width:100%;opacity: 0.6" >
                    </div>
                    <div class="card-footer text-center">
                        <h5>{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="container">
                    <div class="row justify-content-center flex-row">

                        {{--                        <div class="col-md-3">--}}
                        {{--                            <a href="{{url('users/mavzus')}}">--}}
                        {{--                                <div class="card shadow-lg">--}}
                        {{--                                    <div class="card-body text-center ca_cb">--}}
                        {{--                                        <div class="ca_card_icon">--}}
                        {{--                                            <i ><img src="{{asset('storage/images/edit.png')}}"  alt=""></i>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="ca_card_title">--}}
                        {{--                                            FAN MA'LUMOTLARINI KIRITISH--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </a>--}}
                        {{--                        </div>--}}
                        <div class="col-md-3">
                            <a href="{{url('/users/joriynazorat')}}">
                                <div class="card shadow-lg">
                                    <div class="card-body text-center ca_cb">
                                        <div class="ca_card_icon">
                                            <i ><img src="{{asset('storage/images/check-mark-svgrepo-com.svg')}}" width="64px" alt=""></i>
                                        </div>
                                        <div class="ca_card_title">
                                            JORIY NAZORAT YARATISH
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{url('/users/jnjurnal')}}">
                                <div class="card shadow-lg">
                                    <div class="card-body text-center ca_cb">
                                        <div class="ca_card_icon">
                                            <i ><img src="{{asset('storage/images/studying-mark-svgrepo-com.svg')}}" width="64px"  alt="" ></i>
                                        </div>
                                        <div class="ca_card_title" class="mt-5">
                                            JN BAXOLASH
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{url('/users/useronjnjurnal')}}">
                                <div class="card shadow-lg">
                                    <div class="card-body text-center ca_cb">
                                        <div class="ca_card_icon">
                                            <i ><img src="{{asset('storage/images/check-mark-correct-svgrepo-com.svg')}}" width="64px" alt=""></i>
                                        </div>
                                        <div class="ca_card_title">
                                            ON BAHOLASH
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    {{--                    <div class="row justify-content-center flex-row">--}}
                    {{--                        <div class="col-md-3">--}}
                    {{--                            <a href="{{url('/users/quiz')}}">--}}
                    {{--                                <div class="card shadow-lg">--}}
                    {{--                                    <div class="card-body text-center ca_cb">--}}
                    {{--                                        <div class="ca_card_icon">--}}
                    {{--                                            <i><img src="{{asset('storage/images/checklist.png')}}" alt=""></i>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="ca_card_title">--}}
                    {{--                                            TESTLAR--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-md-3">--}}
                    {{--                            <a href="{{route('home')}}">--}}
                    {{--                                <div class="card shadow-lg">--}}
                    {{--                                    <div class="card-body text-center ca_cb">--}}
                    {{--                                        <div class="ca_card_icon">--}}
                    {{--                                            <i ><img src="{{asset('storage/images/controls.png')}}" alt=""></i>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="ca_card_title">--}}
                    {{--                                            VAZIFALARNI BAJARGANLAR--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-md-3">--}}
                    {{--                            <a href="{{url('/users/useronjnjurnal')}}">--}}
                    {{--                                <div class="card shadow-lg">--}}
                    {{--                                    <div class="card-body text-center ca_cb">--}}
                    {{--                                        <div class="ca_card_icon">--}}
                    {{--                                            <i ><img src="{{asset('storage/images/megaphone.svg')}}" width="64px" alt=""></i>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="ca_card_title">--}}
                    {{--                                           ON BAHOLASH--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}

                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection


