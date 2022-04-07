
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
    <script src="js/vendor/modernizr-latest.js"></script>
  </head>
  <body>
    <?php include("header.php"); ?>
    <section class="slider">
      <div class="slider-home flex-slider hidden-xs">
        <ul class="slides">
          <a href="urbano-italian.php"><li class="banner-item" style="background:url(images/slider-1.jpg)"></li></a>
          <a href="sp-empresarial.php"><li class="banner-item" style="background:url(images/slider-2.jpg)"></li></a>
        </ul>

    </section>
    <section class="slider">
      <div class="slider-home flex-slider visible-xs">
        <ul class="slides">
          <li class="banner-item" style="background:url(images/slider-1-mobile.jpg)"></li>
          <li class="banner-item" style="background:url(images/slider-2-mobile.jpg)"></li>
        </ul>

    </section>

    <?php include("destaque-home.php"); ?>
    <section class="content">
         <div class="full-banner">
               <div class="box-institucional-srf text-center">
                 <a title="Conheça a SRF" href="conheca-a-srf.php">
                    <h3>RESPEITO E</h3>
                    <h2>TRANSPARÊNCIA</h2>
                    <p>Conheça a SRF e o compromisso firmado com você.</p>
                   <span class="transition">VEJA MAIS</span>
                 </a>
               </div>
         </div>
    </section>

    <div class="container">
        <!-- Imóveis em destaque SRF -->
        <div class="row">
              <div class="col-sm-12 col-md-12 abre-destaques">
                <h2><span class="light">Imóveis</span> Prontos para morar</h2>
              </div>
              <div class="col-sm-4 col-md-4">
                <div class="imoveis-destaque-srf">
                    <figure class="border-blue-product">
                      <a href="anunciattadlucia.php">
                        <img class="img-fluid transition thumb-empreendimento" alt="" src="images/thumbs/anunciatta.jpg"/>
                      </a>
                      <div class="status-imovel-thumb">
                          <h4>Pronto para morar <br><small>2 dorms</small></h4>
                      </div>
                    </figure>
                    <div class="descricao-imovel-thumb">
                        <img class="img-fluid logo-empreendimento-thumb" src="images/thumbs/logo-anunciatta-small.png"/>
                        <hr>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                          <h3 class="titulo-imovel-thumb">Osasco</h3>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-8">
                          <p class="localiza-desc-thumb">KM 18 - Próximo a estações de trem e marginais</p>
                        </div>
                        <a href="anunciattadlucia.php"><button type="button" class="btn btn-primary btn-lg btn-block bt-red">Quero conhecer</button></a>
                    </div>
                </div>
              </div>

              <div class="col-sm-4 col-md-4 box box-urgencia">
                <div class="imoveis-destaque-srf">
                    <figure class="border-green-product">
                      <a href="boulevart-flamboyant.php">
                        <img class="img-fluid transition thumb-empreendimento" alt="" src="images/thumbs/boulevart-flamboyant-sjc.jpg"/>
                      </a>
                      <div class="status-imovel-thumb">
                          <h4>Pronto para morar <br><small>2 dorms</small></h4>
                      </div>
                    </figure>
                    <div class="descricao-imovel-thumb">
                        <img class="img-fluid logo-empreendimento-thumb" src="images/thumbs/logo-boulevart-small.png"/>
                        <hr>
                        <div class="col-md-5 col-sm-5 col-xs-5">
                          <h3 class="titulo-imovel-thumb">SJCampos</h3>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                          <p class="localiza-desc-thumb">Próximo à Embraer 5 min do Centro</p>
                        </div>
                        <a href="boulevart-flamboyant.php"><button type="button" class="btn btn-primary btn-lg btn-block bt-red">Quero conhecer</button></a>
                    </div>
                </div>
              </div>

              <div class="col-sm-4 col-md-4 box box-urgencia">
                <div class="imoveis-destaque-srf">
                    <figure class="border-orange-product">
                      <a href="waymea-bay.php">
                        <img class="img-fluid transition thumb-empreendimento" alt="" src="images/thumbs/waymea-bay-osasco.jpg"/>
                      </a>
                      <div class="status-imovel-thumb">
                          <h4>Pronto para morar <br><small>2 e 3 dorms</small></h4>
                      </div>
                    </figure>
                    <div class="descricao-imovel-thumb">
                        <img class="img-fluid logo-empreendimento-thumb" src="images/thumbs/logo-waymea-small.png"/>
                        <hr>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                          <h3 class="titulo-imovel-thumb">Osasco</h3>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-8">
                          <p class="localiza-desc-thumb">Próximo à prefeitura e estabelecimentos</p>
                        </div>
                        <a href="waymea-bay.php"><button type="button" class="btn btn-primary btn-lg btn-block bt-red">Quero conhecer</button></a>
                    </div>
                </div>
              </div>
          </div>

    </div>
    <?php include("footer.php"); ?>
</body>
</html>
