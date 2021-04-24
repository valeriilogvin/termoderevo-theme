<?php
/*
Template Name: street
*/
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php /*==============================================*/ ?>
    <?php /*===============CHANGABLE PART=================*/ ?>
    <?php /*=====WRITE YOUR CODE HERE=====*/ ?>

    <?php the_acf_loop(); ?>

    <?php /*=====END OF YOUR CODE=====*/ ?>
    <?php /*==============================================*/ ?>

<?php endwhile; endif; ?>


<?php get_footer(); ?>