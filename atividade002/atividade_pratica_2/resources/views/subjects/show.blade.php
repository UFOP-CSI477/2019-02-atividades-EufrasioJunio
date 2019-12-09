@extends('layouts.app')
@section('content')

<div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md7 col-lg-12 mx-auto card card-signin my-5">
                                <h3>Name: {{$subject->name}}</h3>
                                <h4>Id: {{$subject->id}}</h4>
                                
                                <h4>Price:{{$subject->price}}</h4>
                                
                                @if(Auth::user()->type == 1)
                                    <a href="{{route('subjects.edit',$subject)}}" class="btn btn-primary">Edit</a>
                                    <br>
                            
                                    <form method="POST" action="{{route('subjects.destroy',$subject)}}" onsubmit="return confirm('Confirm subject exclusion?')">
                                            @csrf
                                            @method('DELETE')
                                            <input type='submit' class='btn btn-danger btn-block' value='Delete'>
                                    </form> 
                                @endif
                    </div>
                </div>
                </div>
@endsection