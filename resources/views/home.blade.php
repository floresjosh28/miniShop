@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mini Shop Products</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">           
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Size</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $prod)
                            <tr>
                                <td>{{$prod->id}}</td>
                                <td>{{$prod->name}}</td>
                                <td>{{$prod->price}}</td>
                                <td>{{$prod->quantity}}</td>
                                <td>{{$prod->size}}</td>
                                <td>
                                    <a href="{{ URL::to('/') }}/products/{{$prod->id}}/edit">
                                    <button type="button" class="btn btn-info">Edit</button></a>
                                    
                                    <button type="submit" class="btn btn-danger" value="Delete" data-toggle="modal" data-target="#{{ $prod->id }}delete">Delete</button>

                                     <!-- Delete Modal -->
                            <div class="modal fade" id="{{ $prod->id }}delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <label class="modal-title" id="exampleModalLabel">Delete this file</label>
                                  </div>
                                  <div class="modal-body delete-modal-content">
                                    <p>Are you sure you want to delete <b><i>{{ $prod->name }}</a></i></b>?</p>
                                    <br />
                                    
                                  </div>
                                  <div class="delete-modal-footer">
                                    <form action="{{url('products/'. $prod->id)}}" method="post" >    
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" value="Delete" class="btn btn-danger btn-block">
                                    
                                    
                                </form>
                                
                                <button type="button" style="float:left;" class="btn btn-secondary btn-block" data-dismiss="modal">Cancel</button>  
                                  </div>
                                </div>
                              </div>
                            </div>
                                </td>


                            </tr>
                            @endforeach

                        </tbody>
                      </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
