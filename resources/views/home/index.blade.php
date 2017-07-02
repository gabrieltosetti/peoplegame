@extends('layouts.principal')

@section('title', 'Página Inicial')
@section('content_title')
    Total de Inscritos: {{ $jogos["total"] }}
@stop

@section('css')
      <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <!--
            WIDGETS
        -->        
        <div class="row">            
            <div class="col-md-3 col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>League of Legends</h5>
                        <span class="label label-success pull-right">{{ $jogos["lol_manha"]+$jogos["lol_tarde"] }}</span>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <h1 class="no-margins">{{ $jogos["lol_manha"] }}</h1>
                                <small>Manhã</small>
                            </div>
                            <div class="col-xs-6 text-right">
                                <h1 class="no-margins">{{ $jogos["lol_tarde"] }}</h1>
                                <small>Tarde</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>CS 1.6</h5>
                        <span class="label label-success pull-right">{{ $jogos["cs_manha"]+$jogos["cs_tarde"] }}</span>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <h1 class="no-margins">{{ $jogos["cs_manha"] }}</h1>
                                <small>Manhã</small>
                            </div>
                            <div class="col-xs-6 text-right">
                                <h1 class="no-margins">{{ $jogos["cs_tarde"] }}</h1>
                                <small>Tarde</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Just Dance</h5>
                        <span class="label label-success pull-right">{{ $jogos["jd_manha"]+$jogos["jd_tarde"] }}</span>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <h1 class="no-margins">{{ $jogos["jd_manha"] }}</h1>
                                <small>Manhã</small>
                            </div>
                            <div class="col-xs-6 text-right">
                                <h1 class="no-margins">{{ $jogos["jd_tarde"] }}</h1>
                                <small>Tarde</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>FIFA</h5>
                        <span class="label label-success pull-right">{{ $jogos["fifa_manha"]+$jogos["fifa_tarde"] }}</span>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <h1 class="no-margins">{{ $jogos["fifa_manha"] }}</h1>
                                <small>Manhã</small>
                            </div>
                            <div class="col-xs-6 text-right">
                                <h1 class="no-margins">{{ $jogos["fifa_tarde"] }}</h1>
                                <small>Tarde</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--row-->
        <!--/WIDGETS-->

        <!--DATA TABLE-->
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Inscritos</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Idade</th>
                                        <th>Celular</th>
                                        <th>J Manhã</th>
                                        <th>J Tarde</th>
                                        <th>Aluno</th>
                                        <th>Pagame</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscritos as $inscrito)                                    
                                        <tr class="gradeX">                                            
                                            <td>{{$inscrito->id}}</td>
                                            <td>{{$inscrito->nome}}</td>
                                            <td>{{$inscrito->email}}</td>
                                            <td>{{$inscrito->idade}}</td>
                                            <td>{{$inscrito->celular}}</td>
                                            <td>{{$inscrito->jogo_manha == "nao" ? "Nao" : $inscrito->jogo_manha}}</td>
                                            <td>{{$inscrito->jogo_tarde == "nao" ? "Nao" : $inscrito->jogo_tarde}}</td>
                                            <td>{{$inscrito->aluno == 0 ? "Nao" : "Sim"}}</td>
                                            <td>{{$inscrito->pagamento == 0 ? "Nao" : "Sim"}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!--/table responsive-->               
                    </div> <!--/ibox content-->
                </div><!--/ibox-->
            </div><!--/col lg12-->
        </div><!--/row-->
        <!--/DATA TABLE-->
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [ ]

            });

        });

    </script>


@stop
