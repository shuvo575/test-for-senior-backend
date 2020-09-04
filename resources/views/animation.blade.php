@extends('template')

@section('content')
<style>
    .wrapper{
        border: 2px solid black;
        height: 95vh;
        width: 100%;
    }
    h1{
        position: fixed;
        top: 0;
        left: 50%;
    }
    .box {
        width: 150px;
        height: 150px;
        background: black;
        position: relative;
        animation: edgemove 10s infinite;
    }

@keyframes edgemove {
  0%   {top: 0px;}
  25%  {top: 80vh;left: 0}
  50%  {top: 80vh; left: 93%}
  75%  {top: 80vh; left: 0}
  100% {top: 0px;}
}

    
</style>
<div class="wrapper">
    <h1>Animation</h1>
    <div class="box"></div>
</div>

@endsection 