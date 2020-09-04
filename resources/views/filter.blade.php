@extends('template')

@section('content')
<h1>Filter js</h1>
<small>Open console for live test</small>
    <pre>
        var people = ["Katappa", "Bahubali", "Messi", "Tom Cruise"];
        people.forEach(isKatappaHere);

        function isKatappaHere(person) {

            if(person == 'Katappa'){
                console.log("Katappa is Here");
            }else{
                console.log("Katappa is not Here");
            }
        }

        people.filter(checkAdult);

        // Katappa is Here
        // 3 Katappa is not Here
    </pre>
    <script>
        var people = ["Katappa", "Bahubali", "Messi", "Tom Cruise"];
        people.forEach(isKatappaHere);

        function isKatappaHere(person) {

            if(person == 'Katappa'){
                console.log("Katappa is Here");
            }else{
                console.log("Katappa is not Here");
            }
        }

        people.filter(checkAdult);
    </script>
@endsection 