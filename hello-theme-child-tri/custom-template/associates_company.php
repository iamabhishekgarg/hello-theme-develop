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

<section class="associate-cls mar-top mar-bot" style="background-color: <?php echo $data['background_color']; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="head-content">
                    <h2 class="primary-title text-center">
                        <?php echo !empty($data['heading']) ? $data['heading'] : ''; ?>
                    </h2>
                    <div class="text-p text-center">
                        <p><?php echo !empty($data['description']) ? $data['description'] : ''; ?></p>
                    </div>
                </div>
            </div>
          <?php if ($data['content_media']) {
            $keys = $data['content_media']; ?>
        <?php
        $itemCount = count($keys);
        $icnt = 0;
        foreach ($keys as $value) { ?>
        <?php if ($icnt % 3 == 0) { ?>
       

           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-6 associate-card">
                <div class="card h-100 radius-24">
                    <div class="card-body p-3 text-center d-flex align-items-center justify-content-center">
                        <?php 
                            if (!empty($value['card_img'])) {
                                $url = wp_get_original_image_url($value['card_img']['ID']);
                                if ($url) { 
                                    $alt = !empty($value['title']) ? esc_attr($value['title']) : ''; 
                                    ?>
                                    <img src="<?php echo esc_url($url); ?>" alt="<?php echo $alt; ?>">
                                    <?php
                                }
                            }
                            ?>
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
    .associate-card {
    margin-top: 3%;
}
	section.associate-cls {
    padding: 70px 0;
}
.associate-cls.mar-top{
    margin-top: <?php echo $mar_top."px"; ?>;
    float: left;
    width: 100%;
}
.associate-cls.mar-bot{
    margin-bottom: <?php echo $mar_bot."px"; ?>;
     float: left;
    width: 100%;
}
.associate-cls img {
    width: 70%;
    height: 70%;
}
.radius-24 {
    border-radius: 24px;
}

	@media screen and (max-width: 1599px) {
}
@media screen and (max-width: 1199px) {
}

@media screen and (max-width: 991px) {
}

@media (max-width: 576px) {
	.stories-cls .container {
  width: 80%;
  margin: 0 auto;
}
}
.associate-cls.card-body {
    height: 80px;
    border-radius: -1px;
}
</style>