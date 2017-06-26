<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição</title>


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <link href="{{ asset('css/plugins/iCheck/square/blue.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body class="gray-bg">

    <div class="wrapper wrapper-content animated fadeInDown">
        <!-- Main view  -->
        <div class="row">
            <div class="col-sm-offset-2 col-sm-8">
                <div class="ibox-content">
                    <form method="post" class="form-horizontal" action="{{ route('nova_inscricao_post') }}">
                        {{ csrf_field() }}
                        <h1 class="font-bold">Inscrição</h1>
                        <p>Tudo certo para participar do evento? Não se esqueça de ler atentamente as regras de cada jogo!</p>
                        <!--alerta-->
                        @if(isset($resultado) && $resultado == "cadastrado")
                        <div class="row"> 
                            <div class="alert alert-success alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                Inscrição realizada com sucesso !
                            </div>
                        </div>  
                        @else() 
                            @if (isset($resultado))
                                <p> resultado existe </p>
                            @endif  
                        @endif
                        <!--/alerta-->
                        <div class="hr-line-dashed"></div>
                        <p>Informações básicas:</p>

                        <!--NOME COMLPETO-->                        
                        <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="nome">Nome Completo:</label>
                            <div class="col-md-9">
                                <input required type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" >
                                <span class="help-block"><?php echo $errors->first('nome'); ?></span>
                            </div>
                        </div>                        
                        <!--/NOME COMPLETO-->
                        <!--EMAIL-->                        
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="email">E-mail:</label>
                            <div class="col-md-9">
                                <input required type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                <span class="help-block"><?php echo $errors->first('email'); ?></span>
                            </div>
                        </div>                        
                        <!--/EMAIL-->
                        <!--IDADE-->                        
                        <div class="form-group {{ $errors->has('idade') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="idade">Idade:</label>
                            <div class="col-md-9">
                                <input required type="number" class="form-control" id="idade" name="idade" value="{{ old('idade') }}">
                                <span class="help-block"><?php echo $errors->first('idade'); ?></span>
                                <span class="help-block m-b-none">Menores de 18 anos precisam da autorização dos pais.</span>
                            </div>
                            
                        </div>    
                        <div class="alert alert-info col-md-9 col-md-offset-3">
                            <strong>Atenção:</strong> A autorização precisa ser assinada e impressa para levar no dia ! Clique <a class="alert-link" href="{{ asset('pdf/Autorizacao_dos_pais.pdf') }}" target="_blank">Aqui</a> e imprima.
                        </div>                    
                        <!--/IDADE-->
                        <!--CELULAR-->  
                        <div class="form-group {{ $errors->has('celular') ? 'has-error' : ''}}">
                            <label class="col-md-3 control-label" for="celular">Celular</label>
                            <div class="col-md-9">
                                <input required type="text" class="form-control" data-mask="(99)99999-9999" name="celular" value="{{ old('celular') }}" id="celular">
                                <span class="help-block"><?php echo $errors->first('celular'); ?></span>
                                <span class="help-block">Exemplo: (99)99999-9999</span>
                            </div>
                        </div>
                        <!--/CELULAR-->  
                        <!--ALUNO-->                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">Você é aluno?</label>
                            <div class="col-md-9">
                                <div class="i-checks">
                                    <label> <input required type="radio" checked value=1 name="aluno" {{ old('aluno') == false ? 'checked' : '' }}> <i></i> Sim </label>
                                </div>
                                <div class="i-checks">
                                    <label> <input required type="radio" value=0 name="aluno" {{ old('aluno') == true ? 'checked' : '' }}> <i></i> Não </label>
                                </div>
                            </div>
                        </div>                        
                        <!--/ALUNO-->
                        <div class="hr-line-dashed"></div>  
                        <p>Teremos dois períodos de campeonatos (manhã e tarde), onde serão consagrados campeõs de cada um dos dois.
                            No período noturno os campeõs de manhã e tarde se enfrentarão para disputar o prêmio final e se tornarem
                            os vencedores de cada jogo. Você pode escolher participar de apenas 1 jogo por período, e não pode 
                            repití-lo no outro período.<br>
                            Se desejar pode participar de apenas um período.
                        </p>
                        <div class="alert alert-warning">
                            <strong>Importante: </strong>Se você escolher participar dos dois períodos, terá de pagar o
                            valor das duas inscrições!
                        </div>
                        <p>Escolha o jogo do <strong>de cada período:</strong></p>
                        <!--JOGO MANHA-->  
                        <div class="row">                                            
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">                            
                                    <label class="col-md-4 control-label">Jogo Manhã:</label>
                                    <div class="col-md-8">
                                        <div class="i-checks">
                                            <label> <input type="radio" value="nao" name="jogo_manha" {{ old('jogo_manha') == 'nao' ? 'checked' : '' }}> <i></i>Não jogarei</label>
                                        </div>
                                        <div class="i-checks">
                                            <label> <input type="radio" value="lol" name="jogo_manha" {{ old('jogo_manha') == 'lol' ? 'checked' : '' }}> <i></i>League of Legends</label>
                                        </div>
                                        <div class="i-checks">
                                            <label> <input type="radio" value="cs" name="jogo_manha" {{ old('jogo_manha') == 'cs' ? 'checked' : '' }}> <i></i>CS 1.6</label>
                                        </div>
                                        <div class="i-checks">
                                            <label> <input type="radio" value="fifa" name="jogo_manha" {{ old('jogo_manha') == 'fifa' ? 'checked' : '' }}> <i></i>FIFA 2016</label>
                                        </div>
                                        <div class="i-checks">
                                            <label> <input type="radio" value="jd" name="jogo_manha" {{ old('jogo_manha') == 'jd' ? 'checked' : '' }}> <i></i>Just Dance 2016</label>
                                        </div>
                                    </div>
                                </div>
                            </div>                                         
                            <!--/JOGO MANHA-->
                            <!--JOGO TARDE-->                                              
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">                            
                                    <label class="col-md-4 control-label">Jogo Tarde:</label>
                                    <div class="col-md-8">
                                        <div class="i-checks">
                                            <label> <input type="radio" value="nao" name="jogo_tarde" {{ old('jogo_tarde') == 'nao' ? 'checked' : '' }}> <i></i>Não jogarei</label>
                                        </div>
                                        <div class="i-checks">
                                            <label> <input type="radio" value="cs" name="jogo_tarde" {{ old('jogo_tarde') == 'cs' ? 'checked' : '' }}> <i></i>CS 1.6</label>
                                        </div>
                                        <div class="i-checks">
                                            <label> <input type="radio" value="fifa" name="jogo_tarde" {{ old('jogo_tarde') == 'fifa' ? 'checked' : '' }}> <i></i>FIFA 2016</label>
                                        </div>
                                        <div class="i-checks">
                                            <label> <input type="radio" value="jd" name="jogo_tarde" {{ old('jogo_tarde') == 'jd' ? 'checked' : '' }}> <i></i>Just Dance 2016</label>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <!--/JOGO TARDE--> 
                        </div> <!--/ROW-->                                       
                        <button class="btn btn-success" type="submit"><i class="fa fa-check"></i>&nbsp; Finalizar Inscrição!</button>    
                        <a class="btn btn-default pull-right" href="{{ route('index') }}"><i class="fa fa-home"></i>&nbsp; Página Inicial</a>

                    </form>
                    
                    
                </div><!--/IBOX CONTENT-->
            </div><!--/COL-->
        </div><!--/ROW-->
        <!-- END Main view  -->

        <!-- Footer -->
        <div class="col-sm-offset-2 col-sm-8">
            <div class="row">
                <div class="col-xs-6">
                    People Hortolândia
                </div>
                <div class="col-xs-6 text-right">
                    <small>Desenvolvido por <a href="https://br.linkedin.com/in/gabriel-silva-tosetti-b56013103">Gabriel Tosetti</a></small>
                </div>
            </div>
        </div>
        <!-- END Footer -->
    </div>




    <!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
    <!-- Input Mask-->
    <script src="{{ asset('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>

    <!-- iCheck -->
    <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                });
                $('input[type=radio][name="optionsRadios"]').change(function() {
                    alert("entrou");
                    if (this.value == 'nao') {
                        alert("nao");
                        $("input[type=radio][name=jogo_tarde][value=nao]").attr('disabled',true);
                        
                    }

                });

                $('input[type=radio][name="jogo_manha"]').on('ifChecked', function(event){
                    tardeHabilitarTodos();
                    if(this.value == "nao")
                    {
                        $('input[type=radio][name="jogo_tarde"][value="nao"]').iCheck('disable');
                    }
                    else if(this.value == "cs")
                    {
                        $('input[type=radio][name="jogo_tarde"][value="cs"]').iCheck('disable');
                    }
                    else if(this.value == "fifa")
                    {
                        $('input[type=radio][name="jogo_tarde"][value="fifa"]').iCheck('disable');
                    }
                    else if(this.value == "jd")
                    {
                        $('input[type=radio][name="jogo_tarde"][value="jd"]').iCheck('disable');
                    }
                });

                $('input[type=radio][name="jogo_tarde"]').on('ifChecked', function(event){
                    manhaHabilitarTodos();
                    if(this.value == "nao")
                    {
                        $('input[type=radio][name="jogo_manha"][value="nao"]').iCheck('disable');
                    }
                    else if(this.value == "cs")
                    {
                        $('input[type=radio][name="jogo_manha"][value="cs"]').iCheck('disable');
                    }
                    else if(this.value == "fifa")
                    {
                        $('input[type=radio][name="jogo_manha"][value="fifa"]').iCheck('disable');
                    }
                    else if(this.value == "jd")
                    {
                        $('input[type=radio][name="jogo_manha"][value="jd"]').iCheck('disable');
                    }
                });

                

            });

            function tardeHabilitarTodos(){
                $('input[type=radio][name="jogo_tarde"][value="nao"]').iCheck('enable');
                $('input[type=radio][name="jogo_tarde"][value="cs"]').iCheck('enable');
                $('input[type=radio][name="jogo_tarde"][value="fifa"]').iCheck('enable');
                $('input[type=radio][name="jogo_tarde"][value="jd"]').iCheck('enable');
            }
            function manhaHabilitarTodos(){
                $('input[type=radio][name="jogo_manha"][value="nao"]').iCheck('enable');
                $('input[type=radio][name="jogo_manha"][value="cs"]').iCheck('enable');
                $('input[type=radio][name="jogo_manha"][value="fifa"]').iCheck('enable');
                $('input[type=radio][name="jogo_manha"][value="jd"]').iCheck('enable');
            }
        </script>


</body>
</html>
