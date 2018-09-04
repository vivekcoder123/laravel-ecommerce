@extends('layouts.app');

@section('content')
<div>
  <a href="{{route('products.create')}}" class="btn btn-primary ml-5">Create a Product</a>
</div>
<div class="container">

<table class="table table-striped">
<thead>
  <th>Id</th>
  <th>Name</th>
  <th>Image</th>
  <th>Price</th>
  <th>Description</th>
  <th>Created</th>
  <th>Updated</th>
</thead>
<tbody>
@foreach ($products as $product)

<tr>
  <td>{{$product->id}}</td>
  <td>{{$product->name}}</td>
  <td><img src="/uploads/{{$product->image}}" alt="image" height="100"></td>
  <td>{{$product->price}}</td>
  <td>{{$product->description}}</td>
  <td>{{$product->created_at}}</td>
  <td>{{$product->updated_at}}</td>
</tr>
@endforeach
</tbody>
</table>

</div>
@endsection
