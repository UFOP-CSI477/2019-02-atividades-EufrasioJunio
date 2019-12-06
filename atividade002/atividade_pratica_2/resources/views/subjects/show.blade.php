@extends('principal')
@section('pageTitle') Show Subject: {{$subject->name}} -@endsection
@section('conteudo')

<div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md7 col-lg-12 mx-auto card card-signin my-5">
                                <h3>Name: {{$subject->name}}</h3>
                                <h4>Id: {{$subject->id}}</h4>
                                
                                <h4>Price:{{$subject->price}}</h4>
                                
                                
                                <a href="{{route('subjects.edit',$subject)}}" class="btn btn-primary">Edit</a>
                                <br>
                           
                                <form method="POST" action="{{route('subjects.destroy',$subject)}}" onsubmit="return confirm('Confirm user exclusion?')">
                                        @csrf
                                        @method('DELETE')
                                        <input type='submit' class='btn btn-danger btn-block' value='Delete'>
                                </form>   
                    </div>
                </div>
                </div>
@endsection