
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createStudentModal">Tinglovchi qo'shish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Kurs nomi</label>
                        <select name="kursID" id="kursID" wire:model="kursID" class="form-control">
                            <option value="">Kursni tanlang</option>

                            @foreach($kurs as $k)
                                <option value="{{$k->id}}">{{$k->kurs}}</option>
                            @endforeach

                        </select>

                    </div>
                    @error('kursID')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">Guruh Nomi</label>
                        <select name="gName" id="gName" wire:model="gName" class="form-control">
                            <option value="">Guruhni tanlang</option>
                            @foreach($guruhs as $guruh)
                                <option value="{{$guruh->id}}">{{$guruh->group}}</option>
                            @endforeach
                        </select>

                    </div>
                   @error('gName')
                    <p class="text-danger">{{$message}}</p>
                   @enderror
                    <div class="form-group">
                        <label for="">Tinglovchi F.I.O</label>

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
