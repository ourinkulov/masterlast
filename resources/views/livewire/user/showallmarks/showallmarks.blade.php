<div>
    {{--    @include('livewire.user.jnjurnals.create')--}}
    <div class="container-fluid">
        @if(session()->has('message'))
            <div class="alert alert-success">{{session('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(session()->has('message-dan'))
            <div class="alert alert-danger">{{session('message-dan')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
{{--            <div class="row">--}}
{{--                <div class="col-md-4"></div>--}}
{{--                <div class="col-md-4"><h6><i>Fan nomi : </i> <strong class="text-uppercase">{{  $fanname}} </strong></h6></div>--}}
{{--                <div class="col-md-4"></div>--}}
{{--            </div>--}}
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-2">
                        <label>Bosqich</label>
                        <select name="" id="" class="form-control" wire:model="bosqichid">
                            <option value="">Bosqichni tanlang</option>
                            @if(!empty($bosqich))
                                @foreach($bosqich as $item)
                                    <option value="{{$item->id}}">{{$item->kurs}} boshqaruv</option>
                                @endforeach
                            @endif

                        </select>
                    </div>
                    <div class="col-md-2">
                        <label>Guruh</label><br>
                        <select name="" id="" class="form-control" wire:model="gid">
                            <option value="">Fan tanlang</option>
                            @if(!empty($guruh))
                                @foreach($guruh as $item)
                                    <option value="{{$item->id}}">{{$item->group}} </option>
                                @endforeach
                            @endif
                        </select>
                        {{--                        <button class="btn btn-primary" data-toggle="modal" data-target="#createJn">Joriy nazorat  kiritish</button>--}}
                    </div>
                    <div class="col-md-2">
                        <label>Fan</label>
                        <select name="" id="" class="form-control" wire:model="complesid">
                            <option value="">Fan tanlang</option>
                            @if(!empty($comples))
                                @foreach($comples as $item)
                                    <option value="{{$item->id}}">{{$item->fanName}} </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label>Fan nomi </label>
                        <h6><strong class="text-uppercase">{{  $fanname}} </strong></h6>
                    </div>



                    {{--                    <div class="col-md-2">--}}
                    {{--                        <label>Joriy nazorat </label><br>--}}
                    {{--                        <select name="" id="" class="form-control" wire:model="jnid">--}}
                    {{--                            <option value="">ON tanlang</option>--}}
                    {{--                            @if(!empty($oraliq))--}}
                    {{--                                @foreach($oraliq as $item)--}}
                    {{--                                    <option value="{{$item->id}}">{{$item->name}} </option>--}}
                    {{--                                @endforeach--}}
                    {{--                            @endif--}}
                    {{--                        </select>--}}
                    {{--                        --}}{{--                        <button class="btn btn-primary" data-toggle="modal" data-target="#createJn">Joriy nazorat  kiritish</button>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-md-2">--}}
                    {{--                        <label>Joriy nazorat </label><br>--}}
                    {{--                        --}}{{--                        <select name="" id="" class="form-control" wire:model="onid">--}}
                    {{--                        --}}{{--                            <option value="">ON tanlang</option>--}}
                    {{--                        --}}{{--                            @if(!empty($oraliq))--}}
                    {{--                        --}}{{--                                @foreach($oraliq as $item)--}}
                    {{--                        --}}{{--                                    <option value="{{$item->id}}">{{$item->name}} </option>--}}
                    {{--                        --}}{{--                                @endforeach--}}
                    {{--                        --}}{{--                            @endif--}}
                    {{--                        --}}{{--                        </select>--}}
                    {{--                        <button class="btn btn-primary" wire:click.prevent="generate()">Generatsiya</button>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="col-md-2">--}}
                    {{--                        <label>Joriy nazorat </label><br>--}}

                    {{--                        <button class="btn btn-primary" data-toggle="modal" data-target="#createJn">Joriy nazorat  kiritish</button>--}}
                    {{--                    </div>--}}
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8 marginnol">

                            {{--                            <div class="text-center mb-0 pb-0 mt-1 ">--}}
                            {{--                                <span>      <h5>Guruh magistrantlari ro'yxati</h5></span>--}}
                            {{--                            </div>--}}
                            <div class="mt-0 pt-0">
                                {{--                                <table class="table-responsive-lg table">--}}
                                {{--                                    <thead>--}}
                                {{--                                    <td>F.I.O</td>--}}
                                {{--                                    @if(!empty($joriynazorats))--}}
                                {{--                                    @foreach($joriynazorats as $item)--}}
                                {{--                                        <td>{{$item->name}}</td>--}}
                                {{--                                    @endforeach--}}
                                {{--                                        @endif--}}
                                {{--                                    </thead>--}}
                                {{--                                    <thead>--}}
                                {{--                                    @if(!empty($jurnals))--}}
                                {{--                                        @foreach($jurnals as $item)--}}

                                {{--                                            <tr>--}}
                                {{--                                                <td>{{$item->name}}</td>--}}
                                {{--                                                @foreach($item->jnjurnal as $item2)--}}
                                {{--                                                    @if($item2->baho == '') <td>{{'Baholanmagan'}}</td>@endif--}}
                                {{--                                                    <td>{{$item2->baho}}</td>--}}
                                {{--                                                @endforeach--}}
                                {{--                                            </tr>--}}
                                {{--                                        @endforeach--}}
                                {{--                                    @endif--}}
                                {{--                                    </thead>--}}

                                {{--                                </table>--}}

                                <table class="table table-bordered bg-white">
                                    <thead style="font-weight: bolder; color: #1d68a7">
                                    <td>F.I.O</td>

                                    @if(!empty($joriynazorats))
                                        @foreach($joriynazorats as $item)
                                            @if($item->comples_id == $complesid) <td>{{$item->name}}</td>@endif
                                        @endforeach
                                    @endif
{{--                                    @if(!empty($oraliqcount))--}}
{{--                                    <td>ON1</td>--}}
{{--                                    @endif--}}
{{--                                    <td>ON2</td>--}}
                                    {{--                                <th>JN</th>--}}
                                    {{--                                <th>Baholash</th>--}}


                                    </thead>
                                    <tbody>
                                    @if(!empty($jurnals))
                                        @foreach($jurnals as $item)

                                            <tr>
                                                <td>{{$item->name}}</td>
                                                @foreach($item->jnjurnal as $item2)
                                                    @if($item2->comple_id == $complesid) <td>{{$item2->baho}}</td>@endif
                                                @endforeach
{{--                                                @foreach($item->onjurnal as $item3)--}}
{{--                                                    @if($item3->comples_id == $complesid) <td>{{$item3->baho}}</td>@endif--}}
{{--                                                @endforeach--}}
                                            </tr>
                                        @endforeach
                                    @endif
                                    {{--                                    @if(!empty($students) && $students->count() > 0)--}}
                                    {{--                                        @foreach($students as $k=>$item)--}}
                                    {{--                                            <tr>--}}

                                    {{--                                                <td>{{++$k}}</td>--}}
                                    {{--                                                <td>{{$item->name}}</td>--}}


                                    {{--                                                <td>{{$item->baho}}</td>--}}
                                    {{--                                                <td>{{$item->jnName}}</td>--}}

                                    {{--                                                --}}{{--                                                <td><a href="" data-toggle="modal" data-target="#jnjurnals" wire:click.prvent="studentid({{$item->id}})"><i class="fa fa-pen"></i></a></td>--}}


                                    {{--                                            </tr>--}}
                                    {{--                                        @endforeach--}}
                                    {{--                                    @endif--}}
                                    </tbody>
                                </table>

                            </div>

                    </div>
                    <div class="col-md-4 marginnol">

{{--                                                        <div class="text-center mb-0 pb-0 mt-1 ">--}}
{{--                                                            <span>      <h5>Guruh magistrantlari ro'yxati</h5></span>--}}
{{--                                                        </div>--}}
                            <div class=" mt-0 pt-0 ml-0 pl-0">
                                <table class="table table-bordered bg-white">
                                    <thead style="font-weight: bolder; color: #1d68a7">
{{--                                    <th>#</th>--}}
{{--                                    <th>F.I.O</th>--}}
                                    <th>JN</th>
                                    <th>ON</th>
                                    <th>YN</th>
                                    <th>UMUMI BAHO</th>

                                    </thead>
                                    <tbody>
                                    @if(!empty($studentonsum) )
                                        @foreach($studentonsum as $k=>$item)
                                            <tr>
{{--                                                <td>{{++$k}}</td>--}}
{{--                                                <td>{{$item->name}}</td>--}}

                                                <td >{{number_format($item->jn/$joriynazoratscount,2)}}</td>
                                                @if($item->oraliq)
                                                    <td >{{$item->oraliq/$oraliqnazoratcount}}</td>
                                                @else
                                                    <td >{{number_format($item->oraliq/$oraliqnazoratcount,2)}}</td>
                                                @endif
                                                @if($item->yakuniy)
                                                    <td >{{$item->yakuniy}}</td>
                                                @else
                                                    <td >{{number_format($item->yakuniy,2)}}</td>
                                                @endif
                                                <td>{{(($item->jn/$joriynazoratscount)+($item->oraliq/$oraliqnazoratcount)+$item->yakuniy)/3}}</td>


{{--                                                                                                @elseif($item->jn/$joriynazoratscount>=56 && $item->jn/$joriynazoratscount<71)--}}
{{--                                                                                                    <td style="background-color: rgba(201,130,3,0.75); color: white">{{number_format($item->jn/$joriynazoratscount,2)}}</td>--}}
{{--                                                                                                @if($item->oraliq!=0)--}}
{{--                                                                                                    <td style="background-color: rgba(201,130,3,0.75); color: white">{{$item->oraliq/$oraliqnazoratcount}}</td>--}}
{{--                                                                                                @endif--}}
{{--                                                                                                @elseif($item->jn/$joriynazoratscount>=71 && $item->jn/$joriynazoratscount<86)--}}
{{--                                                                                                    <td style="background-color: rgb(162,189,39); color: white">{{number_format($item->jn/$joriynazoratscount,2)}}</td>--}}
{{--                                                                                                    <td style="background-color: rgb(162,189,39); color: white">{{$item->oraliq/$oraliqnazoratcount}}</td>--}}
{{--                                                                                                @elseif($item->jn/$joriynazoratscount>=86)--}}
{{--                                                                                                    <td style="background-color: rgb(2,117,52); color: white">{{number_format($item->jn/$joriynazoratscount,2)}}</td>--}}
{{--                                                                                                    <td style="background-color: rgb(2,117,52); color: white">{{$item->oraliq/$oraliqnazoratcount}}</td>--}}
{{--                                                                                                @endif--}}
{{--                                                                                                <td>{{$item->jnName}}</td>--}}

{{--                                                                                                <td><a href="" data-toggle="modal" data-target="#jnjurnals" wire:click.prvent="studentid({{$item->id}})"><i class="fa fa-pen"></i></a></td>--}}


                                            </tr>
                                        @endforeach
                                    @endif


                                    </tbody>
                                </table>
                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
