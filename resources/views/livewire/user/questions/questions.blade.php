<div>
    @include('livewire.user.questions.create')
{{--    @include('livewire.user.questions.update')--}}
    <section>
        <div class="container">
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
                            <h5>Test savollarini yaratish| <button class="btn btn-primary text-white" data-toggle="modal" data-target="#createQuizQueModal"><i class="fa fa-user-plus fa-1x text-white"></i> Test qo'shish</button></h5>
                        </div>
                        <div class="card-body">
                            <table class="border-0 table bg-white table-responsive-lg " width="100%" >
                                <thead class="text-primary">
                                <th>#</th>
                                <th>Test savoli</th>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                                <th>D</th>
                                <th>To'g'ri javob</th>
                                <th>Amallar</th>
                                </thead>
                                <tbody>
                                @foreach($questions as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->question}}</td>

                                        @if($item->ans5=='ans1')
                                                <td style="background-color: #98dfb6; border-radius: 17%"> {{$item->ans1}}</td>
                                        @else
                                            <td>{{$item->ans1}}</td>
                                        @endif
                                        @if($item->ans5=='ans2')
                                            <td style="background-color: #98dfb6; border-radius: 17%"> {{$item->ans2}}</td>
                                        @else
                                            <td>{{$item->ans2}}</td>
                                        @endif
                                        @if($item->ans5=='ans3')
                                            <td style="background-color: #98dfb6; border-radius: 17%"> {{$item->ans3}}</td>
                                        @else
                                            <td>{{$item->ans3}}</td>
                                        @endif
                                        @if($item->ans5=='ans4')
                                            <td style="background-color: #98dfb6; border-radius: 17%"> {{$item->ans4}}</td>
                                        @else
                                            <td>{{$item->ans4}}</td>
                                        @endif

                                        <td>{{$item->ans5}}</td>
                                        <td>
                                            <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#quizUpdateModal" wire:click.prevent="edit({{$item->id}})">O'zgartirish</button>
                                            <button class="btn btn-outline-danger" wire:click="delete({{$item->id}})">O'chirish</button>
                                            <a href="{{url('/questions',$item->id)}}"> <button class="btn btn-outline-danger" >Savollar qo'shish</button></a>

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
