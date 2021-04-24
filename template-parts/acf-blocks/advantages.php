<?php
    $advantages_title = get_sub_field('advantages_title');
    $advantages_bg = get_sub_field('advantages_bg');
    $advantages_item = get_row_layout('advantages_item');
?>

<section class="advantages" style="background: linear-gradient(0deg,hsla(0,0%,6%,.84),hsla(0,0%,6%,.84)),url(<?php echo $advantages_bg?>) 50%/cover no-repeat;">
	<div class="container">
		<div class="advantages__title aud _anim-items _anim-off">
            <?php echo $advantages_title ?>
		</div>

        <?php
        if( $advantages_item ) {
            echo '<div class="advantages__icons">';
            while( the_repeater_field('advantages_item') ) {
                $advantages_img = get_sub_field('advantages_img');
                $advantages_title = get_sub_field('advantages_title');
                $advantages_text = get_sub_field('advantages_text');

                echo '
                    <div class="advantages__item ascale _anim-items _anim-off">
                        <div class="advantages__item_icon">
                            <img src="'. $advantages_img .'" alt="">
                        </div>
                        <div class="advantages__item_text">
                            <div class="advantages__item_title">
                                '. $advantages_title .'
                            </div>
                            <div class="advantages__item_subtitle">
                                 '. $advantages_text .'
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