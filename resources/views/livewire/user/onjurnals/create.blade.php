
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="onjurnals" tabindex="-1" role="dialog" aria-labelledby="onjurnals" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createJn">Oraliq nazorat baholash</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Magistrant SHIFR raqami</label>
                        <input type="text" class="form-control" name="name" wire:model="randnumid">
                    </div>

                    <div class="form-group">
                        <label for="">Oraliq nazorat bahosi</label>
                        <input type="text" class="form-control" name="name" wire:model="baho">
                    </div>
                    @error('baho')
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
