
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
                          <a href="duvidas-frequentes.php" class="list-group-item">Dúvidas Frequentes</a>
                          <a href="fale-conosco.php" class="list-group-item active">Fale conosco</a>
                        </div>
          						</div>
                      <div class="col-sm-12 col-md-9">
                              <h2 class="subtitle-srf">Fale Conosco</h2>
                              <p>Para agilizar seu atendimento, reunimos as principais dúvidas relacionadas dos nossos clientes. Confira aqui</p>
                              <div id="accordion">

                                <div class="duvida-srf">
                                  <div class="card-header" id="naosoucliente">
                                    <h5 class="mb-0">
                                      <button class="bt-fale-conosco bt-azul" data-toggle="collapse" data-target="#abreformnaocliente" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="ico-nao-sou-cliente"></i> <h3>Ainda não sou cliente</h3>
                                        <p>Clique aqui e preencha o formulário de contato. Assim que possível entraremos em contato</p>
                                      </button>
                                    </h5>
                                  </div>
                                  <div id="abreformnaocliente" class="collapse" aria-labelledby="naosoucliente" data-parent="#accordion">
                                    <div class="card-form">
                                      <div class="card-form col-sm-12 col-md-12">
                                        <p>Preencha corretamente seu e-mail e telefone, é nestes canais que faremos contato com você!</p>
                                          <form role="form" id="formcontact" method="post" action="scripts/nao-cliente.php" onSubmit="return valida_dados(this)">
                                              <div class="form-group col-sm-6 col-md-6">
                                                <input type="text" class="form-control" placeholder="Seu nome" name="nome">
                                              </div>
                                              <div class="form-group col-sm-6 col-md-6">
                                                <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Seu e-mail" name="email">
                                              </div>
                                              <div class="form-group col-sm-6 col-md-6">
                                                <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Telefone" name="telefone">

                                              </div>
                                              <div class="form-group col-sm-6 col-md-6">
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cidade" name="cidade">
                                              </div>
                                              <div class="form-group col-md-12">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escreva sua mensagem" name="mensagem"></textarea>
                                                <button type="submit" class="btn btn-primary">ENVIAR</button>
                                              </div>
                                            </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="contato-srf">
                                <div class="card-header" id="headingFour">
                                  <h5 class="mb-0">
                                    <button class="bt-fale-conosco bt-verm" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="ico-ja-sou-cliente"></i> <h3>Já sou cliente</h3>
                                      <p>Caso queira tirar alguma dúvida, clique para enviar sua mensagem:</p>
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                  <div class="card-form col-sm-12 col-md-12">
                                    <p>Para atualizar seu cadastro, emissão 2ª via de boleto, solicitar assistência técnica, acesse o <a href="https://sabrinasaldanha-portalcliente.sienge.com.br/PortalCliente/" target="_blank">PORTAL DO CLIENTE</a>.</p>
                                        <form role="form" id="formcontact" method="post" action="scripts/cliente.php" onSubmit="return valida_dados(this)">

                                          <div class="form-group col-sm-6 col-md-6">
                                            <input type="text" class="form-control" placeholder="Seu nome" name="nomecliente">
                                          </div>
                                          <div class="form-group col-sm-6 col-md-6">
                                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Seu e-mail" name="emailcliente">
                                          </div>
                                          <div class="form-group col-sm-6 col-md-6">
                                              <input type="text" class="form-control" id="" placeholder="Telefone" name="telefonecliente">
                                          </div>
                                          <div class="form-group col-sm-6 col-md-6">
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cidade" name="cidadecliente">
                                          </div>
                                          <div class="form-group col-md-12">
                                            <select id="" class="form-control" name="empreendimentotratar">
                                              <option value="">Sobre qual empreendimento gostaria de tratar?</option>
                                              <option value="Boulevart Flamboyant">Boulevart Flamboyant</option>
                                              <option value="Anunciatta D'Lucia">Anunciatta D'Lucia - Osasco</option>
                                              <option value="Urbano Armenian">Urbano Italian</option>
                                              <option value="Waymea Bay">Waymea Bay</option>
                                              <option value="SP Empresarial">SP Empresarial</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-md-12">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensagemcliente"></textarea>
                                            <button type="submit" class="btn btn-primary">ENVIAR</button>
                                          </div>
                                        </form>

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
