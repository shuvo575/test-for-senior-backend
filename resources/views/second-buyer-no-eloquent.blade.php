@extends('template')

@section('content')
<h1>second buyer no eloquent</h1>
    <table>
        <tr>
            <td>Buyer id</td>
            <td>Buyer Name</td>
            <td>Total Diary Taken</td>
            <td>Total Pen Taken</td>
            <td>Total Eraser Taken</td>
            <td>Total items Taken</td>
        </tr>
        
        <tr>
            <td>{{$buyer->id}}</td>
            <td>{{$buyer->name}}</td>
            <td>{{$buyer->diary}}</td>
            <td>{{$buyer->pen}}</td>
            <td>{{$buyer->eraser}}</td>
            <td>{{$buyer->total}}</td>
        </tr>
    </table>
@endsection 