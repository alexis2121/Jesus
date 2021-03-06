@extends('app')
@section('content')

    <script src="{{asset('plugins/jquery/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('plugins/tablesorter/jquery.tablesorter.min.js')}}"></script>

    <style>
        .btn-add{

        }
    </style>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#table_campana").tablesorter({sortList:[[4,1],[1,0]]});
            /**para establecer un orden inicial usamos sortlist, y le pasamos como parametro 2 arrays con dos campos cada uno, el primero
             * corresponde a la fila que deseamos ordenar partiendo desde el 0 y el segundo al order, siendo 0 acendente. y 1 decendente*/

            $(".error").hide();
            if($("#eje").val()==1){

                 $(".btn-add").removeAttr("href");

                 $(".btn-add").click(function(){

                         $(".error").fadeIn(500).css("color","red");
                         $(".error").css("font-size","14px");
                });
            }
        });

    </script>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <div class="container">

        <div class="form-group">
            <div class="col-md-8">
                <p style="font-size: 2.7em">
                    {{$usuarios->name}}
                </p>
                <p class="error">Tiene campañas no Finalizadas</p>
            </div>

            <div class="col-md-4" >
                @if(Auth::User()->perfil==1)
                    <a style="margin-left: 68% " href="{{route('admin.sup.edit',$usuarios->id)}}" class="btn btn-info btn-add">Añadir Campaña</a>
                @elseif(Auth::User()->perfil==3)
                    <a style="margin-left: 68% " href="{{route('sup.sup.edit',$usuarios->id)}}" class="btn btn-info btn-add" >Añadir Campaña</a>
                @endif
            </div>

        </div>

        <div class="table-responsive" style="clear: left;">
            <table id="table_campana" class="table table-bordered ">
                <thead>
                    <tr>
                        <th class ="colorhead">Campañas</th>
                        <th>Inicio Campaña</th>
                        <th>Termino Campaña</th>
                        <th>Motivo Termino</th>
                        <th>Fecha asignacion</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios->campanitas as $campana)

                         <tr data-id="{{$campana->id}}">
                             <td>{{$campana->nombre_campana}}</td>
                             <td>{{$campana->pivot->fecha_inicio}}</td>
                             <td>{{$campana->pivot->fecha_termino}}</td>
                             <td>{{$campana->pivot->motivo_termino}}</td>
                             <td>{{$campana->pivot->created_at}}</td>
                             @if($campana->pivot->motivo_termino =="")
                                 <input type="hidden" value="1" id="eje">
                                   @if(Auth::User()->perfil==1)
                                     <td style="border:0"><a href="{{url('admin/updatePivot')}}{{$usuarios->id}}/{{$campana->pivot->id}}" >
                                             Finalizar <span class="error">*</span></a></td>
                                   @elseif (Auth::User()->perfil==3)
                                     <td style="border:0"><a href="{{url('sup/updatePivot')}}{{$usuarios->id}}/{{$campana->pivot->id}}" >
                                             Finalizar <span class="error">*</span></a></td>
                                   @endif
                             @else
                                <td>Finalizada</td>
                             @endif
                         </tr>

                    @endforeach
                </tbody>
                <!--en una tabla mostramos el usuario seleccionado en la vista sup/supervisor y con el foreach recorremos
                    todas las campañas que tenga en la tabla pivote ese usurio-->
            </table>

        </div><!--fin table resposibe-->

    </div><!--fin container-->





@endsection
