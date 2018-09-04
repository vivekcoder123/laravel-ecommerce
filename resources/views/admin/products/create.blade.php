@extends('layouts.app');

@section('content')

<div class="container">
{!!Form::open(['method'=>'post','action'=>'AdminProductsController@store','files'=>true])!!}
<div class="form-group">
{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter product name'])!!}
</div>
<div class="form-group">
{!!Form::textarea('description',null,['class'=>'form-control','rows'=>8,'placeholder'=>'Enter product description'])!!}
</div>
<div class="form-group">
{!!Form::text('price',null,['class'=>'form-control','placeholder'=>'Enter product price'])!!}
</div>
<div class="form-group">
{!!Form::label('image','Product image')!!}
<br>
{!!Form::file('image',null,['class'=>'form-control'])!!}
</div>

{!!Form::submit('Create Product',['class'=>'btn btn-primary'])!!}

{!!Form::close()!!}
</div>

@endsection
