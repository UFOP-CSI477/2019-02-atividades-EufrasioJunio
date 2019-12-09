@extends('layouts.app')
@section('content')

  
  <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                <h5 class="card-title text-center">Add Request</h5>
                <form method="post" action="{{ route('requets.store') }}">
                        @csrf {{--esconde algumas caracteristicas da interface para dificultar uma injeção no bd  --}}                     
                        <div class="form-label-group">
                            <label for="user_id">Subject</label>
                            <select name="subject_id" class="form-control" required autofocus>
                                <option value=""selected disabled hidden>choose subject</option>
                                @foreach ($subjects as $s)
                                    <option value="{{ $s->id }}">{{ $s->name }} (R${{$s->price}})</option>
                                @endforeach
                                
                                
                            </select>
                        </div>
                        <div class="form-label-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description" class="form-control"required autofocus>
                        </div>
                        <div class="form-label-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date" class="form-control"required autofocus>
                        </div>
                        <br>
                        <input type="submit" name="btnSalvar" class="btn btn-success btn-block"  value="Add">
                    
                      </form>
                </div>
            </div>
            </div>
        </div>
        </div>

@endsection