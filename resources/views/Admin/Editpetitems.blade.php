@extends('layout.adminLayout')
@section('content')
<div class="container" style="position: absolute;top: 115px;left: 310px;">
<h2>Edit:</h2>
    <div class="row">
      <div class="col-md-8">
        <form action="{{route('Listedit')}}" method="post" enctype="multipart/form-data">
          @csrf
          
          <input type="hidden" name="id" value="{{$items->id}}">

          <div class="mb-3">
            <label for="item" class="form-label">Item</label>
            <input type="text" class="form-control @error('item') is-invalid @enderror" name="item" value="{{$items->item}}">
            @error('item')
              <span style="font-size:16px;color:red">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$items->Price}}">
            @error('price')
              <span style="font-size:16px;color:red">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="toys" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{$items->type}}">
            @error('type')
              <span style="font-size:16px;color:red">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Pet Food</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
            @error('image')
              <span style="font-size:16px;color:red">{{$message}}</span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection