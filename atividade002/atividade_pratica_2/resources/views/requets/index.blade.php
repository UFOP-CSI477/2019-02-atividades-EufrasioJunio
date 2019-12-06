@extends('principal')
@section('pageTitle') All Requests -@endsection
@section('conteudo')


  <div class="container">
      <div class="row">
          <a href="{{route('requets.create')}}" class="btn btn-success">Add request</a>
          <br>
          <div class="col-sm-9 col-md7 col-lg-12 mx-auto">
              <table class="table table-striped table-bordered">
                  <thead class="table-light">
                    <tr>
                      <th>User</th>
                      <th>Subject</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                @foreach ($requets as $r)
                    <tr>
                      <td>{{ $r->user->name }}</td>
                      <td>{{ $r->subject->name }})</td>
                      <td>{{$r->date}}</td>
                      <td><a href="{{route('requets.show',$r->id)}}" class="btn btn-info btn-block">Show <span class="glyphicon glyphicon-plus"></span></a></td>
                    </tr>
                @endforeach
                  </tbody>
                </table>
          </div>
      </div>
      </div>
@endsection