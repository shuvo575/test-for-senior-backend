@extends('template')

@section('content')
<h1>Foreach js</h1>
<small>Open console for live test</small>
    <pre>
        var people = ["Katappa", "Bahubali", "Messi", "Tom Cruise"];
        people.forEach(peopleFunction);

        function peopleFunction(item, index) {
            console.log(index + ":" + item);
        }

        // 0:Katappa
        // 1:Bahubali
        // 2:Messi
        // 3:Tom Cruise
    </pre>
    <script>
        var people = ["Katappa", "Bahubali", "Messi", "Tom Cruise"];
        people.forEach(peopleFunction);

        function peopleFunction(item, index) {
            console.log(index + ":" + item);
        }
    </script>
@endsection 