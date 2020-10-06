@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <h1>{{$data->product_title}}</h1>
        <p>{{$data->product_image}}</p>
    </div>
</div>

@endsection
