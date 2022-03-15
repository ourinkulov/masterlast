<div>
    @include('livewire.user.onjurnals.create')
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
                        <label>Joriy nazorat </label><br>
                        <select name="" id="" class="form-control" wire:model="onid">
                            <option value="">JN tanlang</option>
                            @if(!empty($oraliq))
                                @foreach($oraliq as $item)
                                    <option value="{{$item->id}}">{{$item->name}} </option>
                                @endforeach
                            @endif
                        </select>
                        {{--                        <button class="btn btn-primary" data-toggle="modal" data-target="#createJn">Joriy nazorat  kiritish</button>--}}
                    </div>

                    {{--                    <div class="col-md-2">--}}
                    {{--                        <label>Joriy nazorat </label><br>--}}

                    {{--                        <button class="btn btn-primary" data-toggle="modal" data-target="#createJn">Joriy nazorat  kiritish</button>--}}
                    {{--                    </div>--}}
                </div>
                <hr>
                @if($status == 1)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="text-center mb-0 pb-0 mt-1 ">
                                    <span>      <h5>Guruh magistrantlari ro'yxati</h5></span>
                                </div>
                                <div class="card-body mt-0 pt-0">
{{--                                    @if($status)--}}
{{--                                        <button>Ok</button>--}}
{{--                                    @else--}}
{{--                                        <button>No</button>--}}
{{--                                    @endif--}}
                                    <table class="table table-responsive-lg table-bordered">
                                        <thead>
                                        <th>#</th>
                                        <th>F.I.O</th>
                                        <th>Baholash</th>
                                        {{--                                <th>JN</th>--}}
                                        {{--                                <th>Baholash</th>--}}


                                        </thead>
                                        <tbody>
                                        @if(!empty($students) )
                                            @foreach($students as $k=>$item)
                                                <tr>
                                                    <td>{{++$k}}</td>
                                                    {{--                                            <td>{{$item->baho}}</td>--}}
                                                    {{--                                            <td>{{$item->jnName}}</td>--}}
                                                    <td>{{$item->randomnum}}</td>
                                                    <td><a href="" data-toggle="modal" data-target="#onjurnals" wire:click.prvent="studentid({{$item->id}},{{$item->randomnum}})"><i class="fa fa-pen"></i></a></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="text-center mb-0 pb-0 mt-1 ">
                                    <span>      <h5>Baholangan magistrantlar</h5></span>
                                </div>
                                <div class="card-body mt-0 pt-0">
                                    <table class="table table-responsive-lg table-bordered">
                                        <thead>
                                        <th>#</th>
                                        <th>SHIFR</th>
                                        <th>Baho</th>

                                        {{--                                     <th>Baholash</th>--}}
                                        </thead>
                                        <tbody>
                                        @if(!empty($students2))
                                            @foreach($students2 as $k=>$item)
                                                <tr>
                                                    <td>{{++$k}}</td>
                                                    <td>{{$item->randomnum}}</td>
                                                    <td class="text-center" > {{$item->baho}}</td>


                                                    {{--                                                <td><a href="" data-toggle="modal" data-target="#jnjurnals" wire:click.prvent="studentid({{$item->id}})"><i class="fa fa-pen"></i></a></td>--}}
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="card">
                            <div class="text-center mb-0 pb-0 mt-1 ">
                                <span>      <h5>Baholangan magistrantlar</h5></span>
                            </div>
                            <div class="card-body mt-0 pt-0">
                                <table class="table table-responsive-lg table-bordered">
                                    <thead>
                                    <th>#</th>
                                    <th>F.I.O</th>
                                    <th>Baho</th>
{{--                                    <th>JN</th>--}}
                                    {{--                                     <th>Baholash</th>--}}
                                    </thead>
                                    <tbody>
                                    @if(!empty($students2))
                                        @foreach($students2 as $k=>$item)
                                            <tr>
                                                <td>{{++$k}}</td>
                                                <td>{{$item->name}}</td>
                                                <td class="text-center" > {{$item->baho}}</td>
{{--                                                <td>{{$item->onName}}</td>--}}

                                                {{--                                                <td><a href="" data-toggle="modal" data-target="#jnjurnals" wire:click.prvent="studentid({{$item->id}})"><i class="fa fa-pen"></i></a></td>--}}
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
