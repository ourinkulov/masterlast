
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createGuruhModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Guruh qo'shish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <label for="">Kurs Nomi</label>
                    <select name="kursID" id="kursID" wire:model="kursID" class="form-control">
                        <option value="">Kursni tanlang</option>

                        <option value="1">Tashkiliy-strategik boshqaruv</option>
                        <option value="2">Tashkiliy-taktik boshqaruv</option>

                    </select>
                   @error('kursID')
                    <p class="text-danger">{{$message}}</p>
                   @enderror
                    <div class="form-group">
                        <label for="">Guruh</label>

                        <input type="text" class="form-control" name="gName" wire:model="gName">
                    </div>
                    @error('gName')
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
