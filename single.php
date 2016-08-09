<!DOCTYPE html>
<html> 
<head>
    <title>
        <?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; 
        <?php _e('Not Found') ?>
        <?php elseif ( is_home() ) : ?> &raquo; 
        <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?>
        <?php endif ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats --> 
    <!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />-->
    <link rel="stylesheet" href="../wp-content/themes/mytheme/style.css">
    <link rel="stylesheet" href="../wp-content/themes/mytheme/css/font-awesome.min.css">
    <link rel="stylesheet" href="../wp-content/themes/mytheme/css/lightbox.css">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> 
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> 
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" /> 
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>   
    <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>   
</head> 
<body>
<div class="animated yt-loader"></div>
<div class="navmenu single">
    <ul>
        <?php
            if ( in_category( 'news' )) {
                echo '<li style="float: left;"><a href="http://localhost/wordpress/#News"><i class="fa fa-long-arrow-left"></i> Retour</a></li>';
            }
            else if ( in_category( 'galeries' )){
                echo '<li style="float: left;"><a href="http://localhost/wordpress/#Galleries"><i class="fa fa-long-arrow-left"></i> Retour</a></li>';
            }
        ?>
    </ul>
</div>
        
<div class="content single-post">
    <?php if (have_posts()) : ?> 
        <?php while (have_posts()) : the_post(); ?>
        <h2>
            <?php the_title(); ?>
        </h2>
        <?php
            if ( in_category( 'news' )) {
                echo '<section class="news-content">';
                echo '<div class="content-center align-justify">';
                echo '<p class="info">';
                echo the_date();
                echo '</p>';
                echo the_content();
                echo '</div>';
                echo '</section>';
                echo comments_template();
            }
            else if ( in_category( 'galeries' )){
                echo '<ul class="galery">';
                echo the_content();
                echo '</ul>';
            }
        ?>
        <?php endwhile; ?> 
    <?php endif; ?> 
</div>
</body>
<script src="../wp-content/themes/mytheme/js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Show or hide the sticky footer button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('.navmenu').addClass('scrollafter');
            } else {
                $('.navmenu').removeClass('scrollafter');
            }
        });
    });
</script>
</html>