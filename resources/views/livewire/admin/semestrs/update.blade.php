<div wire:ignore.self class="modal fade" id="semestrUpdateModal" tabindex="-1" role="dialog" aria-labelledby="semestrUpdateModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="semestrUpdateModal">O'zgartirish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="updstudyyear">O'quv yili Nomi</label>
                        <select name="updstudyyear" id="updstudyyear" wire:model="updstudyyear" class="form-control">
                            <option value="">O'quv yilini tanlang</option>
                            @foreach($studyyears as $item)
                                <option value="{{$item->id}}">{{$item->studyyear}}</option>
                            @endforeach
                        </select>

                    </div>
                    @error('studyyear')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="updsemestr">O'quv yili Nomi</label>
                        <input type="text" name="updsemestr" wire:model="updsemestr" class="form-control">
                    </div>
                    @error('semestr')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </form>
                <div class="modal-footer">
                    <button type="button" class="updateKaf btn btn-info" wire:click.prevent="update()">Saqlash</button>
                </div>
            </div>

        </div>
    </div>
</div>
