<div>
    @include('livewire.admin.comples.create')
    @include('livewire.admin.comples.update')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12  ">
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
                            <h5>O'quv reja | <button class="btn btn-primary text-white" data-toggle="modal" data-target="#createComplexModal"><i class="fa fa-user-plus fa-1x text-white"></i> O'quv reja qo'shish</button></h5>
                        </div>
                        <div class="card-body">
                            <table class="border-0 table bg-white table-responsive-lg " width="100%" >
                                <thead class="text-primary">
                                <th>#</th>
                                <th>Kurs nomi</th>
                                <th>O'quv yili</th>
                                <th>Semestr</th>
                                <th>Fan</th>
                                <th>O'qituvchi</th>
                                <th>Kurs</th>
                                <th>Guruh</th>
                                <th>Amallar</th>
                                </thead>
                                <tbody>
                                @foreach($comples as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->fanName}}</td>
                                        <td>{{$item->studyyear}}</td>
                                        <td>{{$item->semestrName}}</td>
                                        <td>{{$item->fName}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->kurs}}</td>
                                        <td>{{$item->group}}</td>
                                        <td>
                                            <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#updateComplexModal" wire:click.prevent="edit({{$item->id}})">O'zgartirish</button>
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
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-responsive-lg">
                       <tr>
                           <th>Comp</th>
                           <th>ON</th>
                       </tr>
{{--                        @foreach($onjur->onjurnals as $item)--}}
{{--                            <tr>--}}
{{--                                <td>{{$item->id}}</td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}

                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
