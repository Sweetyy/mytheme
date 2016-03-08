<td>
    <div class="news-panel">
        <div class="news-text">   
            <h3>
                <?php the_title(); ?>
            </h3>
            <?php the_content(); ?>
        </div>
        <button class="btn-style" onclick="location.href='<?php the_permalink(); ?>'">Read more</button>
    </div>
</td>