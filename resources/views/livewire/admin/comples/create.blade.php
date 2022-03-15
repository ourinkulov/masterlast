
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createComplexModal" tabindex="-1" role="dialog" aria-labelledby="createComplexModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createComplexModal">O'quv yili fani qo'shish (Kategoriya)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="createcatName">Kurs nomi</label>
                                                <input type="text" class="form-control" name="createcatName" wire:model="createcatName">
                        {{--                        <input type="text" class="form-control" name="studyyearName" wire:model="studyyearName">--}}
{{--                        <select name="createstudyyearName" id="createstudyyearName" wire:model="createstudyyearName" class="form-control">--}}
{{--                            <option value="">O'quv yilini tanlang</option>--}}
{{--                            @foreach($sy as $item)--}}
{{--                                <option value="{{$item->id}}">{{$item->studyyear}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
                    </div>
                    @error('createcatName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="createstudyyearName">O'quv yili Nomi</label>
{{--                        <input type="text" class="form-control" name="studyyearName" wire:model="studyyearName">--}}
                        <select name="createstudyyearName" id="createstudyyearName" wire:model="createstudyyearName" class="form-control">
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
                        <select name="createSemestr" id="createSemestr" wire:model="createSemestr" class="form-control">
                            <option value="">O'quv yilini tanlang</option>
                            @foreach($semestrs as $item)
                                <option value="{{$item->id}}">{{$item->semestrName}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('createSemestr')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="createkursName">O'quv Kursi Nomi</label>
                        {{--                        <input type="text" class="form-control" name="studyyearName" wire:model="studyyearName">--}}
                        <select name="createkursName" id="createkursName" wire:model="createkursName" class="form-control">
                            <option value="">Kursni tanlang</option>
                            @foreach($kurs as $item)
                                <option value="{{$item->id}}">{{$item->kurs}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('createkursName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="createguruhName">Guruh</label>
                        {{--                        <input type="text" class="form-control" name="studyyearName" wire:model="studyyearName">--}}
                        <select name="createguruhName" id="createguruhName" wire:model="createguruhName" class="form-control">
                            <option value="">Guruhni tanlang</option>
                            @foreach($guruh as $item)
                                <option value="{{$item->id}}">{{$item->group}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('createguruhName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">Kafedra Nomi</label>
                        <select name="createkafName" id="createkafName" wire:model="createkafName" class="form-control">
                            <option value="">Kafedrani tanlang</option>
                            @foreach($kafedra as $k)
                                <option value="{{$k->id}}">{{$k->kafName}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('createkafName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">O'qituvchi</label>
                        <select name="createteacherName" id="createteacherName" wire:model="createteacherName" class="form-control">
                            <option value="">O'qituvchini tanlang</option>
                            @foreach($teachers as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('createteacherName')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">Fan</label>
                        <select name="createfanName" id="createfanName" wire:model="createfanName" class="form-control">
                            <option value="">O'qituvchini tanlang</option>
                            @foreach($fans as $item)
                                <option value="{{$item->id}}">{{$item->fName}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('createfanName')
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
