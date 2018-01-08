
@extends('app')
@section('content')
  <style>
  .center{
    text-align: center;
  }
  </style>
  <script>
    $(document).ready(function(){
      $("#addLetter").click(function(){
        $("#letter").dialog();
      });
    });
  </script>

  <div class="row">
    <div class="container">
      <h2 class="center text-muted">Crear Nueva Carta</h2>
      @foreach ($foundations as $foundation)
        <div class="col-md-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              {{$foundation->nombre}}
            </a>
            @foreach ($foundation->myLetters as $letter)
              <a href="{{url('/ope/addRecords/campaing',$letter->id)}}" class="list-group-item">{{$foundation->nombre}} Carta 0{{$letter->number}}
                <span class="badge">{{$letter->mandatesByLetter->count()}}</span></a>
            @endforeach
            <form action="/ope/add/letter" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" name="id_foundation" value="{{$foundation->id}}" id="id_foundation">
              <input type="submit" name="" value="Crear Carta" class="btn btn-info right" id="addLetter">
            </form>
          </div>
        </div>
      @endforeach
    </div>
  </div>



@endsection
