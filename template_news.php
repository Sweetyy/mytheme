<div class="panel-td">
    <div class="news-panel">
        <div class="news-text">
            <h4>
                <?php the_title(); ?>
            </h4>
            <!--<?php the_content(); ?>-->
            <div class="post-author"><i class="fa fa-user" style="font-size: 1.4em"></i>&nbsp;<?php the_author(); ?></div>
            <div class="post-date"><i class="fa fa-calendar" style="font-size: 1.4em"></i>&nbsp;<?php the_date('Y-m-d'); ?></div>
        </div>
        <button class="btn-style" onclick="location.href='<?php the_permalink(); ?>'">Read more</button>
    </div>
</div>