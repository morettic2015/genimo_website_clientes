<!DOCTYPE html>
<?php
include_once './src/GenimoFrontEnd.php';


$id = empty($_POST['id']) ? $_GET['id'] : $_POST['id'];
$detail = GenimoFrontEnd::getDetail($id);
//echo "<pre>";
//var_dump($detail);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Residency theme">
        <meta name="keywords" content="Residency,sale,buy,rent,pg,house,villa,apartment">
        <meta name="author" content="Fortune Creations">
        <meta name="viewport" content="width=device-width">

        <title><?php echo $detail->company->nmCompany . ' - ' . $detail->company->dsSlogan . ' - ' . $detail->company->nuPhone . ' - ' . $detail->company->nmCity; ?></title>

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <script type="text/javascript" src="js/utils.js"></script>
        <script>
            var viewController = new GenimoFrontEnd();
        </script>
    </head>
    <body>
        <?php
        require 'header.php';
        ?>
        <section>
            <div class="property-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 property-detail-inner">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <h4>Descri&ccedil;&atilde;o</h4>
                                    <p>
                                        <?php echo $detail->property->dsPropertySite; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <h4>Informações Essenciais</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Código</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value"><?php echo $detail->property->cdInternal; ?></div>

                                        <?php
                                        if ($detail->property->vlSale > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Preço venda</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlSale . '</div>';
                                        }
                                        if ($detail->property->vlRental > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Aluguel anual</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlRental . '</div>';
                                        }
                                        if ($detail->property->vlSeasonRent > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Aluguel diária</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlSeasonRent . '</div>';
                                        }
                                        if ($detail->property->vlLowSeasonRent > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Aluguel estudante</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlLowSeasonRent . '</div>';
                                        }
                                        if (!empty($detail->property->amRooms) && $detail->property->amRooms > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Quartos</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->amRooms . '</div>';
                                        }
                                        if (!empty($detail->property->amSuite) && $detail->property->amSuite > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Suite</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->amSuite . '</div>';
                                        }
                                        if (!empty($detail->property->amBathroom)) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Banheiros</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->amBathroom . '</div>';
                                        }
                                        if (!empty($detail->property->amGarage)) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Garagem</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->amGarage . '</div>';
                                        }
                                        if (!empty($detail->property->dsGarage)) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Local garagem</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->dsGarage . '</div>';
                                        }
                                        if (!empty($detail->property->qtYearBuilt)) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Ano de construção</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->qtYearBuilt . '</div>';
                                        }
                                        if (!empty($detail->property->vlCondominiunTax)) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Condomínio</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlCondominiunTax . '</div>';
                                        }
                                        if ($detail->property->flAcceptFunding == 1) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Financiamento</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Sim</div>';
                                        }
                                        if (!(empty($detail->property->tpDevelopmentLevel))) {
                                            $estagio = $detail->property->tpDevelopmentLevel == "1" ? "Lançamento" : $detail->property->tpDevelopmentLevel == "2" ? "Em construção" : "Pronto para morar";
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Estágio da obra</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $estagio . '</div>';
                                        }
                                        if (!empty($detail->property->flInhabited)) {
                                            $habitado = ($detail->property->flInhabited == 1) ? 'Sim' : 'Não';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Habitado</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $habitado . '</div>';
                                        }
                                        if (!empty($detail->property->qtApartmentsFloor)) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Apartamentos por andar</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->qtApartmentsFloor . '</div>';
                                        }
                                        if (!empty($detail->property->tpFinality)) {
                                            $finalidade = ($detail->property->tpFinality == 1) ? 'Comercial' : 'Residencial';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Finalidade</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $finalidade . '</div>';
                                        }
                                        if (!empty($detail->property->qtMaxHousing) && $detail->property->qtMaxHousing > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Hospedagem máxima</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->qtMaxHousing . '</div>';
                                        }
                                        if ($detail->property->flHighStandart == 1) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Alto Padrão</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Sim</div>';
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <h4>Amenidades</h4>
                                    <div class="row amenities-info">
                                        <?php
                                        if ($detail->property->flBarbecueGrill == 1) {
                                            echo '<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/barbecue.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Churrasqueira</div>';
                                        }

                                        if ($detail->property->flFireplace == 1) {
                                            echo '<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/fireplace.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Lareira</div>';
                                        }
                                        if ($detail->property->flCloset == 1) {
                                            echo '<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/cabinet.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Closet</div>';
                                        }
                                        if ($detail->property->flLavatory == 1) {
                                            echo '<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/bath.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Lavabo</div>';
                                        }
                                        if ($detail->property->flLaundry == 1) {
                                            echo '<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/laundry.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Lavanderia</div>';
                                        }
                                        if ($detail->property->flBalcony == 1) {
                                            echo '<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/balcony.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Sacada</div>';
                                        }
                                        if ($detail->property->flServiceArea == 1) {
                                            echo '<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/service_area.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Área de Serviço</div>';
                                        }
                                        if ($detail->property->flPool == 1) {
                                            echo '<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/swiming_pool.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Piscina</div>';
                                        }
                                        if ($detail->property->flHeatedPool == 1) {
                                            echo '<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/hot_pool.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Piscina Aquecida</div>';
                                        }
                                        /*   if (!empty($detail->property->tpFloor)) {
                                          echo '<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"></div>';
                                          echo '<div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">' . $detail->property->tpFloor . '</div>';
                                          } */
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <h4>Informações Adicionas</h4>
                                    <div class="row amenities-info">

                                        <?php
                                        if (!(empty($detail->property->tpFurnished)) && $detail->property->tpFurnished > 1) {
                                            $mobilia = $detail->property->tpFurnished == "2" ? "Semi Mobiliado" : "Mobiliado";
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Mobilia</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $mobilia . '</div>';
                                        }
                                        if ($detail->property->flWifi > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/wifi.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Wifi</div>';
                                        }
                                        if ($detail->property->flGym > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/gym.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Academia</div>';
                                        }
                                        if ($detail->property->flAccessChallengedPeople > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/accessibility_12.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Acessibilidade</div>';
                                        }
                                        if ($detail->property->flCollectiveBarbecue > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/colective_barbecue.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Churrasqueira coletiva</div>';
                                        }
                                        if ($detail->property->flElevator > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/elevator.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Elevador</div>';
                                        }
                                        if ($detail->property->flGarden > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/garden.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Jardim</div>';
                                        }
                                        if ($detail->property->flPlayground > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/playground.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Playground</div>';
                                        }
                                        if ($detail->property->flOrdinance > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/ordinance123.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Portaria 24h</div>';
                                        }
                                        if ($detail->property->flSportsCourt > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/court.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Quadra de Esportes</div>';
                                        }
                                        if ($detail->property->flLoungeParties > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/party123.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Salão de festas</div>';
                                        }
                                        if ($detail->property->flCaretaker > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/caretaker.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Zelador</div>';
                                        }
                                        if ($detail->property->flCabletv > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/TV.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">TV a cabo</div>';
                                        }
                                        if ($detail->property->flAC > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/ac.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Ar condicionado</div>';
                                        }
                                        if ($detail->property->flGasHeating > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/gas_heating.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Aquecimento a gás</div>';
                                        }
                                        if ($detail->property->flIndividualHydrometer > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label"><img src="images/svg/hydrometer.svg" class="svgImages" alt="space"/></div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Hidrômetro individual</div>';
                                        }
                                        ?>


                                    </div>

                                    <!--  <h4>Exterior</h4>
                                      <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Exterior</div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Vinyl</div>

                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Roof</div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Asphalt Shingles</div>

                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Construction</div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Woodframe</div>

                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Foundation</div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Concrete</div>

                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Frunt Exposure</div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">N</div>

                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Fontage Metres</div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">9,000</div>
                                      </div> -->

                                    <!--  <h4>Flooring</h4>
                                      <div class="row">
                                          <div class="col-lg-12 col-md-12">
                                              <p>Carpet, Laminate Flooring, Linoleum</p>
                                          </div>
                                      </div> -->
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <h4>Área </h4>
                                    <div class="row">
                                        <?php
                                        if (!empty($detail->property->vlAreaM2C) && $detail->property->vlAreaM2C > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Privativa</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value" align="rigth">' . $detail->property->vlAreaM2C . ' m²</div>';
                                        }
                                        if (!empty($detail->property->vlAreaM2) && $detail->property->vlAreaM2 > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Útil</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlAreaM2 . ' m²</div>';
                                        }
                                        if (!empty($detail->property->vlGroundAreaC) && $detail->property->vlGroundAreaC > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Total</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlGroundAreaC . ' m²</div>';
                                        }
                                        if (!empty($detail->property->vlGaragePrivateArea) && $detail->property->vlGaragePrivateArea > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Privativa da garagem</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlGaragePrivateArea . ' m²</div>';
                                        }
                                        if (!empty($detail->property->vlGarageFloorArea) && $detail->property->vlGarageFloorArea > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Útil da garagem</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlGarageFloorArea . ' m²</div>';
                                        }
                                        if (!empty($detail->property->vlGarageArea) && $detail->property->vlGarageArea > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Total da garagem</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlGarageArea . ' m²</div>';
                                        }
                                        if (!empty($detail->property->vlStorageArea) && $detail->property->vlStorageArea > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Depósito</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlStorageArea . ' m²</div>';
                                        }
                                        if (!empty($detail->property->vlPropertyTotalArea) && $detail->property->vlPropertyTotalArea > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Imóvel</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlPropertyTotalArea . ' m²</div>';
                                        }
                                        if (!empty($detail->property->vlGroundArea) && $detail->property->vlGroundArea > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Terreno</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlGroundArea . ' m²</div>';
                                        }
                                        if (!empty($detail->property->vlHeight) && $detail->property->vlHeight > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Altura</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlHeight . 'm</div>';
                                        }
                                        if (!empty($detail->property->vlIdealFraction) && $detail->property->vlIdealFraction > 0) {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Fração ideal%</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">' . $detail->property->vlIdealFraction . ' %</div>';
                                        }
                                        ?>
                                    </div>

                                    <!-- <h4>Goods Included</h4>
                                     <div class="row">
                                         <div class="col-lg-12 col-md-12">
                                             <p>Dryer, Dishwasher-Build-in, Hood garage Opener-1 Control, Washer, Window Covering-All, Blinds-Roll Up; Pull Down, Fan-Celling, refrigeratores-Two, Stoves-Two</p>
                                         </div>
                                     </div>-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <h4>Perto do imóvel </h4>
                                    <div class="row">
                                        <div id="googleMapNearestPlaces" style="width:100%;height:350px;"> </div>
                                        <small style="text-align: right;font-size: 11px"><a target="_BLANK" href="http://citywatch.com.br">by Citywatch</a></small>
                                        <!--
                                        <div class="col-md-6 col-sm-12 col-xs-12" id="near-by-place-detail"> </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 near-location-map">
                                            <div class="near-location-map">

                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <!--<div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="get-direction">
                                        <h4>Get Directions</h4>
                                        <div id="GoogleMapGetDirections" style="width:100%;height:285px;"></div>
                                        <form>
                                            <input type="text" id="GetDirectionsAddress" placeholder="From Address" />
                                            <button type="button" id="GetDirections">Get Directions</button>
                                        </form>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="agent-contact-sidebar">
                                <div class="agent-profile-sidebar">
                                    <img id="logoAvatar" src="<?php echo $detail->property->bookies[0]->dsPathAvatar; ?>" alt="Corretor" />
                                    <h4 id="txtNmPerson"><?php echo $detail->property->bookies[0]->nmPerson; ?></h4>
                                    <p id="txtFlCompany"><?php echo $detail->property->bookies[0]->flCompany == "1" ? 'Imobiliária' : 'Corretor'; ?></p>
                                </div>
                                <div class="agent-contact-detail-sidebar">
                                    <p id="txtNrFoneCorretor"><i class="fa fa-phone"> </i><?php echo $detail->property->bookies[0]->nuCelPhone; ?></p>
                                    <p><i class="fa fa-envelope"></i><a href="#" id="txtEmailCorretor"><?php echo $detail->property->bookies[0]->dsEmail; ?></a></p>
                                </div>
                                <div class="agent-contact-form-sidebar">
                                    <h5>Fale conosco</h5>


                                    <form name="contact_form" method="post" action="<?php ?>" onsubmit="return viewController.validateForm(document.contact_form.full_name, document.contact_form.phone_number, document.contact_form.email_address, document.contact_form.message)">
                                        <?php
                                        if (!empty($_POST['id'])) {
                                            GenimoFrontEnd::addSiteContact($_POST['full_name'], $_POST['email_address'], $_POST['phone_number'], $_POST['message'], $id, $_POST['idBookie'], $_POST['tp_contact']);
                                        }
                                        ?>
                                        <input type="text" id="fname" name="full_name" placeholder="Nome completo" required />
                                        <input type="number" id="pnumber" name="phone_number" placeholder="Número telefone" required onkeypress="mascara(this, mtel)"/>
                                        <input type="email" id="emailid" name="email_address" placeholder="Endereço de email" required />
                                        <input type="hidden" id="id" name="id" placeholder="Email Address" required value="<?php echo $id; ?>"/>
                                        <input type="hidden" id="idBookie" name="idBookie"/>
                                        <textarea placeholder="Mensagem" name="message" required></textarea>
                                        <h6>Prefere contato por:</h6>
                                        <label> Telefone<input type="radio" name="tp_contact" value="1"></label>
                                        <label> Email <input type="radio" name="tp_contact" checked="" value="2"></label>
                                        <input type="submit" name="sendmessage" class="multiple-send-message" value="Enviar mensagem" />
                                    </form>
                                </div>
                            </div>

                            <div class="advertisement-sidebar">
                                <img src="<?php echo $spot; ?>" alt="advertisement-sidebar" class="img-responsive">
                            </div>

                            <?php if (!empty($detail->property->videos[0])) { ?>
                                <div class="property-video-sidebar">
                                    <h4>Video</h4>
                                    <iframe lass="img-responsive" width="100%" height="226" src="<?php echo $detail->property->videos[0]->dsEmbedSource; ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                            <?php } ?>

                            <div class="recent-proeprties-sidebar">
                                <h4>Imóveis Similares</h4>

                                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner" role="listbox">
                                        <?php
                                        $vet = $detail->property->similar;
                                        $active = 'active';
                                        $ctr = 0;
                                        $tot = 3;
                                        foreach ($vet as $obj) {
                                            if ($ctr < 1) {
                                                echo '<div class="multiple-recent-properties item ' . $active . '">';
                                            }
                                            $preco = null;
                                            $modalidade = null;


                                            if ($obj->cdMode == 1) {
                                                $preco = $obj->vlRental > 0 ? $obj->vlRental : "Consulte";
                                                $modalidade = "Aluguel";
                                            } else if ($obj->cdMode == 2) {
                                                $preco = $obj->vlSale > 0 ? $obj->vlSale : "Consulte";
                                                $modalidade = "Venda";
                                            } else if ($obj->cdMode == 3) {
                                                $preco = $obj->vlSale > 0 ? $obj->vlSale : "Consulte";
                                                $modalidade = "Aluguel & Venda";
                                            } else if ($obj->cdMode == 4) {
                                                $preco = $obj->vlSeasonRent > 0 ? $obj->vlSeasonRent : "Consulte";
                                                $modalidade = "Aluguel temporada";
                                            } else if ($obj->cdMode == 5) {
                                                $preco = $obj->vlLowSeasonRent > 0 ? $obj->vlLowSeasonRent : "Consulte";
                                                $modalidade = "Aluguel estudante";
                                            } else {
                                                $preco = 'Consulte';
                                            }
                                            ?>

                                            <div class="image-with-label">
                                                <img class="img-responsive" alt="recent-properties-1" src="https://genimo.com.br/media/<?php echo $obj->idProperty . '/' . $obj->nmFileNameSpotlight; ?>">
                                                <label><?php echo $modalidade; ?></label>
                                            </div>
                                            <a href="property-details.php?id=<?php echo $obj->idProperty; ?>"><h6><?php echo $obj->nmPropertySite; ?></h6></a>
                                            <span class="recent-properties-address"><?php echo $obj->nmCity . ',' . $obj->nmNeighborhood; ?></span>
                                            <p class="recent-properties-price"><?php echo $preco; ?></p>


                                            <?php
                                            if ($ctr >= 1) {
                                                echo '</div>';
                                                $ctr = 0;
                                            } else {
                                                $ctr++;
                                            }
                                            $active = '';
                                            $tot--;
                                        }
                                        ?>
                                    </div>

                                    <div class="left-right-arrow">
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <img class="pull-left" alt="arrow left" src="images/left-arrow.png">
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <img class="pull-right" alt="arrow right" src="images/right-arrow.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Property video -->
        <div id="property-video-model" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 class="modal-title">Property Video</h4>
                    </div>
                    <div class="modal-body">
                        <video controls>
                            <source src="http://dreamvilla.fortune-creations.com/dreamvilla-multiple/video/775439.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer">
                <span class="footer_copyright_text">Powered by <a href="http://morettic.com.br"><b>Morettic</b></a> & <a href="http://morettic.com.br"><b>Pratique Conhecimento</b></a></span>
            </div>
        </footer>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkJEjT73RmsOw1Ldy3S9RbWg_-PDRh8zE&libraries=places" async defer></script>-->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true&amp;libraries=places&key=AIzaSyCkJEjT73RmsOw1Ldy3S9RbWg_-PDRh8zE&libraries"></script>
        <script src="js/google-map.js"></script>
        <script src="js/custom.js"></script>
        <!-- <script src="js/neary-by-place.js"></script>-->
        <script src="js/slider.js"></script>

        <script>
                                            $(document).ready(function() {

                                                initPos(<?php echo $detail->property->vlLatitude . ',' . $detail->property->vlLongitude; ?>);
                                                /*
                                                 * Replace all SVG images with inline SVG
                                                 */
                                                $('.svgImages').each(function() {
                                                    var $img = jQuery(this);
                                                    var imgID = $img.attr('id');
                                                    var imgClass = $img.attr('class');
                                                    var imgURL = $img.attr('src');

                                                    jQuery.get(imgURL, function(data) {
                                                        // Get the SVG tag, ignore the rest
                                                        var $svg = jQuery(data).find('svg');

                                                        // Add replaced image's ID to the new SVG
                                                        if (typeof imgID !== 'undefined') {
                                                            $svg = $svg.attr('id', imgID);
                                                        }
                                                        // Add replaced image's classes to the new SVG
                                                        if (typeof imgClass !== 'undefined') {
                                                            $svg = $svg.attr('class', imgClass + ' replaced-svg');
                                                        }

                                                        // Remove any invalid XML tags as per http://validator.w3.org
                                                        $svg = $svg.removeAttr('xmlns:a');

                                                        // Replace image with new SVG
                                                        $img.replaceWith($svg);

                                                    }, 'xml');

                                                });
                                            });

                                            var myBookies = <?php echo json_encode($detail->property->bookies); ?>

                                            viewController.showBookies(myBookies);

        </script>
    </body>
</html>