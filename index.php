<!DOCTYPE html>
<?php
include_once './src/GenimoFrontEnd.php';
//echo '<pre>';
$detail = GenimoFrontEnd::getCompany();
//var_dump($detail);
//die();
?>
<html>
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Residency theme">
        <meta name="keywords" content="Residency,sale,buy,rent,pg,house,villa,apartment">
        <meta name="author" content="Fortune Creations">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

        <script type="text/javascript" src="js/utils.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkJEjT73RmsOw1Ldy3S9RbWg_-PDRh8zE&libraries=places" async defer></script>
        <script>
            var viewController = new GenimoFrontEnd();
        </script>

        <title><?php echo $detail->company->nmCompany . ' - ' . $detail->company->dsSlogan . ' - ' . $detail->company->nuPhone . ' - ' . $detail->company->nmCity; ?></title>

    </head>
    <body>
        <header>
            <div class="welcome_header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h6><?php echo $detail->company->dsSlogan; ?></h6>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="welcome_header_menu">
                                <?php
                                if (!empty($detail->company->dsLinkFacebook)) {
                                    echo '<li class="facebook_icon"><a href="' . $detail->company->dsLinkFacebook . '"><i class="fa fa-facebook"> </i></a> </li>';
                                }
                                if (!empty($detail->company->dsLinkTwitter)) {
                                    echo '<li class="twitter_icon"><a href="' . $detail->company->dsLinkTwitter . '"><i class="fa fa-twitter"> </i></a> </li>';
                                }
                                if (!empty($detail->company->dsLinkGooglePlus)) {
                                    echo '<li class="google_plus_icon"><a href="' . $detail->company->dsLinkGooglePlus . '"><i class="fa fa-google-plus"> </i></a> </li>';
                                }
                                if (!empty($detail->company->dsLinkYouTube)) {
                                    echo '<li class="youtube_icon"><a href="' . $detail->company->dsLinkYouTube . '"><i class="fa fa-youtube-play"> </i></a> </li>';
                                }
                                if (!empty($detail->company->dsLinkPinteres)) {
                                    echo '<li class="pinterest_icon"><a href="' . $detail->company->dsLinkPinteres . '"><i class="fa fa-pinterest"> </i></a> </li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"> </span>
                                    <span class="icon-bar"> </span>
                                    <span class="icon-bar"> </span>
                                </button>
                                <a class="navbar-brand" href="index.html">
                                    <img src="<?php echo GenimoFrontEnd::getLogo($detail->company->idCompany) . $detail->company->dsExtensionLogo; ?>" alt="logo" style="max-height: 80px;margin-bottom: 10px">
                                </a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav nav_link pull-right">
                                    <!--<li><a href="./" class="drop_down">INICIO</a> -->
                                    <!-- <ul class="submenu">
                                         <li><a href="index.html">Inicio</a> </li>
                                         <li><a href="homepage-variation-1.html">homepage variation 1</a> </li>
                                     </ul> -->
                                    </li>
                                    <?php
                                    $vet = $detail->modes;
                                    foreach ($vet as $obj) {
                                        echo '<li><a href = "javascript:setType(' . $obj->id . ')">' . $obj->ds . '</a></li>';
                                    }
                                    ?>
                                    <!-- <li><a href="contact.html">CONTATOS </a> </li> -->
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                    <div class="contact_info">
                        <div class="contact_detial">
                            <div class="phone_icon">
                                <i class="fa fa-phone"> </i>
                            </div>
                            <div class="phone_number">
                                <h5 id="txtDescFone"></h5>
                                <h4 id="txtNrFone"></h4>
                            </div>
                            <script>
                                var mBranch = <?php
                                    //var_dump($detail->company->branchs);
                                    //die();
                                    echo json_encode($detail->company->branchs) . ";";
                                    ?>
                                viewController.showFones(viewController, mBranch, 'txtDescFone', 'txtNrFone');
                            </script>
                        </div>
                    </div>

                </div>

            </div>
        </header>
        <section style="border: 1px">
            <center>
                <div class="content-filtros">
                    <ul class="filtros-principais clearfix">
                        <li>
                            <label id="labelFaixaPreco" class="icone-faixa-preco filtro faixa-preco" data-label="FAIXA DE PREÇO?">FAIXA DE PREÇO?<span class="icone-seta-cheia-cima"></span></label>
                            <div id="divFaixaPreco" title="Faixa de preço R$" style="display: none;">
                                <span class="titulo">faixa de preço - R$</span>

                                <div id="box-slider-preco" class="box-busca">
                                    <ul class="unstyled pull-left">
                                        <li><input type="text" id="typePrecoMin" class="input-slider-esq" value="0" maxlength="11"></li>
                                        <li class="spacer-slider"><span class="spacer-left"></span>até<span class="spacer-right"></span></li>
                                        <li><input type="text" id="typePrecoMax" class="input-slider-dir" maxlength="11"></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="divBuscaPorParcela" class="content-quanto box-filtro" style="display: none;">
                                <span class="titulo">Buscar por parcela</span>

                                <div class="box-busca">
                                    <div class="field">
                                        <label for="fld-val-entrada">Valor de entrada</label>
                                        <input id="fld-val-entrada" type="text" placeholder="R$ 0" maxlength="11">
                                    </div>

                                    <div class="field">
                                        <label for="fld-pagamento">Valor da parcela</label>
                                        <input id="fld-pagamento" type="text" placeholder="R$ 0" maxlength="11">
                                    </div>

                                    <div class="field">
                                        <label for="fld-prazo">prazo (anos)</label>
                                        <input id="fld-prazo" type="text" maxlength="2" value="35" autocomplete="off">
                                    </div>

                                    <div class="resultado">
                                        <div class="hide">
                                            Preço máximo do imóvel:
                                            <span id="spanPrecoMaximoImovel" class="preco"></span>
                                            <small class="observacao">*Estes são resultados iniciais. As taxas apresentadas possuem caráter meramente informativo.</small>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button id="btnCalcularPorParcela" type="button" class="btn-calcular btn btn-zap">Calcular</button>
                                        <button type="button" class="link-cancelar btn-link hide">Cancelar</button>
                                        <button id="btnFiltroPorParcela" type="button" class="btn-filtrar btn btn-zap hide">Filtrar</button>
                                    </div>
                                </div>
                                <input type="hidden" id="hdnModuloNovo" value="True">
                            </div>

                        </li>
                        <li>
                            <label id="labelQuarto" class="icone-quartos filtro quartos" data-label="QUARTOS">QUARTOS<span class="icone-seta-cheia-cima"></span></label>

                            <div id="divQuarto" title="Quartos"  style="display: none;">
                                <span class="titulo">quartos</span>

                                <ul class="opcoes-check unstyled pull-left">
                                    <li><input type="checkbox" value="1" id="quarto1"><label for="quarto1">1</label></li>
                                    <li><input type="checkbox" value="2" id="quarto2"><label for="quarto2">2</label></li>
                                    <li><input type="checkbox" value="3" id="quarto3"><label for="quarto3">3</label></li>
                                    <li><input type="checkbox" value="4" id="quarto4"><label for="quarto4">4 ou mais</label></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <label id="labelSuite" class="icone-suites filtro suites" data-label="SUÍTES">SUITES<span class="icone-seta-cheia-cima"></span></label>

                            <div id="divSuite" title="Suite" style="display: none;">
                                <span class="titulo">Suítes</span>

                                <ul class="opcoes-check unstyled pull-left">
                                    <li><input type="checkbox" value="1" id="suite1"><label for="suite1">1</label></li>
                                    <li><input type="checkbox" value="2" id="suite2"><label for="suite2">2</label></li>
                                    <li><input type="checkbox" value="3" id="suite3"><label for="suite3">3</label></li>
                                    <li><input type="checkbox" value="4" id="suite4"><label for="suite4">4 ou mais</label></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <label id="labelVaga" class="icone-vagas filtro vagas" data-label="VAGAS">VAGAS<span class="icone-seta-cheia-cima"></span></label>
                            <div id="divVaga" title="Vagas na garagem" style="display: none;">
                                <span class="titulo">Vagas</span>

                                <ul class="opcoes-check unstyled pull-left">
                                    <li><input type="checkbox" value="1" id="vaga1"><label for="vaga1">1</label></li>
                                    <li><input type="checkbox" value="2" id="vaga2"><label for="vaga2">2</label></li>
                                    <li><input type="checkbox" value="3" id="vaga3"><label for="vaga3">3</label></li>
                                    <li><input type="checkbox" value="4" id="vaga4"><label for="vaga4">4 ou mais</label></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <label id="labelFaixaArea" class="icone-area filtro area" data-label="ÁREA (m²)">ÁREA (m²)<span class="icone-seta-cheia-cima"></span></label>
                            <div id="divFaixaArea" class="content-slider box-filtro content-slider-area" data-filtro="slider" style="display: none;">
                                <span class="titulo">Área (m<sup>2</sup>)</span>

                                <div class="box-busca">
                                    <ul class="unstyled pull-left">
                                        <li><input type="text" id="typeAreaMinAvancada" class="input-slider-esq" maxlength="6" pattern="\d*"></li>
                                        <li class="spacer-slider"><span class="spacer-left"></span>até<span class="spacer-right"></span></li>
                                        <li><input type="text" id="typeAreaMaxAvancada" class="input-slider-dir" maxlength="6" pattern="\d*"></li>
                                    </ul>

                                    <div id="slider-busca-area-min" class="noUi-target noUi-ltr noUi-horizontal noUi-background"><div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </center>
        </section>
        <section>
            <div id="map_canvas"></div>
        </section>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
<?php
$count = 0;
$mediaLat = 0;
$mediaLon = 0;
$str_points = '';
$points = $detail->properties;
foreach ($points as $pt) {

    if (empty($pt->vlLatitude)) {
        continue;
    }
    $preco = (!empty($pt->vlSale)) ? $pt->vlSale : (!empty($pt->vlRental)) ? $pt->vlRental : (!empty($pt->vlSeasonRent)) ? $pt->vlSeasonRent : (!empty($pt->vlLowSeasonRent)) ? $pt->vlLowSeasonRent : "SOB CONSULTA";

    $str_points.= "\n";
    $str_points.= 'var marker' . $count . ' = new google.maps.Marker({
        position: new google.maps.LatLng(' . $pt->vlLatitude . ',' . $pt->vlLongitude . '),
        map: map,
        icon: "images/map_marker.png",
        title:  "' . $pt->nmCategory . '"
    });';

    $str_points.= "\n";
    $str_points.='var contentString = \'<div id="content" style="background:#148CE2;"><h1>' . $pt->nmCategory .
            '</h1><br><img style="border-radius: 15%;width:120px" src="https://genimo.com.br/media/' . $pt->idProperty . '/' . $pt->nmFileNameSpotlight . '"/>' .
            '<br>' . $preco .
            '<br><a href=property-details.php?id=' . $pt->idProperty . '>Ver mais</a>' .
            '</div>\'';

    $str_points.= "\n";
    $str_points.= 'var infowindow' . $count . ' = new google.maps.InfoWindow({
                          content: contentString
                    });';

    $str_points.= "\n";
    $str_points.='google.maps.event.addListener(marker' . $count . ', "click", function() {
          infowindow' . $count . '.open(map,marker' . $count . ');
        });';

    $str_points.= "viewController.addPointInfo('" . $pt->nmCategory . "', " . $pt->vlLatitude . ", " . $pt->vlLongitude . ", '" . $pt->nmNeighborhood . "', '" . $preco . "', " . $pt->idProperty . ", '" . $pt->nmFileNameSpotlight . "');\n";
    $count++;
    $mediaLat+=$pt->vlLatitude;
    $mediaLon+=$pt->vlLongitude;
}

$mediaLat = $mediaLat / $count;
$mediaLon = $mediaLon / $count;
?>
                                var map;
                                var options = {
                                    enableHighAccuracy: true,
                                    timeout: 5000,
                                    maximumAge: 0
                                };
                                function success(pos) {
                                    var crd = pos.coords;
                                    console.log('Your current position is:');
                                    console.log('Latitude : ' + crd.latitude);
                                    console.log('Longitude: ' + crd.longitude);
                                    console.log('More or less ' + crd.accuracy + ' meters.');
                                    var mapOptions = {
                                        zoom: 12,
                                        center: new google.maps.LatLng(<?php echo $mediaLat; ?>, <?php echo $mediaLon; ?>),
                                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                                        styles: [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#6195a0"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {"featureType": "landscape", "elementType": "geometry.fill", "stylers": [{"color": "#ffffff"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "poi.park", "elementType": "geometry.fill", "stylers": [{"color": "#e6f3d6"}, {"visibility": "on"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{"color": "#f4d2c5"}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "elementType": "labels.text", "stylers": [{"color": "#4e4e4e"}]}, {"featureType": "road.arterial", "elementType": "geometry.fill", "stylers": [{"color": "#f4f4f4"}]}, {"featureType": "road.arterial", "elementType": "labels.text.fill", "stylers": [{"color": "#787878"}]}, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#eaf6f8"}, {"visibility": "on"}]}, {"featureType": "water", "elementType": "geometry.fill", "stylers": [{"color": "#eaf6f8"}]}]
                                    };
                                    map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
<?php
echo $str_points;
?>

                                }
                                function error(err) {
                                    console.warn('ERROR(' + err.code + '): ' + err.message);
                                }
                                ;
                                navigator.geolocation.getCurrentPosition(success, error, options);

                                function showDiv(divName) {
                                    document.getElementById(divName).style.display = "block";
                                }
                                function hideDiv(divName) {
                                    document.getElementById(divName).style.display = "none";
                                }

                                $(function() {
                                    $("#divFaixaPreco").dialog({
                                        height: 300,
                                        width: 400,
                                        zIndex: 999,
                                        autoOpen: false,
                                        modal: true
                                    });
                                });
                                $(function() {
                                    $("#divQuarto").dialog({
                                        height: 300,
                                        width: 400,
                                        zIndex: 999,
                                        autoOpen: false,
                                        modal: true
                                    });
                                });
                                $(function() {
                                    $("#divSuite").dialog({
                                        height: 300,
                                        width: 400,
                                        zIndex: 999,
                                        autoOpen: false,
                                        modal: true
                                    });
                                });
                                $(function() {
                                    $("#divFaixaArea").dialog({
                                        height: 300,
                                        width: 400,
                                        zIndex: 999,
                                        autoOpen: false,
                                        modal: true
                                    });
                                });
                                $(function() {
                                    $("#divVaga").dialog({
                                        height: 300,
                                        width: 400,
                                        zIndex: 999,
                                        autoOpen: false,
                                        modal: true
                                    });
                                });
                                $(function() {
                                    $("#divFaixaArea").dialog({
                                        height: 300,
                                        width: 400,
                                        zIndex: 999,
                                        autoOpen: false,
                                        modal: true
                                    });
                                });



                                document.getElementById('labelFaixaPreco').onclick = function() {
                                    $("#divFaixaPreco").dialog("open");
                                }



                                document.getElementById('labelQuarto').onclick = function() {
                                    $("#divQuarto").dialog("open");
                                    // showDiv('');
                                }



                                document.getElementById('labelSuite').onclick = function() {
                                    $("#divSuite").dialog("open");
                                    // showDiv('');
                                }



                                document.getElementById('labelVaga').onclick = function() {
                                    $("#divVaga").dialog("open");
                                    // showDiv('');
                                }

                                document.getElementById('labelFaixaArea').onclick = function() {
                                    $("#divFaixaPreco").dialog("open");
                                    //showDiv('');
                                }


        </script>
    </body>
</html>