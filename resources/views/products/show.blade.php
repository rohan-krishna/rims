@extends('master')

@section('title','Showing One Product')

@section('content')

<div class="row">
    <div class="col-md-12 padding-152">
        <h1>{{ $product->name }}</h1>

        <hr />
        @if($product->image_name)
        <img src="{{ asset('images') }}/{{ $product->image_name }}" alt="{{ $product->name }}" draggable="false">
        @endif
        <p><strong>Name: </strong>{{ $product->descriptions }}</p>
        <p><strong>Delivered Date: </strong>{{ $product->delivered_date }}</p>
        <p><strong>Descriptions :</strong>{{ $product->descriptions  }}</p>
        <p><strong>Is Product Locked : </strong>@if($product->is_locked == 1)True @else False @endif</p>
        <p><strong>Gold Smith: </strong>{{ $product->gold_smith }}</p>
        <p><strong>Quantity: </strong>{{ $product->quantity }}</p>
        <hr />

        {!! Form::open(['url' => 'products/delete']) !!}

        {!! Form::submit('delete') !!}

        {!! Form::close() !!}
    </div>
</div>



@stop