@extends('principal')
@section('pageTitle') All Users -@endsection
@section('conteudo')

  
      <div class="container">
      <div class="row">
          <div class="col-sm-9 col-md7 col-lg-12 mx-auto">
              <table class="table table-striped table-bordered">
                  <thead class="table-light">
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                @foreach ($users as $c)
                    <tr>
                      <td>{{ $c->name }}</td>
                      <td>{{ $c->email }})</td>
                      <td><a href="{{route('users.show',$c->id)}}" class="btn btn-info btn-block">Show <span class="glyphicon glyphicon-plus"></span></a></td>
                    </tr>
                @endforeach
                  </tbody>
                </table>
          </div>
      </div>
      </div>
 
@endsection