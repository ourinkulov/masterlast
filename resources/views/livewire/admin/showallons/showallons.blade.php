<div>
    <table class="table table-responsive-lg">
        <th>@</th>
       @foreach($jn as $item)
           <th>{{$item->name}}</th>
        @endforeach
        <tbody>
        @foreach($jn as $item)
           <tr>
               <td>{{$item->id}}</td>
               @foreach($marks as $item)
                   <td>{{$item->baho}}</td>
               @endforeach
           </tr>
        @endforeach
        </tbody>
    </table>
</div>
