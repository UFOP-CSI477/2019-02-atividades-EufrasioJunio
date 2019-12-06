@extends('principal')
@section('pageTitle') Show User: {{$user->name}} -@endsection
@section('conteudo')


        <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md7 col-lg-12 mx-auto card card-signin my-5">
                    <h3>Name: {{$user->name}}</h3>
                    <h4>Id: {{$user->id}}</h4>
                    
                    <h4>Email: {{$user->email}}</h4>
                    <h4>Type: @if($user->type==2)
                                Common  
                            @else
                                Admin 
                            @endif
                    </h4>
                    
                    <a href="{{route('users.edit',$user)}}" class="btn btn-primary btn-block">Edit</a>
                    <br>
                    <form method="POST" action="{{route('users.destroy',$user)}}" onsubmit="return confirm('Confirm user exclusion?')">
                            @csrf
                            @method('DELETE')
                            <input type='submit' class='btn btn-danger btn-block' value='Delete'>
                    </form>
            </div>
        </div>
        </div>
@endsection