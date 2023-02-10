<?php

function get_characteristics_sctn()
{
?>
<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Top kwaliteit</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Gratis verzending</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14 dagen retourneren</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->
<?php
}

function get_parallax_section()
{
?>
<div class="parallax d-flex align-items-center justify-content-center">
    <!-- <a href="" class="py-5 px-5 text-primary font-weight-semi-bold">25% KORTING OP KEUKENACCESSOIRES</a> -->
</div>
<?php
}

function get_subscription_sctn()
{
?>
<!-- Subscribe Start -->
<div class="container-fluid bg-secondary mt-5">
    <div class="row justify-content-md-center py-5 px-xl-5">
        <div class="col-md-6 col-12 py-5">
            <div class="text-center mb-2 pb-2">
                <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">WIJ GEVEN OM ONZE LOYALE
                        KLANTEN</span></h2>
                <p>Als lid verdien je punten en exclusieve beloningen elke keer dat je winkelt.</p>
            </div>
            <div class="text-center">
                <a href="" class="btn btn-primary px-4">Account Aanmaken</a>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe End -->
<?php
}

function follow_us_on_social()
{
?>
<!-- Follow Start -->
<div class="container-fluid bg-secondary">
    <div class="row justify-content-md-center px-xl-5">
        <div class="col-md-6 col-12 py-5">
            <div class="text-center mb-0 pb-2">
                <p>@shopluxurantnl</p>
                <h2 class="section-title px-5 mb-0"><span class="bg-secondary px-2"><a href="">VOLG ONS OP
                            INSTAGRAM</a></span></h2>
            </div>
        </div>
    </div>
</div>
<!-- Follow End -->
<?php
}

function get_about_us_section()
{
?>
<!-- About Us Start -->
<div class="container-fluid bg-primary">
    <div class="row justify-content-md-center px-xl-5">
        <div class="col-md-6 col-12 py-5">
            <div class="text-center mb-0 pb-0">
                <h2 class="section-title px-5 mb-0"><span class="bg-primary px-2"><a href="" class="text-dark">OVER
                            ONS</a></span></h2>
            </div>
        </div>
    </div>
</div>
<!-- About Us End -->
<?php
}

function get_vendors_sctn()
{
?>
<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                <div class="vendor-item border p-4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/vendor-1.jpg'; ?>" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/vendor-2.jpg'; ?>" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/vendor-3.jpg'; ?>" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/vendor-4.jpg'; ?>" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/vendor-5.jpg'; ?>" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/vendor-6.jpg'; ?>" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/vendor-7.jpg'; ?>" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/vendor-8.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
<?php
}

function get_home_carousel()
{
?>

<!-- Carousel start -->
<div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 410px;">
            <img class="img-fluid" src="https://www.shopluxurant.nl/wp-content/uploads/2023/02/carousel2-scaled.jpg"
                alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Verbeter je garderobe</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">15% Korting Op Kleding</h3>
                    <a href="https://www.shopluxurant.nl/product-category/kleding-accessoires/" class="btn btn-light py-2 px-3">Bekijk assortiment</a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="https://www.shopluxurant.nl/wp-content/uploads/2023/02/carousel-4-scaled.jpg"
                alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Alle benodigde apparatuur voor uw
                        perfecte keuken</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">10% Korting</h3>
                    <a href="https://www.shopluxurant.nl/product-category/huishoudartikelen/keuken/" class="btn btn-light py-2 px-3">Bekijk keukenassortiment</a>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
<!-- Carousel end -->

<?php
}

function get_collection_divs()
{
?>

<!-- Offer Start -->
<div class="container-fluid offer pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-6 col-md-12 pb-4">
            <div class="position-relative border-2 border-primary text-md-right text-white mb-2 py-5 px-5">
                <img src="https://www.shopluxurant.nl/wp-content/uploads/2023/02/promo-8.png" alt="">
                <div class="position-relative text-right" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">20% korting op elke bestelling</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Lente collectie</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Bekijk Collectie</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 pb-4">
            <div class="position-relative border-2 border-primary text-md-left text-white mb-2 py-5 px-5">
                <img src="https://www.shopluxurant.nl/wp-content/uploads/2023/02/promo-7.png" alt="">
                <div class="position-relative text-left" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">20% korting op elke bestelling</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Winter collectie</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Bekijk Collectie</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->

<?php
}


// Change add to cart text on single product page
add_filter('woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single');
function woocommerce_add_to_cart_button_text_single()
{
    return __('In Winkelwagen', 'woocommerce');
}

// Change add to cart text on product archives page
add_filter('woocommerce_product_add_to_cart_text', 'woocommerce_add_to_cart_button_text_archives');
function woocommerce_add_to_cart_button_text_archives()
{
    return __('In Winkelwagen', 'woocommerce');
}



?>