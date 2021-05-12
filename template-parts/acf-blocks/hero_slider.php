<?php

$slides = get_sub_field('hero_slider');
if( $slides ):
?>
	<section class="heroSlider">
		<div class="heroSlider__container">
			<div class="heroSlider__wrapper">
				<?php foreach($slides as $item): 
					$image = $item['image'];
					$category = $item['category'];
					$title = $item['title'];
					$subtitle = $item['subtitle'];
					$link = $item['link'];
					?>
					<div class="heroSlider__card">
						<div class="heroSlider__card__img">
							<?php if($image): ?>
								<img class="lazy-img" data-src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">
							<?php endif; ?>
						</div>
						<div class="container container--full heroSlider__card__content">
							<?php if($category): ?>
								<span class="subheading heroSlider__card__content__subheading"><?php echo $category; ?></span>
							<?php endif; ?>
							<?php if($title): ?>
								<h2 class="title-h1 heroSlider__card__content__title"><?php echo $title; ?></h2>
							<?php endif; ?>
							<?php if($subtitle): ?>
								<h3 class="mt-5 title-h2 heroSlider__card__content__subtitle"><?php echo $subtitle; ?></h3>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="heroSlider__pagination"></div>
		</div>
	</section>
<?php
endif;