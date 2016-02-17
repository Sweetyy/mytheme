<li class="item-galery">
    <?php the_content(); ?>
    <a href="<?php the_permalink(); ?>" class="zoom">
        <span>Voir la galerie</span><br />
        <i class="fa fa-plus"></i>
    </a>
    <p class="zoom-details">
        <?php the_title(); ?>
    </p>
</li>