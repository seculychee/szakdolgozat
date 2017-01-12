@extends('layouts.layout')
@section('title')
	All product
	@stop
	@section('body')
		@foreach($product as $product)
		<h1>{{$product->name}}</h1>
		<h3>{{$product->price}}</h3>
		<br>
		@endforeach
		    <div class="container">
        @if (count($errors) > 0)
            <div class="row">
                <div class="col-sm-12 alert-danger alert">
                    <ul >
                        @foreach ($errors->all() as $error)
                            <li class="">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
	<form method="post" action="{{route('addUserDataPost')}}">
  <div class="form-group">
    <label for="exampleInputVaros1">Varos</label>
    <input type="text" name="varos" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputUtca1">Utca</label>
    <input type="text" name="utca" class="form-control" id="exampleInputUtca1" placeholder="Utca">
      <div class="form-group">
    <label for="exampleInputIrányítószám1">Irsz</label>
    <input type="text" name="irsz" class="form-control" id="exampleInputIrányítószám1" placeholder="Irányítószám">
  </div>
  <div class="form-group">
    <label for="exampleInputTel1">Tel</label>
    <input type="text" name="tel" class="form-control" id="exampleInputTel1" placeholder="Telefonszám">
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
	@stop