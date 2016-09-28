<div class="post-article panel-td">
    <li>
        <a href="<?php the_permalink(); ?>">
            <span class="post-icon"><i class="fa fa-comment"></i></span>
            <div class="post-content">
                <div class="post-title"><?php the_title(); ?></div>
                <div class="post-details">By <?php the_author(); ?> at <?php the_date('Y-m-d'); ?></div>
            </div>
        </a>
    </li>
</div>