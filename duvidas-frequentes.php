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
  </head>
  <body>
            <?php include("header.php"); ?>
            <div class="header-institucional">
              <div class="container">
                <nav>
                    <ol class="breadcrumb hidden-xs">
                      <li class="breadcrumb-item"><a href="https://www.srfincorporadora.com.br">Home</a></li>
                      <li class="breadcrumb-item"><a href="https://www.srfincorporadora.com.br/conheça-a-srf.html">Sobre nós</a></li>
                    </ol>
                </nav>
                <h1>Sobre nós</h1>
              </div>
            </div>
            <div class="container">
                  <div class="row">
          						<div class="col-sm-12 col-md-3">
                        <div class="list-group">
                          <a href="conheca-a-srf.php" class="list-group-item">Conheça a SRF</a>
                          <a href="principios-de-qualidade.php" class="list-group-item">Princípios de qualidade</a>
                          <a href="nossas-crencas.php" class="list-group-item">Nossas crenças</a>
                          <a href="responsabilidade-socioambiental.php" class="list-group-item">Responsabilidade Socioambiental</a>
                          <a href="duvidas-frequentes.php" class="list-group-item active">Dúvidas Frequentes</a>
                          <a href="fale-conosco.php" class="list-group-item">Fale conosco</a>
                        </div>
          						</div>

                      <div class="col-sm-12 col-md-9">
                              <h2 class="subtitle-srf">Dúvidas frequentes</h2>
                              <p>Para agilizar seu atendimento, reunimos as principais dúvidas relacionadas dos nossos clientes. Confira aqui</p>
                              <div id="accordion">
                                <div class="duvida-srf">
                                  <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                      <button class="bt-question" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-plus-circle"></i> Como funciona a compra de um imóvel na planta?
                                      </button>
                                    </h5>
                                  </div>
                                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                      Você fará o contrato de um imóvel que ainda será construído. Assim, você irá analisar o projeto do empreendimento para depois continuar o processo de compra. De certa forma você estará financiando a construção, e o prazo médio para a obra ficar pronta é de 18 a 36 meses.
                                    </div>
                                  </div>
                                </div>
                                <div class="duvida-srf">
                                  <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                      <button class="bt-question" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-plus-circle"></i> Quais são as vantagens de comprar um imóvel no lançamento?
                                      </button>
                                    </h5>
                                  </div>
                                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                      A facilidade de pagamento oferecidas, margens maiores de financiamento junto ao seu agente financeiro e o principal deles é o preço, que depois de construído terá uma valorização superior.
                                    </div>
                                  </div>
                                </div>
                                <div class="duvida-srf">
                                  <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                      <button class="bt-question" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-plus-circle"></i> Posso utilizar meu FGTS como entrada?
                                      </button>
                                    </h5>
                                  </div>
                                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                      O uso do saldo disponível no FGTS é um bom negócio para a compra de imóvel. Você pode utilizar seu FGTS para amortizar o valor integral ou parcial do seu imóvel. Assim você acumula recursos que porventura não poderia utilizar para outra finalidade.
                                    </div>
                                  </div>
                                </div>
                                <div class="duvida-srf">
                                  <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                      <button class="bt-question" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-plus-circle"></i> Como posso antecipar as parcelas e/ou emissão de 2a via de boleto?
                                      </button>
                                    </h5>
                                  </div>
                                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                      Acesse nosso <a href="https://sabrinasaldanha-portalcliente.sienge.com.br/PortalCliente/" target="_blank"><mark>portal do cliente</mark></a> com seu usuário e senha e clique sobre a opção desejada.
                                    </div>
                                  </div>
                                </div>
                              </div>

          						</div>
          					</div>

          </div><!-- End Container -->

    <?php include("imoveis-em-destaque.php"); ?>
    <?php include("footer.php"); ?>
</body>
</html>
