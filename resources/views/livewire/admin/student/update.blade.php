<div wire:ignore.self class="modal fade" id="studentUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">O'zgartirish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <label for="">Kurs Nomi</label>
                    <select name="updkursID" id="updkursID" wire:model="updkursID" class="form-control" >
                        <option value="">Kursni tanlang</option>

                            @foreach($kursupdate as $item)

                                <option value="{{$item->id}}">{{$item->kurs}}</option>
                            @endforeach


                    </select>
                    @error('updkursID')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">Guruh</label>
                        <select name="updguruhID" id="updguruhID" wire:model="updguruhID" class="form-control">
                            <option value="">Guruhni tanlang</option>
                            @foreach($guruhsFor as $item)
                                <option value="{{$item->id}}">{{$item->group}}</option>
                            @endforeach
                        </select>


                    </div>
                    @error('gName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="">Tinglovchi F.I.O</label>

                        <input type="text" class="form-control" name="name" wire:model="updName">
                    </div>
                    <div class="form-group">
                        <label for="">E-mail</label>

                        <input type="text" class="form-control" name="email" wire:model="updEmail">
                    </div>
                    <div class="form-group">
                        <label for="">Parol</label>

                        <input type="password" class="form-control" name="password" wire:model="updPassword">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="updateKaf btn btn-info" wire:click.prevent="update()">Saqlash</button>
                </div>
            </div>

        </div>
    </div>
</div>
