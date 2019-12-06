@extends('principal')
@section('pageTitle') Login -@endsection
@section('conteudo')

        <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                <h5 class="card-title text-center">Log In</h5>
                <form class="form-signin" method="POST" action="" >
                    <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
                    <label for="inputEmail">E-mail</label>
                    </div>
    
                    <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Passwrod" required>
                    <label for="inputPassword">Password</label>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
                    <hr class="my-4">
                <a href="{{route('users.create')}}" class="btn btn-lg btn-google btn-block text-uppercase">Don't have an account yet?</a>
                    
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
@endsection