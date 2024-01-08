<div style="width:70%; display:flex; flex-direction: column; align-items: center; justify-content: center;  height: 100vh;">
<form action="{{route('xyz')}}" method="post">
        @csrf
        <input type="text" name="p">
        <input type="submit" value="send">
    </form>

  @if(isset($p))
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">id</th>
                <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">name</th>
                <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">model</th>
                <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($p as $row)
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{$row['id']}}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{$row['name']}}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{$row['model']}}</td>

                    <td style="border: 1px solid #ddd; padding: 8px;">
    <a href="{{ route('vat', ['total' => $row['price']]) }}">{{ $row['price'] }}</a>
</td>
</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <hr>

</div>

