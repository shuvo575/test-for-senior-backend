@extends('template')

@section('content')
<h1>purchase list eloquent</h1>
    <table>
        <tr>
            <td>Buyer id</td>
            <td>Buyer Name</td>
            <td>Total Diary Taken</td>
            <td>Total Pen Taken</td>
            <td>Total Eraser Taken</td>
            <td>Total items Taken</td>
        </tr>
        @foreach ($buyers as $buyer)    
        <tr>
            <td>{{$buyer->id}}</td>
            <td>{{$buyer->name}}</td>
            <td>{{$buyer->diary ?? 0}}</td>
            <td>{{$buyer->pen ?? 0}}</td>
            <td>{{$buyer->eraser ?? 0}}</td>
            <td>{{$buyer->total ?? 0}}</td>
        </tr>
        @endforeach
    </table>
@endsection 