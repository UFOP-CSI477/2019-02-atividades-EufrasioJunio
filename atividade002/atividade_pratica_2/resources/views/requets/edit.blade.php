@extends('layouts.app')
@section('content')

  <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                <h5 class="card-title text-center">Edit Request :{{$requet->id}}</h5>
                  
                <form method="post" action="{{ route('requets.update',$requet) }}">
                        @csrf {{--esconde algumas caracteristicas da interface para dificultar uma injeção no bd  --}}
                        @method('PATCH') {{-- necessario para o methodo update  pois ele so reconhece methodo patch--}}
                            <div class="form-label-group">
                                <label for="user_id">Subject</label>
                                <select name="subject_id" class="form-control" required autofocus>
                                    @foreach ($subjects as $s)
                                            <option value="{{ $s->id }}"
                                            @if($s->id == $requet->subject_id)
                                                selected
                                            @endif
                                        >{{ $s->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-label-group">
                                <label for="date">Date:</label>
                                <input type="date" name="date" id="date" value = "{{$requet->date}}" class="form-control"required autofocus>
                            </div>
                            <div class="form-label-group">
                                <label for="description">Description:</label>
                                <input type="text" name="description" id="description" value = "{{$requet->description}}" class="form-control"required autofocus>
                            </div>
                            <br>
                            <input type="submit" name="btnSalvar" class="btn btn-primary btn-block" value="Update">
                    </form>
    
                </div>
            </div>
            </div>
        </div>
        </div>
@endsection