
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SRF Incorporadora e Construtora</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <meta name="description" content="SRF é uma construtora" />
    <meta name="keywords" content="imóveis em osasco, imóvel na planta" />
    <link href="css/style.css" rel="stylesheet">

    <script src="js/vendor/bootstrap.min.css"></script>

    <!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">



  </head>
  <body>
            <?php include("header.php"); ?>

            <div class="banner-page" style="background:url(images/urbano-armenian.jpg)">
              <div class="container">
                <nav>
                    <ol class="breadcrumb hidden-xs">
                      <li class="breadcrumb-item"><a href="https://www.srfincorporadora.com.br">Home</a></li>
                      <li class="breadcrumb-item"><a href="https://www.srfincorporadora.com.br/construcao.php">Em Construção</a></li>
                      <li class="breadcrumb-item">Urbano Armenian</li>
                    </ol>
                </nav>
                <h1>Urbano Armenian</h1>
              </div>
            </div>

            <div class="faixa-slider">
                <div class="container">
                  <div class="grid-slider-65 margin-10">
                      <div class="grid-slider-21">
                        <span class="ico-faixa"><i class="fas fa-bed fa-3x"></i></span>
                        <h4>2 dorms <br class="hidden-xs">1 suíte</h4>
                      </div>
                      <div class="grid-slider-31">
                        <span class="ico-faixa"><i class="far fa-object-group fa-3x"></i></span>
                        <h4>55,48 m², 58,55 m² e 55,50 m²</h4>
                      </div>
                      <div class="grid-slider-23">
                        <span class="ico-faixa"><i class="far fa-check-square fa-3x"></i></span>
                        <h4>Lazer completo</h34>
                      </div>
                      <div class="grid-slider-24">
                        <span class="ico-faixa"><i class="fas fa-map-marker-alt fa-3x"></i></span>
                        <h4>Ótima localização</h34>
                      </div>
                  </div>
                </div>
            </div>

            <div class="container">
                  <div class="row">
                      <div class="col-sm-push-7 col-md-push-8 col-sm-5 col-md-4">
                        <div class="frm-orcamento-box">
                          <p>Quero receber informações</p>
                          <form class="frm-orcamento formulario" id="frm-orcamento" name="form-orcamento" action="scripts/calltoacion.php"  method="post">
                            <div class="col-sm-12 col-md-6">
                              <input class="frm-orcamento-campo" type="text" name="nome" placeholder="Nome:" />
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <input class="frm-orcamento-campo celnumber" type="text" name="telefone" placeholder="Telefone:" />
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <input class="frm-orcamento-campo" type="text" name="email" placeholder="E-mail:" />
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <input class="frm-orcamento-campo" type="text" name="cidade" placeholder="Cidade:" />
                            </div>
                            <div class="col-sm-12 col-md-12">
                              <textarea class="frm-orcamento-campo" name="mensagem" placeholder="Escreva sua mensagem"></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <input type="hidden" id="" name="interesse" value="Urbano Arnenian">
                            <button class="frm-orcamento-button transition" type="submit">ENVIAR</button>
                          </form>
                        </div>
                      </div>
                      <div class="col-sm-pull-5 col-md-pull-4 col-sm-7 col-md-8 page-content">
                            <div class="col-sm-6 col-md-5">
                              <img class="img-fluid" src="images/logo-armenian-main.jpg">
                            </div>
                            <div class="col-sm-6 col-md-6 ficha-tecnica">
                              <h2>Ficha técnica</h2>
                              <ul>
                                <li>• Número de Torres: 1</li>
                                <li>• Unidades por Andar: 5 apartamentos</li>
                                <li>• Número de Pavimentos: 13 pavimentos</li>
                                <li>• Número de Elevadores: 2 elevadores</li>
                                <li>• Total de Unidades: 69 apartamentos</li>
                                <li>• Estacionamento: 1 ou 2 vagas</li>
                              </ul>
                            </div>
                      </div>
                  </div>
                  <div class="row">
                        <div class="col-sm-12 col-md-12 abre-destaques">
                          <h2>Galeria</h2>
                        </div>
                  </div>

                  <!-- GALERIA -->

                  <div class="row">
          						<div class="col-sm-12 col-md-12">
          							<div class="tabs">
              								<ul class="nav nav-tabs">
                  									<li class="nav-item active">
                  										  <a class="nav-link" href="#lazer" data-toggle="tab">LAZER</a>
                  									</li>
                  									<li class="nav-item">
                    										<a class="" href="#apartamento" data-toggle="tab">APARTAMENTO</a>
                  									</li>
                                    <li class="nav-item">
                    										<a class="nav-link" href="#plantas" data-toggle="tab">PLANTAS</a>
                  									</li>
              								</ul>
                              <div class="clearfix"></div>
              								<div class="tab-content">
                  									<div id="lazer" class="tab-pane active">

                                        <div class="slider-banners">
                                              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators hidden-xs">
                                                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                                                </ol>
                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" role="listbox">
                                                     <div class="item active">
                                                          <img src="images/urbano-armenian-piscina.jpg" class="img-responsive" alt="Sala">
                                                          <div class="carousel-caption">
                                                            <h2>Piscina</h2>
                                                          </div>
                                                     </div>
                                                     <div class="item">
                                                         <img src="images/urbano-armenian-fachada.jpg" class="img-responsive" alt="Fachada Urbano Armenian">
                                                          <div class="carousel-caption">
                                                            <h2>Fachada</h2>
                                                          </div>
                                                     </div>
                                                     <div class="item">
                                                          <img src="images/urbano-armenian-terraco.jpg" class="img-responsive" alt="Quarto">
                                                          <div class="carousel-caption">
                                                            <h2>Terraço</h2>
                                                          </div>
                                                    </div>
                                                    <div class="item">
                                                          <img src="images/urbano-armenian-festas.jpg" class="img-responsive" alt="Salão de festas">
                                                          <div class="carousel-caption">
                                                            <h2>Salão de festas</h2>
                                                          </div>
                                                    </div>
                                                    <div class="item">
                                                          <img src="images/urbano-armenian-gourmet.jpg" class="img-responsive" alt="Espaço Gourmet">
                                                          <div class="carousel-caption">
                                                              <h2>Espaço gourmet</h2>
                                                          </div>
                                                    </div>
                                                    <div class="item">
                                                          <img src="images/urbano-armenian-caes.jpg" class="img-responsive" alt="Espaço Pet">
                                                          <div class="carousel-caption">
                                                              <h2>Espaço Pet</h2>
                                                          </div>
                                                    </div>
                                                    <div class="item">
                                                          <img src="images/urbano-armenian-bicicletario.jpg" class="img-responsive" alt="Quiosque">
                                                          <div class="carousel-caption">
                                                              <h2>Bicicletário</h2>
                                                          </div>
                                                    </div>
                                                    <div class="item">
                                                          <img src="images/urbano-armenian-fachada.jpg" class="img-responsive" alt="Quiosque">
                                                          <div class="carousel-caption">
                                                              <h2>Fachada</h2>
                                                          </div>
                                                    </div>
                                              </div>
                                              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                                  <span class="glyphicon glyphicon-chevron-left"></span>
                                                  <span class="sr-only">Previous</span>
                                              </a>
                                              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                                  <span class="glyphicon glyphicon-chevron-right"></span>
                                                  <span class="sr-only">Next</span>
                                              </a>
                                          </div>
                                        </div>
                  									</div>
                                    <!-- final lazer-->
                  									<div id="apartamento" class="tab-pane">
                                      <div class="slider-banners">
                                            <div id="carousel-apartamento" class="carousel slide" data-ride="carousel">
                                              <!-- Indicators -->
                                              <ol class="carousel-indicators">
                                                <li data-target="#carousel-apartamento" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-apartamento" data-slide-to="1"></li>
                                              </ol>
                                              <!-- Wrapper for slides -->
                                              <div class="carousel-inner" role="listbox">
                                                   <div class="item active">
                                                        <img src="images/urbano-armenian-living.jpg" class="img-responsive" alt="Living">
                                                        <div class="carousel-caption">
                                                          <h2>Living</h2>
                                                        </div>
                                                   </div>
                                                   <div class="item">
                                                       <img src="images/urbano-armenian-sacada.jpg" class="img-responsive" alt="Sacada">
                                                        <div class="carousel-caption">
                                                          <h2>Sacada</h2>
                                                        </div>
                                                   </div>
                                            </div>
                                            <a class="left carousel-control" href="#carousel-apartamento" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-apartamento" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                      </div>
                  									</div>
                                    <!-- final apto-->
                                    <div id="plantas" class="tab-pane">
                                      <div id="apartamento" class="tab-pane">
                                        <div class="slider-banners">
                                              <div id="carousel-planta" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                  <li data-target="#carousel-planta" data-slide-to="0" class="active"></li>
                                                  <li data-target="#carousel-planta" data-slide-to="1"></li>
                                                  <li data-target="#carousel-planta" data-slide-to="2"></li>
                                                </ol>
                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" role="listbox">
                                                     <div class="item active">
                                                          <img src="images/urbano-armenian-planta-1.jpg" class="img-responsive" alt="Sala">
                                                          <div class="carousel-caption">
                                                            <h2>Planta tipo 1 - 55,48 m²</h2>
                                                          </div>
                                                     </div>
                                                     <div class="item">
                                                         <img src="images/urbano-armenian-planta-2.jpg" class="img-responsive" alt="Fachada Urbano Armenian">
                                                          <div class="carousel-caption">
                                                            <h2>Planta tipo 2 - 58,55 m²</h2>
                                                          </div>
                                                     </div>
                                                     <div class="item">
                                                         <img src="images/urbano-armenian-planta-3.jpg" class="img-responsive" alt="Fachada Urbano Armenian">
                                                          <div class="carousel-caption">
                                                            <h2>Planta tipo 3 - 55,50 m²</h2>
                                                          </div>
                                                     </div>
                                              </div>
                                              <a class="left carousel-control" href="#carousel-planta" data-slide="prev">
                                                  <span class="glyphicon glyphicon-chevron-left"></span>
                                                  <span class="sr-only">anterior</span>
                                              </a>
                                              <a class="right carousel-control" href="#carousel-planta" data-slide="next">
                                                  <span class="glyphicon glyphicon-chevron-right"></span>
                                                  <span class="sr-only">Próximo</span>
                                              </a>
                                          </div>
                                        </div>
                    									</div>
                  									</div>
                                    <!-- final apto-->
              								</div>
          							</div>
          						</div>
          					</div>

                  <div class="row">
                            <div class="col-sm-12 col-md-12 abre-destaques">
                              <h2>Lazer <span class="light">pensado para o</span> seu bem estar</h2>
                            </div>
                            <div class="itens-lazer-srf">
                                <div class="col-xs-12 col-sm-3 col-md-2">
                                    <ul>
                                        <li><span class="ico-lazer ico-fitness"></span><p>Fitness</p></li>
                                        <li><span class="ico-lazer ico-bicicletario"></span><p>Bicicletário</p></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2">
                                    <ul>
                                        <li><span class="ico-lazer ico-espacozen"></span><p>Espaço Zen</p></li>
                                        <li><span class="ico-lazer ico-espacopet"></span><p>Espaço Pet</p></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2">
                                    <ul>
                                        <li><span class="ico-lazer ico-piscina"></span><p>Piscina Adulto</p></li>
                                        <li><span class="ico-lazer ico-piscina"></span><p>Piscina Infantil</p></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2">
                                    <ul>
                                        <li><span class="ico-lazer ico-gourmet"></span><p>Área Gourmet</p></li>
                                        <li><span class="ico-lazer ico-churrasqueira"></span><p>Churrasqueira</p></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2">
                                    <ul>
                                        <li><span class="ico-lazer ico-portaria"></span><p>Portaria 24h</p></li>
                                        <li><span class="ico-lazer ico-paisagismo"></span><p>Paisagismo</p></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2">
                                    <ul>
                                        <li><span class="ico-lazer ico-festas"></span><p>Festas</p></li>
                                        <li><span class="ico-lazer ico-playground"></span><p>Playground</p></li>
                                    </ul>
                                </div>
                            </div>
                          </div>


          </div><!-- End Container -->


          <section class="content">
              <div class="container">
                <div class="row">
                      <div class="col-sm-12 col-md-12 abre-destaques">
                        <h2>Localização privilegiada</h2>
                        <p>Conheça apartamento decorado: Rua Lourença Colino, 147 - Presidente Altino</p>
                      </div>
                </div>
              </div>

               <div class="full-map">
                  <div class="col-md-7">
                    <div id="map"></div>
                  </div>
                  <div class="col-md-5 blue-map">
                        <ul>
                            <li><span class="ico-map pin-local"></span><p>Local</p></li>
                            <li><span class="ico-map pin-1"></span><p>Super Shopping Osasco <br> Walmart, SamsClub e Cobasi (7min)</p></li>
                            <li><span class="ico-map pin-2"></span><p>Shopping União, Poupatempo (8min)</p></li>
                            <li><span class="ico-map pin-3"></span><p>Rod. Castelo Branco (8min)</p></li>
                            <li><span class="ico-map pin-4"></span><p>Centro Comercial Alphaville - 13 Min</p></li>
                        </ul>
                        <ul>
                            <li><span class="ico-map pin-5"></span><p>Pinheiros (13 Min)</p></li>
                            <li><span class="ico-map pin-6"></span><p>Estação Osasco Cptm (3 Min)</p></li>
                            <li><span class="ico-map pin-7"></span><p>Lapa (15 Min)</p></li>
                            <li><span class="ico-map pin-8"></span><p>Centro Comercial Alphaville (13 Min)</p></li>
                        </ul>

                  </div>
               </div>
               <div class="container">
                      <div class="row">
                         <div class="col-sm-12 col-md-12 abre-destaques">
                           <h2><span class="light">Andamento das</span> obras</h2>
                         </div>
                     </div>
                    <div class="row status-obras">
                           <div class="col-sm-5 col-md-5">
                             <div class="calendario">
                               <span class="ico-calendar"><i class="far fa-calendar-check fa-3x"></i></span>
                               <p><span>Status atualizado em</span><br/>04/maio/2021</p>
                             </div>
                           </div>
                           <div class="col-sm-7 col-md-7">
                             <div class="progress">
                               <div class="progress-bar progress-bar-striped progress-bar-animated active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                               <p>&nbsp;&nbsp;90%</p>
                           </div>
                           </div>
                     </div>
               </div>
               <div class="row">
                 <div class="span12">
                   <div id="owl-demo" class="owl-carousel">
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-7.jpg" alt="Fotos atualizadas em 25/05/2018"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-8.jpg" alt="Fotos atualizadas em 25/05/2018"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-9.jpg" alt="Fotos atualizadas em 25/05/2018"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-10.jpg" alt="Fotos atualizadas em 25/05/2018"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-11.jpg" alt="Fotos atualizadas em 25/05/2018"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-12.jpg" alt="Fotos atualizadas em 25/05/2018"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-13.jpg" alt="Fotos atualizadas em 25/05/2018"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-14.jpg" alt="Fotos atualizadas em 25/05/2018"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-15.jpg" alt="Fotos atualizadas em 25/05/2018"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-16.jpg" alt="Fotos atualizadas em 25/05/2018"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-17.jpg" alt="Fotos atualizadas em 25/05/2018"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-18.jpg" alt="Fotos atualizadas em 25/05/2018"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-19.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-20.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-21.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-22.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-23.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-24.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-25.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-26.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-27.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-28.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-29.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-30.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-31.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-32.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-33.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-34.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-35.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-36.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-37.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-38.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-39.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-40.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-41.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-42.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-43.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-44.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-45.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-46.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-47.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-48.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-49.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-50.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     <div class="item"><img src="images/urbano-armenian/obras/urbano-armenian-obras-51.jpg" alt="Fotos atualizadas em 04/05/2021"></div>
                     
                   </div>
                 </div>
               </div>
          </section>
    <?php include("imoveis-em-destaque.php"); ?>
    <?php include("footer.php"); ?>
<!-- slider -->
<script src="js/novo/bootstrap.min.js"></script>
<!-- mapa -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7pjQbWS9t293G9nmjwIKFmpA5qUPtKes"></script>
<script type="text/javascript" src="js/mapmarker.jquery.js"></script>
<script type="text/javascript" src="js/mapa.js"></script>
<!-- fotos obras -->
<script src="owl-carousel/owl.carousel.js"></script>

</body>
</html>
