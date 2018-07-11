@extends('layouts.master')

@section('content')
    <h1>Some Content</h1>
    <p>{{ "Hello" }}</p>
    <p>{{ 2 == 2 ? "equal" : "Does not equal" }}</p>
    <p>{{ 2 == 3 ? "equal" : "Does not equal" }}</p>
@endsection
