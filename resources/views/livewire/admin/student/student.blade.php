<div>
    @include('livewire.admin.student.create')
    @include('livewire.admin.student.update')
    @include('livewire.admin.student.addimage')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-2">
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
                            <h5>Tinglovchilar | <button class="btn btn-primary text-white" data-toggle="modal" data-target="#createStudentModal"><i class="fa fa-user-plus fa-1x text-white"></i> Tinglovchi qo'shish</button></h5>
                        </div>
                        <div class="card-body">
                            <table class="border-0 table bg-white table-responsive-lg " width="100%" >
                                <thead class="text-primary">
                                <th>#</th>
                                <th>Rasm</th>
                                <th>F.I.O</th>
                                <th>Email</th>
                                <th>Kurs</th>
                                <th>Guruh</th>
                                <th>Amallar</th>
                                </thead>
                                <tbody>
                                @foreach($students as $t)
                                    <tr>
                                        <td>{{$t->id}}</td>
                                       @if($t->image!='')
                                            <td><img src="{{asset('storage/images/'.$t->image)}}" alt="" width="76px" height="76px" style="border-radius: 50%"></td>
                                        @else
                                            <td><img src="{{asset('storage/images/master.png')}}" alt="" width="76px" height="76px" style="border-radius: 50%"></td>
                                        @endif

                                        <td>{{$t->name}}</td>
                                        <td>{{$t->email}}</td>
                                        <td>{{$t->kurs}}</td>
                                        <td>{{$t->group}}</td>
                                        <td>
                                            <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#studentUpdateModal" wire:click.prevent="edit({{$t->id}})">O'zgartirish</button>
                                            <button class="btn btn-outline-danger" wire:click="delete({{$t->id}})">O'chirish</button>
                                            <button class="btn btn-outline-info" wire:click="addImageID({{$t->id}})" data-toggle="modal" data-target="#addimage">Rasm qo'shish</button>
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
