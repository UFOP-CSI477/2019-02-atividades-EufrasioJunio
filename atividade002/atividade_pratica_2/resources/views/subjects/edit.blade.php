@extends('principal')
@section('pageTitle') Edit Subject -@endsection
@section('conteudo')

 
  <div class="container">
      <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
              <div class="card-body">
              <h5 class="card-title text-center">Edit user :{{$subject->name}}</h5>
              <form method="post" action="{{ route('subjects.update',$subject) }}">
                  @csrf {{--esconde algumas caracteristicas da interface para dificultar uma injeção no bd  --}}
                  @method('PATCH') {{-- necessario para o methodo update  pois ele so reconhece methodo patch--}}
                  <div class="form-label-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value = "{{$subject->name}}" required autofocus class="form-control">
                  </div>
                  <div class="form-label-group">
                    <label for="price">Price:</label>
                    <input type="text" name="price" id="price" value = "{{$subject->price}}" required autofocus class="form-control">
                  </div>
                  <br>
                  <input type="submit" name="btnSalvar" class="btn btn-primary btn-block" value="Update">
                </form>
              </div>
          </div>
          </div>
      </div>
      </div>

@endsection