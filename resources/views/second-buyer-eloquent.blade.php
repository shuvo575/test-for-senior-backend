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
        
        <tr>
            <td>{{$buyer->id}}</td>
            <td>{{$buyer->name}}</td>
            <td>{{$buyer->diaryCount()}}</td>
            <td>{{$buyer->penCount()}}</td>
            <td>{{$buyer->eraserCount()}}</td>
            <td>{{$buyer->totalItems()}}</td>
        </tr>
    </table>
@endsection 