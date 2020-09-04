@extends('template')

@section('content')
<h1>second buyer eloquent</h1>
    <table>
        <tr>
            <td>Buyer id</td>
            <td>Buyer Name</td>
            <td>Total Diary Taken</td>
            <td>Total Pen Taken</td>
            <td>Total Eraser Taken</td>
            <td>Total items Taken</td>
        </tr>
        @foreach($buyers as $buyer)
        <tr>
            <td>{{$buyer->id}}</td>
            <td>{{$buyer->name}}</td>
            <td>Total Diary Taken</td>
            <td>{{$buyer->penCount()}}</td>
            <td>Total Eraser Taken</td>
            <td>Total items Taken</td>
        </tr>
        @endforeach
    </table>
@endsection 