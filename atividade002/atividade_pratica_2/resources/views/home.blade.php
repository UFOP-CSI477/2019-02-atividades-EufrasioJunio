@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Name: {{Auth::user()->name}}</h3>
                    <h4>Id: {{Auth::user()->id}}</h4>
                    
                    <h4>Email: {{Auth::user()->email}}</h4>
                    <h4>Type: @if(Auth::user()->type==2)
                                Common  
                            @else
                                Admin 
                            @endif
                    </h4>
                    
                    <a href="{{route('users.edit',Auth::user())}}" class="btn btn-primary btn-block">Edit</a>
                    <br>
                    <form method="POST" action="{{route('users.destroy',Auth::user())}}" onsubmit="return confirm('Confirm user exclusion?')">
                            @csrf
                            @method('DELETE')
                            <input type='submit' class='btn btn-danger btn-block' value='Delete'>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
