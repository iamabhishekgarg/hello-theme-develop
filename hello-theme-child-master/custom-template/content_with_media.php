<?php
$data = [
    'background_color' => get_sub_field('background_color'),
    'text_align' => get_sub_field('text_align'), 
    'title' => get_sub_field('title'),
    'title_color' => get_sub_field('title_color'),
    'description' => get_sub_field('description'),
    'description_color' => get_sub_field('description_color'),
    'image' => get_sub_field('image'),
    'button_name' => get_sub_field('button_name'),
    'button_url' => get_sub_field('button_url'),
    'mar_top' => get_sub_field('mar_top'),
    'mar_bot' => get_sub_field('mar_bot'),

];
$count = 0;
$title = $data['title'];
$mar_top = $data['mar_top'];
$mar_bot = $data['mar_bot'];
?>

<section class="content-with-media mar-top mar-bot" style="background-color: <?php echo $data['background_color']; ?>">
    <div class="container">
         <div class="row">
          <div class="d-none d-sm-block d-md-block d-lg-block">
                <?php if($data['text_align'] == "left"){ ?>
                 <div class="coming-keft">
                    <div class="center-v-wrap">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                               <h2 class="primary-title" style="color: <?php echo $data['title_color']?>">
                                 <?php if($data['title']) echo $data['title']; ?></h2> 
                             <p class="text-p" style="color: <?php echo $data['description_color']?>">
                                 <?php if($data['description']) echo $data['description']; ?></p> 
                            <div class="btn-container">
                              <a href="<?php echo get_site_url() . $data['button_url']; ?>"><span class="btn-medium"><?php echo $data['button_name']; ?></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <?php 
                            if (!empty($data['image'])) {
                                $url = wp_get_original_image_url($data['image']['ID']);
                                if ($url) { 
                                    $alt = !empty($data['title']) ? esc_attr($data['title']) : ''; 
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
                <?php if($data['text_align'] == "right"){ ?>
                 <div class="coming-here">
                    <div class="center-v-wrap">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <?php 
                            if (!empty($data['image'])) {
                                $url = wp_get_original_image_url($data['image']['ID']);
                                if ($url) { 
                                    $alt = !empty($data['title']) ? esc_attr($data['title']) : ''; 
                                    ?>
                                    <img src="<?php echo esc_url($url); ?>" alt="<?php echo $alt; ?>">
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           
                            <h2 class="primary-title" style="color: <?php echo $data['title_color']?>">
                                 <?php if($data['title']) echo $data['title']; ?></h2> 
                        
                      
                            <p class="text-p" style="color: <?php echo $data['description_color']?>">
                                 <?php if($data['description']) echo $data['description']; ?></p> 
                              
                            <div class="btn-container">
                              <a href="<?php echo get_site_url() . $data['button_url']; ?>"><span class="btn-medium"><?php echo $data['button_name']; ?></span></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                     <?php } ?> 

           </div>
          <div class="d-block d-sm-none">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <h2 class="primary-title" style="color: <?php echo $data['title_color']?>">
                                 <?php if($data['title']) echo $data['title']; ?></h2> 
                              <?php if ($data['image']) {
                              $url = wp_get_original_image_url($data['image']['ID']); ?>
                            <img src="<?php echo $url; ?>" alt=<?php echo !empty($data['title']) ? $data['title'] : ''; ?>>
                            <?php
                          } ?>
                </div>
                <?php if($data['text_align']=="left"){ ?>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <p class="text-p" style="color: <?php echo $data['description_color']?>">
                                 <?php if($data['description']) echo $data['description']; ?></p> 
                    </div>
                <?php } ?> 
                <?php if($data['text_align']=="right"){ ?>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                         <p class="text-p" style="color: <?php echo $data['description_color']?>">
                                 <?php if($data['description']) echo $data['description']; ?></p> 
                    </div>
                <?php } ?> 
        </div>
        
       </div>
    </div>
</section>


<style type="text/css">
.content-with-media.mar-top{
        margin-top: <?php echo $mar_top."px"; ?>;
}
.content-with-media.mar-bot{
       margin-bottom: <?php echo $mar_bot."px"; ?>;
}
section.content-with-media {
    padding: 50px 0px;
}
    .center-v-wrap {
    display: flex;
    align-items: center;
}
</style>