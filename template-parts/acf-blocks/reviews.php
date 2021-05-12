<?php
    $reviews_repeater = get_row_layout('reviews_repeater')
?>

<section class="reviews" id="reviews">
	<div class="container">
		<div class="reviews__title aud _anim-items _anim-off">НАШИ ОТЗЫВЫ</div>
            <?php

            if( $reviews_repeater ) {
                echo '<div class="reviews__slider">';
                while( the_repeater_field('reviews_repeater') ) {
                    $reviews_bg = get_sub_field('reviews_bg');
                    $reviews_title = get_sub_field('reviews_title');
                    $reviews_text = get_sub_field('reviews_text');
                    $reviews_name = get_sub_field('reviews_name');
                    $reviews_city = get_sub_field('reviews_city');
                    $reviews_photo = get_sub_field('reviews_photo');

                    echo '
                        <div class="reviews__slide">
                            <div class="reviews__slide_img alr _anim-items _anim-off"><img src="'. $reviews_bg .'" alt="1"></div>
                            <div class="reviews__slide_card arl _anim-items _anim-off">
                                <div class="reviews__slide_top">
                                    <div class="reviews__slide_photo"><img src="'. $reviews_photo .'" alt="reviewsphoto"></div>
                                    <div class="reviews__slide_name">'. $reviews_name .'<span>'. $reviews_city .'</span></div>
            
                                </div>
                                <div class="reviews__slide_text">
                                    <div class="reviews__slide_title">'. $reviews_title .'</div>
                                    <div class="reviews__slide_descr">'. $reviews_text .'</div>
                                </div>
                            </div>
                        </div>
                    ';
                }
                echo '</div>';
            }

            ?>
		</div>
</section>