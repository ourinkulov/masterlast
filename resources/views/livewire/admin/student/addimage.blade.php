
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addimage" tabindex="-1" role="dialog" aria-labelledby="addimage" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addimage">Tinglovchi qo'shish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Rasm</label>
                        <input type="file" wire:model="image" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="addImage()">Saqlash</button>
            </div>
        </div>
    </div>
</div>
