@extends('master')

@section('title','Showing All Products')

@section('content')

<h1>Product Index</h1>
<hr/>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Image</th>
			<th>Name</th>
			<th>Description</th>	
		</tr>
	</thead>
	<tbody>
		@foreach($products as $product)
		<tr>
            <td>
                @if($product->image_name)
                <img src="{{ asset('images') }}/{{ $product->image_name }}" alt="{{ $product->name }}" width="auto" height="128" style="margin:0 auto;display: block;"/>
                @else
                <img src="holder.js/128x128?text=No Image&theme=sky" style="margin: 0 auto;display: block;"/>
                @endif
            </td>
			<td>
				<a href="{{ url('/products', $product->id) }}"> {{ $product->name }}</a>
			</td>
			<td>{{ $product->descriptions }}</td>
		</tr>
		@endforeach
	</tbody>		
</table>
{!! str_replace('/?', '?',$products->render()) !!}
@stop