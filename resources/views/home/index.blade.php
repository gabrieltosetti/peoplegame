@extends('layouts.principal')

@section('title', 'Página Inicial')
@section('content_title')
    Total de Inscritos: {{ $jogos["total"] }}
@stop

@section('css')
      <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

      <link href="css/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet">
      <script src="js/plugins/sweetalert2/sweetalert2.min.js"></script>

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
                                        <th>Pago?</th>
                                        <th>Ações</th>
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

                            <div class="form-group">
                                <label for="nome" class="col-sm-3 control-label">Nome</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">E-mail</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="idade" class="col-sm-3 control-label">Idade</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="idade" name="idade" placeholder="idade" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="celular" class="col-sm-3 control-label">Celular</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="celular" name="celular" placeholder="celular" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="aluno" class="col-sm-3 control-label">Aluno</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="aluno" id="aluno">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jogo_manha" class="col-sm-3 control-label">Jogo Manhã</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="jogo_manha" id="jogo_manha">
                                        <option value="nao">Não Joga</option>
                                        <option value="lol">League of Legends</option>
                                        <option value="cs">Counter Strike 1.6</option>
                                        <option value="jd">Just Dance</option>
                                        <option value="fifa">FIFA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jogo_tarde" class="col-sm-3 control-label">Jogo Tarde</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="jogo_tarde" id="jogo_tarde">
                                        <option value="nao">Não Joga</option>
                                        <option value="cs">Counter Strike 1.6</option>
                                        <option value="jd">Just Dance</option>
                                        <option value="fifa">FIFA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pagamento" class="col-sm-3 control-label">Pago?</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="pagamento" id="pagamento">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
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
                    $('#pagamento').val(data.pagamento);
                    $('#btn-save').val("update");

                    $('#myModal').modal('show');
                }) 
            });

            //deletar click
            $('#lista_inscrito').on("click", ".deletar_inscrito", function () {

                var inscrito_id = $(this).val();
                swal({
                    title: 'Deletar?',
                    text: 'Tem certeza que deseja excluir o inscrito?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sim, deletar!',
                    cancelButtonText: 'Cancelar',
                    showLoaderOnConfirm: true,
                    preConfirm: function () {
                        return new Promise(function (resolve, reject) {
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
                                    resolve();
                                },
                                error: function (data) {
                                    console.log('Error:', data);
                                }
                            });
                        });
                    },
                    allowOutsideClick: false
                    }).then(function (email) {
                    swal({
                        type: 'success',
                        title: 'Inscrito deletado!',
                    })
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
                    jogo_tarde: $('#jogo_tarde').val(),
                    pagamento: $('#pagamento').val()
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
                        var data_aluno, data_pagamento; 
                        switch(data.aluno)
                        {
                            case 0:
                                data_aluno = "Nao";
                                break;
                            default:
                                data_aluno = "Sim";
                                break;
                        }

                        switch(data.pagamento)
                        {
                            case 0:
                                data_pagamento = "Nao";
                                break;
                            default:
                                data_pagamento = "Sim";
                                break;
                        }
                        var data_jogo_manha = data.jogo_manha == "nao" ? "Nao" : data.jogo_manha;
                        var data_jogo_tarde = data.jogo_tarde == "nao" ? "Nao" : data.jogo_tarde;

                        var inscrito = '<tr id="inscrito' + data.id + '"><td>' + data.id + '</td><td>' + data.nome + '</td><td>' + data.email + '</td><td>' + data.idade + '</td><td>' + data.celular + '</td><td>' + data_jogo_manha + '</td><td>' + data_jogo_tarde + '</td><td>' + data_aluno + '</td><td>' + data_pagamento + '</td>';
                        inscrito += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value=' + data.id + '>Editar</button>';
                        inscrito += '<button class="btn btn-danger btn-xs btn-delete deletar_inscrito" value="' + data.id + '">Deletar</button></td></tr>';

                        //user updated an existing record
                        $("#inscrito" + inscrito_id).replaceWith( inscrito );

                        $('#frmInscrito').trigger("reset");

                        $('#myModal').modal('hide');
                        swal(
                            'Alterações',
                            'Mudanças realizadas !',
                            'success'
                        );
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });

                
            });

        });

    </script>


@stop
