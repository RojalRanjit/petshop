@extends('layout.adminLayout')
@section('content')
<div class="container" style="position: absolute;top: 115px;left: 310px;">
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Item</th>
      <th scope="col">Price</th>
      <th scope="col">Type</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->food}}</td>
        <td>{{$item->Price}}</td>
        <td>{{$item->Toys}}</td>
        <td><img style="height:40px;width:40px" src="{{asset( $item->foodimg ) }}" alt="error"></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>

@endsection