<?php
$data = [
    'text_points' => get_sub_field('text_points'),
    'mar_top' => get_sub_field('mar_top'),
    'mar_bot' => get_sub_field('mar_bot'),
];
$count = 0;
$description = $data['description'];
$mar_top = $data['mar_top'];
$mar_bot = $data['mar_bot'];
?>

   <section class="home-counter mar-top mar-bot">
        <div class="container">
    <?php if ($data['text_points']) {

        $keys = $data['text_points'];
        $counter = 0;

        // Initialize the counter
        ?>
        <div class="row counter-cls">
            <?php foreach ($keys as $value) { ?>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center counter-col">
                    <div class="statistic-section-box">
                        <div class="">    
                            <div class="rounded-circle">
                                <?php $url = wp_get_original_image_url($value['icon']['ID']); ?>
                                <img class="static-height-icon" src="<?php echo $url; ?>" alt="<?php echo $value['title']; ?>" transparency="">
                            </div>
                            <h2 class="counter-no"><?php echo $value['number']; ?></h2>
                        </div>
                    </div>
                    <p class="counter-text"><?php echo $value['description']; ?></p>
                </div>
                <?php
                $counter++;
                if ($counter < 4) {
                    echo '<i class="divider"></i>';
                }
                ?>
            <?php if ($counter >= 4) {
                break;
            }} ?>
        </div>
    <?php
    } ?>
</div>

</section>

 <style>
.home-counter.mar-top{
    margin-top: <?php echo $mar_top . "px"; ?>;
}
.home-counter.mar-bot{
    margin-bottom: <?php echo $mar_bot . "px"; ?>;
}
img.static-height-icon {
    height: 85px;
    width: 85px;
}
.counter-col:last-child {
    border-right: 0;
}
.counter-no {
    font-weight: 700;
    color: #1d1d1d;
}
.counter-text {
    font-weight: 500;
    color: #131313;
    font-size: 22px;
}
.counter-cls h2 {
    font-size: 55px;
    font-weight: 700;
    padding: 10px 0px 0px;
    margin-bottom: 0;
}
.divider:before {
    content: "";
    background-color: #4c8975;
    position: absolute;
    height: 80px;
    width: 2px;
    right: le;
    transform: translateY(50%);
}
@media (max-width: 768px) {
    .counter-cls > div {
        width: 49%;
        max-width: 49%;
    }
    .counter-cls > .divider {
        display: none;
    }
}


@media screen and (max-width: 1599px) {
    .counter-cls h2 {
        font-size: 40px;
    }
.counter-text {
    font-size: 18px;
}
}
	 @media screen and (max-width: 1199px) {
	.counter-cls h2 {
        font-size: 30px;
    }
}
@media screen and (max-width: 991px) {
	    .counter-cls h2 {
        font-size: 35px;
    }
	    .counter-text {
        font-size: 16px;
    }
}
@media (max-width: 576px) {
    .counter-cls > div {
        width: 100%;
        max-width: 100%;
    }
    .counter-cls > .divider {
        display: none;
    }
}
    </style>