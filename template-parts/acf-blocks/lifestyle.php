<?php
$title = get_sub_field('lifestyle_title');
$gallery = get_sub_field('lifestyle_gallery');
?>

<section class="lifestyle">
	<div class="container">
		<div class="lifestyle__title aud _anim-items _anim-off">
			<?php echo $title ?>
		</div>

		<div class="lifestyle__photos ascale _anim-items _anim-off">
			<?php
			for ($i = 0; $i < count($gallery); $i++) {
			    $increment_i = $i + 1;
				if($i < 5){
					echo '
                        <a class="lifestyle__photo img-' . $increment_i . ' " href=" ' . $gallery[$i] . ' ">
                            <img src="' . $gallery[$i] . '" alt="">
                        </a>
                    ';
                } else{
					echo '
                        <a class="lifestyle__photo" href=" ' . $gallery[$i] . ' ">
                            <img src="' . $gallery[$i] . '" alt="">
                        </a>
                    ';
                }
			}
			?>
		</div>
	</div>
</section>