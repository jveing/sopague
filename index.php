<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SoPague - Soluções em Pagamento</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/creative.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
  <?php
  if (isset($_POST['BTEnvia'])) {

  	//Variaveis de POST, Alterar somente se necessário
  	//====================================================
  	$nome = $_POST['nome'];
  	$email = $_POST['email'];
  	$telefone = $_POST['telefone'];
  	$mensagem = $_POST['mensagem'];
  	//====================================================

  	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
  	//====================================================
  	$email_remetente = "comercial@sopague.com.br"; // deve ser uma conta de email do seu dominio
  	//====================================================

  	//Configurações do email, ajustar conforme necessidade
  	//====================================================
  	$email_destinatario = "joaovitor.logpro@gmail.com"; // pode ser qualquer email que receberá as mensagens
  	$email_reply = "$email";
  	$email_assunto = "Contato formmail"; // Este será o assunto da mensagem
  	//====================================================

  	//Monta o Corpo da Mensagem
  	//====================================================
  	$email_conteudo = "Nome = $nome \n";
  	$email_conteudo .= "Email = $email \n";
  	$email_conteudo .= "Telefone = $telefone \n";
  	$email_conteudo .= "Mensagem = $mensagem \n";
  	//====================================================

  	//Seta os Headers (Alterar somente caso necessario)
  	//====================================================
  	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
  	//====================================================

  	//Enviando o email
  	//====================================================
  	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
  					echo "</b>E-Mail enviado com sucesso!</b>";
  					}
  			else{
  					echo "</b>Falha no envio do E-Mail!</b>"; }
  	//====================================================
  }

  ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background:#fff;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img-fluid" src="img/logo.png" style="max-width:40%;" alt=""></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#vendamais">Venda Mais</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#sopague">SoPague</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#modulos">Módulos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#sobre">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contato">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

	<!-- SLIDER -->
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-0.7}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 032 css*/
        .jssorb032 {position:absolute;}
        .jssorb032 .i {position:absolute;cursor:pointer;}
        .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
        .jssorb032 .i:hover .b {fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:75px;left:0px;width:1300px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/001.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <!-- END SLIDER -->

<!--
    <section class="bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Nós temos o que você precisa!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Atualmente os cartões de crédito e débito estão cada vez mais presentes na vida do brasileiro, sendo responsável por uma grande parte dos meios de pagamento.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>
  -->
      <section id="vendamais">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Venda Mais</h2>
              <hr class="my-4">
            </div>
          </div>
        </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-5x fa-briefcase text-primary mb-3 sr-icons"></i>
              <h1 class="mb-3">Gestão Pública</h1>
              <p class="text-muted mb-0"><h5>Mobilidade no recebimento, aumento na arrecadação, mais opções de pagamento ao consumidor, opções de parcelamento, diminuição dos indices de inadimplência e recuperação de ativos.</h5></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-5x fa-user text-primary mb-3 sr-icons"></i>
              <h1 class="mb-3">Contribuinte</h1>
              <p class="text-muted mb-0"><h5>Mobilidade em efetuar seus pagamentos, não havendo a necessidade de deslocar até a instituição.</h5></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-5x fa-money text-primary mb-3 sr-icons"></i>
              <h1 class="mb-3">Economia</h1>
              <p class="text-muted mb-0"><h5>Redução nos custos de taxas de arrecadação.</h5></p>
            </div>
          </div>
          <!--<div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Made with Love</h3>
              <p class="text-muted mb-0">You have to make your websites with love these days!</p>
            </div>-->
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark" id="">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-white">A máquininha de cartão que possui tudo o que você precisa!</h2>
            <hr class="light my-4">
            <div class="row">
              <div class="col-lg-4">
                <img class="img-fluid" src="img/cardmachineweb.png" alt="" style="margin-top:25%;">
              </div>
              <div class="col-lg-8">
                <div class="row">
                  <div class="col-lg-6">
                    <i class="fa fa-3x fa-line-chart text-secundary mb-3 sr-icons margin-top-3"></i>
                    <h5 class="section-heading text-white marginMC">Débito e Crédito</h5>
                    <p class="text-muted mb-0">Mais opções de pagamento</p>
                  </div>
                  <div class="col-lg-6">
                    <i class="fa fa-3x fa-laptop text-secundary mb-3 sr-icons margin-top-3"></i>
                    <h5 class="section-heading text-white">Mobilidade</h5>
                    <p class="text-muted mb-0">Facilidade ao efetuar pagamentos</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <i class="fa fa-3x fa-bar-chart text-secundary mb-3 sr-icons margin-top-3"></i>
                    <h5 class="section-heading text-white">Inadimplência</h5>
                    <p class="text-muted mb-0">Dimui a taxa de inadimplência</p>
                  </div>
                  <div class="col-lg-6">
                    <i class="fa fa-3x fa-group text-secundary mb-3 sr-icons margin-top-3"></i>
                    <h5 class="section-heading text-white">Atendimento</h5>
                    <p class="text-muted mb-0">Agilidade no atendimento</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <i class="fa fa-3x fa-gavel text-secundary mb-3 sr-icons margin-top-3"></i>
                    <h5 class="section-heading text-white">Burocracia</h5>
                    <p class="text-muted mb-0">Redução de Burocracia</p>
                  </div>
                  <div class="col-lg-6">
                    <i class="fa fa-3x fa-cut text-secundary mb-3 sr-icons  margin-top-3"></i>
                    <h5 class="section-heading text-white">Ordem de Corte</h5>
                    <p class="text-muted mb-0">Redução nos gastos com Ordem de Corte</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section id="sopague">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">SOPAGUE</h2>
            <hr class="my-4">
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-2 text-center">
              <div class="service-box mt-5 mx-auto">
                  <i class="fa fa-2x fa-barcode text-primary mb-3 sr-icons"></i></br>
                  <button class="btn text" title="Autarquia disponibiliza o POS/Maquinha no atendimento/auto atendimento, possibilitando o consumidor a efetuar o pagamento da sua fatura através do pagamento de cartão de crédito/débito, gerando uma maior aproximação da autarquia ao consumidor." data-toggle="tooltip">Fatura</button>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fa fa-2x fa-credit-card text-primary mb-3 sr-icons"></i>
                <button class="btn text" title="Permite que o consumidor parcele suas contas pendentes, possibilitando a recuperação dos ativos." data-toggle="tooltip">Parcelamento</button>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fa fa-2x fa-copy text-primary mb-3 sr-icons"></i>
                <button class="btn text" title="Débitos: Possibilita a antecipação de parcelamento. Guias: Permite o pagamento de guias no atendimento e no autoatendimento." data-toggle="tooltip">Serviços de</br> Débitos e Guias</button>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fa fa-2x fa-file-text-o text-primary mb-3 sr-icons"></i>
                <button class="btn text" title="O consumidor tem a possibilidade de efetuar o pagamento de Ordens de Serviço no atendimento e autoatendimento." data-toggle="tooltip">Ordens de Serviço</button>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fa fa-2x fa-wrench text-primary mb-3 sr-icons"></i>
                <button class="btn text" title="Permite a solicitação de um serviço." data-toggle="tooltip">Solicitação de </br>Serviços</button>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fa fa-2x fa-cut text-primary mb-3 sr-icons"></i>
                <button class="btn text" title="O consumidor pode efetuar o pagamento antes do corte da água." data-toggle="tooltip">Ordem de Corte</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-primary" id="modulos">
      <div class="container">
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h2 class="section-heading text-center text-white">Módulos</h2>
                <hr class="light my-4">
              </div>
            </div>
            <div class="row margin-top-1">
              <div class="col-lg-5">
                <img class="img-fluid" src="img/maoCredito.png">
              </div>
              <div class="col-lg-6">
                <h4 class="text-secundary  faded margin-bottom-20">Débito/Crédito POS</h4>
                <div class="text-secundary text-white" >
                      - Captura de transacões de débito e crédito.;
                </div>
              </div>
            </div>

            <div class="margin-top-1">
            <div class="dropdown-divider"></div>

            <div class="row margin-top-1">
              <div class="col-lg-6 offset-lg-1">
                <h4 class="text-secundary  faded margin-bottom-20">Módulo Água</h4>
                <div class="text-secundary text-white" >
                      - Sistema para facilitar simplificar as dividas entre os departamentos e munícipes;
                </div>
              </div>
              <div class="col-lg-5" style="-webkit-transform: scaleX(-1);transform: scaleX(-1);">
                <img class="img-fluid" src="img/maoAgua.png">
              </div>
            </div>

            <div class="margin-top-1">
            <div class="dropdown-divider"></div>

            <div class="row margin-top-1">
              <div class="col-lg-5">
                <img class="img-fluid" src="img/maoWeb.png">
              </div>
              <div class="col-lg-6">
                <h4 class="text-secundary  faded margin-bottom-20">Web</h4>
                <div class="text-secundary text-white" >
                      - Sistema de acompanhamento de transações em tempo real;
                </div>
              </div>
            </div>

            <div class="margin-top-1">
            <div class="dropdown-divider"></div>

            <div class="row margin-top-1">
              <div class="col-lg-6 offset-lg-1">
                <h4 class="text-secundary  faded margin-bottom-20">Acompanhamento de Transações</h4>
                <div class="text-secundary text-white" >
                      - Acompanhamento e controle de transações financeiras operadas em sua plataforma;</br>
                      - Acompanhamento e controle de transações financeiras operadas em sua plataforma;</br>
                      - Extrato;
                </div>
              </div>
              <div class="col-lg-5">
                <img class="img-fluid" src="img/maoTransacao.png">
              </div>
            </div>

            <div class="margin-top-1">
            <div class="dropdown-divider"></div>

            <!--<div class="row margin-top-1">
              <div class="col-lg-5">
                <img class="img-fluid" src="img/maoTransacao2.png">
              </div>
              <div class="col-lg-6">
                <h4 class="text-secundary  faded margin-bottom-20">Liquidação de Transações</h4>
                <div class="text-secundary text-white" >
                    - Integração via CNAB para liquidação de transações;</br>
                    - Pagamentos dinâmicos via portal;</br>
                    - Repasse de valor de TU;</br>
                    - Cálculo para antecipação automática e esporádica;</br>
                    - Saldo antecipável por adquirente;</br>
                    - Cálculo de lançamentos futuros;</br>
                    - Fluxo de aprovação da antecipação;</br>
                    - Controle de regras e transações canceladas;</br>
                    - Cálculo da tarifa do cliente COMPESA + Juros e Multas;
                </div>
              </div>
            </div>-->

            <!--<div class="margin-top-1">
            <div class="dropdown-divider"></div>

            <div class="row margin-top-1">
              <div class="col-lg-6 offset-lg-1">
                <h4 class="text-secundary  faded margin-bottom-20">Conciliação</h4>
                <div class="text-secundary text-white" >
                    - Conciliação de ajustes de crédito;</br>
                    - Conciliação de cancelametos;</br>
                    - Conciliação de transações;</br>
                    - Rotina para gerar arquivo retorno de arrecadação;
                </div>
              </div>
              <div class="col-lg-5">
                <img class="rounded-circle offset-md-3" src="img/1.jpg">
              </div>
            </div>-->

            <!--<div class="margin-top-1">
            <div class="dropdown-divider"></div>

            <div class="row margin-top-1">
              <div class="col-lg-5">
                <img class="img-fluid" src="img/maoBackOffice.png">
              </div>
              <div class="col-lg-6">
                <h4 class="text-secundary  faded margin-bottom-20">Back Office</h4>
                <div class="text-secundary text-white" >
                    - Gestão de Acessos;</br>
                    - Interface Online com o Adquirente para envio e recebimento dos arquivos de credenciamentos;</br>
                    - Interface Online com o Adquirente para recebimento do Extrato Online;</br>
                    - Gestão comercial dos clientes;</br>
                    - Gestão de lotes de pagamento;</br>
                    - Consulta de Auditoria de Dados;

                </div>
              </div>
            </div>-->

            <div class="row margin-top-1">
              <div class="col-lg-6 offset-lg-1">
                <h4 class="text-secundary  faded margin-bottom-20">Gateway</h4>
                <div class="text-secundary text-white" >
                    - Integração DXC - API de pagamentos;</br>
                    - Gerenciamento de Fallback ;</br>
                    - Pagamentos por meio de sites e aplicativos;
                </div>
              </div>
              <div class="col-lg-5">
                <img class="img-fluid" src="img/maoGateway.png">
              </div>
            </div>

            <div class="margin-top-1">
            <div class="dropdown-divider"></div>

            <div class="row margin-top-1">
              <div class="col-lg-5">
                <img class="img-fluid" src="img/maoCompany.png">
              </div>
              <div class="col-lg-6">
                <h4 class="text-secundary  faded margin-bottom-20">In Company</h4>
                <div class="text-secundary text-white" >
                    - Relatório Análítico de Vendas Conciliadas;</br>
                    - Relatório Análitico de Divergências de Vendas;</br>
                    - Relatório Análitico de Pagamentos Conciliados;</br>
                    - Relatório Análitico de Divergências de Pagamentos;</br>
                    - Relatório Analítico de Recebimentos Conciliados;</br>
                    - Relatório Análítico de Divergências de Recebimentos;</br>
                    - Relatório Consolidado de Vendas;</br>
                    - Relatório Consolidado de Pagamentos;</br>
                    - Relatório Consolidado de Recebimentos;</br>
                    - Saldo a pagar e movimentações;</br>
                    - Dados transacionais;</br>
                    - Gráficos de Tendências;</br>
                    - Análises Comportamentais;</br>
                    - Dados consolidados e por cliente;</br>
                    - Configurador de Identidade Visual;
                </div>
              </div>
            </div>

            <div class="margin-top-1">
            <div class="dropdown-divider"></div>

            <div class="row margin-top-1">
              <div class="col-lg-6 offset-lg-1">
                <h4 class="text-secundary  faded margin-bottom-20">PIN PAD</h4>
                <div class="text-secundary text-white" >
                    - Relatório Análítico de Vendas Conciliadas;</br>
                    - Relatório Análítico de Divergências de Vendas;
                </div>
              </div>
              <div class="col-lg-5">
                <img class="img-fluid" src="img/maoPinPad.png">
              </div>
            </div>

            <div class="margin-top-1">
            <div class="dropdown-divider"></div>

            <div class="row margin-top-1">
              <div class="col-lg-5">
                <img class="img-fluid" src="img/maoPCI.png">
              </div>
              <div class="col-lg-6">
                <h4 class="text-secundary  faded margin-bottom-20">PCI DSS</h4>
                <div class="text-secundary text-white" >
                    - Integração DXC - API de pagamentos;</br>
                    - Gerenciamento de Fallback ;
                </div>
              </div>
            </div>

          </div>
        </div>
    </section>

    <section class="bg-dark text-white" id="sobre">
      <div class="container text-center">
        <h2 class="mb-4">Sobre Nós</h2>
        <hr class="light my-4">
        <div class="row">
          <div class="col-lg-5 col-sm-6">
            <img class="img-fluid" src="img/portfolio/thumbnails/aboutus.jpg" alt="">
          </div>
          <div class="col-lg-6 col-sm-6">
            <p class="mb-5 text-white text-left">Uma empresa empenhada em gerar alternativas para amplificar os resultados do seu negócio.</p>
            <p class="mb-5 text-white text-left">Disponibilizamos ferramentas/softwares de última geração e alta performance, que otimizam e facilitam os meios de pagamento e recebimento.</p>
            <p class="mb-5 text-white text-left">Os profissionais da SoPague apoiam a construção de resultados, tornando as atividades financeiras, simples, intuitivas e agradáveis.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
   <section id="contato">
     <div class="container">
       <div class="col-lg-8 mx-auto text-center">
         <h2 class="section-heading">Entre em contato!</h2>
         <hr class="my-4">
         <p class="mb-5">Pronto para crescer com a sua empresa? Ótimo! Ligue para a gente ou mande um email e retornaremos o mais breve possível!</p>
       </div>
       <div class="row">
         <div class="col-lg-4 ml-auto text-center">
           <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
           <p>(48)99126-0313</p>
         </div>
         <div class="col-lg-4 mr-auto text-center">
           <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
           <p>
             <a href="mailto:comercial@sopague.com.br">comercial@sopague.com.br</a>
           </p>
         </div>
       </div>
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
           <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
           <form name="sentMessage" id="contactForm" novalidate="novalidate" action="<? $PHP_SELF; ?>" method="POST">
             <div class="control-group">
               <div class="form-group floating-label-form-group controls mb-0 pb-2">
                 <label>Nome</label>
                 <input class="form-control" id="nome" type="text" placeholder="Nome" required="required" data-validation-required-message="Por favor, coloque seu nome.">
                 <p class="help-block text-danger"></p>
               </div>
             </div>
             <div class="control-group">
               <div class="form-group floating-label-form-group controls mb-0 pb-2">
                 <label>Email</label>
                 <input class="form-control" id="email" type="email" placeholder="email@email.com.br" required="required" data-validation-required-message="Por favor, coloque seu email.">
                 <p class="help-block text-danger"></p>
               </div>
             </div>
             <div class="control-group">
               <div class="form-group floating-label-form-group controls mb-0 pb-2">
                 <label>Telefone</label>
                 <input class="form-control" id="fone" type="tel" placeholder="(xx)xxxx-xxxx" required="required" data-validation-required-message="Por favor, coloque o número do seu telefone.">
                 <p class="help-block text-danger"></p>
               </div>
             </div>
             <div class="control-group">
               <div class="form-group floating-label-form-group controls mb-0 pb-2">
                 <label>Mensagem</label>
                 <textarea class="form-control" id="mensagem" rows="5" placeholder="Escreva sua mensagem" required="required" data-validation-required-message="Por favor, mande uma mensagem."></textarea>
                 <p class="help-block text-danger"></p>
               </div>
             </div>
             <br>
             <div id="success"></div>
             <div class="form-group">
               <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton" name="BTEnvia" value="Enviar">Enviar</button>
               <input type="reset" name="BTApaga" value="Apagar">
             </div>
           </form>
         </div>
       </div>
     </div>
   </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
          $('[data-toggle="tooltip"]').tooltip();
      });
    </script>

  </body>

</html>
