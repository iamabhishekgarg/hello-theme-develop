<?php
$data = [
    'heading' => get_sub_field('heading'),
    'subtitle' => get_sub_field('subtitle'),
    'carousel' => get_sub_field('carousel'),
    'image' => get_sub_field('image'),
];
?>

<section class="testimonial-carousel py-5">
    <div class="row row-flex equal no-gutters">
        <div class="col-lg-6 col-md-12 d-flex">
            <?php if ($data['image']): 
                $url = wp_get_original_image_url($data['image']['ID']); ?>
                <img class="img-fluid w-100" src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($data['heading']); ?>">
            <?php endif; ?>

            <div class="testimonial-lefts position-absolute d-flex flex-column justify-content-center h-100">
                <div class="testimonial-text text-white text-center pl-5">
                    <h2 class="secondary-title text-left"><?php echo esc_html($data['heading']); ?></h2>
                    <h3 class="primary-title text-left"><?php echo esc_html($data['subtitle']); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 testimonial-right bg-warning">
            <div class="owl-carousel owl-theme testimonial-slider-content">

                <?php foreach ($data['carousel'] as $slide): 
                    
                    $url = wp_get_original_image_url($slide['image']['ID']); ?>
                    <div class="left-slide-content">
                    <div class="item text-center">
                        <div class="testimonial-icons mb-4">
                            <img class="rounded-circle" src="<?php echo esc_url($url); ?>" alt="">
                        </div>
                        <div class="testimonial-review text-left px-4">
                            <h3 class="secondary-title"><?php echo esc_html($slide['title']); ?></h3>
                            <p class="text-p"><?php echo esc_html($slide['review_about']); ?></p>
                        </div>
                        <div class="testimonial-author">
                            <h3 class="review-authoname text-left"><?php echo esc_html($slide['author_name']); ?></h3>
                            <p class="review-authordes text-left"><?php echo esc_html($slide['author_designation']); ?></p>
                        </div>
                    </div>
                     </div>
                <?php endforeach; ?>
           
        </div>
            <div class="owl-nav custom-owl-nav d-flex justify-content-between mt-2 pb-4">
                <span class="owl-left"><img src="/wp-content/uploads/2024/08/testi-left-icon1.svg" class="owl-left" alt="Previous"></span>
                <span id="lg-car-counter" class="font-weight-bold align-self-center"></span>
                <span class="owl-right"><img src="/wp-content/uploads/2024/08/testi-right-icon.svg" class="owl-right" alt="Next"></span>
            </div>
        </div>
    </div>
</section>
<style type="text/css">

section.testimonial-carousel {
    padding-top: 40px;
    float: left;
    width: 100%;
    padding-bottom: 30px;
}
    .testimonial-slider-content.owl-carousel .owl-nav{
        display: none;
    }
  .right-slide-icon {
    float: left;
    bottom: 0;
    position: absolute;
}
.testimonial-author {
    /* position: absolute; */
    line-height: normal;
    margin-left: 1%;
}
.review-authoname {
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: 26px;
    letter-spacing: 0.26px;
    color: #2E2E2E;
}
.review-authordes {
    color: #494949;
    font-size: 16px;
    font-style: normal;
    font-weight: 600;
    line-height: 10px;
    letter-spacing: 0.2px;
    padding: 0 17px;

}
#lg-car-counter {
    padding: 0px 10px;
    color: #2E2E2E;
    margin-top: -5px;
}
img.owl-left {
    width: 40px;
    cursor: pointer;
}
img.owl-right {
    width: 40px;
    cursor: pointer;
}
.left-slide-content {
    padding: 5% 5%;
    padding-top: 40px !important;
}
.app-desc.review-text, .app-title.review-title  {
    color: #2E2E2E;
}
.testimonial-icons {
    width: 80px;
    height: 80px;
    float: right;
    margin-top: 0px;
}
.testimonial-lefts {
    position: absolute;
    top: 50%;
    left: 40%;
    transform: translate(-50%, -50%);
}
.testimonial-imgtitle {
    color: #FFF;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.54);
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 40px;
    letter-spacing: 3.5px;
    text-transform: uppercase;
    display: flex;
        margin-bottom: 0px !important;
}
.test-img {
    width: 100%;
    height:570px;
}
.testimonial-imgtitle:before {
    content: "";
    display: inline-block;
    margin-right: 7px;
    top: 19px;
    font-size: 26px !important;
    font-weight: 500;
    background: #ffffff;
    position: relative;
    height: 2px;
    max-width: 15px;
    width: -webkit-fill-available;
    border-radius: 50px;
    left: 0;
}
.testimonial-subtitle {
    color: #FFF;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.54);
    font-size: 36px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    letter-spacing: 1.08px;
    margin-top: 10px;
}
.testimonial-right {
    background: #DFB852;
    background-image: url(/wp-content/uploads/testinmonial-webg.png);
    background-size: 100% 100%;
}
.testimonial-review {
    padding-top: 150px;
/*     height: 420px; */
    cursor: grab;
}
.owl-nav.custom-owl-nav {
    position: relative;
    bottom: 0;
    cursor: pointer;
    display: flex;
    float: right;
    padding: 0px;
    right: 0;
    z-index: 1;
    margin-right: 20px;
}
img.owl-left {
    width: 40px;
    cursor: pointer;
}
img.owl-right {
    width: 40px;
    cursor: pointer;
}
@media screen and (max-width: 767px){
    .testimonial-review {
    height: 480px;
}
    .test-img {
    width: 100%;
    height: auto;
}
.owl-nav.hc-center.lg-carousel {
    margin-right: 5px;
    bottom: 80px;
}
    .v-center {
    margin-top: 10px;
}
img.owl-right, img.owl-left {
    width: 35px;
}
.testimonial-carousel {
    padding-bottom: 0px;
}
    #lg-car-counter {
    padding: 0px 8px;
}
.owl-left, .owl-right {
    width: 40px;
    cursor: pointer;
}
.testimonial-author {
    line-height: normal;
    margin-bottom: -40px;
    margin-top: 68%;
    width: 60%;
}
.review-authoname {
    font-size: 18px;
    line-height: 15px;
}
.review-authordes {
    font-size: 14px;
}
.testimonial-icons {
    margin-top: -10px;
}
.left-slide-content {
    padding: 0% 3%;
}
.testimonial-text {
    width: 100%;
}
.testimonial-lefts {
    top: 50%;
    transform: translate(8%, -50%);
    width: 90%;
    left: 0;
}
.testimonial-imgtitle {
    font-size: 18px;
}
.testimonial-subtitle {
    font-size: 28px;
}
.testimonial-right {
    background-image: url(/wp-content/uploads/testimonial-yellowbgmob2.png);
    background-size: 100% 100%;
}
.review-authordes {
    line-height: normal;

}
.testimonial-right {
    height: auto;
}
.row-flex {
	display: flex;
    flex-wrap: wrap;
}
@media only screen and (min-width: 768px) and (max-width: 1024px) {
.testimonial-review {
    height: 430px;
}}
@media only screen and (min-width: 1400px) and (max-width: 1800px)  {
.test-img {
    height: 600px;
}
.testimonial-review {
    padding-top: 100px;
}
    }
@media only screen and (min-width: 1920px) and (max-width: 2560px)  {
.testimonial-subtitle {
    font-size: 42px;
    line-height: 60px;
}
.testimonial-imgtitle {
    font-size: 22px;
}
.testimonial-right {
    height: 811px !important;
}
.testimonial-review {
    padding-top: 30%;
    height: 630px;
}
.owl-nav.hc-center.lg-carousel {
    bottom: 130px;
}
.review-authoname {
    font-size: 24px;
}
.review-authordes {
    font-size: 20px;
}
.testimonial-icons {
    width: 140px;
    height: 140px;
    margin-top: 20px;
}
    .test-img {
    width: 100%;
    height: 811px;
}
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
jQuery(function($) {
    $(document).ready(function(){
        var owl=$(".testimonial-slider-content");
        $('.testimonial-slider-content').owlCarousel({
            autoplay: true,
            loop: true,
            infinite:true,
            nav: true,
            dots:false,
            items: 1,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
            onInitialized  : counter,
            onTranslated : counter 
        });
        function counter(event) {
            var element   = event.target;
            var items     = event.item.count;
            var item      = event.item.index + 1;
            //console.log(item+" "+items);
            item = item-2;
            if(item > items) {
                item = item - items
            }
            if(item == 0){
                item = +items;
            }
            $('#lg-car-counter').html(item+" of "+items)
        }
        owl.owlCarousel();
        $('.owl-right').click(function() {
            owl.trigger('next.owl.carousel');
        })
        $('.owl-left').click(function() {
            owl.trigger('prev.owl.carousel', [300]);
        })
    
    });
});
</script>
