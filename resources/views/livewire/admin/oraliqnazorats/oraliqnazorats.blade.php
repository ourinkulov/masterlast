<div>
    @include('livewire.admin.oraliqnazorats.create')
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
                                    @if(!empty($bosqich) )
                                        @foreach($bosqich as $item)
                                            <option value="{{$item->id}}">{{$item->kurs}} boshqaruv</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Fan</label>
                                <select name="" id="" class="form-control" wire:model="complesid" >
                                    <option value="">Fan tanlang</option>
                                    @if(!empty($comples))
                                        @foreach($comples as $item)
                                            <option value="{{$item->id}}">{{$item->fanName}} </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Joriy nazorat kiritish</label><br>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#createoraliqnazorat">Oraliq nazorat  kiritish</button>
                            </div>
                        </div>
                        <hr>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-responsive-lg table-bordered">
                                            <thead>
                                            <th>#</th>
                                            <th>ON</th>
                                            <th>Fan nomi</th>
                                            <th>O'quv yili</th>
                                            <th>Semestr</th>
                                            <th>Status</th>
                                            <th>So'nggi o'zgarish</th>
                                            <th>Ruxsat berish</th>
                                            <th>Deshifrlash</th>
                                            </thead>
                                            <tbody>
                                            @if(!empty($oraliq) && $oraliq->count()>=1)
                                                @foreach($oraliq as $k=>$item)
                                                    <tr>
                                                        <td>{{++$k}}</td>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->fanName}}</td>
                                                        <td>{{$item->studyyear}}</td>
                                                        <td>{{$item->semestrName}}</td>
                                                        <td>
                                                            @if($item->status == 1)

                                                                <span class="badge-pill badge-danger">Yopiq</span>
                                                            @elseif($item->status == 2)
                                                                <span class="badge-pill badge-success">Ochiq</span>
                                                            @endif


                                                        </td>
                                                        <td>
                                                            {{$item->updated_at}}
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success" wire:click.prevent="changeToOpen({{$item->id}})"><span  class="badge-pill badge-success">Ochish</span></button>
                                                            <i class="fa fa-text-width"></i>
                                                            <button class="btn btn-danger" wire:click.prevent="changeToClose({{$item->id}})"><span  class="badge-pill badge-danger">Yopish</span></button>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success" wire:click.prevent="changeToOpen2({{$item->id}})"><span  class="badge-pill badge-success">Ochish</span></button>
                                                            <i class="fa fa-text-width"></i>
                                                            <button class="btn btn-danger" wire:click.prevent="changeToClose2({{$item->id}})"><span  class="badge-pill badge-danger">Yopish</span></button>
                                                        </td>
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
</div>
