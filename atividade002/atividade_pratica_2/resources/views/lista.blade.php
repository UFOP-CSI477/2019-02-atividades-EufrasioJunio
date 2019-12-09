@extends('layouts.app')
@section('content')

      <div class="container">
      <div class="row">
        @guest
        @else
          @if (Auth::user()->type ==1)
          <a href="{{route('subjects.create')}}" class="btn btn-success">Add subject</a>
          @endif
        @endguest  
          <br>
          <div class="col-sm-9 col-md7 col-lg-12 mx-auto">
              <table class="table table-striped table-bordered">
                  <thead class="table-light">
                    <tr>
                      <th>Subject</th>
                      <th>Preço</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                @foreach ($subjects as $s)
                    <tr>
                      <td>{{ $s->name }}</td>
                      <td>{{ $s->price }}</td>
                      <td><a href="{{route('subjects.show',$s->id)}}" class="btn btn-info btn-block">Show <span class="glyphicon glyphicon-plus"></span></a></<td>
                    </tr>
                @endforeach
                  </tbody>
                </table>
          </div>
      </div>
      </div>

@endsection   