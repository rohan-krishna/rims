@extends('master')

@section('title','Edit Product')

@section('content')

    <h1>Edit: {{ $product->name }}</h1>

    <hr>

    @include('errors.list')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fileUpload').on('change',function() {

                if( typeof (FileReader) != "undefined" ) {

                    var image_holder = $("#imageHolder");
                    image_holder.empty();

                    var reader = new FileReader();
                    reader.onload = function (e) {

                        $("<img />",{
                            "src" : e.target.result
                        }).appendTo(image_holder);
                    }

                    image_holder.show();
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser doesn't support FileReader.");
                }

            });
        });
    </script>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8">
                {!! Form::model($product,['method' => 'PATCH','action' => ['ProductController@update',$product->id]]) !!}

                    <div class="form-group">
                        <div class="thumbnail" id="imageHolder">
                            <img src="{{ asset('images') . '/' . $product->image_name }}" />
                        </div>
                    </div>
                    @include('products.form',['submitButtonText' => 'Update Product'])

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop
