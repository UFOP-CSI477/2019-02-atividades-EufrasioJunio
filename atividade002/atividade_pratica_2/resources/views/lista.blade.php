@extends('principal')
@section('conteudo')

      <div class="container">
      <div class="row">
          <a href="{{route('subjects.create')}}" class="btn btn-success">Add subject</a>
          <br>
          <div class="col-sm-9 col-md7 col-lg-12 mx-auto">
              <table class="table table-striped table-bordered">
                  <thead class="table-light">
                    <tr>
                      <th>Subject</th>
                      <th>Preço</th>
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