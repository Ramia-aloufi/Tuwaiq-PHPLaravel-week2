
@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
<form class="d-grid  card p-3"  action="{{route('save-items')}}" method="POST">
 @csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product name</label>
    <input type="text" class="form-control" name="product_name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Price</label>
    <input type="text" class="form-control" name="price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@if(isset($products))
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $row)
    <tr>
    <td style="border: 1px solid #ddd; padding: 8px;">{{$row['id']}}</td>
    <td style="border: 1px solid #ddd; padding: 8px;">{{$row['product_name']}}</td>
     <td style="border: 1px solid #ddd; padding: 8px;">{{$row['price']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif

@endsection