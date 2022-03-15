<div>
    @include('livewire.admin.semestrs.create')
    @include('livewire.admin.semestrs.update')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12  mt-2">
                    @if(session()->has('message-suc'))
                        <div class="alert alert-success">{{session('message-suc')}}
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
                    <div class="card">
                        <div class="card-header">
                            <h5>Semestr | <button class="btn btn-primary text-white" data-toggle="modal" data-target="#createStudyyearModal"><i class="fa fa-user-plus fa-1x text-white"></i> Semestr qo'shish</button></h5>
                        </div>
                        <div class="card-body">
                            <table class="border-0 table bg-white table-responsive-lg " width="100%" >
                                <thead class="text-primary">
                                <th>#</th>
                                <th>Semestr</th>
                                <th>O'quv yili</th>
                                <th>Amallar</th>
                                </thead>
                                <tbody>
                                @foreach($semestrs as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->semestrName}}</td>
                                        <td>{{$item->studyyear}}</td>
                                        <td>
                                            <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#semestrUpdateModal" wire:click.prevent="edit({{$item->id}})">O'zgartirish</button>
                                            <button class="btn btn-outline-danger" wire:click="delete({{$item->id}})">O'chirish</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
