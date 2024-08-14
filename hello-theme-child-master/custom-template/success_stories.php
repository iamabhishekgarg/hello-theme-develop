<?php
$data = [
    'heading' => get_sub_field('heading'),
    'description' => get_sub_field('description'),
    'background_color' => get_sub_field('background_color'),
    'content_media' => get_sub_field('content_media'),
    'mar_top' => get_sub_field('mar_top'),
    'mar_bot' => get_sub_field('mar_bot'),
];
$count = 0;
$mar_top = $data['mar_top'];
$mar_bot = $data['mar_bot'];
?>

<section class="success-stories mar-top mar-bot" style="background-color: <?php echo $data['background_color']; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="head-content">
                    <h2 class="primary-title text-center mb-4">
                        <?php echo !empty($data['heading']) ? $data['heading'] : ''; ?>
                    </h2>
                    <p class="text-p"><?php echo !empty($data['description']) ? $data['description'] : ''; ?></p>
                </div>
            </div>
            <?php if ($data['content_media']) {
                $keys = $data['content_media']; ?>
                <?php
                $itemCount = count($keys);
                $icnt = 0;
                foreach ($keys as $value) { ?>
                    <?php if ($icnt % 3 == 0) { ?>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-2">
                            <div class="card mb-4 shadow-sm pb-3">
                                <div class="card-body p-3">
                                    <div class="card-img">
                                         <?php $url1 = wp_get_original_image_url($value['hover_image']['ID']); ?>
                                        <?php
                                        if (!empty($value['card_img'])) {
                                            $url = wp_get_original_image_url($value['card_img']['ID']);
                                            if ($url) {
                                                $alt = !empty($value['title']) ? esc_attr($value['title']) : '';
                                        ?>
                                                <img class="w-100" src="<?php echo esc_url($url); ?>" alt="<?php echo $alt; ?>">
                                        <?php
                                            }
                                        }
                                        ?>
                                        <div class="i-overlay">
                                            <img class="i-image-hover" src="<?php echo $url1; ?>" alt="<?php echo $value['title']; ?>" transparency="" />
                                        </div>
                                    </div>
                                    <h4 class="mt-3 mb-2 secondary-title poppins-medium" style="color: <?php echo $value['title_color']; ?>"><?php echo $value['title']; ?></h4>
                                    <p class="text-p card-text poppins-light" style="color: <?php echo $value['description_color']; ?>"><?php echo !empty($value['description']) ? $value['description'] : ''; ?></p>
                                    <div class="btn-container">
                                        <a href="<?php echo get_site_url() . $value['button_url']; ?>"><span class="btn-medium"><?php echo $value['button_name']; ?></span></a>
                                    </div>
                                      
                                </div>
                                <div class="process-icon-about text-18 r-family mt-3">
                                    <?php echo $value['about']; ?>
                                </div>
                            </div>
                        </div>


                    <?php } ?>
                <?php }
                ?>
            <?php
            } ?>


        </div>
</section>
<style>
    section.success-stories {
        padding: 40px 80px;
    }

    .success-stories.mar-top {
        margin-top: <?php echo $mar_top . "px"; ?>;
        float: left;
        width: 100%;

    }

    .success-stories.mar-bot {
        margin-bottom: <?php echo $mar_bot . "px"; ?>;
        float: left;
        width: 100%;

    }

    .bg-light {
        background-color: #F8F8F8 !important;
    }
    .card-img {
    position: relative;
}
.card-img:hover .i-overlay {
    opacity: 1;
}
.i-overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: 0.5s ease;
    }
	@media (max-width: 576px) {
		
	section.success-stories {
    padding: 30px 0px;
}
}
@media screen and (max-width: 991px) {
	section.success-stories {
    padding: 40px 20px;
}
}
@media screen and (max-width: 1199px) {
}
@media screen and (max-width: 1599px) {
}

</style>