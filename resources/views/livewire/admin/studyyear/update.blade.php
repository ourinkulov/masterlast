<div wire:ignore.self class="modal fade" id="studyyearUpdateModal" tabindex="-1" role="dialog" aria-labelledby="studyyearUpdateModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studyyearUpdateModal">O'zgartirish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="updstudyyearName">O'quv yili Nomi</label>
                        <input type="text" class="form-control" name="updstudyyearName" wire:model="updstudyyearName">
                    </div>
                    @error('updstudyyearName')
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
