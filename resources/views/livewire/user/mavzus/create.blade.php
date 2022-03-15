
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createMavzu" tabindex="-1" role="dialog" aria-labelledby="createMavzu" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createMavzu">Mavzu kiritish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">

                    <div class="form-group">
                        <label for="">Mavzu nomi</label>
                        <input type="text" class="form-control" name="fName" wire:model="av">
                    </div>
                    @error('av')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">B variant</label>
                        <input type="text" class="form-control" name="fName" wire:model="bv">
                    </div>
                    @error('av')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">C variant</label>
                        <input type="text" class="form-control" name="fName" wire:model="cv">
                    </div>
                    @error('cv')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">D variant</label>
                        <input type="text" class="form-control" name="fName" wire:model="dv">
                    </div>
                    @error('dv')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">To'g'ri javob</label>
                        <select name="cans" id="" wire:model="cans" class="form-control">
                            <option value="">Tanlang</option>
                            <option value="ans1">A</option>
                            <option value="ans2">B</option>
                            <option value="ans3">C</option>
                            <option value="ans4">D</option>
                        </select>
                    </div>
                    @error('av')
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
