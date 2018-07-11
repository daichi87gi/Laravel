@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Some Content</h1>
            <p>{{ "Hello" }}</p>
            <p>{{ 2 == 2 ? "Equal" : "Does not equal" }}</p>
            <p>{{ 2 == 3 ? "Equal" : "Does not equal" }}</p>
        </div>
    </div>
@endsection
