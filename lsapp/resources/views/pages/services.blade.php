@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    
{{-- @if(count($services) > 0) --}}

<ul class="list-group">
    {{-- @foreach($services as $service)
        <li class="list-group-item">{{$service}}</li>
    @endforeach --}}

    <li><a href="/browse">Browse Options</a></li>
    <br>
    <li><a href="/register">Create an Account</a></li>
    <br>
    <li><a href="/browse">Make a Reservation</a></li>
    <br>
    
</ul>

{{-- @endif --}}

@endsection