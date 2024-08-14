<?php
    $data = array(  
        'title_color' => get_sub_field('title_color'),
        'clients_title' => get_sub_field('clients_title'),        
        'content_media' => get_sub_field('content_media'),     
        'mar_top' => get_sub_field('mar_top'),
        'mar_bot' => get_sub_field('mar_bot'),
    );
    $count = 0;
    $mar_top = $data['mar_top'];
    $mar_bot = $data['mar_bot'];
?>
<section class="clients-logo mar-top mar-bot">
            <div class="container"> 
                <div class="row clients-sec">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <h1 class="clients-header" style="color: <?php echo $data['title_color']?>">
                <?php if($data['clients_title']) echo $data['clients_title']; ?></h1>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <?php if($data['content_media']){ $keys = $data['content_media']; ?>
                  <div class="k-logos">
                         <div class="logo_items">
                        <?php foreach ($keys as $value) {
                             if($count % 3=== 0 && $count !=0)
                            {
                        ?>
                     
                            <?php }  $count++;?>
                            <?php $imgurl = wp_get_original_image_url($value['image']['ID']); ?>
                          
                                    <img src="<?php echo $imgurl; ?>" alt="<?php echo $value['title']; ?>" transparency="">
                           
                      
                        <?php } ?>
                         </div>
                    </div>
                
                <?php } ?>
            </div>
</div>
</div>
</section>
<?php $data = null; ?>
<style>
.clients-logo.mar-top{
    margin-top: <?php echo $mar_top."px"; ?>;
}
.clients-logo.mar-bot{
    margin-bottom: <?php echo $mar_bot."px"; ?>;
}
/*---------- Logo Slider---------*/
@keyframes slides {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-100%);
  }
}

.k-logos {
    overflow: hidden;
    padding: 10px 0px;
    white-space: nowrap;
    position: relative;
}

.k-logos:before, .k-logos:after {
  position: absolute;
  top: 0;
  content: '';
  width: 250px;
  height: 100%;
  z-index: 2;
}
.clients-header {
    font-size: 24px;
    font-weight: 600;
}
.clients-sec {
    display: flex;
    align-items: center;
    border-bottom: 1px solid #EBEBEB;
}
/*.k-logos:before {
  left: 0;
  background: linear-gradient(to left, rgba(255,255,255,0), rgb(255, 255, 255));
}

.k-logos:after {
  right: 0;
  background: linear-gradient(to right, rgba(255,255,255,0), rgb(255, 255, 255));
}*/

.logo_items {
  display: inline-block;
  animation: 35s slides infinite linear;
}

.k-logos:hover .logo_items {
  animation-play-state: paused;
}
.logo_items img {
    height: 80px;
}
	@media screen and (max-width: 1599px) {
		.clients-header {
    font-size: 22px;
		}}
	
@media screen and (max-width: 1199px) {
}
		@media screen and (max-width: 991px) {
		.clients-header {
        font-size: 16px;
    }
}
	@media (max-width: 576px) {

	    .clients-header {
        font-size: 16px;
		}}

	
</style>