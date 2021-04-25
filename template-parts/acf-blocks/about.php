<?php
    $about_img = get_sub_field('about_img');
    $about_title = get_sub_field('about_title');
    $about_text = get_sub_field('about_text');
?>

<section class="about" id="about">
	<div class="container">
		<div class="about__video alr _anim-items _anim-off" style="background: url(<?php echo $about_img?>) 50%/cover no-repeat;">
			<a href="https://youtu.be/d243ssZzTdU" target="_blank" class="about__video_btn">
				<svg width="57" height="79" viewBox="0 0 57 79" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M56.3984 39.3984L0.148434 78.3696L0.148437 0.427293L56.3984 39.3984Z" fill="url(#paint0_linear)"/>
					<defs>
					<linearGradient id="paint0_linear" x1="47.8984" y1="14.3984" x2="-2.10156" y2="74.3984" gradientUnits="userSpaceOnUse">
					<stop stop-color="#EBE26B"/>
					<stop offset="1" stop-color="#FFDDA2"/>
					</linearGradient>
					</defs>
                </svg>
			</a>
		</div>
		<div class="about__info arl _anim-items _anim-off">
			<div class="about__title"><?php echo $about_title?></div>
			<div class="about__text"><?php echo $about_text?></div>
		</div>
	</div>
</section>