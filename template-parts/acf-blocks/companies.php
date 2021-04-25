<?php
$companies_title = get_sub_field('companies_title');
$companies_logos = get_sub_field('companies_logos');
?>

<section class="companies">
    <div class="container">
        <div class="companies__title aud _anim-items _anim-off">
            <?php echo $companies_title ?>
        </div>
        <?php
        if ($companies_logos): ?>
            <div class="companies__slider ascale _anim-items _anim-off">
                <?php foreach ($companies_logos as $image): ?>
                    <div class="companies__slide">
                        <img src="<?php echo esc_url($image); ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>