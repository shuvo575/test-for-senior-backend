@extends('template')

@section('content')
<h1>Reduce js</h1>
<small>Open console for live test</small>
    <pre>
        var people = ["Katappa", "Bahubali", "Messi", "Tom Cruise"];
        var newTeam = people.reduce(makeTeam);

        function makeTeam(team, person) {
            return team + ', ' + person;
        }

        console.log(newTeam);

        // Katappa, Bahubali, Messi, Tom Cruise
    </pre>
    <script>
        var people = ["Katappa", "Bahubali", "Messi", "Tom Cruise"];
        var newTeam = people.reduce(makeTeam);

        function makeTeam(team, person) {
            return team + ', ' + person;
        }

        console.log(newTeam);
    </script>
@endsection 