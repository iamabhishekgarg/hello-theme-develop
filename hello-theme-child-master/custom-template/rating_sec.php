<?php
$data = [
    'heading' => get_sub_field('heading'),
    'description' => get_sub_field('description'),
    'card_img' => get_sub_field('card_img'),
    'card_bodybg' => get_sub_field('card_bodybg'),
    'card_bodybg_img' => get_sub_field('card_bodybg_img'),
    'content_media' => get_sub_field('content_media'),
    'mar_top' => get_sub_field('mar_top'),
    'mar_bot' => get_sub_field('mar_bot'),
];
$count = 0;
$mar_top = $data['mar_top'];
$mar_bot = $data['mar_bot'];
?>

<section class="rating-cls mar-top mar-bot bg-white text-center">
    <div class="container">
             <div class="row row-flex equal">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="card py-3 h-90 bg-grey radius-24" style="background-color: <?php echo $data['card_bodybg']; ?>">
                    <div class="card-body first-trust text-left radius-24 d-flex justify-content-center">
                         <h2 class="primary-title" style="color: <?php echo $data['heading_color']; ?>">
                        <?php echo !empty($data['heading']) ? $data['heading'] : ''; ?>
                        </h2>
                        <p class="text-p" style="color: <?php echo $data['description_color']; ?>"><?php echo !empty($data['description']) ? $data['description'] : ''; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card py-3 h-90 radius-24" style="background-color: <?php echo $data['card_bodybg_img']; ?>">
                    <div class="card-body text-center d-flex align-items-center justify-content-center">
                         <?php 
                            if (!empty($data['card_img'])) {
                                $url = wp_get_original_image_url($data['card_img']['ID']);
                                if ($url) { 
                                    $alt = !empty($data['title']) ? esc_attr($data['title']) : ''; 
                                    ?>
                                    <img class="mx-auto d-block h-75" src="<?php echo esc_url($url); ?>" alt="<?php echo $alt; ?>">
                                    <?php
                                }
                            }
                            ?>
                    </div>
                </div>
            </div>
          </div>
          <div class="row row-flex equal mb-3">
          <?php if ($data['content_media']) {
            $keys = $data['content_media']; ?>
        <?php
        $itemCount = count($keys);
        $icnt = 0;
        foreach ($keys as $value) { ?>
        <?php if ($icnt % 3 == 0) { ?>
          
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card py-4 h-90 radius-40" style="background-color: <?php echo $value['background_color']; ?>">
                    <div class="card-body p-3 text-center rating-img d-flex align-items-center justify-content-center">
                        <?php 
                            if (!empty($value['card_img'])) {
                                $url = wp_get_original_image_url($value['card_img']['ID']);
                                if ($url) { 
                                    $alt = !empty($value['title']) ? esc_attr($value['title']) : ''; 
                                    ?>
                                    <img class="mx-auto d-block h-75" src="<?php echo esc_url($url); ?>" alt="<?php echo $alt; ?>">
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
    </div>
</section>
<style>
.associate-card {
    margin-top: 3%;
}
.rating-cls.mar-top{
    margin-top: <?php echo $mar_top."px"; ?>;
    float: left;
    width: 100%;
}
.rating-cls.mar-bot{
    margin-bottom: <?php echo $mar_bot."px"; ?>;
     float: left;
    width: 100%;
}
.card-body.first-trust {
    display: flex;
    flex-direction: column;
    align-items: stretch;
    justify-content: center;
    padding: 20px 30px;
}
.radius-24{
    border-radius: 24px;
}
.radius-40{
    border-radius: 40px;
}
</style>