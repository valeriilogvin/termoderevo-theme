<?php
$warranty_title = get_sub_field('warranty_title');
$warranty_slide = get_row_layout('warranty_slide');
?>

<section class="warranty">
    <div class="container">
        <div class="warranty__title aud _anim-items _anim-off"><?php echo $warranty_title ?></div>

        <?php if ($warranty_slide) {
            echo '<div class="warranty__slider alr _anim-items _anim-off">';
                while (the_repeater_field('warranty_slide')) {
                    $warranty_slide_img = get_sub_field('warranty_slide_img');
                    $warranty_slide_title = get_sub_field('warranty_slide_title');
                    $warranty_slide_text = get_sub_field('warranty_slide_descr');
                    $link = get_sub_field('warranty__btn');
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    $btn_id = get_sub_field('warranty_btn_id');

                    echo '
                        <div class="warranty__slide">
                            <div class="warranty__slide_top">
                                <div class="warranty__slide_img">
                                    <img src="' . $warranty_slide_img . '" alt="">
                                </div>
                            </div>
                            <div class="warranty__slide_text">
                                <div class="warranty__slide_title">
                                    ' . $warranty_slide_title . '
                                </div>
                                <div class="warranty__slide_descr">
                                    ' . $warranty_slide_text . '
                                </div>
                                <a id="' . $btn_id . '" href="' . esc_url($link_url) . '"  target="' . esc_attr($link_target) . '" class="btn warranty__btn">' . esc_html($link_title) . '</a>
                            </div>
                        </div>
                    ';
                }
            echo '</div>';
        }?>

    </div>
</section>