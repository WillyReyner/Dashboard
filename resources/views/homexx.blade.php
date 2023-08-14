<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Bolao</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://demo2.bolao.club/css/welcome.css">

    <script src="https://kit.fontawesome.com/f3b357d5aa.js" crossorigin="anonymous"></script>




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="https://demo2.bolao.club/storage/assets/logo.png" class="img-responsive"
                    style="max-width: 150px !important; " alt="Image">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://demo2.bolao.club/login">Login</a></li>
                    <li><a href="https://demo2.bolao.club/register">Cadastro</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <div class="container">
        <div class="div" style="padding: 1.5em">
            <!-- Slide -->
            <div id="carousel_principal" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="" src="https://demo2.bolao.club/storage/assets/slide1_image.png">
                        <div class="container">
                            <div class="carousel-caption">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel_principal" data-slide="prev"><span
                        class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel_principal" data-slide="next"><span
                        class="glyphicon glyphicon-chevron-right"></span></a>
            </div>

            <!-- End Slide -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">

                    <div class="col-xs-4 col-sm-2">
                        <center>
                            <p><b>Rodada #12</b>
                                <span class="label label-default"> Vencedor </span>
                            </p>
                        </center>
                        <a href="#" class="thumbnail" style="margin-bottom:5px !important;">
                            <img src="https://demo2.bolao.club/img/soccer.png" alt="...">
                        </a>
                        <a class="btn btn-default btn-block"
                            href="https://demo2.bolao.club/contest/public/redirector/12"
                            role="button"><small>APOSTAR</small></a>
                    </div>


                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class=" col-sm-12">
                    </div>
                </div>
            </div>
        </div>

        <br />

        <form class="" id="bet" action="https://demo2.bolao.club/precreate" method="POST" role="form">

            <div class="panel panel-dark">
                <div class="panel-body">
                    <div class="row text-center">
                        <span style="font-size: 1em; padding-left: 10px;">Rodada #12 fecha em</span>
                        <br />
                        <span style="font-size: 1.5em; padding-left: 10px; font-weight:900;">30/07/2023 16:01</span>
                    </div>
                </div>
            </div>
            <input type="hidden" name="_token" value="KU7Sz7bFDtFA4zO1FoYtzmg4PEmLEl0AQbh1J7nL">

            <div class="panel panel-dark">
                <div class="panel-body">
                    <h5><b>Rodada #12</b></h5>
                    <!-- PARA MARCAR PONTOS É NECESSÁRIO ACERTAR O PLACAR EXATO DA PARTIDA -->

                    <h3><b>Premiação Atual <span style="color:green">R$0.00</span></b></h3>
                    <h4>Mais Pontos: <span style="color:green">R$ 0.00</span></h4>
                    <a class="btn btn-primary" href="#bet-anchor" role="button"><span
                            style="font-weight: 900;">APOSTAR</span></a>
                    <a class="btn btn-link " style="color: #fff; text-decoration:underline;"
                        href="https://demo2.bolao.club/ranking/public/12" role="button">VER RANKING</a>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPunter_name" class="control-label">Nome:</label>
                <input type="text" name="punter_name" id="inputPunter_name" class="form-control input-lg" value=""
                    required="required">
            </div>

            <div class="form-group">
                <label for="inputPunter_Phone" class="control-label">Whatsapp: <small>por favor insira
                        DDD+NUMERO</small></label>
                <input type="text" name="punter_phone" id="inputPunter_Phone" class="form-control" value=""
                    required="required">
            </div>

            <table class="table">
                <input type="hidden" name="_token" value="KU7Sz7bFDtFA4zO1FoYtzmg4PEmLEl0AQbh1J7nL">
                <tbody>
                    <tr>
                        <!-- <td>2023-07-29 17:03:00</td> -->
                        <td colspan="3" class="text-center" style="border-bottom: none !important;">
                            <img src="http://escudos.bolao.club/storage/shields/flamengo.png" width="50px"
                                class="img-responsive inline-block" />
                            <img src="http://escudos.bolao.club/storage/shields/vasco.png" width="50px"
                                class="img-responsive inline-block" />
                            <br />
                            <b class="text-uppercase">
                                <i>
                                    flamengo x vasco
                                </i>
                            </b>
                            <br />
                            <small>brasileirão serie a - 29/07 17:03</small>
                        </td>
                        <!-- <td>brasileirão serie a</td> -->
                    </tr>
                    <tr class="text-center">
                        <td style="border-top: none !important;">
                            <div class="limit-this">
                                <input type="radio" class="chooseRadio" id="input_44-1" name="match[1]" value="44-1"
                                    required>
                                <label for="input_44-1">
                                    CASA
                                </label>
                            </div>
                        </td>
                        <td style="border-top: none !important;">
                            <div class="limit-this">
                                <input type="radio" class="chooseRadio" id="input_44-X" name="match[1]" value="44-X"
                                    required>
                                <label for="input_44-X">
                                    EMPATE
                                </label>
                            </div>
                        </td>
                        <td style="border-top: none !important;">
                            <div class="limit-this">
                                <input type="radio" class="chooseRadio" id="input_44-2" name="match[1]" value="44-2"
                                    required>
                                <label for="input_44-2">
                                    FORA
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!-- <td>2023-07-30 17:03:00</td> -->
                        <td colspan="3" class="text-center" style="border-bottom: none !important;">
                            <img src="http://escudos.bolao.club/storage/shields/cruzeiro.png" width="50px"
                                class="img-responsive inline-block" />
                            <img src="http://escudos.bolao.club/storage/shields/fluminense.png" width="50px"
                                class="img-responsive inline-block" />
                            <br />
                            <b class="text-uppercase">
                                <i>
                                    cruzeiro x fluminense
                                </i>
                            </b>
                            <br />
                            <small>brasileirão serie a - 30/07 17:03</small>
                        </td>
                        <!-- <td>brasileirão serie a</td> -->
                    </tr>
                    <tr class="text-center">
                        <td style="border-top: none !important;">
                            <div class="limit-this">
                                <input type="radio" class="chooseRadio" id="input_45-1" name="match[2]" value="45-1"
                                    required>
                                <label for="input_45-1">
                                    CASA
                                </label>
                            </div>
                        </td>
                        <td style="border-top: none !important;">
                            <div class="limit-this">
                                <input type="radio" class="chooseRadio" id="input_45-X" name="match[2]" value="45-X"
                                    required>
                                <label for="input_45-X">
                                    EMPATE
                                </label>
                            </div>
                        </td>
                        <td style="border-top: none !important;">
                            <div class="limit-this">
                                <input type="radio" class="chooseRadio" id="input_45-2" name="match[2]" value="45-2"
                                    required>
                                <label for="input_45-2">
                                    FORA
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!-- <td>2023-07-30 18:05:00</td> -->
                        <td colspan="3" class="text-center" style="border-bottom: none !important;">
                            <img src="http://escudos.bolao.club/storage/shields/corinthians.png" width="50px"
                                class="img-responsive inline-block" />
                            <img src="http://escudos.bolao.club/storage/shields/coritiba.png" width="50px"
                                class="img-responsive inline-block" />
                            <br />
                            <b class="text-uppercase">
                                <i>
                                    corinthians x coritiba
                                </i>
                            </b>
                            <br />
                            <small>brasileirão serie a - 30/07 18:05</small>
                        </td>
                        <!-- <td>brasileirão serie a</td> -->
                    </tr>
                    <tr class="text-center">
                        <td style="border-top: none !important;">
                            <div class="limit-this">
                                <input type="radio" class="chooseRadio" id="input_46-1" name="match[3]" value="46-1"
                                    required>
                                <label for="input_46-1">
                                    CASA
                                </label>
                            </div>
                        </td>
                        <td style="border-top: none !important;">
                            <div class="limit-this">
                                <input type="radio" class="chooseRadio" id="input_46-X" name="match[3]" value="46-X"
                                    required>
                                <label for="input_46-X">
                                    EMPATE
                                </label>
                            </div>
                        </td>
                        <td style="border-top: none !important;">
                            <div class="limit-this">
                                <input type="radio" class="chooseRadio" id="input_46-2" name="match[3]" value="46-2"
                                    required>
                                <label for="input_46-2">
                                    FORA
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!-- <td>2023-07-30 16:06:00</td> -->
                        <td colspan="3" class="text-center" style="border-bottom: none !important;">
                            <img src="http://escudos.bolao.club/storage/shields/brusque.png" width="50px"
                                class="img-responsive inline-block" />
                            <img src="http://escudos.bolao.club/storage/shields/criciuma.png" width="50px"
                                class="img-responsive inline-block" />
                            <br />
                            <b class="text-uppercase">
                                <i>
                                    Brusque x Criciuma
                                </i>
                            </b>
                            <br />
                            <small>brasileirão serie a - 30/07 16:06</small>
                        </td>
                        <!-- <td>brasileirão serie a</td> -->
                    </tr>
                    <tr class="text-center">
                        <td style="border-top: none !important;">
                            <div class="limit-this">
                                <input type="radio" class="chooseRadio" id="input_47-1" name="match[4]" value="47-1"
                                    required>
                                <label for="input_47-1">
                                    CASA
                                </label>
                            </div>
                        </td>
                        <td style="border-top: none !important;">
                            <div class="limit-this">
                                <input type="radio" class="chooseRadio" id="input_47-X" name="match[4]" value="47-X"
                                    required>
                                <label for="input_47-X">
                                    EMPATE
                                </label>
                            </div>
                        </td>
                        <td style="border-top: none !important;">
                            <div class="limit-this">
                                <input type="radio" class="chooseRadio" id="input_47-2" name="match[4]" value="47-2"
                                    required>
                                <label for="input_47-2">
                                    FORA
                                </label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <center>
                <!-- <button type="button" class="btn btn-info" value="random" onclick="callRandom()">Aleatório</button> -->
            </center>
            <br />

            <input type="hidden" name="contest_id" id="inputContest_id" class="form-control" value="12">

            <div class="form-group">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Apostar R$10,00</button>
            </div>


        </form>

        <br />
        <br />

        <center>
            <a href="https://demo2.bolao.club/" target="_blank" class="btn btn-link"><i class="fa fa-whatsapp"></i></a>

            <div class="row">
                <a class="btn btn-link" data-toggle="modal" href='#rules'>Regras</a>
                <div class="modal fade" id="rules">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title" style="color: #000;">Regras</h4>
                            </div>
                            <div class="modal-body text-left" style="color: #000;">
                                Regras do Bolao.
                                Jogos adiados não valem no bolão.
                                Empate de pontos divide premiação.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"></div>
            <br />
            <!-- visit counter -->

        </center>

        <br />
    </div>




    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>


    <script>
    //Uncheck Radio
    $('input[type=radio]').click(function() {
        if (this.previous) {
            this.checked = false;
        }
        this.previous = this.checked;
    });
    </script>


    <script>
    function callRandom() {
        var radios = document.getElementsByClassName('chooseRadio');
        for (var i = 0; i < radios.length; i++) {
            radios[i].checked = ((Math.random() * 10) > 3) ? true : false;
        }
    }
    </script>

    <script>
    jQuery("input#inputPunter_Phone")
        .mask("(99) 9999-9999?9")
        .focusout(function(event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            phone = target.value.replace(/\D/g, '');
            element = $(target);
            element.unmask();
            if (phone.length > 10) {
                element.mask("(99) 99999-999?9");
            } else {
                element.mask("(99) 9999-9999?9");
            }
        });
    </script>

</body>

</html>
