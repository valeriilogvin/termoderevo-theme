<?php
$left_banner       = get_sub_field( 'left_banner' );
$left_banner_image = $left_banner['image'];
$left_banner_title = $left_banner['title'];
$left_banner_link = $left_banner['link'];
$left_banner_link_url = $left_banner_link['url'];
$left_banner_link_title = $left_banner_link['title'];
$left_banner_link_target = $left_banner_link['target'] ? $left_banner_link['target'] : '_self';
$left_banner_link_subtitle = $left_banner['subtitle'];

$right_banner = get_sub_field( 'right_banner' );
$right_banner_image = $right_banner['image'];
$right_banner_title = $right_banner['title'];
$right_banner_link = $right_banner['link'];
$right_banner_link_url = $right_banner_link['url'];
$right_banner_link_title = $right_banner_link['title'];
$right_banner_link_target = $right_banner_link['target'] ? $right_banner_link['target'] : '_self';
$right_banner_link_subtitle = $right_banner['subtitle'];
?>


<div class="banner ">
    <div class=" container ">
        <div class="pb-57 banner__inner">
			<?php
			if ( $left_banner ): ?>
                <div class="mr-20 banner__item">
                    <div class=" banner__imgs ">
                        <a class="link " target="<?php esc_attr($left_banner_link_target) ?>" href="<?php echo esc_url($left_banner_link_url) ?>">
                            <img src="<?php echo esc_html($left_banner_image) ?>" alt=" " class=" banner__img ">
                        </a>

                    </div>
                    <div class="p0-20 banner__box">
                        <div class=" subheading banner-one__subheading "><?php echo $left_banner_title ?></div>
                        <a class="link title-h1 banner__title" target="<?php echo esc_attr($left_banner_link_target) ?>" href="<?php echo esc_url($left_banner_link_url) ?>"><?php echo esc_html($left_banner_link_title) ?></a>
                        <div class="mt-15 subtitle banner__subtitle "><?php echo esc_html($left_banner_link_subtitle)?></div>
                    </div>
                </div>
			<?php endif;
			?>

	        <?php
	        if ( $right_banner ): ?>
                <div class="mr-20 banner__item">
                    <div class=" banner__imgs ">
                        <a class="link " target="<?php esc_attr($right_banner_link_target) ?>" href="<?php echo esc_url($right_banner_link_url) ?>">
                            <img src="<?php echo esc_html($right_banner_image) ?>" alt=" " class=" banner__img ">
                        </a>
                    </div>
                    <div class="p0-20 banner__box">
                        <div class=" subheading banner-one__subheading "><?php echo $right_banner_title ?></div>
                        <a class="link title-h1 banner__title" target="<?php echo esc_attr($right_banner_link_target) ?>" href="<?php echo esc_url($right_banner_link_url) ?>"><?php echo esc_html($right_banner_link_title) ?></a>
                        <div class="mt-15 subtitle banner__subtitle "><?php echo esc_html($right_banner_link_subtitle)?></div>
                    </div>
                </div>
	        <?php endif;
	        ?>

        </div>
    </div>
</div>
