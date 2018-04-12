@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="panel create">
      @foreach($selProd as $currProd)
            <div class="panel-heading "><center><h1>Edit product number {{$currProd->id}} </h1></center></div>
            <div class="panel-body">

        	 <form method="post" action="{{url('products/'.$id)}}" enctype="multipart/form-data">

             @csrf
             
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Product Name:</label>
            <input type="text" class="form-control" name="prodname" value="{{ $currProd->name}}">
          </div>
        </div>
        @method('PUT')
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Price:</label>
              <input type="text" class="form-control" name="prodprice" value="{{ $currProd->price}}">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Quantity:</label>
              <input type="text" class="form-control" name="prodquant" value="{{ $currProd->quantity}}">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Size:</label>
              <input type="text" class="form-control" name="prodsize" value="{{ $currProd->size}}">
            </div>
          </div>
        
         
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
          	</div>
            @endforeach
        </div>
	</div>
</div>

@endsection