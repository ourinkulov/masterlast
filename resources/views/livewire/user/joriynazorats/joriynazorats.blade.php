<div>
    @include('livewire.user.joriynazorats.create')
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
                        <label>Joriy nazorat kiritish</label><br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#createJn">Joriy nazorat  kiritish</button>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-responsive-lg table-bordered">
                                <thead>
                                <th>#</th>
                                <th>JN</th>
                                <th>Fan nomi</th>
                                <th>O'quv yili</th>
                                <th>Modul</th>

                                </thead>
                                <tbody>
                                @if(!empty($joriy))
                                    @foreach($joriy as $k=>$item)
                                        <tr>
                                            <td>{{++$k}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->fName}}</td>
                                            <td>{{$item->studyyear}}</td>
                                            <td>{{$item->semestrName}}</td>

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
