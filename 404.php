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
        <link rel="stylesheet" href="wp-content/themes/mytheme/style.css">
		<link rel="stylesheet" href="wp-content/themes/mytheme/css/font-awesome.min.css">
        <link rel="stylesheet" href="wp-content/themes/mytheme/css/lightbox.css">
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> 
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> 
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" /> 
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>   
        <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>
    </head>
    
    <body class="custom-background">
        
        <section>
            404 Try again !
            <br/><br/>
            I am really sorry but it looks like you made a mistake or the page you are searching for doesn't exist anymore.
        </section>
    </body>

</div>
  
</body>
</html>