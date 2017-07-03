@extends('layouts.principal')

@section('title', 'Página Inicial')
@section('content_title')
    Total de Inscritos: {{ $jogos["total"] }}
@stop

@section('css')
      <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
      <meta name="_token" content="{{ csrf_token() }}" />
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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="lista_inscrito" name="lista_inscrito">
                                    @foreach ($inscritos as $inscrito)                                    
                                        <tr id="inscrito{{ $inscrito->id }}">                                            
                                            <td>{{$inscrito->id}}</td>
                                            <td>{{$inscrito->nome}}</td>
                                            <td>{{$inscrito->email}}</td>
                                            <td>{{$inscrito->idade}}</td>
                                            <td>{{$inscrito->celular}}</td>
                                            <td>{{$inscrito->jogo_manha == "nao" ? "Nao" : $inscrito->jogo_manha}}</td>
                                            <td>{{$inscrito->jogo_tarde == "nao" ? "Nao" : $inscrito->jogo_tarde}}</td>
                                            <td>{{$inscrito->aluno == 0 ? "Nao" : "Sim"}}</td>
                                            <td>{{$inscrito->pagamento == 0 ? "Nao" : "Sim"}}</td>
                                            <td>
                                                <button class="btn btn-warning btn-xs btn-detail open-modal" value="{{$inscrito->id}}">Editar</button>
                                                <button class="btn btn-danger btn-xs btn-delete deletar_inscrito" value="{{$inscrito->id}}">Deletar</button>
                                            </td>
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

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Editar Inscrito</h4>
                    </div>
                    <div class="modal-body">
                        <form id="frmInscrito" name="frmInscrito" class="form-horizontal" novalidate="">

                            <div class="form-group error">
                                <label for="inputTask" class="col-sm-3 control-label">Nome</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control has-error" id="nome" name="nome" placeholder="Nome" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">E-mail</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="">
                                </div>
                            </div>

                            <div class="form-group error">
                                <label for="inputTask" class="col-sm-3 control-label">idade</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control has-error" id="idade" name="idade" placeholder="idade" value="">
                                </div>
                            </div>

                            <div class="form-group error">
                                <label for="inputTask" class="col-sm-3 control-label">celular</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control has-error" id="celular" name="celular" placeholder="celular" value="">
                                </div>
                            </div>

                            <div class="form-group error">
                                <label for="inputTask" class="col-sm-3 control-label">aluno</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control has-error" id="aluno" name="aluno" placeholder="aluno" value="">
                                </div>
                            </div>

                            <div class="form-group error">
                                <label for="inputTask" class="col-sm-3 control-label">jogo_manha</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control has-error" id="jogo_manha" name="jogo_manha" placeholder="jogo_manha" value="">
                                </div>
                            </div>

                            <div class="form-group error">
                                <label for="inputTask" class="col-sm-3 control-label">jogo_tarde</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control has-error" id="jogo_tarde" name="jogo_tarde" placeholder="jogo_tarde" value="">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btn-save" value="add">Salvar Mudanças</button>
                        <input type="hidden" id="inscrito_id" name="inscrito_id" value="0">
                    </div>
                </div>
            </div>
        </div>
    </div> <!--/PAGE-->

@endsection

@section('scripts')

    <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>

    <!-- Page-Level Scripts -->
    <script>
        /*$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
        });*/

        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [ ]

            });


            var url = "/inscrito";

            //display modal form for task editing
            $('#lista_inscrito').on("click", ".open-modal", function () {
                var inscrito_id = $(this).val();

                $.get(url + '/' + inscrito_id, function (data) {
                    //success data
                    console.log(data);
                    $('#inscrito_id').val(data.id);
                    $('#nome').val(data.nome);
                    $('#email').val(data.email);
                    $('#idade').val(data.idade);
                    $('#celular').val(data.celular);
                    $('#aluno').val(data.aluno);
                    $('#jogo_manha').val(data.jogo_manha);
                    $('#jogo_tarde').val(data.jogo_tarde);
                    $('#btn-save').val("update");

                    $('#myModal').modal('show');
                }) 
            });

            //deletar click
            $('#lista_inscrito').on("click", ".deletar_inscrito", function () {
                var inscrito_id = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: url + '/' + inscrito_id,
                    success: function (data) {
                        console.log(data);

                        $("#inscrito" + inscrito_id).remove();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            });

            //create new inscrito / update existing inscrito
            $("#btn-save").click(function (e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                e.preventDefault(); 

                var formData = {
                    nome: $('#nome').val(),
                    email: $('#email').val(),
                    idade: $('#idade').val(),
                    celular: $('#celular').val(),
                    aluno: $('#aluno').val(),
                    jogo_manha: $('#jogo_manha').val(),
                    jogo_tarde: $('#jogo_tarde').val()
                }

                //used to determine the http verb to use [add=POST], [update=PUT]
                var state = $('#btn-save').val();

                var type = "POST"; //for creating new resource
                var inscrito_id = $('#inscrito_id').val();;
                var my_url = url;

                if (state == "update"){
                    type = "post"; //for updating existing resource
                    my_url += '/' + inscrito_id;
                }

                $.ajax({
                    type: type,
                    url: my_url,
                    data: formData,
                    dataType: 'json',
                    success: function (data) {
                        //console.log(data);

                        var inscrito = '<tr id="inscrito' + data.id + '"><td>' + data.id + '</td><td>' + data.nome + '</td><td>' + data.email + '</td><td>' + data.idade + '</td><td>' + data.celular + '</td><td>' + data.jogo_manha + '</td><td>' + data.jogo_tarde + '</td><td>' + data.aluno + '</td><td>' + data.pagamento + '</td>';
                        inscrito += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value=' + data.id + '>Editar</button>';
                        inscrito += '<button class="btn btn-danger btn-xs btn-delete delete-task" value="' + data.id + '">Deletar</button></td></tr>';

                        //user updated an existing record
                        $("#inscrito" + inscrito_id).replaceWith( inscrito );

                        $('#frmInscrito').trigger("reset");

                        $('#myModal').modal('hide')
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });

                
            });

        });

    </script>


@stop
