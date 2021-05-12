<?php
$image = get_sub_field('image');
$imagePosition = get_sub_field('image_position');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$link = get_sub_field('link');
if($link):
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
?>

<div class="linkImageBanner linkImageBanner--<?php echo $imagePosition?>">
    <div class="container">
        <div class="linkImageBanner__inner pb-57 row">
            <div class="col-md-6 linkImageBanner__col linkImageBanner__col--img">
                <div class="inkImageBanner__img-wrapper">
                    <?php if($image): ?>
                    <a class="link" target="<?php echo esc_attr( $link_target ); ?>" href="<?php echo esc_url( $link_url ); ?>">
                        <img data-src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="lazy-img linkImageBanner__img ">
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 linkImageBanner__col linkImageBanner__col--content">
                <div class="linkImageBanner__box">
                    <div class="subheading linkImageBannere__subheading"><?php echo $title?></div>
                    <a class="link title-h1 linkImageBanner__title" target="<?php echo esc_attr( $link_target ); ?>" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ) ?></a>
                    <h2 class="mt-10 title-h2 linkImageBanner__subtitle"><?php echo esc_html( $subtitle ) ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
