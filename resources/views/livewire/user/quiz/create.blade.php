
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createQuizModal" tabindex="-1" role="dialog" aria-labelledby="createQuizModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createQuizModal">Test qo'shish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <label for="">Kurs nomi</label>
                    <select name="fanID" id="fanID" wire:model="fanID" class="form-control">
                        <option value="">Kursni tanlang</option>
                        @foreach($fan as $item)
                            <option value="{{$item->id}}">{{$item->fanName}}</option>
                        @endforeach
                    </select>
                   @error('kafName')
                    <p class="text-danger">{{$message}}</p>
                   @enderror
                    <div class="form-group">
                        <label for="">Test nomi</label>

                        <input type="text" class="form-control" name="fName" wire:model="tName">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="store()">Saqlash</button>
            </div>
        </div>
    </div>
</div>
