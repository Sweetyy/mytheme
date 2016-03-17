<div class="panel-td">
    <div class="news-panel">
        <div class="news-text">
            <h3>
                <?php the_title(); ?>
            </h3>
            <!--<?php the_content(); ?>-->
            <div class="post-author"><?php the_author(); ?></div>
            <div class="post-date"><?php the_date('Y-m-d'); ?></div>
        </div>
        <button class="btn-style" onclick="location.href='<?php the_permalink(); ?>'">Read more</button>
    </div>
</div>