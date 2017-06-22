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
                    <form method="post" class="form-horizontal" action="{{ route('inscricao') }}">
                        <h1 class="font-bold">Inscrição</h1>
                        <p>Tudo certo para participar do evento? Não se esqueça de ler atentamente as regras de cada jogo!</p>
                        <div class="hr-line-dashed"></div>
                        <p>Informações básicas:</p>

                        <!--NOME COMLPETO-->                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nome Completo:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>                        
                        <!--/NOME COMPLETO-->
                        <!--EMAIL-->                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">E-mail:</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control">
                            </div>
                        </div>                        
                        <!--/EMAIL-->
                        <!--IDADE-->                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">Idade:</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control">
                                <span class="help-block m-b-none">Menores de 18 anos precisam da autorização dos pais.</span>
                            </div>
                            
                        </div>    
                        <div class="alert alert-info col-md-9 col-md-offset-3">
                                <strong>Atenção:</strong> A autorização precisa ser assinada e impressa para levar no dia ! Clique <a class="alert-link" href="#">Aqui</a> e imprima.
                            </div>                    
                        <!--/IDADE-->
                        <!--ALUNO-->                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">Você é aluno?</label>
                            <div class="col-md-9">
                                <div class="i-checks">
                                    <label> <input type="radio" checked value="true" name="aluno"> <i></i> Sim </label>
                                </div>
                                <div class="i-checks">
                                    <label> <input type="radio" value="false" name="aluno"> <i></i> Não </label>
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
                            valor das duas inscrções!
                        </div>
                        <p>Escolha o jogo do <strong>de cada período:</strong></p>
                        <!--JOGO MANHA-->                                              
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">                            
                                <label class="col-md-4 control-label">Jogo Manhã:</label>
                                <div class="col-md-8">
                                    <div class="i-checks">
                                        <label> <input type="radio" value="nao" name="manha"> <i></i>Não jogarei</label>
                                    </div>
                                    <div class="i-checks">
                                        <label> <input type="radio" value="lol" name="manha"> <i></i>League of Legends</label>
                                    </div>
                                    <div class="i-checks">
                                        <label> <input type="radio" value="cs" name="manha"> <i></i>CS 1.6</label>
                                    </div>
                                    <div class="i-checks">
                                        <label> <input type="radio" value="fifa" name="manha"> <i></i>FIFA 2016</label>
                                    </div>
                                    <div class="i-checks">
                                        <label> <input type="radio" value="jd" name="manha"> <i></i>Just Dance 2016</label>
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
                                        <label> <input type="radio" value="nao" name="tarde"> <i></i>Não jogarei</label>
                                    </div>
                                    <div class="i-checks">
                                        <label> <input type="radio" value="lol" name="tarde"> <i></i>League of Legends</label>
                                    </div>
                                    <div class="i-checks">
                                        <label> <input type="radio" value="cs" name="tarde"> <i></i>CS 1.6</label>
                                    </div>
                                    <div class="i-checks">
                                        <label> <input type="radio" value="fifa" name="tarde"> <i></i>FIFA 2016</label>
                                    </div>
                                    <div class="i-checks">
                                        <label> <input type="radio" value="jd" name="tarde"> <i></i>Just Dance 2016</label>
                                    </div>
                                </div>
                            </div>
                        </div>                                        
                        <!--/JOGO TARDE-->
                        <button class="btn btn-success" type="submit"><i class="fa fa-check"></i>&nbsp; Finalizar Inscrição!</button>    
                        <a class="btn btn-default pull-right" href="{{ route('index') }}"><i class="fa fa-home"></i>&nbsp; Página Inicial</a>

                    </form>
                    
                    
                </div><!--/IBOX CONTENT-->
            </div><!--/COL-->
        </div><!--/ROW-->
        <!-- END Main view  -->

        <!-- Footer -->
        <div class="col-md-offset-3 col-md-6">
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
                        $("input[type=radio][name=tarde][value=nao]").attr('disabled',true);
                        
                    }

                });

                $('input[type=radio][name="manha"]').on('ifChecked', function(event){
                    tardeHabilitarTodos();
                    if(this.value == "nao")
                    {
                        $('input[type=radio][name="tarde"][value="nao"]').iCheck('disable');
                    }
                    else if(this.value == "lol")
                    {
                        $('input[type=radio][name="tarde"][value="lol"]').iCheck('disable');
                    }
                    else if(this.value == "cs")
                    {
                        $('input[type=radio][name="tarde"][value="cs"]').iCheck('disable');
                    }
                    else if(this.value == "fifa")
                    {
                        $('input[type=radio][name="tarde"][value="fifa"]').iCheck('disable');
                    }
                    else if(this.value == "jd")
                    {
                        $('input[type=radio][name="tarde"][value="jd"]').iCheck('disable');
                    }
                });

                $('input[type=radio][name="tarde"]').on('ifChecked', function(event){
                    manhaHabilitarTodos();
                    if(this.value == "nao")
                    {
                        $('input[type=radio][name="manha"][value="nao"]').iCheck('disable');
                    }
                    else if(this.value == "lol")
                    {
                        $('input[type=radio][name="manha"][value="lol"]').iCheck('disable');
                    }
                    else if(this.value == "cs")
                    {
                        $('input[type=radio][name="manha"][value="cs"]').iCheck('disable');
                    }
                    else if(this.value == "fifa")
                    {
                        $('input[type=radio][name="manha"][value="fifa"]').iCheck('disable');
                    }
                    else if(this.value == "jd")
                    {
                        $('input[type=radio][name="manha"][value="jd"]').iCheck('disable');
                    }
                });

                

            });

            function tardeHabilitarTodos(){
                $('input[type=radio][name="tarde"][value="nao"]').iCheck('enable');
                $('input[type=radio][name="tarde"][value="lol"]').iCheck('enable');
                $('input[type=radio][name="tarde"][value="cs"]').iCheck('enable');
                $('input[type=radio][name="tarde"][value="fifa"]').iCheck('enable');
                $('input[type=radio][name="tarde"][value="jd"]').iCheck('enable');
            }
            function manhaHabilitarTodos(){
                $('input[type=radio][name="manha"][value="nao"]').iCheck('enable');
                $('input[type=radio][name="manha"][value="lol"]').iCheck('enable');
                $('input[type=radio][name="manha"][value="cs"]').iCheck('enable');
                $('input[type=radio][name="manha"][value="fifa"]').iCheck('enable');
                $('input[type=radio][name="manha"][value="jd"]').iCheck('enable');
            }
        </script>


</body>
</html>
