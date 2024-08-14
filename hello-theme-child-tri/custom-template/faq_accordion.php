<?php
$data = array(
    'heading' => get_sub_field('heading'),
    'description' => get_sub_field('description'),
    'accordion' => get_sub_field('accordion'),
    'mar_top' => get_sub_field('mar_top'),
    'mar_bot' => get_sub_field('mar_bot'),
);
$mar_top = $data['mar_top'];
$mar_bot = $data['mar_bot'];
?>
<section class="faq-cls <?php echo $mar_top; ?> <?php echo $mar_bot; ?>">
    <h2 class="primary-title text-center"><?php echo esc_html($data['heading']); ?></h2>
     <p class="text-p"><?php echo !empty($data['description']) ? $data['description'] : ''; ?></p>
    <div class="container my-4">
        <div class="accordion" id="accordionExample">
            <?php if( have_rows('accordion') ): ?>
                <?php 
                $counter = 0;
                while( have_rows('accordion') ) : the_row();
                    $question = get_sub_field('question');
                    $answer = get_sub_field('answer');
                    $counter++;
                ?>
                    <div class="card">
                        <div class="card-body faq-card">
                            <div class="faq-header" id="heading<?php echo $counter; ?>">
                                    <button class="question-title btn poppins-medium" type="button" data-toggle="collapse" data-target="#collapse<?php echo $counter; ?>" aria-expanded="<?php echo $counter === 1 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $counter; ?>">
                                        <?php echo esc_html($question); ?> 
                                    </button>
                            </div>
                            <div id="collapse<?php echo $counter; ?>" class="collapse<?php echo $counter === 1 ? ' show' : ''; ?> text-left" aria-labelledby="heading<?php echo $counter; ?>" data-parent="#accordionExample">
                                <p class="text-p answer-text"><?php echo esc_html($answer); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
jQuery(function($) {
    $(document).ready(function() {    
        $('#accordion .faq-head-body').hide();
        $('.faq-head-title').click(function(){
            $(this).next().slideToggle(300);
            $('.faq-head-body').not($(this).next()).slideUp(300);
            $(this).toggleClass('active');
            $('.faq-head-title').not($(this)).removeClass('active');
        });
    });
});
</script>

<style>
.faq-cls.mar-top{
        margin-top: <?php echo $mar_top."px"; ?>;
}
.faq-clscontent-with-media.mar-bot{
       margin-bottom: <?php echo $mar_bot."px"; ?>;
}
.faq-cls h2 {
    width: 85%;
    text-align: center;
    margin: 0 auto;
}
.accordion .card {
    border: 0;
}
.question-title {
    font-size: 22px;
}
p.text-p.answer-text {
    width: 95%;
}
.accordion .faq-card {
    background-color: #EDF1F8;
    gap: 10px;
    margin-bottom: 20px;
    padding: 10px 10px 15px 25px;
    border-radius: 16px;
}
.accordion .faq-header {
    position: relative;
    text-align: left;
}
.accordion .faq-header .btn {
    width: 100%;
    text-align: left;
    padding-right: 30px;
    padding-left: 0;
    color: #2A2A2A;
    font-weight: 500;
}
.accordion .faq-header .btn:hover, .accordion .faq-header .btn:focus {
    background-color: transparent;
}
.accordion .faq-header .btn::after {
    content: '\f078';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    transition: transform 0.2s;
    font-size: 18px;
}

.accordion .faq-header .btn.collapsed::after {
    content: '\f077'; 
    transform: translateY(-50%) rotate(180deg);
}
@media screen and (max-width: 1599px) {
  .question-title {
    font-size: 20px;
}
.accordion .faq-header .btn::after {
    font-size: 16px;
}
}
	@media screen and (max-width: 1199px) {
		    .question-title {
        font-size: 18px;
    }
}
@media screen and (max-width: 991px) {
		    .question-title {
        font-size: 16px;
    }
}

@media (max-width: 576px) {

.accordion .faq-header .btn {
    font-size: 18px;
    text-wrap: wrap;
	}}
	

</style>
