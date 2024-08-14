<?php 
$data = array(
    'heading' => get_sub_field('heading'),
    'description' => get_sub_field('description'),   
    'web_height' => get_sub_field('web_height'),   
    'mobile_height' => get_sub_field('mobile_height'),   
    'ipad_height' => get_sub_field('ipad_height'),
    'ipadpro_height' => get_sub_field('ipadpro_height'),
    'carousel' => get_sub_field('carousel'),
    'mar_top_bot' => get_sub_field('mar_top_bot'),
);
$web_height = $data['web_height'];
$mobile_height = $data['mobile_height'];
$ipad_height = $data['ipad_height'];
$ipadpro_height = $data['ipadpro_height'];
$mar_top_bot = $data['mar_top_bot'];
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<style>
.blog-chain-expertise-carousel {
    margin-top: <?php echo $mar_top_bot . "px"; ?>;
    margin-bottom: <?php echo $mar_top_bot . "px"; ?>;
}

.owl-carousel .owl-nav {
    display: flex;
    justify-content: flex-end;
}

.owl-carousel .owl-nav button {
    width: 40px;
    height: auto;
    border: 2px solid #3E80FF;
}

.owl-carousel .owl-dots {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.owl-dot {
    background: #fff !important;
    border: 1px solid #5055F0 !important;
    width: 15px;
    height: 15px;
    margin: 0 8px;
    border-radius: 50%;
}

.owl-dot.active {
    background: linear-gradient(325.27deg, #5055F0 17.19%, #EC9BF3 84.69%) !important;
}

button.owl-prev, button.owl-next {
    width: 50px !important;
}

button.owl-prev {
    color: #3E80FF !important;
    margin-right: 15px !important;
}

fieldset.exp-slide {
    height: <?php echo $web_height; ?>px;
}

@media screen and (max-width: 767px) {
    fieldset.exp-slide {
        height: <?php echo $mobile_height; ?>px;
        margin: 3px;
        padding: 0 11px;
    }
    
    .owl-carousel .owl-nav {
        margin-top: 15%;
        justify-content: center;
    }
    
    .exp-slide-title {
        font-size: 15px;
    }
    
    .exp-slide-about {
        font-size: 15px;
    }
    
    .owl-carousel {
        margin-top: 15px;
    }
    
    .owl-carousel .owl-dots {
        margin-top: -25%;
        margin-bottom: 10%;
        padding-bottom: 12%;
    }
}

@media screen and (min-width: 768px) and (max-width: 1024px) {
    fieldset.exp-slide {
        height: <?php echo $ipad_height; ?>px;
    }
}

@media screen and (min-width: 992px) and (max-width: 1200px) {
    .exp-slide-about {
        font-size: 16px;
    }
}

@media screen and (min-width: 1024px) and (max-width: 1292px) {
    fieldset.exp-slide {
        height: <?php echo $ipadpro_height; ?>px;
    }
}
</style>

<section class="blog-chain blog-chain-expertise-carousel bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="head-content text-center">
                    <h2 class="app-title r-family">
                        <?php echo !empty($data['heading']) ? $data['heading'] : ''; ?>
                    </h2>
                    <div class="app-desc r-family">
                        <?php echo !empty($data['description']) ? $data['description'] : ''; ?>
                    </div>
                </div>
                <div class="slider-content owl-carousel owl-theme">
                    <?php $slides = $data['carousel']; ?>
                    <?php foreach ($slides as $value) { ?>
                        <fieldset class="exp-slide">
                            <legend class="exp-slide-title"><?php echo !empty($value['title']) ? $value['title'] : ''; ?></legend>
                            <div class="exp-slide-about carousel-exp">
                                <?php echo !empty($value['about']) ? $value['about'] : ''; ?>
                            </div>
                        </fieldset>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".owl-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            items: 3,
            nav: true,
            dots: true,
            navText: [
                '<img src="/wp-content/uploads/left-arrow-1.svg" alt="left">',
                '<img src="/wp-content/uploads/right-arrow-1.svg" alt="right">'
            ],
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1024: {
                    items: 1.5
                },
                1280: {
                    items: 2.25
                }
            }
        });
    });
</script>
