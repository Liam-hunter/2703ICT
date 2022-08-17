@extends('layouts/master')

@section('title')
    Greetings, {{$name}}
@endsection

@section('content')
    <p class="headings">Hello {{$name}}, next year you will be {{$age}} years old.</p>
@endsection