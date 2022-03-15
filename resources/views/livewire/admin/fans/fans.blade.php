<div>
    @include('livewire.admin.fans.create')
    @include('livewire.admin.fans.update')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 mt-2">
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
                            <h5>Fanlar | <button class="btn btn-primary text-white" data-toggle="modal" data-target="#createFanModal"><i class="fa fa-user-plus fa-1x text-white"></i> Fan qo'shish</button></h5>
                        </div>
                        <div class="card-body">
                            <table class="border-0 table bg-white table-responsive-lg " width="100%" >
                                <thead class="text-primary">
                                <th>#</th>
                                <th>Fan</th>
                                <th>Kafedra</th>
                                <th>Amallar</th>
                                </thead>
                                <tbody>
                                @foreach($fans as $fan)
                                    <tr>
                                        <td>{{$fan->id}}</td>
                                        <td>{{$fan->fName}}</td>
                                        <td>{{$fan->kafName}}</td>
                                        <td>
                                            <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#fanUpdateModal" wire:click.prevent="edit({{$fan->id}})">O'zgartirish</button>
                                            <button class="btn btn-outline-danger" wire:click="delete({{$fan->id}})">O'chirish</button>
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
