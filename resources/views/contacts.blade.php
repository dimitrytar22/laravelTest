@extends('layouts.main')

@section('title')
    Contacts
@endsection

@section('content')
    <div>
        <div class="text-success">Success</div><br>
        <h1>Contacts.</h1>
        <p>{{$contacts}}</p>
    </div>
@endsection