<div class="form-group">
    {!! Form::input('file','image_name',null,['class' => 'form-control','id' => 'fileUpload']) !!}
</div>
<div class="form-group">
    {!! Form::label('name','Product Name: ') !!}
    {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Enter Product Name']) !!}
</div>
<div class="form-group">
    {!! Form::label('descriptions','Product Descriptions') !!}
    {!! Form::textarea('descriptions',null,['class' => 'form-control', 'placeholder' => 'Enter Product Descriptions']) !!}
</div>
<div class="form-group">
    <div class="checkbox">
        <label>
            {!! Form::checkbox('is_locked') !!}
            Lock The Product , preventing further modifications.
        </label>
    </div>
</div>
<div class="form-group">
    {!! Form::label('Product Quantity') !!}
    {!! Form::input('number','quantity',null,['class' => 'form-control','placeholder' => 'Enter Product Quantity']) !!}
</div>
<div class="form-group">
    {!! Form::label('Gold Smith') !!}
    {!! Form::text('gold_smith',null,['class' => 'form-control','placeholder' => 'Enter Goldsmith\'s Name']) !!}
</div>
<div class="form-group">
    {!! Form::input('date','delivered_date',date('Y-m-d'),['class' => 'form-control '] ) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-success form-control']) !!}
</div>