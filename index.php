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
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
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
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.html">
                                    <img src="<?php echo GenimoFrontEnd::getLogo($detail->company->idCompany) . $detail->company->dsExtensionLogo; ?>" alt="logo" style="max-height: 80px;margin-bottom: 10px">
                                </a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav nav_link pull-right">
                                    <li><a href="javascript:viewController.showFilter()" class="drop_down">Alugue seu imóvel</a>
                                    </li>
                                    <li><a href="javascript:viewController.showFilter()" class="drop_down">Encontre seu imóvel</a>
                                    </li>
                                    <?php
                                    /* $vet = $detail->modes;
                                      foreach ($vet as $obj) {
                                      echo '<li><a href = "property-listing-list.php?mode=' . $obj->id . '">' . $obj->ds . '</a></li>';
                                      } */
                                    ?>

                                </ul>
                            </div><!-- /.navbar-collapse -->

                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
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
                <ul class="property-listing-type-button" style="position: absolute; left: 10px; z-index: 99; float: left">
                    <li>
                        <a href="javascript:viewController.showMap()"><i class="fa fa-map-marker"> </i></a>
                    </li>

                    <li>
                        <a href="javascript:viewController.showGrid1()"><i class="fa fa-bars"> </i></a>
                    </li>
                </ul>
            </div>

        </header>
        <div id="divImovelDetail" title="Detalhes do imóvel" style="display: none;"></div>
        <div id="divFilterDetail" title="Encontre seu imóvel" style="display: none;">

            <div title="O que você Precisa?" style="width: 95%;margin: 5px">
                <select name="select" >
                    <option value="O que você precisa?">O que você precisa?</option>
                    <option value="COMPRAR">COMPRAR</option>
                    <option value="ALUGAR">ALUGAR</option>
                    <option value="LANÇAMENTOS">LANÇAMENTOS</option>
                </select>
                </label>
            </div>

            <div title="Qual o tipo?" style="width: 95%;margin: 5px">
                <select name="select1"  >
                    <option value="Qual o tipo?">Qual o tipo?</option>
                    <option value="CASA">CASA</option>
                    <option value="APARTAMENTO">APARTAMENTO</option>
                    <option value="TERRENO">TERRENO</option></select>
                </label>
            </div>
            <p>
                <label for="amount">Intervalo de preço:</label><br>
                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
            </p>
            <div id="slider-range"></div>
            <div title="Número de suítes" style="width: 95%;margin: 5px">
                <label class="title">Número de suítes<br>
                    <select name="select1" >
                        <option value="Qual o tipo?">1</option>
                        <option value="CASA">2</option>
                        <option value="APARTAMENTO">3</option>
                        <option value="TERRENO">4 ou mais</option>
                    </select>
                </label>
            </div>
            <div title="Vagas na garagem" style="width: 95%;margin: 5px">
                <label class="title">Vagas na garagem<br>
                    <select name="select1" >
                        <option value="Qual o tipo?">1</option>
                        <option value="CASA">2</option>
                        <option value="APARTAMENTO">3</option>
                        <option value="TERRENO">4 ou mais</option>
                    </select>
                </label>
            </div>
            <p style="width: 95%;margin: 5px">
                <label for="amount1">Área M²:</label>
                <input type="text" id="amount1" readonly style="border:0; color:#f6931f; font-weight:bold;">
            </p>
            <div id="slider-range1"></div>
            <div>
                Pontos de interesse<br>
                <img style="width: 16px" src="https://www.citywatch.com.br/v1/assets/images/alimentacao.png"/>
                <input type="checkbox" name="cw" title="ALIMENTACAO" value="ALIMENTACAO"/>

                <img style="width: 16px" src="https://www.citywatch.com.br/v1/assets/images/educacao.png"/>
                <input type="checkbox" name="cw" title="EDUCACAO" value="EDUCACAO"/>

                <img style="width: 16px" src="https://www.citywatch.com.br/v1/assets/images/saude.png"/>
                <input type="checkbox" name="cw" title="SAUDE" value="SAUDE"/>

                <img style="width: 16px" src="https://www.citywatch.com.br/v1/assets/images/transporte.png"/>
                <input type="checkbox" name="cw" title="TRANSPORTE" value="TRANSPORTE"/>

                <img style="width: 16px" src="https://www.citywatch.com.br/v1/assets/images/seguranca.png"/>
                <input type="checkbox" name="cw" title="SEGURANCA" value="SEGURANCA"/>

            </div>


            <input type="button" value="Buscar" style="width: 95%;margin: 5px">
        </div>
        <section style="border: 1px">

        </section>
        <section>

            <div id="grid_canvas" style="display: none"class="property-listing multiple-recent-properties">
                <div class="container">

                    <div class="row property-list-area">
                        <div data-target="Residential" class="active carousel slide carousel-slide-recent-property">
                            <?php
                            $points = $detail->properties;
                            $cityName = "";
                            foreach ($points as $pt) {
                                $cityName = $pt->nmCity;
                                if (empty($pt->vlLatitude)) {
                                    continue;
                                }
                                $url = "https://genimo.com.br/media/" . $pt->idProperty . '/' . $pt->nmFileNameSpotlight;
                                if (empty($pt->idProperty) || empty($pt->nmFileNameSpotlight)) {
                                    $url = "https://www.citywatch.com.br/v1/assets/images/logo.png";
                                }

                                $preco = (!empty($pt->vlSale)) ? "<br>VENDA:" . $pt->vlSale . '<br>' : "";
                                $preco.= (!empty($pt->vlRental)) ? "<br>ALUGUEL:" . $pt->vlRental . '<br>' : "";
                                $preco.= (!empty($pt->vlSeasonRent)) ? "<br>TEMPORADA:" . $pt->vlSeasonRent . '<br>' : "";
                                $preco.= (!empty($pt->vlLowSeasonRent)) ? "<br>BAIXA TEMPORADA:" . $pt->vlLowSeasonRent : "";
                                $preco = str_replace("VENDA:0.00<br>", "", $preco);
                                $preco = str_replace("ALUGUEL:0.00<br>", "", $preco);
                                $preco = str_replace("TEMPORADA:0.00<br>", "", $preco);
                                $preco = str_replace("BAIXA TEMPORADA:0.00", "", $preco);
                                //echo "viewController.addPointInfo('" . $pt->nmCategory . "', " . $pt->vlLatitude . ", " . $pt->vlLongitude . ", '" . $pt->nmNeighborhood . "', '" . $preco . "', " . $pt->idProperty . ", '" . $url . "');\n";
                                ?>
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="image-with-label">
                                        <a  href="property-details.php?id=<?php echo $pt->idProperty; ?>" target="_BLANK">
                                            <img src="<?php echo $url; ?>" alt="recent-properties-1" class="img-responsive" style="max-height: 270px">
                                        </a>
                                        <label><?php echo $pt->nmCategory; ?></label>
                                    </div>
                                    <a href="#"><h6><?php echo $pt->dsAddress; ?></h6></a>
                                    <span class="recent-properties-address"><?php echo $pt->nmCity; ?> / <?php echo $pt->nmNeighborhood; ?></span>
                                    <p class="recent-properties-price">
                                        <?php echo $preco ?>
                                    </p>

                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map_canvas"></div>
        </section>


        <section>

            <div id="grid_corretores" class="property-listing multiple-recent-properties">
                <div class="container">

                    <div class="row property-list-area">
                        <div data-target="Residential" class="active carousel slide carousel-slide-recent-property">
                            <center>
                                <h1>Corretores</h1>
                            </center>
                            <?php
                            $corret = $detail->sellers;
                            foreach ($corret as $pt) {
                                ?>
                                <div class = "col-sm-6 col-md-4 col-lg-4">
                                    <div class = "image-with-label">

                                        <img src ="<?php echo $pt->dsAvatarPath; ?>" alt = "recent-properties-1" style="border-radius: 50%;" class = "img-responsive">
                                        </a>
                                        <label><?php echo $pt->nmPerson . '<br>' . $pt->nuCellPhone ?></label>
                                    </div>


                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="footer">
                    <span class="footer_copyright_text"><?php echo $detail->company->dsAddress; ?> <?php echo $detail->company->dsAddress2; ?> <?php echo $detail->company->nmCity; ?><br>Powered by <a href="http://morettic.com.br"><b>Morettic</b></a> & <a href="http://morettic.com.br"><b>Pratique Conhecimento</b></a></span>
                </div>

                <?php ?>
            </footer>
            <script src="js/jquery-2.1.4.min.js"></script>
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
$cityName = "";
foreach ($points as $pt) {
    $cityName = $pt->nmCity;
    if (empty($pt->vlLatitude)) {
        continue;
    }
    $url = "https://genimo.com.br/media/" . $pt->idProperty . '/' . $pt->nmFileNameSpotlight;
    if (empty($pt->idProperty) || empty($pt->nmFileNameSpotlight)) {
        $url = "https://www.citywatch.com.br/v1/assets/images/logo.png";
    }

    $preco = (!empty($pt->vlSale)) ? "<br>VENDA:" . $pt->vlSale . '<br>' : "";
    $preco.= (!empty($pt->vlRental)) ? "<br>ALUGUEL:" . $pt->vlRental . '<br>' : "";
    $preco.= (!empty($pt->vlSeasonRent)) ? "<br>TEMPORADA:" . $pt->vlSeasonRent . '<br>' : "";
    $preco.= (!empty($pt->vlLowSeasonRent)) ? "<br>BAIXA TEMPORADA:" . $pt->vlLowSeasonRent : "";
    $preco = str_replace("VENDA:0.00<br>", "", $preco);
    $preco = str_replace("ALUGUEL:0.00<br>", "", $preco);
    $preco = str_replace("TEMPORADA:0.00<br>", "", $preco);
    $preco = str_replace("BAIXA TEMPORADA:0.00", "", $preco);

    //echo "<!-- $url -->";
    echo "viewController.addPointInfo('" . $pt->nmCategory . "', " . $pt->vlLatitude . ", " . $pt->vlLongitude . ", '" . $pt->nmNeighborhood . "', '" . $preco . "', " . $pt->idProperty . ", '" . $url . "');\n";
    $count++;
    $mediaLat+=$pt->vlLatitude;
    $mediaLon+=$pt->vlLongitude;
}

$mediaLat = $mediaLat / $count;
$mediaLon = $mediaLon / $count;
//CW
$citywatch = GenimoFrontEnd::getMarkersCityWatch($mediaLat, $mediaLon, $cityName);
$vet = $citywatch->openStreet;
foreach ($vet as $obj) {
    echo 'viewController.addPoint("' . $obj->tit . '", "' . $obj->lat . '", "' . $obj->lon . '", "' . $obj->tipo . '", "' . $obj->desc . '");';
    echo "\n";
}
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

                                viewController.showFull();
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
                            $(function() {
                                $("#divImovelDetail").dialog({
                                    height: 300,
                                    width: 400,
                                    zIndex: 999,
                                    autoOpen: false,
                                    modal: true
                                });
                            });
                            $(function() {
                                $("#divFilterDetail").dialog({
                                    height: 380,
                                    width: 400,
                                    zIndex: 999,
                                    autoOpen: false,
                                    modal: true
                                });
                            });


                            $(function() {
                                $("#slider-range").slider({
                                    range: true,
                                    min: 0,
                                    max: 5000000,
                                    values: [75000, 3000000],
                                    slide: function(event, ui) {
                                        $("#amount").val("R$" + ui.values[0] + " - R$" + ui.values[1]);
                                    }
                                });
                                $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                                        " - $" + $("#slider-range").slider("values", 1));

                                $("#slider-range1").slider({
                                    range: true,
                                    min: 0,
                                    max: 1000,
                                    values: [50, 200],
                                    slide: function(event, ui) {
                                        $("#amount1").val(ui.values[0] + '-' + ui.values[1]);
                                    }
                                });
                                $("#amount1").val("$" + $("#slider-range1").slider("values", 0) +
                                        " - $" + $("#slider-range1").slider("values", 1));
                                viewController.showFilter();
                                //viewController.showGrid1();
                            });


            </script>

    </body>
</html>