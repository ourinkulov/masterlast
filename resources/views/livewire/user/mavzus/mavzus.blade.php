<div>
    @include('livewire.user.mavzus.create')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <label>Bosqich</label>
                    <select name="" id="" class="form-control" wire:model="kurs">
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
                    <select name="" id="" class="form-control" wire:model="fan">
                        <option value="">Fan tanlang</option>
                        @if(!empty($comples))
                            @foreach($comples as $item)
                                <option value="{{$item->id}}">{{$item->fanName}} </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Mavzu kiritish</label><br>
                   <button class="btn btn-primary" data-toggle="modal" data-target="#createMavzu">Mavzu kiritish</button>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-responsive-lg table-bordered">
                            <thead>
                            <th>#</th>
                            <th>F.I.O</th>

                            </thead>
                            <tbody>
                           @if(!empty($mavzu))
                               @foreach($mavzu as $k=>$item)
                                   <tr>
                                       <td>{{++$k}}</td>
                                       <td>{{$item->fanName}}</td>
                                       <td>{{$item->title}}</td>
                                       <td>{{$item->maruza}}</td>
                                       <td><input type="text" wire:model="{{$item->id}}"></td>
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
