@extends('principal')
@section('pageTitle') Edit User -@endsection
@section('conteudo')


 

  
        <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                <h5 class="card-title text-center">Edit user :{{$user->name}}</h5>
                  <form method="post" action="{{ route('users.update',$user) }}">
                      @csrf {{--esconde algumas caracteristicas da interface para dificultar uma injeção no bd  --}}
                      @method('PATCH') {{-- necessario para o methodo update  pois ele so reconhece methodo patch--}}
                    
                        <div class="form-label-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name"  id="name" value = "{{$user->name}}" required autofocus class="form-control"></p>
                        </div>
                        <div class="form-label-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" value = "{{$user->email}}" required autofocus class="form-control"></p>
                        </div>
                        <div class="form-label-group">
                            <label for="password">Password:</label>
                            <input type="text" name="password" id="password" value = "{{$user->password}}" required autofocus class="form-control"></>
                        </div>
                        <br>
                        <input type="submit" name="btnSalvar" value="Update" class="btn btn-primary btn-block">
                  </form>
                </div>
            </div>
            </div>
        </div>
        </div>

@endsection