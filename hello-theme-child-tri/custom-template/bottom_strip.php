<?php
$data = [
    'heading' => get_sub_field('heading'),
    'heading_color' => get_sub_field('heading_color'),
    'buttontext' => get_sub_field('buttontext'),
    'buttonurl' => get_sub_field('buttonurl'),
    'right_image' => get_sub_field('right_image'),
    'web_background_image' => get_sub_field('web_background_image'),
    'mobile_background_image' => get_sub_field('mobile_background_image'),
    'mar_top' => get_sub_field('mar_top'),
    'mar_bot' => get_sub_field('mar_bot'),
];
$mar_top = $data['mar_top'];
$mar_bot = $data['mar_bot'];
?>

<?php if($data['web_background_image']['ID']){
              $web_img = wp_get_original_image_url($data['web_background_image']['ID']);
    }   
  ?>
<?php if($data['mobile_background_image']['ID']){
              $mobile_img = wp_get_original_image_url($data['mobile_background_image']['ID']);
    }   
  ?>
<section class="bottom-strip mar-top mar-bot">

    <div class="container">
        <div class="bottom-strip-bg" >
         <div class="row bottom-strip-padding">
             <div class="center-v-wrap">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php 
            if (!empty($data['right_image'])) {
                $url = wp_get_original_image_url($data['right_image']['ID']);
                if ($url) { 
                    $alt = !empty($data['title']) ? esc_attr($data['title']) : ''; 
                    ?>
                    <img class="middlestrip-img" src="<?php echo esc_url($url); ?>" alt="<?php echo $alt; ?>">
                    <?php
                }
            }
            ?>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" >  
                <div class="strip-content">
                    <div class="get-strip-title">
                        <h3 class="secondary-title mstrip-title poppins-regular" style="color: <?php echo $data['heading_color']; ?>"><?php echo !empty($data['heading']) ? $data['heading'] : ''; ?></h3>
                    </div>
                    <div class="btn-container">
                    <a href="<?php echo get_site_url() . $data['buttonurl']; ?>"><span class="btn-medium"><?php echo $data['buttontext']; ?></span></a>
                </div>
                </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>
<?php $data = null; ?>
<style>
    img.middlestrip-img {
    width: 90%;
}

.bottom-strip.mar-top{
        margin-top: <?php echo $mar_top."px"; ?>;
	    float:left;
	    width:100%;
}
.bottom-strip.mar-bot{
       margin-bottom: <?php echo $mar_bot."px"; ?>;
	float:left;
	    width:100%;
}
.bottom-strip-bg {
                background-image: url('<?php echo $web_img; ?>');
                background-size: 100% 100%;
    width: 100%;
            }
.bottom-strip-title{
   text-align: left;
}
.bottom-strip-padding {
    padding: 20px 25px;
}
.strip-content {
    padding: 0px 20px;
    text-align: center;
}
@media (max-width: 576px) {
            .bottom-strip-bg {
                background-image: url('<?php echo $mobile_img; ?>');
            }
        }
@media (max-width: 576px) {

    .strip-title {
        font-size: 18px;
    }

    .strip-content {
        padding: 0px 0px !important;
        text-align: center;
    }

}


</style>