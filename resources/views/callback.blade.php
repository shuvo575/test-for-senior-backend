@extends('template')

@section('content')
<h1>define callback js</h1>
<small>Open console for live test</small>
    <pre>
        var data = {email:'trump@gmail.com', age:70}; // input json.
        checkAge(data, function(email){
            console.log('Email is valid'). // If data.age < 18 it'll log as not valid.
        })

        function checkAge(data, callback){
            if(data.age < 18){
                console.log('Email is not valid');
            }else{
                callback()
            }
        }
    </pre>
    <script>
        var data = {email:'trump@gmail.com', age:70}; // input json.
        checkAge(data, function(email){
            console.log('Email is valid'); // If data.age < 18 it'll log as not valid.
        })

        function checkAge(data, callback){
            if(data.age < 18){
                console.log('Email is not valid');
            }else{
                callback()
            }
        }
    </script>
@endsection 