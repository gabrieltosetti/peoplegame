@extends('layouts.inscricao')

@section('css')
    <link href="{{ asset('css/plugins/iCheck/square/blue.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="row">
    <div class="col-md-offset-3 col-md-6">
        <div class="ibox-content">

            <h2 class="font-bold">Inscrição</h2>

            <p>
                Tudo certo para participar do evento? Não se esqueça de ler atentamente as regras de cada jogo!
            </p>

            <div class="row">

                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1">League of Legends</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">CS 1.6</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">Just Dance</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">FIFA</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                    <p>
                                        Por favor, preencha <strong>todas</strong> as informações abaixo:
                                    </p>

                                    <form method="post" class="form-horizontal" action="{{ route('inscricao') }}">
                                        <!--NOME COMLPETO-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-md-4 col-lg-3 control-label">Nome Completo:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/NOME COMPLETO-->
                                        <!--EMAIL-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-md-4 col-lg-3 control-label">E-mail:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/EMAIL-->
                                        <!--DATA DE NASCIMENTO-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-md-4 col-lg-3 control-label">Idade:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/DATA DE NASCIMENTO-->
                                        <!--ALUNO-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-md-4 col-lg-3 control-label">Você é aluno?</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <div class="i-checks">
                                                        <label> <input type="radio" checked value="true" name="aluno"> <i></i> Sim </label>
                                                    </div>
                                                    <div class="i-checks">
                                                        <label> <input type="radio" value="false" name="aluno"> <i></i> Não </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ALUNO-->
                                        <button class="btn btn-success" type="submit"><i class="fa fa-check"></i>&nbsp; Finalizar Inscrição!</button>                                        
                                    </form>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Donec quam felis</strong>

                                    <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects </p>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Donec quam felis</strong>

                                    <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects </p>
                                </div>
                            </div>
                            <div id="tab-4" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Donec quam felis</strong>

                                    <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects </p>
                                </div>
                            </div>
                        </div> <!--/tab content-->
                    </div><!--/tabs container-->    
                    <a class="btn btn-default pull-right m-t" href=""><i class="fa fa-home"></i>&nbsp; Página Inicial</a>     
                </div><!--/col 12-->
            </div> 
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Data picker -->
    <script src="{{ asset('js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                });
            });
        </script>

@stop