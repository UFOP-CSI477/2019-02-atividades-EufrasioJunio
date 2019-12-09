@extends('layouts.app')
@section('content')

<div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md7 col-lg-12 mx-auto card card-signin my-5">
                                <h3>User: {{$requet->user->name}}</h3>
                                <h3>Subject: {{$requet->subject->name}}</h3>
                                <h4>Id: {{$requet->id}}</h4>
                                <h4>Date:{{$requet->date}}</h4>
                                <h4>Descrition:</h4><p class="border">{{$requet->description}}</p>
                                
                                
                                
                                <a href="{{route('requets.edit',$requet)}}" class="btn btn-primary btn-block">Edit</a>
                                <br>
                                <form method="POST" action="{{route('requets.destroy',$requet)}}" onsubmit="return confirm('Confirm request exclusion?')">
                                        @csrf
                                        @method('DELETE')
                                        <input type='submit' class='btn btn-danger btn-block' value='Delete'>
                                </form>
                    </div>
                </div>
                </div>
@endsection