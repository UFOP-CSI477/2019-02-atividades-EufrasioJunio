@extends('principal')
@section('pageTitle') User Register -@endsection
@section('conteudo')

        <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                <h5 class="card-title text-center">Register</h5>
                <form class="form-signin" method="post" action="{{ route('users.store') }}">
                    @csrf
                    <div class="form-label-group">
                        <input type="user" id="inputUser" class="form-control" name="name" placeholder="User" required autofocus>
                        <label for="inputUser">User</label>
                    </div>
                    
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                        <label for="inputEmail">E-mail</label>
                    </div>
    
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                        <label for="inputPassword">Password</label>
                    </div>                    
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" value="includ" type="submit">Register</button>
                    <hr class="my-4">
                    <a href="\login" class="btn btn-lg btn-google btn-block text-uppercase">Already have an account?</a>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>

@endsection