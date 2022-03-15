
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createStudyyearModal" tabindex="-1" role="dialog" aria-labelledby="createStudyyearModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createStudyyearModal">Semestr qo'shish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="studyyearName">O'quv yili Nomi</label>
                        <select name="studyyear" id="studyyear" wire:model="studyyear" class="form-control">
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
                        <label for="semestr">O'quv yili Nomi</label>
                        <input type="text" name="semestr" wire:model="semestr" class="form-control">
                    </div>
                    @error('semestr')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="store()">Saqlash</button>
            </div>
        </div>
    </div>
</div>
