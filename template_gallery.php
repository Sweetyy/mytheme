<li class="item-galery" onclick="location.href='<?php the_permalink(); ?>'">
    <?php the_content(); ?>
    <a class="zoom">
        <span>Voir la galerie</span><br />
        <i class="fa fa-plus"></i>
    </a>
    <p class="zoom-details">
        <?php the_title(); ?>
    </p>
</li>