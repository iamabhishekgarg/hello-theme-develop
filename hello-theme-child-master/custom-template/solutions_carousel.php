<?php 
$data = array(
    'heading' => get_sub_field('heading'),
    'description' => get_sub_field('description'),   
    'carousel' => get_sub_field('carousel'),
     'web_height' => get_sub_field('web_height'),   
    'mobile_height' => get_sub_field('mobile_height'),   
    'ipad_height' => get_sub_field('ipad_height'),
    'ipadpro_height' => get_sub_field('ipadpro_height'),
    'mar_top' => get_sub_field('mar_top'),
    'mar_bot' => get_sub_field('mar_bot'),
);
$web_height = $data['web_height'];
$mobile_height = $data['mobile_height'];
$ipad_height = $data['ipad_height'];
$ipadpro_height = $data['ipadpro_height'];
$mar_top_class = !empty($data['mar_top']) ? 'mt-' . intval($data['mar_top']) : '';
$mar_bot_class = !empty($data['mar_bot']) ? 'mb-' . intval($data['mar_bot']) : '';
?>

<section class="solutions-carousel <?php echo esc_attr($mar_top_class . ' ' . $mar_bot_class); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="head-content text-center mb-5">
                    <h2 class="primary-title">
                        <?php echo !empty($data['heading']) ? esc_html($data['heading']) : ''; ?>
                    </h2>
                    <div class="text-p">
                        <?php echo !empty($data['description']) ? esc_html($data['description']) : ''; ?>
                    </div>
                </div>

                <div class="slider-content basic-owl-carousel owl-carousel owl-theme">
    <?php if (!empty($data['carousel'])): ?>
        <?php foreach ($data['carousel'] as $index => $value): ?>
            <fieldset class="solutions-exp-slide d-flex flex-column" data-sort="<?php echo esc_attr($index + 1); ?>">
                <div class="exp-slide-about carousel-exp d-flex flex-column flex-grow-1">
                    <?php if (!empty($value['card_icon']['ID'])): 
                        $url = wp_get_original_image_url($value['card_icon']['ID']);
                        $alt = !empty($value['title']) ? esc_attr($value['title']) : ''; 
                    ?>
                        <img class="solslide-image text-left" src="<?php echo esc_url($url); ?>" alt="<?php echo $alt; ?>">
                    <?php endif; ?>

                    <h2 class="secondary-title mt-3">
                        <?php echo !empty($value['slide_title']) ? esc_html($value['slide_title']) : ''; ?>
                    </h2>
                    <div class="text-p flex-grow-1">
                        <?php echo !empty($value['slide_text']) ? esc_html($value['slide_text']) : ''; ?>
                    </div>
                </div>
            </fieldset>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

            </div>
        </div>
    </div>
</section>


<style>
.solutions-exp-slide {
    display: flex;
    flex-direction: column;
}

.exp-slide-about {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.solutions-carousel .app-title:before {
  display: none;
}
.solutions-carousel.mar-top{
        margin-top: <?php echo $mar_top."px"; ?>;
        float: left;
        width: 100%;
}
.solutions-carousel.mar-bot{
       margin-bottom: <?php echo $mar_bot."px"; ?>;
        float: left;
        width: 100%;
}
.owl-carousel .owl-nav {
    display: flex;
    justify-content: flex-end;
    margin-top: 1%;
    margin-bottom: 2%;
}
.solslide-image{
    width: 20% !important;
}
.owl-carousel .owl-nav button {
    box-sizing: border-box;
    width: 40px;
    height: auto;
    border: 2px solid #3e80ff;
}
button.owl-prev {
    border-radius: 40px;
    color: #3e80ff !important;
    margin-right: 15px !important;
    width: 50px !important;
}
button.owl-next {
    width: 50px !important;
}
fieldset {
    padding: 0px 30px;
}
fieldset.solutions-exp-slide {
    position: relative;
    height: <?php echo $web_height."px"; ?>;
}
img.solutions-exp-slide {
    height: 167px;
}
.exp-slide-about {
    color: #2e2e2e;
    margin-top: 13px;
    position: relative;
    display: inline-block;

}
.exp-slide-about .img-top {
    position: absolute;
    z-index: 99;
}
.exp-slide-about:hover .img-top {
    display: inline;
}
fieldset.solutions-exp-slide {
    position: relative;
    padding: 0px 10px;
    border: none;
    margin-left: 0px;
    /* margin-top: 4%; */
    background: #efefef;
    padding: 30px;

}

.owl-carousel button.owl-dot {
    margin-left: 0;
}
.arrow-outline-btn {
          border: 1px solid #686868;
          border-radius: 100px;
          padding: 15px 25px;
          color: #686868;
        }
        .arrow-btn-icon {
          color: #686868;
          margin-left: -7px;
        }
        .owl-carousel .owl-nav button {
    box-sizing: border-box;
    width: 40px;
    height: auto;
    border: 2px solid #686868;
}
@media screen and (max-width: 767px) {
     .owl-carousel {
        display: block !important;
    }
    .owl-item cloned {
        width: 298px;
    }

       fieldset.solutions-exp-slide {
        margin: 15px;
        padding: 0 0px;
        width: 100%;
        margin-bottom: 0px;
        margin-top: -10px;
         height: <?php echo $mobile_height."px"; ?>;
    }
    .owl-carousel .owl-nav {
        margin-top: 15%;
        justify-content: center;
    }

     .owl-carousel .owl-nav {
        margin-top: 5%;
        justify-content: center;
        margin-bottom: 5%;
    }
    .solution-title {
        font-size: 18px;
    }
    .solutions-overlay {
        padding: 0px 15px;
        width: 90%;
    }
    .solutions-btn.viewcasestudy-btn,
    .solutions-btn.explore-btn {
        padding: 8px 10px;
        font-size: 14px;
    }
    .solutions-btn {
        margin-right: 10px;
    }
    .solutions-exp-slide-title {
        font-size: 15px;
    }
    .solutions-exp-slide-about {
        font-size: 15px;
    }
    .owl-carousel {
        margin-top: 15px;
    }
    fieldset.solutions-exp-slide {
        width: 110%;
    }

        .exp-slide-about {
        width: 100%;
        padding: 25px;
    }
    .basic-owl-carousel.owl-carousel .owl-stage {
        margin-left: -15px !important;
    }
}
@media screen and (min-width: 768px) and (max-width: 1024px) {
    fieldset.solutions-exp-slide {
        padding: 0px 0px;
        margin-left: 0px;
        height: <?php echo $ipad_height."px"; ?>;
    }
    .exp-slide-about {
    padding: 25px;
}
}

@media only screen and (min-width: 992px) and (max-width: 1200px) {
    .solutions-exp-slide-about {
        font-size: 16px;
    }
    fieldset.solutions-exp-slide {
        padding: 0px 10px;
        margin-left: 110%;
        width: 100%;
        height: px;
    }
    .basic-owl-carousel.owl-carousel .owl-stage {
        margin-left: -67% !important;
    }
}
@media only screen and (min-width: 1400px) and (max-width: 1800px)  {
    .hover-bottomicon img {
    width: 50px !important;
    height: 50px !important;
    bottom: 15px;
    right: 15px;
}
    }
@media only screen and (min-width: 1920px) and (max-width: 2560px) {
.hover-bottomicon img {
    width: 55px !important;
    height: 55px !important;
    bottom: 20px;
    right: 20px;
}
}

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script type="text/javascript">
const prevIcon = `
  <button class="btn arrow-outline-btn d-inline-flex align-items-center" type="button">
    <i class="fas fa-arrow-left arrow-btn-icon"></i>
  </button>`;

const nextIcon = `
  <button class="btn arrow-outline-btn d-inline-flex align-items-center" type="button">
    <i class="fas fa-arrow-right arrow-btn-icon"></i>
  </button>`;

jQuery(document).ready(function($) {
   const prevIcon = `
  <button class="btn arrow-outline-btn d-inline-flex align-items-center" type="button">
    <i class="fas fa-arrow-left arrow-btn-icon"></i>
  </button>`;

const nextIcon = `
  <button class="btn arrow-outline-btn d-inline-flex align-items-center" type="button">
    <i class="fas fa-arrow-right arrow-btn-icon"></i>
  </button>`;


    $(".basic-owl-carousel").owlCarousel({
        autoplay: true,
        items: 3,
        loop: true,
        margin: 30,
        nav: true,
        dots: true,
        navText: [prevIcon, nextIcon],
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 1
            },
            1024: {
                items: 3
            },
            1200: {
                items: 2.50
            }
        }
    });
});

  </script>
