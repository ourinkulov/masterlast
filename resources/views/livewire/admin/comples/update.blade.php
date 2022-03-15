
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateComplexModal" tabindex="-1" role="dialog" aria-labelledby="updateComplexModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateComplexModal">O'quv yili fani qo'shish (Kategoriya)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="updatecatName">Kurs nomi</label>
                        <input type="text" class="form-control" name="updatecatName" wire:model="updatecatName">
                        {{--                        <input type="text" class="form-control" name="studyyearName" wire:model="studyyearName">--}}
                        {{--                        <select name="updatestudyyearName" id="updatestudyyearName" wire:model="updatestudyyearName" class="form-control">--}}
                        {{--                            <option value="">O'quv yilini tanlang</option>--}}
                        {{--                            @foreach($sy as $item)--}}
                        {{--                                <option value="{{$item->id}}">{{$item->studyyear}}</option>--}}
                        {{--                            @endforeach--}}
                        {{--                        </select>--}}
                    </div>
                    @error('updatecatName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="updatestudyyearName">O'quv yili Nomi</label>
                        {{--                        <input type="text" class="form-control" name="studyyearName" wire:model="studyyearName">--}}
                        <select name="updatestudyyearName" id="updatestudyyearName" wire:model="updatestudyyearName" class="form-control">
                            <option value="">O'quv yilini tanlang</option>
                            @foreach($sy as $item)
                                <option value="{{$item->id}}">{{$item->studyyear}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('creatstudyyearName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="studyyearName">Semestr</label>
                        {{--                        <input type="text" class="form-control" name="studyyearName" wire:model="studyyearName">--}}
                        <select name="updateSemestr" id="updateSemestr" wire:model="updateSemestr" class="form-control">
                            <option value="">O'quv yilini tanlang</option>
                            @foreach($semestrs as $item)
                                <option value="{{$item->id}}">{{$item->semestrName}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('updateSemestr')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="updatekursName">O'quv Kursi Nomi</label>
                        {{--                        <input type="text" class="form-control" name="studyyearName" wire:model="studyyearName">--}}
                        <select name="updatekursName" id="updatekursName" wire:model="updatekursName" class="form-control">
                            <option value="">Kursni tanlang</option>
                            @foreach($kurs as $item)
                                <option value="{{$item->id}}">{{$item->kurs}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('updatekursName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="updateguruhName">Guruh</label>
                        {{--                        <input type="text" class="form-control" name="studyyearName" wire:model="studyyearName">--}}
                        <select name="updateguruhName" id="updateguruhName" wire:model="updateguruhName" class="form-control">
                            <option value="">Guruhni tanlang</option>
                            @foreach($guruh as $item)
                                <option value="{{$item->id}}">{{$item->group}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('updateguruhName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">Kafedra Nomi</label>
                        <select name="updatekafName" id="updatekafName" wire:model="updatekafName" class="form-control">
                            <option value="">Kafedrani tanlang</option>
                            @foreach($kafedra as $k)
                                <option value="{{$k->id}}">{{$k->kafName}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('updatekafName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">O'qituvchi</label>
                        <select name="updateteacherName" id="updateteacherName" wire:model="updateteacherName" class="form-control">
                            <option value="">O'qituvchini tanlang</option>
                            @foreach($teachers as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('updateteacherName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">Fan</label>
                        <select name="updatefanName" id="updatefanName" wire:model="updatefanName" class="form-control">
                            <option value="">O'qituvchini tanlang</option>
                            @foreach($fans as $item)
                                <option value="{{$item->id}}">{{$item->fName}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('updatefanName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror

                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="update()">Saqlash</button>
                </div>
            </div>

        </div>
    </div>
</div>
