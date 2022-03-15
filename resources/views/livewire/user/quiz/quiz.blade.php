<div>
    @include('livewire.user.quiz.create')
    @include('livewire.user.quiz.update')
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
                            <h5>Test yaratish| <button class="btn btn-primary text-white" data-toggle="modal" data-target="#createQuizModal"><i class="fa fa-user-plus fa-1x text-white"></i> Test qo'shish</button></h5>
                        </div>
                        <div class="card-body">
                            <table class="border-0 table bg-white table-responsive-lg" width="100%">
                                <thead class="text-primary">
                                <th>#</th>
                                <th>Test nomi</th>
                                <th>Kurs nomi</th>
                                <th>Fan nomi</th>
                                <th>Amallar</th>
                                </thead>
                                <tbody>
                                @foreach($quiz as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->quizName}}</td>
                                        <td>{{$item->fanName}}</td>
                                        <td>{{$item->fName}}</td>
                                        <td>
                                            <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#quizUpdateModal" wire:click.prevent="edit({{$item->id}})">O'zgartirish</button>
                                            <button class="btn btn-outline-danger" wire:click="delete({{$item->id}})">O'chirish</button>
                                            <a href="{{url('/users/questions',$item->id)}}"> <button class="btn btn-outline-danger" >Savollar qo'shish</button></a>

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
