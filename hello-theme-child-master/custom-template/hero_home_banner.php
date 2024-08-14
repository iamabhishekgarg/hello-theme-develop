<?php
$data = array(
    'title' => get_sub_field('title'),
    'description' => get_sub_field('description'),
    'buttonname' => get_sub_field('buttonname'),
    'buttonurl' => get_sub_field('buttonurl'),
    'background_image' => get_sub_field('background_image'),
    'mobile_background_image' => get_sub_field('mobile_background_image'),
    'title_color' => get_sub_field('title_color'),
    'description_color' => get_sub_field('description_color'),
  ); 
?>
<?php if($data['background_image']['ID']){
              $img = wp_get_original_image_url($data['background_image']['ID']);
    }   
  ?>
<?php if($data['mobile_background_image']['ID']){
              $mobile_img = wp_get_original_image_url($data['mobile_background_image']['ID']);
    }   
  ?>

<div class="parentContainer">
<div class="innerpage-banner">
    <div class="d-none d-sm-block">
        <img class="img-fluid" src="<?php echo $img; ?>" alt="<?php echo $data['title']?>">
    </div>
    <div class="d-lg-none d-md-none d-sm-none d-block">
        <img class="img-fluid custom-banner" src="<?php echo $mobile_img; ?>" alt="<?php echo $data['title']?>">
    </div>
       <div class="hero-home-banner">
            <div class="text-homebanner-main">
                <h1 class="primary-title banner-title" style="color: <?php echo $data['title_color']?>">
                <?php if($data['title']) echo $data['title']; ?></h1>
                 <p class="banner-description col-10 px-0" style="color: <?php echo $data['description_color']?>">
                <?php if($data['description']) echo $data['description']; ?></p> 
                <div class="btn-container">
                <a href="<?php echo get_site_url().$data['buttonurl']; ?>"><span class="btn-large"><?php echo $data['buttonname']; ?></span></a>
            </div>
            </div>
       </div>  
   </div>
</div>
<style type="text/css">

.parentContainer {
position: relative;
color: white;
}
	h1.primary-title.banner-title {
    font-size: 48px;
}
.hero-home-banner .text-homebanner-main {
    position: absolute;
    top: 50%;
    left: 52%;
    transform: translateY(-50%);
    width: 47%;
}
.hero-home-banner .homebanner-title {
    color: black;
    font-weight: 500;
    line-height: 1.3em;
    width: 100%;
    margin-top: 15px;
    letter-spacing: 0.2px;
    
}
.hero-home-banner .banner-description {
    color: #333;
    font-size: 24px;
    font-weight: 400;
    line-height: 1.5em;
    width: 100%;
}

img.custom-banner {
    width: 100%;
}
@media screen and (max-width: 1599px) {
.hero-home-banner .banner-description {
    font-size: 18px;
}
h1.primary-title.banner-title {
        font-size: 40px;
    }
}
	
@media screen and (max-width: 1199px) {
	    h1.primary-title.banner-title {
        font-size: 30px;
    }
}
	@media screen and (max-width: 991px) {
	    .hero-home-banner .banner-description {
        font-size: 14px;
    }
	h1.primary-title.banner-title {
        font-size: 20px;
    }
}
@media (max-width: 576px) {
    .hero-home-banner .banner-description {
        font-size: 16px;
    }
.hero-home-banner .text-homebanner-main {
    left: 5%;
    width: 100%;
	    top: 25%;
}
    h1.primary-title.banner-title {
        font-size: 20px;
    }
    .clients-header {
        font-size: 18px;
        text-align: center;
        margin-top: 25px;
    }
}
</style>