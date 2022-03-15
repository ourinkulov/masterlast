<div>
    @include('livewire.admin.guruhs.create')
    @include('livewire.admin.guruhs.update')
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
                            <h5>Guruhlar | <button class="btn btn-primary text-white" data-toggle="modal" data-target="#createGuruhModal"><i class="fa fa-user-plus fa-1x text-white"></i> Guruh qo'shish</button></h5>
                        </div>
                        <div class="card-body">
                            <table class="border-0 table bg-white table-responsive-lg " width="100%" >
                                <thead class="text-primary">
                                <th>#</th>
                                <th>Guruh</th>
                                <th>Kurs</th>
                                <th>Amallar</th>
                                </thead>
                                <tbody>
                                @foreach($guruhs as $guruh)
                                    <tr>
                                        <td>{{$guruh->id}}</td>
                                        <td>{{$guruh->group}}</td>
                                        <td>{{$guruh->kurs}}</td>
                                        <td>
                                            <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#guruhUpdateModal" wire:click.prevent="edit({{$guruh->id}})">O'zgartirish</button>
                                            <button class="btn btn-outline-danger" wire:click="delete({{$guruh->id}})">O'chirish</button>
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
