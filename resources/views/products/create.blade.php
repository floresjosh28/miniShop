@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-9 col-xs-12">
		<div class="panel create">
            <div class="panel-heading "><center><h1>Add a product</h1></center></div>
            <div class="panel-body">

        	 <form method="post" action="{{url('products')}}" enctype="multipart/form-data">

             @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Product Name:</label>
            <input type="text" class="form-control" name="prodname">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Price:</label>
              <input type="text" class="form-control" name="prodprice">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Quantity:</label>
              <input type="text" class="form-control" name="prodquant">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Size:</label>
              <input type="text" class="form-control" name="prodsize">
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
        </div>
	</div>
</div>
@endsection