<?php
$data = array(
    'heading' => get_sub_field('heading'),
    'description' => get_sub_field('description'),
    'tabs' => get_sub_field('tabs'),
    'mar_top_bot' => get_sub_field('mar_top_bot'),
);
$mar_top_bot = $data['mar_top_bot'];
?>
<section class="basic-tab my-<?php echo $mar_top_bot; ?> bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="head-content text-center ">
                    <h2 class="primary-title mb-2"><?php echo !empty($data['heading']) ? $data['heading'] : ''; ?></h2>
                    <div class="text-p">
                        <?php echo !empty($data['description']) ? $data['description'] : ''; ?>
                    </div>
                </div>
                <div class="tab-cls my-4">
                    <div id="exTab1" class="nav-sec mt-2">
                        <ul class="nav nav-tabs nav-tabs-scrollable">
                            <?php $count = 0; ?>
                            <?php foreach ($data['tabs'] as $tab) { ?>
                                <li class="nav-item">
                                    <a href="#tab-<?php echo $count; ?>" class="nav-link poppins-medium <?php echo ($count === 0) ? 'active' : ''; ?>" data-toggle="tab"><?php echo $tab['head']; ?></a>
                                </li>
                                <?php $count++; ?>
                            <?php } ?>
                        </ul>
                        <div class="tab-content">
                            <?php $count = 0; ?>
                            <?php foreach ($data['tabs'] as $tab) { ?>
                                <div class="tab-pane fade <?php echo ($count === 0) ? 'show active' : ''; ?>" id="tab-<?php echo $count; ?>" style="background-color: <?php echo $tab['content_bg_color']; ?>">
                                    <div class="dd-view">
                                        <div class="tech-imgs row">
                                            <?php foreach ($tab['content'] as $content) { ?>
                                                <?php $url = wp_get_original_image_url($content['image']['ID']); ?>
                                                <div class="col-lg-3 col-md-3 col-sm-12 tech-img">
                                                    <img src="<?php echo $url; ?>" alt="<?php echo !empty($tab['head']) ? $tab['head'] : ''; ?>" class="img-fluid">
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <h2 class="secondary-title poppins-medium" style="color: <?php echo $content['tabtitle_color'] ?>">
                                                        <?php if ($content['tab_title']) echo $content['tab_title']; ?>
                                                    </h2>
                                                    <p class="text-p" style="color: <?php echo $content['tabtext_color'] ?>">
                                                        <?php if ($content['tab_text']) echo $content['tab_text']; ?>
                                                    </p>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="d-none">
                                        <div class="row">
                                            <?php $c = 0; ?>
                                            <?php foreach ($tab['content'] as $content) {
                                                if ($c % 2 === 0 && $c != 0) { ?>
                                        </div>
                                        <div class="row mt-4">
                                        <?php }
                                                $c++;
                                                $url = wp_get_original_image_url($content['image']['ID']); ?>
                                        <div class="col-6 <?php echo ($c % 2 === 0) ? 'pl-2' : 'pr-2'; ?>">
                                            <img src="<?php echo $url; ?>" alt="<?php echo !empty($tab['head']) ? $tab['head'] : ''; ?>" class="img-fluid">
                                        </div>
                                    <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <?php $count++; ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $data = null; ?>

<style>
    .basic-tab.my-<?php echo $mar_top_bot; ?> {
        margin-top: <?php echo $mar_top_bot . "px"; ?>;
        margin-bottom: <?php echo $mar_top_bot . "px"; ?>;
    }
    .basic-tab .nav-tabs {
        background-color: #F1F0F2;
        padding: 14px;
        font-size: 1rem;
        margin-bottom: 1rem;
        height: 70px;
        overflow-x: scroll;
    }
   .basic-tab .nav-tabs-scrollable {
    overflow: auto;
    white-space: nowrap;
    display: block;
    overflow-y: hidden;
}
    .basic-tab .nav-tabs-scrollable .nav-item {
        display: inline-block;
    }
    .basic-tab .nav-tabs .nav-link {
        color: #5E5E5E;
        text-decoration: none;
        border-radius: 8px;
        background: none;
        border: none;
    }
    .basic-tab .nav-tabs .nav-link.active {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #fff;
    }
    .basic-tab .tab-content {
        margin-top: 3%;
    }
    .basic-tab .tab-pane {
        padding: 25px 80px 25px 25px;
        border-radius: 24px;
    }
    .basic-tab .tech-img {
        text-align: center;
    }
    .basic-tab .tech-imgs.row {
        display: flex;
        align-items: center;
    }

.basic-tab ::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  border-radius: 10px;
  background-color: #F1F0F2;
}

.basic-tab ::-webkit-scrollbar {
  width: 8px;
	height:3px;
  background-color: #ffc107;
}

.basic-tab ::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
  background-color: #555;
}
	@media (max-width: 576px) {
	.basic-tab .tab-pane {
    padding: 30px 25px 20px 20px;
    border-radius: 24px;
}
		.basic-tab .tech-img {
    text-align: left;
    margin-bottom: 20px;
}
	}
	@media screen and (max-width: 991px) {
}
@media screen and (max-width: 1199px) {
}
	@media screen and (max-width: 1599px) {
		
	}
</style>
