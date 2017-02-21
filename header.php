<header>
    <div class="welcome_header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h6><?php echo $detail->company->dsSlogan; ?></h6>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="welcome_header_menu">
                        <!-- <li class="">
                             <a href="#">EN <i class="fa fa-angle-down"> </i></a>
                             <ul class="currency_selection">
                                 <li><a href="#">ENA</a> </li>
                                 <li><a href="#">ENZ</a> </li>
                                 <li><a href="#">HIN</a> </li>
                                 <li><a href="#">AFK</a> </li>
                                 <li><a href="#">DEL</a> </li>
                             </ul>
                         </li> -->
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
                            <li><a href="./" class="drop_down">INICIO</a>
                                <!-- <ul class="submenu">
                                     <li><a href="index.html">Inicio</a> </li>
                                     <li><a href="homepage-variation-1.html">homepage variation 1</a> </li>
                                 </ul> -->
                            </li>
                            <?php
                            $vet = $detail->modes;
                            foreach ($vet as $obj) {
                                echo '<li><a href = "property-listing-list.php?mode=' . $obj->id . '">' . $obj->ds . '</a></li>';
                            }
                            ?>
                            <!--
                              <li><a href="#" class="drop_down">PROPERTIES</a>
                                  <ul class="submenu">
                                      <li><a href="property-listing-list.html">List View</a> </li>
                                      <li><a href="property-listing-grid.html">Grid View</a> </li>
                                      <li><a href="property-listing-map.html">Map View</a> </li>
                                      <li><a href="property-details.html">Property Detail</a> </li>
                                  </ul>
                              </li>
                              <li><a href="#" class="drop_down">GALLERY </a>
                                  <ul class="submenu">
                                      <li><a href="gallery_2_columns.html">Gallery 2 Columns</a> </li>
                                      <li><a href="gallery_3_columns.html">Gallery 3 Columns</a> </li>
                                  </ul>
                              </li> -->
                            <!--   <li><a href="#" class="drop_down">PESQUISAR </a>
                                   <ul class="submenu">
                                       <li>
                                           <label>Tipo do negócio
                                               <select>
                                                   <option>Venda</option>
                                                   <option>Aluguel</option>
                                               </select>
                                           </label>
                                       </li>
                                       <li>
                                           <label>Categoria<br>
                                               <select>
                                                   <option>Venda</option>
                                                   <option>Aluguel</option>
                                               </select>
                                           </label>
                                       </li>
                                       <li>
                                           <label>Cidade<br>
                                               <select>
                                                   <option>Venda</option>
                                                   <option>Aluguel</option>
                                               </select>
                                           </label>
                                       </li>

                                       <li><<input type="button" value="Pesquuiar"/></li>
                                   </ul>
                               </li>-->
                            <li><a href="contact.html">CONTATOS </a> </li>
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
    </div>
    <div class="inner-page-property-details-header-area">
        <div class="property-detail-banner">
            <div class="header_slider_container">

                <?php
                $vet = $detail->property->images;
                $i = '';
                $spot = '';
                foreach ($vet as $obj) {
                    if ($i < 1) {
                        $spot = $obj->dsImagePath . '/' . $obj->nmFileName;
                    }
                    if ($obj->flSpotlight == "1") {
                        $i = 'active_image';
                    }
                    echo '<img alt="banner-image" class="img-responsive ' . $i . ' image_header " src="' . $obj->dsImagePath . '/' . $obj->nmFileName . '">';
                    if ($obj->flSpotlight == 1) {
                        $spot = $obj->dsImagePath . '/' . $obj->nmFileName;
                    }
                    $i = '';
                }
                ?>

                <button class="previous_image_btn" type="button">
                    <span class="glyphicon glyphicon-menu-left"> </span>
                </button>
                <button class="next_image_btn" type="button">
                    <span class="glyphicon glyphicon-menu-right"> </span>
                </button>
                <div class="shadow"> </div>
            </div>
            <div class="property-detail-info">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-8 col-lg-8">
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-7"><h1><?php echo $detail->property->nmPropertySite; ?></h1></div>
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <label class="property_type">
                                        <?php
                                        $vlSale = '';
                                        $vlRent = '';
                                        $vlSeasonRent = '';
                                        $vlLowSeasonRent = '';

                                        if ($detail->property->vlSale > 0) {
                                            echo "<small>VENDA ";
                                            $vlSale = 'R$' . $detail->property->vlSale;
                                        }
                                        if ($detail->property->vlRental > 0) {
                                            echo "ALUGUEL ";
                                            $vlRent = 'R$' . $detail->property->vlRental;
                                        }
                                        if ($detail->property->vlSeasonRent > 0) {
                                            echo "TEMPORADA ";
                                            $vlSeasonRent = 'R$' . $detail->property->vlSeasonRent;
                                        }
                                        if ($detail->property->vlLowSeasonRent > 0) {
                                            echo "BAIXA TEMPORADA ";
                                            $vlLowSeasonRent = 'R$' . $detail->property->vlLowSeasonRent;
                                        }
                                        ?>
                                    </label>
                                </div>
                            </div>
                            <p class = "property-detail-address"><i class = "fa fa-map-marker"> </i><?php echo $detail->property->dsAddress . ', ' . $detail->property->nmNeighborhood;
                                        ?></p>
                            <div class="row property-detail-facility">
                                <div class="col-xs-12 col-sm-3 col-md-3"><label class="property-detail-price"><small><?php echo $vlSale . ' ' . $vlRent . ' ' . $vlSeasonRent . ' ' . $vlSeasonRent; ?></small></label></div>
                                            <?php
                                            if (!empty($detail->property->amBathroom)) {
                                                echo '<div class="col-xs-12 col-sm-3 col-md-3 property-detail-facility-icon"><img src="images/svg/bath.svg" class="svgImages" alt="bathroom"><label>Banheiros</label><span>' . $detail->property->amBathroom . '</span></div>';
                                            }
                                            if (!empty($detail->property->amRooms) && $detail->property->amRooms > 0) {
                                                echo '<div class="col-xs-12 col-sm-3 col-md-3 property-detail-facility-icon"><img src="images/svg/bed.svg" class="svgImages" alt="bedroom"><label>Quarto</label><span>' . $detail->property->amRooms . '</span></div>';
                                            }
                                            if (!empty($detail->property->amSuite) && $detail->property->amSuite > 0) {
                                                echo '<div class="col-xs-12 col-sm-3 col-md-3 property-detail-facility-icon"><img src="images/svg/bed.svg" class="svgImages" alt="bedroom"><label>Suite</label><span>' . $detail->property->amSuite . '</span></div>';
                                            }
                                            if (!empty($detail->property->amGarage)) {
                                                echo ' <div class="col-xs-12 col-sm-3 col-md-3 property-detail-facility-icon"><img src="images/svg/warehouse.svg" class="svgImages" alt="garages"><label>Garagem</label><span>' . $detail->property->amGarage . '</span></div>';
                                            }
                                            if (!empty($detail->property->vlPropertyTotalArea) && $detail->property->vlPropertyTotalArea > 0) {
                                                echo ' <div class="col-xs-12 col-sm-3 col-md-3 property-detail-facility-icon"><img src="images/svg/area_2.svg" class="svgImages" alt="garages"><span>' . $detail->property->vlPropertyTotalArea . '</span></div>';
                                            }
                                            ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>