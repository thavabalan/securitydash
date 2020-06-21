<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        </div>
        @foreach ($companies as $requirement)
        <tr>
            <th>{{ $requirement->id }}</th>
            <td>{{ $requirement->name }}</td>
            
            <td>@foreach($requirement->requirements as $requirement)</td>
            {{$requirement->pivot->status}}
            @endforeach

            @endforeach
    </body>
</html>
