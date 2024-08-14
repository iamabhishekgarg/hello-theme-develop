<?php
$data = array(
    'heading_color' => get_sub_field('heading_color'),
     'heading' => get_sub_field('heading'),
    'description_color' => get_sub_field('description_color'),
    'description' => get_sub_field('description'),
    'tabs' => get_sub_field('tabs'),
    'background_color' => get_sub_field('background_color'),
    'mar_top' => get_sub_field('mar_top'),
        'mar_bot' => get_sub_field('mar_bot'),
);
$count = 0;
    $mar_top = $data['mar_top'];
    $mar_bot = $data['mar_bot'];
?>
<section class="technology-tab mar-top mar-bot" style="background-color: <?php echo $data['background_color']; ?>">
<div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="head-content">
                    <h2 class="primary-title text-center" style="color: <?php echo $data['heading_color']; ?>"><?php echo !empty($data['heading']) ? $data['heading'] : ''; ?></h2>
                    <div class="text-p text-center" style="color: <?php echo $data['description_color']; ?>">
                        <?php echo !empty($data['description']) ? $data['description'] : ''; ?>
                    </div>
                </div>
            </div>
    <div class="row mt-5">
        <div class="col col-lg-2 col-12">
            <div class="nav flex-column nav-pills tech-tabs-scrollable" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <?php $count = 0; ?>
                <?php foreach ($data['tabs'] as $tab) { ?>
					<li class="nav-item">
						<a class="nav-link <?php echo ($count === 0) ? 'active' : ''; ?>" id="v-pills-<?php echo $count; ?>-tab" data-toggle="pill" href="#v-pills-<?php echo $count; ?>" role="tab" aria-controls="v-pills-<?php echo $count; ?>" aria-selected="<?php echo ($count === 0) ? 'true' : 'false'; ?>">
							<?php echo $tab['head']; ?>
						</a>
					</li>
                    <?php $count++; ?>
                <?php } ?>
            </div>
        </div>
        <div class="col col-lg-10 col-12">
            <div class="tab-content" id="v-pills-tabContent">
                <?php $count = 0; ?>
                <?php foreach ($data['tabs'] as $tab) { ?>
                    <div class="tab-pane fade <?php echo ($count === 0) ? 'show active' : ''; ?>" id="v-pills-<?php echo $count; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $count; ?>-tab">
                        <?php foreach ($tab['content'] as $content) { ?>
                            <div class="col-lg-5 col-md-4 col-sm-6 col-xs-6 col-6 technology-pillsbx mb-3">
                                <?php $url = wp_get_original_image_url($content['image']['ID']); ?>
                                <img class="technology-img" src="<?php echo $url; ?>" alt="<?php echo !empty($tab['head']) ? $tab['head'] : ''; ?>" class="img-fluid">
                                <h2 class="technology-title mt-3" style="color: <?php echo $content['techtitle_color']; ?>"><?php echo $content['tech_title']; ?></h2>
                            </div>
                        <?php } ?>
                    </div>
                    <?php $count++; ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</section>
<?php $data = null; ?>
<style type="text/css">
.tech-tabs-scrollable {
	overflow-x: auto;
	white-space: nowrap;
	overflow-y: hidden;
	display: block;
}
.tech-tabs-scrollable .nav-item {
    display: inline-block;
    margin-bottom: 6px;
}
.tech-tabs-scrollable .nav-link {
	white-space:normal;
}
.technology-tab.mar-top{
    margin-top: <?php echo $mar_top."px"; ?>;
    float: left;
    width: 100%;
}
.technology-tab.mar-bot{
    margin-bottom: <?php echo $mar_bot."px"; ?>;
    float: left;
    width: 100%;

}
.technology-tab {
    padding: 40px 0px 60px;
}
.technology-tab .technology-pillsbx {
    display: inline-block;
    background: #191919;
    border-radius: 12px;
    padding: 35px 0px;
    text-align: center;
    height: 200px;
    vertical-align: middle;
    margin-right: 10px;
    border: 1px solid #282828;
}
.technology-tab .technology-title {
    font-size: 18px;
    line-height: 1.4em;
}
.technology-tab .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #F5A100 !important;
    background-color: transparent;
}
.technology-tab .nav-pills .nav-link {
    border-radius: .25rem;
    font-size: 20px;
    color: #fff !important;
}
@media screen and (max-width: 991px) {
	.technology-tab .technology-title {
        font-size: 14px;
    }
}
@media screen and (max-width: 1199px) {
}
@media (min-width: 992px) {
	.tech-tabs-scrollable{
		overflow-x: hidden;
		white-space: nowrap;
		overflow-y: auto;
		display: flex;
	}
    .technology-pillsbx {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 18.8777%;
    }
}
@media screen and (max-width: 1599px) {
	.tech-tabs-scrollable{
		overflow-x: hidden;
		white-space: nowrap;
		overflow-y: auto;
		display: flex;
	}
    .technology-pillsbx {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 17.999%;
    }
	.technology-tab .technology-title {
    font-size: 16px;
}
	.technology-tab .nav-pills .nav-link {
    font-size: 18px;
}
	.technology-tab .technology-pillsbx {
    padding: 30px 0px;
    height: 180px;
}
}
@media (max-width: 768px) {
	.technology-tab .tab-content {
		margin-top: 10px;
	}
	.nav.tech-tabs-scrollable {
		overflow-x: auto;
		white-space: nowrap;
		overflow-y: hidden;
		display: block !important;
		flex-direction: unset !important;
	}
	.nav.tech-tabs-scrollable .nav-item {
		display: inline-block;
	}
	.nav.tech-tabs-scrollable .nav-link {
		white-space: normal;
	}
	.technology-pillsbx {
        -ms-flex: 0 0 31.333333%;
        flex: 0 0 31.333333%;
        max-width: 31.333333%;
    }
}
@media (max-width: 576px) {
	.technology-tab .tab-content {
		margin-top: 10px;
	}
	.nav.tech-tabs-scrollable {
		overflow-x: auto;
		white-space: nowrap;
		overflow-y: hidden;
		display: block !important;
		flex-direction: unset !important;
	}
	.nav.tech-tabs-scrollable .nav-item {
		display: inline-block;
	}
	.nav.tech-tabs-scrollable .nav-link {
		white-space: normal;
	}
	.technology-pillsbx {
        -ms-flex: 0 0 46%;
        flex: 0 0 46%;
        max-width: 46%;
    }
}
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
