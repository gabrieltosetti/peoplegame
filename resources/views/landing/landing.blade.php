<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>People Game</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- CSS para o people game -->
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

    

<!--    <style>
        @media (max-width: 767px) {
            .jogoimg {
                
            }
        }
    </style>-->

</head>
<body id="page-top" class="landing-page no-skin-config">
<div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('inscricao') }}">INSCREVA-SE!</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="#page-top">Home</a></li>
                    <li><a class="page-scroll" href="#informacoes">Informações</a></li>
                    <li><a class="page-scroll" href="#jogos">Jogos</a></li>
                    <li><a class="page-scroll" href="#cronograma">Cronograma</a></li>
                    <li><a class="page-scroll" href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!--IMAGEM INICIAL-->
<section id="incio" class="navy-section inicio" style="margin-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <h1 class="titulo">
                    1º People Game !
                </h1>
                <p class="ttexto" style="color: #fff;">
                    Primeiro campeonato de games da People Hortolândia !<br>
                    Venha nos conhecer enquanto participa do seu jogo favorito.
                </p>
                <small>
                    <strong>21 de Julho, 08:00 às 21:00</strong>
                </small>
            </div>
        </div> <!--/row-->
    </div> <!--/container-->
</section>
<!--/IMAGEM INICIAL-->


<section class="features" id="informacoes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Informações</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 features-text wow fadeInLeft">
                <h2>Campeonato</h2>
                <i class="fa fa-trophy big-icon pull-right"></i>
                <p>Batalha entre os competidores para subir nas chaves e se consagrar vencedores dos seus jogos no período escolhido (manhã/tarde). 
                Depois vem o verdadeiro desafio, os 2 vencedores se enfrentarão para ver quem se torna o <strong>campeão do jogo</strong> e ganhar os prêmios ! </p>
            </div>
            <div class="col-sm-6 features-text wow fadeInRight">
                <h2>Times</h2>
                <i class="fa fa-users big-icon pull-right"></i>
                <p>Após as inscrições finalizadas, vocês poderão cadastrar seu próprio time para o lol e o cs! 
                    Junte os amigos e escolha apenas um para entrar e cadastrar todos os outros antes do campeonato. 
                    Qual nome você dará ao seu time ?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 features-text wow fadeInLeft">
                <h2>Prêmios </h2>
                <i class="fa fa-gift big-icon pull-right"></i>
                <p>Não é campeonato sem prêmios! Os campeões individuais de cada jogo ganharão <strong>jogos de console</strong>.
                Para os campeões em time, todos receberão o prêmio individualmente dependendo do prêmio do jogo, você pode ver logo abaixo os prêmios !</p>
            </div>
            <div class="col-sm-6 features-text wow fadeInRight">
                <h2>Inscrições</h2>
                <i class="fa fa-pencil big-icon pull-right"></i>
                <p>Os jogos possuem vagas limitadas !
                    Não perca tempo, faça logo sua inscrição aqui no site e garanta sua presença conosco ! 
                    </p>
            </div>
        </div>
    </div>
</section>


<!--JOGOS PARTICIPANTES-->
<section id="jogos" class="container features">     
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Jogos participantes</h1>
            <p>Leiam com atenção cada regra !</p>
        </div>
    </div>
    <!--LEAGUE OF LEGENDS-->
    <div class="row features-block border-bottom">
        <div class="col-xs-12 col-sm-4 wow fadeInLeft">
            <img src="{{ asset('img/people/lol.jpg') }}" alt="dashboard" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-8 games-text wow fadeInRight">
            <h2>League of legends </h2>
            <h3>Regras</h3>
            <p>
                É importante que a equipe se organize e se atente aos horários em que irão ocorrer suas partidas, caso haja atraso, será desclassificada.<br><br>

                Em caso de ausência de algum membro da equipe, a mesma deverá jogar com um membro a menos, portanto é recomendado que se tenha um jogador reserva. 
                Do contrário será automaticamente desclassificada da competição e NÃO TERÁ A TAXA DE INSCRIÇÃO DE VOLTA.<br><br>

                Se houver algum imprevisto (substituição de última hora, membro da equipe passou mal, etc.), 
                entre em contato com a escola, antecipadamente, para nos informar.<br><br>

                Esteja ciente da sua disponibilidade de tempo, pois o campeonato será das 8h às 21h, 
                sendo a grande final disputada entre os horários das 19h e 21h em uma MELHOR DE 3 (MD3)
            </p>
            <ul class="regras">
                <li><strong>Duração de cada partida:</strong> 40 min (no máximo).</li>
                <li><strong>Time:</strong> 5 pessoas.</li>
                <li><strong>Inscrição:</strong> R$15,00 por pessoa.</li>
                <li>Não pode xingar (evitar gritaria).</li>
            </ul>
            <p>
                <strong>Obs.:</strong> Recomendamos você levar o seu <strong>próprio fone de ouvido</strong> ou mousepad para o campeonato, 
                pois não será disponibilizado pela escola. Ou até trocar pelo seu próprio mouse.
            </p>
            <br>
            <h3>Prêmios</h3>
            <p>Todo valor arrecadado pelas inscrições serão voltados para as premiações. 
                Lembrando que os prêmios abaixo vão para <strong>cada participante</strong> do time vencedor !</p>
            <ul class="regras">
                <li><strong>1º:</strong> <span class="text-info">2800 RP + Brinde + Medalha.</span></li>
                <li><strong>2º:</strong> <span class="text-info">650 RP + Brinde + Medalha.</span></li>
                <li><strong>3º:</strong> <span class="text-info">Brinde + Medalha.</span></li>                   
            </ul>
            <br>
        </div>        
    </div>
    <!--/LEAGUE OF LEGENDS-->
    <!--CS 1.6-->
    <div class="row features-block border-bottom">
        <div class="col-xs-12 col-sm-4 wow fadeInLeft">
            <img src="{{ asset('img/people/cs.jpg') }}" alt="dashboard" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-8 games-text wow fadeInRight">
            <h2>Counter Strike 1.6 </h2>
            <h3>Regras</h3>
            <p>
                O CS será disputado em times 4 contra 4. Depois de definidos todos os times, faremos chaves sorteadas até que
                sobre apenas o vencedor. Teremos 2 períodos de jogos e também 2 times campeões, o de manhã e o de tarde.
                Os 2 times campeões irão se enfrentar à noite para decidir quem irá ganhar os prêmios finais abaixo !            
            </p>
            <ul class="regras">
                <li><strong>Time:</strong> 4 pessoas.</li>
                <li><strong>Rounds:</strong> 13 Rounds.</li>
                <li><strong>Duração:</strong> 2 minutos.</li>
                <li><strong>Inscrição:</strong> R$10,00 por pessoa.</li>
                <li><strong>Classificação:</strong></li>
                <ul>
                    <li><strong>1º Colocado:</strong> Vencedor entre o 1º da manhã e 1º da tarde.</li>
                    <li><strong>2º Colocado:</strong> Perdedor entre o 1º da manhã e 1º da tarde.</li>
                    <li><strong>3º Colocado:</strong> Vencedor entre o 2º da manhã e 2º da tarde.</li>
                </ul>
                <ul class="unstyled">
                    <li><small><span class="text-warning">Jogos da classificação aconteceram à noite</span></small></li>
                </ul>
            </ul>
            <p>
                <strong>Obs.:</strong> Recomendamos você levar o seu <strong>próprio fone de ouvido</strong> ou mousepad para o campeonato, 
                pois não será disponibilizado pela escola. Ou até trocar pelo seu próprio mouse.
            </p>
            <br>
            <h3>Prêmios</h3>
            <p>Lembrando que os prêmios abaixo vão para <strong>cada participante</strong> do time vencedor !</p>
            <ul class="regras">
                <li><strong>1º:</strong> <span class="text-info">R$40,00 carteira Steam + Brinde + Medalha.</span></li>
                <li><strong>2º:</strong> <span class="text-info"> R$10,00 carteira Steam + Brinde + Medalha.</span></li>
                <li><strong>3º:</strong> <span class="text-info"> Brinde + Medalha.</span></li>                
            </ul>
            <br>
        </div>        
    </div>
    <!--/CS 1.6-->
    <!--JUST DANCE-->
    <div class="row features-block border-bottom">
        <div class="col-xs-12 col-sm-4 wow fadeInLeft">
            <img src="{{ asset('img/people/just_dance.jpg') }}" alt="dashboard" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-8 games-text wow fadeInRight">
            <h2>Just Dance 2016</h2>
            <h3>Regras</h3>
            <p>Texto 1:</p>
            <ul class="regras">
                <li>Regra 1</li>
                <li>Regra 2</li>
                <li>Regra 3</li>
                <li>Regra 4</li>
                <li>Regra 5</li>
            </ul>
            <p>
                <strong>Obs.:</strong> texto...
            </p>
            <br>
            <h3>Prêmios</h3>
            <p>Texto 2:</p>
            <ul class="regras">
                <li><strong>1º:</strong> <span class="text-info">Jogo Just Dance 2017 + Brinde + Medalha</span></li>
                <li><strong>2º:</strong> <span class="text-info">Brinde + Medalha</span></li>
                <li><strong>3º:</strong> <span class="text-info">Medalha</span></li>                 
            </ul>
            <br>
        </div>        
    </div>
    <!--/JUST DANCE-->
    <!--FIFA 2016-->
    <div class="row features-block">
        <div class="col-xs-12 col-sm-4 wow fadeInLeft">
            <img src="{{ asset('img/people/fifa.jpg') }}" alt="dashboard" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-8 games-text wow fadeInRight">
            <h2>FIFA 2016 </h2>
            <h3>Regras</h3>
            <p>O campeonato será disputado como fase de grupos, de um contra um. Será permitido escolher times iguais no mesmo torneio. 
                Partidas do torneio são jogadas através das seguintes configurações para criação de Sala:</p>
            <ul class="regras">
                <li><strong>Tempo:</strong> 6 Minutos.</li>
                <li><strong>Controles:</strong> Xbox One.</li>
                <li><strong>Velocidade:</strong> Normal.</li>
            </ul>
            <br>
            <h3>Prêmios</h3>
            <ul class="regras">
                <li><strong>1º:</strong> <span class="text-info">Jogo FIFA 2017 + Brinde + Medalha</span></li>
                <li><strong>2º:</strong> <span class="text-info">Brinde + Medalha</span></li>
                <li><strong>3º:</strong> <span class="text-info">Medalha</span></li>                
            </ul>
            <br>
        </div>        
    </div>
    <!--/FIFA 2016-->
    

</section>
<!--/JOGOS PARTICIPANTES-->




<section id="cronograma" class="timeline gray-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Nosso cronograma</h1>
                <p>Não perca nenhum dos horários ! </p>
            </div>
        </div>
        <div class="row features-block">

            <div class="col-lg-12">
                <div id="vertical-timeline" class="vertical-container light-timeline center-orientation">
                    <!--CONTEUDO-->
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-briefcase"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Encontro</h2>
                            <p>
                                Vamos abrir a escola 15 minutos antes para todos se prepararem para os primeiros jogos.
                            </p>
                            <span class="vertical-date">07:45<br/> <small>Jul 21</small> </span>
                        </div>
                    </div>
                    <!--/CONTEUDO-->
                    <!--CONTEUDO-->
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-file-text"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Inicio Período Manhã</h2>
                            <p>Todos os jogos começam juntos, tudo depende das chaves distribuídas de cada jogo.</p>
                            <span class="vertical-date">08:00<br/> <small>Jul 21</small> </span>
                        </div>
                    </div>
                    <!--/CONTEUDO-->
                    <!--CONTEUDO-->
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Almoço</h2>
                            <p>Faremos uma pausa ás 12:00 para todos descansarem e se prepararem para o segundo período de jogos !</p>
                            <span class="vertical-date">12:00<br/><small>Jul 21</small> </span>
                        </div>
                    </div>
                    <!--/CONTEUDO-->
                    <!--CONTEUDO-->
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Início Período Tarde</h2>
                            <p>Depois do almoço retornamos com o segundo período de campeonatos com todos os jogos começando juntos !</p>
                            <span class="vertical-date">14:00<br/><small>Jul 21</small> </span>
                        </div>
                    </div>
                    <!--/CONTEUDO-->
                    <!--CONTEUDO-->
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Jantar</h2>
                            <p>Mais uma pausa para descanso dos nossos jogadores e a todos que estarão acompanhando. 
                                No estacionamento teremos <strong>carrinhos de comida</strong> para nos servir !
                            </p>
                            <span class="vertical-date">18:00<br/><small>Jul 21</small> </span>
                        </div>
                    </div>
                    <!--/CONTEUDO-->
                    <!--CONTEUDO-->
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Finais !</h2>
                            <p>Após a decisão dos campeões do período da manhã e tarde, os melhores colocados se enfrentam para
                                decidirem quem leva o prêmio final !
                            </p>
                            <span class="vertical-date">19:00<br/><small>Jul 21</small> </span>
                        </div>
                    </div>
                    <!--/CONTEUDO-->
                </div>
            </div>

        </div>
    </div>

</section>

<section id="contato" class="contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contato</h1>
                <p>Quer tirar suas dúvidas? Porfavor, fale conosco</p>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-sm-4 col-sm-offset-2">
                <address>
                    <strong><span class="navy">People Hortolândia</span></strong><br/>
                    Rua João Camilo de Camargo, nº 110<br/>
                    Lot. Remanso Campineiro, Hortolândia<br/>
                    <abbr title="Telefone">Tel:</abbr> (19) 3865-1388<br/>
                    <abbr title="Celular">Cel:</abbr> (19) 99343-5551
                    
                </address>
            </div>
            <div class="col-sm-4">
                <p class="text-color">
                    Pode nos encontrar também no <a href="https://www.google.com.br/maps/place/PEOPLE+FORMA%C3%87%C3%83O+COMPLETA+-+REMANSO+-/@-22.8651495,-47.2155772,15z/data=!4m5!3m4!1s0x0:0xb60a93d7aa16e940!8m2!3d-22.8651495!4d-47.2155772">Google Maps</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="m-t-sm">
                    Ou nos siga em nossas redes sociais
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="https://www.facebook.com/Peoplehorto/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/peoplehortolandia/"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; 2017 People Hortolândia</strong><br/> 
                    Site desenvolvido por <a href="https://br.linkedin.com/in/gabriel-silva-tosetti-b56013103">Gabriel Silva Tosetti</a>.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/plugins/wow/wow.min.js"></script>


<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>
</html>
