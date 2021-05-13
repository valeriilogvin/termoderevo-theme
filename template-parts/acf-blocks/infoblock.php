<?php
$section_title = get_sub_field( 'infoblock_section_title' );
$position      = get_sub_field( 'infoblock_second' );
$positionRight = get_sub_field('infoblock_second') == 'right';
$positionLeft  = get_sub_field( 'infoblock_second') == 'left';
$right         = get_sub_field( 'infoblock_second' );
$title         = get_sub_field( 'infoblock_title' );
$subtitle      = get_sub_field( 'infoblock_subtitle' );
$description   = get_sub_field( 'infoblock_description' );
$types         = get_sub_field( 'infoblock_types' );
$installation  = get_sub_field( 'infoblock_installation' );
$gallery       = get_sub_field( 'infoblock_gallery' );
$btnId         = get_sub_field( 'infoblock_btn_id' );
$anchor_id         = get_sub_field( 'infoblock_anchor_id' );
?>

<section class="comprehensive <?php echo $right ?>" id="<?php echo $anchor_id ?>">
    <div class="container">

		<?php
		if ( $section_title ): ?>
            <div class="comprehensive__title aud _anim-items _anim-off">
				<?php echo $section_title ?>
            </div>
		<?php endif; ?>

        <div class="infoblock

            <?php if ( $positionLeft ): ?>

                arl _anim-items _anim-off

            <?php else: ?>

                alr _anim-items _anim-off

            <?php endif ?>

            <?php echo $right ?>

        ">
            <div class="infoblock__slides">

                <div class="infoblock__title">
					<?php echo $title ?>
                </div>

				<?php
				if ( $subtitle ): ?>
                    <span> <?php echo $subtitle ?></span>
				<?php endif; ?>

				<?php
				if ( $gallery ): ?>
                    <div class="infoblock__slider">
						<?php foreach ( $gallery as $image ): ?>
                            <div class="infoblock__slide">
                                <img src="<?php echo $image ?>" alt=""/>
                            </div>
						<?php endforeach; ?>
                    </div>
				<?php endif; ?>

            </div>
            <div class="infoblock__wrapper">
                <div class="infoblock__tabs">
                    <div data-tab="0" class="infoblock__tab active">
                        Описание
                    </div>
                    <div data-tab="1" class="infoblock__tab">
                        Виды
                    </div>
                    <div data-tab="2" class="infoblock__tab">
                        Монтаж и обслуживание
                    </div>
                </div>
                <div class="infoblock__text">
                    <div data-tab="0" class="infoblock__descr active">
						<?php echo $description ?>
                    </div>
                    <div data-tab="1" class="infoblock__descr">
						<?php echo $types ?>
                    </div>
                    <div data-tab="2" class="infoblock__descr">
						<?php echo $installation ?>
                    </div>
                </div>
                <div class="infoblock__footer">
                    <div class="infoblock__footer_text">Закажите бесплатную консультацию специалиста прямо на объекте
                    </div>
                    <button id="<?php echo $btnId?>" data-modal="modal-form" class="btn infoblock__btn md-trigger">Получить консультацию</button>
                </div>
            </div>
        </div>
    </div>
</section>