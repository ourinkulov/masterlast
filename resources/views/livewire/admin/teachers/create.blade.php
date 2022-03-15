
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createTeacherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kafedra qo'shish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Kafedra Nomi</label>
                        <select name="kafName" id="kafNameID" wire:model="kafName" class="form-control">
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

                        <input type="text" class="form-control" name="name" wire:model="name">
                    </div>
                    <div class="form-group">
                        <label for="">E-mail</label>

                        <input type="text" class="form-control" name="email" wire:model="email">
                    </div>
                    <div class="form-group">
                        <label for="">Parol</label>

                        <input type="password" class="form-control" name="password" wire:model="password">
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
