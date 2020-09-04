@extends('template')

@section('content')
<h1>Map js</h1>
<small>Open console for live test</small>
    <pre>
        var people = ["Katappa", "Bahubali", "Messi", "Tom Cruise"];
        var second_gen = people.map(genAdd);

        function genAdd(person) {
            return person + 'r Chele ';
        }

        console.log(second_gen);

        // ["Katappar Chele ", "Bahubalir Chele ", "Messir Chele ", "Tom Cruiser Chele "]
    </pre>
    <script>
        var people = ["Katappa", "Bahubali", "Messi", "Tom Cruise"];
        var second_gen = people.map(genAdd);

        function genAdd(person) {
            return person + 'r Chele ';
        }

        console.log(second_gen);
    </script>
@endsection 