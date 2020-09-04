@extends('template')

@section('content')
<h1>sort js</h1>
<small>Open console for live test</small>
    <pre>
        var people = ["Katappa", "Bahubali", "Messi", "Tom Cruise"];
        people.sort(); 

        //["Bahubali", "Katappa", "Messi", "Tom Cruise"]
    </pre>
    <script>
        var people = ["Katappa", "Bahubali", "Messi", "Tom Cruise"];
        people.sort(); 
        console.log(people);
    </script>
@endsection 