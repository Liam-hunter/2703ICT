@extends('layouts/master')

@section('title')
    Greeting Form
@endsection

@section('content')
    <h2 class="headings">Greeting example</h2>
    <h3 class="headings">Enter your details</h3>
    <form method="post" action="greeting">
        {{csrf_field()}}
        <label for="name" class="name">Enter your name:</label><br>
        <input type="text" name="name" id="name" class="name"><br>
        <label for="age" class="age">Enter your age:</label><br>
        <input type="number" name="age" id="age" class="age"><br>
        <button type="submit">Submit</button>
    </form>
@endsection