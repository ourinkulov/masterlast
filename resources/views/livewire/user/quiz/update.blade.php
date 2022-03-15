<div wire:ignore.self class="modal fade" id="quizUpdateModal" tabindex="-1" role="dialog" aria-labelledby="quizUpdateModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quizUpdateModal">O'zgartirish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <label for="">Test Nomi</label>
                    <select name="updkursid" id="updkursid" wire:model="updkursid" class="form-control">
                        <option value="">Kursni tanlang</option>
                        @foreach($fan as $item)
                            <option value="{{$item->id}}">{{$item->fanName}}</option>
                        @endforeach
                    </select>
                    @error('updkursid')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">Fan</label>

                        <input type="text" class="form-control" name="updtestname" wire:model="updtestname">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="updateKaf btn btn-info" wire:click.prevent="update()">Saqlash</button>
                </div>
            </div>

        </div>
    </div>
</div>
