@extends('layouts.main')

@section('title')
    About
@endsection

@section('content')
    <div>
        <h1>About us.</h1>
        <p>{{$info}}</p>
    </div>
@endsection