<div wire:ignore.self class="modal fade" id="teacherUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <div class="form-group">
                        <label for="">Kafedra Nomi</label>
                        <select name="kafName" id="updKafID" wire:model="updKafID" class="form-control">
                            <option value="">Kafedrani tanlang</option>
                            @foreach($kafedras as $k)
                                <option value="{{$k->id}}">{{$k->kafName}}</option>
                            @endforeach
                        </select>

                    </div>
                    @error('kafName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">O'qituvchi F.I.O</label>

                        <input type="text" class="form-control" name="updName" wire:model="updName">
                    </div>
                    <div class="form-group">
                        <label for="">E-mail</label>

                        <input type="text" class="form-control" name="updEmail" wire:model="updEmail">
                    </div>
                    <div class="form-group">
                        <label for="">Parol</label>

                        <input type="password" class="form-control" name="updPassword" wire:model="updPassword">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="updateKaf btn btn-info" wire:click.prevent="update()">Saqlash</button>
                </div>
            </div>

        </div>
    </div>
</div>
