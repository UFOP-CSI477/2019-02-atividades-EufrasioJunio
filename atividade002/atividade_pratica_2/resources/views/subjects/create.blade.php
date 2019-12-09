@extends('layouts.app')
@section('content')



  <body>
      <div class="container">
      <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
              <div class="card-body">
              <h5 class="card-title text-center">Add Subject</h5>
              <form method="post" action="{{ route('subjects.store') }}">
                  @csrf {{--esconde algumas caracteristicas da interface para dificultar uma injeção no bd  --}}
                  <div class="form-label-group">
                      <label for="name">Name:</label> 
                      <input type="text" name="name" id='name' required autofocus class="form-control"></p>
                  </div>
              
                  <div class="form-label-group">
                      <label for="price">Price:</label>
                      <input name="price" type="number" id='price' required autofocus class="form-control">
                  </div>
                  <br>
                  <input type="submit" name="btnSalvar" class="btn btn-success btn-block" value="Add">
                </form>
              </div>
          </div>
          </div>
      </div>
      </div>
@endsection
