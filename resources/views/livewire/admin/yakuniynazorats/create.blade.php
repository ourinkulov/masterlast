
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createyakuniynazorat" tabindex="-1" role="dialog" aria-labelledby="createyakuniynazorat" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createJn">Yakuniy nazorat kiritish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">

                    <div class="form-group">
                        <label for="">Yakuniy nazorat nomi</label>
                        <input type="text" class="form-control" name="name" wire:model="name">
                    </div>
                    @error('name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
{{--                    <div class="form-group">--}}
{{--                        <label for="">Fan nomi</label>--}}
{{--                        <select name="" id="" class="form-control" wire:model="complesid">--}}
{{--                            <option value="">Fanni tanlang</option>--}}
{{--                            @if(!empty($comples))--}}
{{--                                @foreach($comples as $item)--}}
{{--                                    <option value="{{$item->id}}">{{$item->fanName}} </option>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    @error('complesid')
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
