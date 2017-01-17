<?php 
    wp_reset_query();
    get_header();

    query_posts('post_type=page');

    if ( have_posts() ) : while ( have_posts() ) : the_post();
    
    if( 'Galleries' === $post->post_title) {
        echo '<section id="'.get_the_title().'" class="">';
    }
    else if( 'News' === $post->post_title) {
        echo '<section id="'.get_the_title().'" class="content-center">';
    }
    else {
        echo '<section id="'. get_the_title().'" class="content-center align-justify">';
    }
?>
    
<h2><?php the_title(); ?></h2>

<?php the_content();

    if( 'Galleries' === $post->post_title ) {
        echo '<div class="galery panel-table">';
        echo do_shortcode("[ic_add_posts category='galeries' template='template_gallery.php']");
        echo '</div>';
    }

    if( 'News' === $post->post_title ) {
        echo '<div class="news panel-table">';
        echo do_shortcode("[ic_add_posts category='news' template='template_news.php']");
        echo '</div>';
} ?>

</section>

<?php endwhile; endif; ?> 

<section id="Contact">
    <h2>Contact</h2>
    <div class="form" id="section4">
        <form class="contact form-style" action="mailing.php" method="post">
            <div class="form-group">
                <p class="description">Last name(*)</p>
                <input type="text" name="last_name" required >
            </div>
            <div class="form-group">
                <p class="description">First name</p>
                <input type="text" name="first_name">
            </div>
            <div class="form-group">
                <p class="description">Mail(*)</p>
                <input type="email" name="email" required >
            </div>
            <div class="form-group">
                <p class="description">Message(*)</p>
                <textarea rows="8" name="message" cols="30" required ></textarea>
                <p class="description info" style="margin: 0">Fields with (*) are mandatories.</p>
            </div>
            <button class="btn-style" type="submit" name="submit" value="Submit">Send</button>
        </form>
    </div>
</section>

<footer>
    <div class="footer-comp">
        <p style="margin-top: 30px"><b style="color: #333"><?php bloginfo('name'); ?></b><br/>Dream with your eyes open.</p>
        <p style="margin-top: 20px">Contact me: <a href="#" style="color: #222222">js.dreamphoto@gmail.com</a></p>
        <div class="social-section">
            <?php wp_nav_menu( array( 'theme_location' => 'menu_social' ) ); ?>
        </div>
    </div>
</footer>

</div>
  
</body>
</html>