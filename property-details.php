<!DOCTYPE html>
<?php
include_once './src/GenimoFrontEnd.php';

$detail = GenimoFrontEnd::getDetail($_GET['id']);
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

        <title>Property detail</title>

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
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
                                    <h4>Essential Information</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">MLS</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">V254680</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Price</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">$251,325</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Bedrooms</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">5</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Bathrooms</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">4.00</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Full Baths</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">3</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Half Baths</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">2</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Square Footage</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">2,012</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Lot SOFT</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">255</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Year Built</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">1656</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Type</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Single Family</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Style</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Bi-Level</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Status</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Active</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <h4>Amenities</h4>
                                    <div class="row amenities-info">
                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/lamp_1.svg" class="svgImages" alt="space"/></div>
                                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Private space</div>

                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"> </div>
                                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Wifi</div>

                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"> </div>
                                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Basketball court</div>

                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/sale.svg" class="svgImages" alt="fire"/></div>
                                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Fireplace</div>

                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"> </div>
                                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Doorman</div>

                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/swiming_pool.svg" class="svgImages" alt="swmming pool"/></div>
                                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Swimming Pool</div>

                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/house_window.svg" class="svgImages" alt="gym"/></div>
                                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Gym</div>

                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/house_2.svg" class="svgImages" alt="parking"/></div>
                                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Parking</div>

                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 inofrmaition-label"><img src="images/svg/cabinet.svg" class="svgImages" alt="laundry"/></div>
                                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 information-value">Laundry</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <h4>Interior</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Heating</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Forced Air-1</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Basement</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Fully Finished</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Basement Type</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">Full</div>
                                    </div>

                                    <h4>Exterior</h4>
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
                                    </div>

                                    <h4>Flooring</h4>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <p>Carpet, Laminate Flooring, Linoleum</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <h4>Room Dimensions</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Dining Room</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">8x8</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Kitchen</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">10x12</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Living Room</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">12x15</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Master BedRoom</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">12x10.2</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Bedroom 3</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">11x9</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Bedroom 2</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">10x12.3</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Bedroom 5</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">12x12</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Other Room 1</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">8x8</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Other Room 2</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">12x10</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Other Room 3</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">12x11</div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inofrmaition-label">Other Room 4</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 information-value">14x15</div>
                                    </div>

                                    <h4>Goods Included</h4>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <p>Dryer, Dishwasher-Build-in, Hood garage Opener-1 Control, Washer, Window Covering-All, Blinds-Roll Up; Pull Down, Fan-Celling, refrigeratores-Two, Stoves-Two</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <h4>Near by Places</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12" id="near-by-place-detail"> </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 near-location-map">
                                            <div class="near-location-map">
                                                <div id="googleMapNearestPlaces" style="width:100%;height:100%;"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="agent-contact-sidebar">
                                <div class="agent-profile-sidebar">
                                    <img src="images/agent.jpg" alt="Agent Image" />
                                    <h4>John Deo</h4>
                                    <p>Agent of Property</p>
                                </div>
                                <div class="agent-contact-detail-sidebar">
                                    <p><i class="fa fa-phone"> </i> 800-1800-24657</p>
                                    <p><i class="fa fa-envelope"></i><a href="johan@realestate.com">johan@realestate.com</a></p>
                                </div>
                                <div class="agent-contact-form-sidebar">
                                    <h5>Request Inquiry</h5>
                                    <form name="contact_form" method="post" action="functions.php">
                                        <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                        <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number" required />
                                        <input type="email" id="emailid" name="email_address" placeholder="Email Address" required />
                                        <textarea placeholder="Message" name="message" required></textarea>
                                        <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit Request" />
                                    </form>
                                </div>
                            </div>

                            <div class="advertisement-sidebar">
                                <img src="images/advertisement.jpg" alt="advertisement-sidebar" class="img-responsive">
                            </div>

                            <div class="property-video-sidebar">
                                <h4>Property Video</h4>
                                <a href="#" data-toggle="modal" data-target="#property-video-model"><img class="img-responsive" alt="about video" src="images/about_video2.png"></a>
                            </div>

                            <div class="recent-proeprties-sidebar">
                                <h4>Similar Properties</h4>
                                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="multiple-recent-properties item active">
                                            <div class="image-with-label">
                                                <img class="img-responsive" alt="recent-properties-1" src="images/recent-property.png">
                                                <label>On Sale</label>
                                            </div>
                                            <a href="#"><h6>Florida 5, Pinecrest, FL</h6></a>
                                            <span class="recent-properties-address">New York City / Brooklyn</span>
                                            <p class="recent-properties-price">$530,600</p>

                                            <div class="image-with-label">
                                                <img class="img-responsive" alt="recent-properties-2" src="images/recent-property.png">
                                                <label>On Sale</label>
                                            </div>
                                            <a href="#"><h6>Florida 5, Pinecrest, FL</h6></a>
                                            <span class="recent-properties-address">New York City / Brooklyn</span>
                                            <p class="recent-properties-price">$530,600</p>
                                        </div>
                                        <div class="multiple-recent-properties item">
                                            <div class="image-with-label">
                                                <img class="img-responsive" alt="recent-properties-2" src="images/recent-property.png">
                                                <label>On Sale</label>
                                            </div>
                                            <a href="#"><h6>Florida 5, Pinecrest, FL</h6></a>
                                            <span class="recent-properties-address">New York City / Brooklyn</span>
                                            <p class="recent-properties-price">$530,600</p>

                                            <div class="image-with-label">
                                                <img class="img-responsive" alt="recent-properties-1" src="images/recent-property.png">
                                                <label>On Sale</label>
                                            </div>
                                            <a href="#"><h6>Florida 5, Pinecrest, FL</h6></a>
                                            <span class="recent-properties-address">New York City / Brooklyn</span>
                                            <p class="recent-properties-price">$530,600</p>
                                        </div>
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
                <span class="footer_copyright_text">Copyright 2015.All Rights Reserved by DreamVilla - </span><span class="footer_theme_title">Single Property Theme</span>
            </div>
        </footer>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true&amp;libraries=places"></script>
        <script src="js/google-map.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/neary-by-place.js"></script>
        <script src="js/slider.js"></script>
        <script>
            $(document).ready(function() {
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

        </script>
    </body>
</html>