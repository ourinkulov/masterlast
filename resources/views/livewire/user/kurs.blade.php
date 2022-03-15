<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="container">
                    <div class="row justify-content-center flex-row">
                        <div class="form-group">
                            <labale>O'quv yili</labale>
                            <select name="studyyear" id="studyyear" class="form-control" wire:model="syID">
                                <option value="">Tanlang</option>
                                @foreach($studyyear as $item)
                                    <option value="{{$item->id}}">{{$item->studyyear}}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="form-group ml-4">
                            <labale>Semestr</labale>
                            <select name="semestr" id="semestr" class="form-control" wire:model="semID">
                                <option value="">Tanlang</option>
                                @foreach($semestr as $item)
                                    <option value="{{$item->id}}">{{$item->semestrName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center flex-row">
                        @foreach($kurs as $item)
                            <div class="col-md-3">
                                <a href="{{url('users/quiz',$item->id)}}">
                                    <div class="card shadow-lg">
                                        <div class="card-body text-center ca_cb">
                                            <div class="ca_card_icon">
                                                <i ><img src="{{asset('storage/images/megaphone.svg')}}" width="64px" alt=""></i>
                                            </div>
                                            <div class="ca_card_title">
                                                {{$item->fanName}}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
</div>
