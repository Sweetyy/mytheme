<?php
/*
Template Name: Gallery
*/
?>
<div class="item-galery panel-td" onclick="location.href='<?php the_permalink(); ?>'">
    <?php the_content(); ?>
    <a class="zoom">
        <span>See the gallery</span><br />
        <i class="fa fa-eye"></i>
    </a>
    <p class="zoom-details">
        <?php the_title(); ?>
    </p>
</div>